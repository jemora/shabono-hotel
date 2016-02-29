<?php
	// Conectamos a la base de datos
	require_once('conector/conector.php');

	$link=mysql_connect($hostname,$username,$password);
	mysql_select_db($database,$link);
	//comprobamos si ha ocurrido un error.
	
	$codigo = $_GET['codigo'];
	if ($_FILES["archivo"]["error"] > 0){
		echo "ha ocurrido un error";
	} else {
		//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
		//y que el tamano del archivo no exceda los 100kb
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		//$limite_kb = 100;   // <--- Para limitar el tamaño de la imagen
	  
		if (in_array($_FILES['archivo']['type'], $permitidos)/* && $_FILES['imagen']['size'] <= $limite_kb * 1024*/){
			//esta es la ruta donde copiaremos la imagen
			//recuerden que deben crear un directorio con este mismo nombre
			//en el mismo lugar donde se encuentra el archivo subir.php
			
			// Obteniendo el nuevo nombre para el archivo que se va a mover
			// a la carpeta dentro del sistema
			
			$resultado = mysql_query("SELECT * FROM imagen_botones WHERE cedula = $codigo", $link);
			$fila = mysql_fetch_array($resultado);
			
			$ruta = $fila['ruta'];
			//comprovamos si este archivo existe para no volverlo a copiar.
			//pero si quieren pueden obviar esto si no es necesario.
			//o pueden darle otro nombre para que no sobreescriba el actual.
			if (!is_uploaded_file($_FILES["archivo"]["tmp_name"]))
				echo "<h1>No se encuentra disponible</h1>";
			
			if (file_exists($ruta)){
				//aqui movemos el archivo desde la ruta temporal a nuestra ruta
				//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
				//almacenara true o false
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
				require("lista_botones.php");
				
				if ($resultado){
					echo "el archivo ha sido movido exitosamente";
					@mysql_query("UPDATE imagen_botones SET ruta = '$ruta' WHERE codigo='$codigo'") ;
				} 
				else {
					echo "ocurrio un error al mover el archivo.";
				}
			} 
			else {
				echo $_FILES['archivo']['name'] . ", este archivo existe";
			}
		  } 
		  else {
			echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		  }
	}
?>
