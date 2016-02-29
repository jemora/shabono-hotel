<?php
	require_once('conector/conector.php');

	$link=mysql_connect($hostname,$username,$password);
	mysql_select_db($database,$link);

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$direccion = $_POST["direccion"];
	$userfile = $_POST["userfile"];
	
	$resultado = mysql_query("SELECT * FROM botones WHERE cedula = $cedula",$link);
	$numero_filas = mysql_num_rows($resultado);
	if ($numero_filas == 0){
		// Guardando en la base de datos la informacion del nuevo botones
		$result=mysql_query("INSERT INTO botones (nombre,apellido,cedula,telefono,correo,direccion)
		VALUES ('$nombre','$apellido','$cedula','$telefono','$correo','$direccion')",$link);

		echo "Registro Agregado Correctamente";
		
		
		// Comprobamos si ha ocurrido un error con la imagen
		if ($_FILES["userfile"]["error"] > 0){
			echo "<h1>Ha ocurrido un error</h1>";
		} 
		else {
			//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
			//y que el tamano del archivo no exceda los 100kb
			$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
			//$limite_kb = 100;   // <--- Para limitar el tamaño de la imagen
		  
			if (in_array($_FILES['userfile']['type'], $permitidos)/* && $_FILES['imagen']['size'] <= $limite_kb * 1024*/){
				//esta es la ruta donde copiaremos la imagen
				//recuerden que deben crear un directorio con este mismo nombre
				//en el mismo lugar donde se encuentra el archivo subir.php
				
				
				// Obteniendo el nuevo nombre para el archivo que se va a mover
				// a la carpeta dentro del sistema
				$ext = substr(strrchr($_FILES['userfile']['name'], '.'), 1);
				$resultado = mysql_query("SELECT * FROM imagen_botones",$link);
				$numero_filas = mysql_num_rows($resultado) + 1;
				
				$ruta = "imagenes/botones/"."$numero_filas"."_"."$nombre.$ext";
				//comprovamos si este archivo existe para no volverlo a copiar.
				//pero si quieren pueden obviar esto si no es necesario.
				//o pueden darle otro nombre para que no sobreescriba el actual.
				if (!is_uploaded_file($_FILES["userfile"]["tmp_name"]))
					echo "<h1>No se encuentra disponible</h1>";
				
				if (!file_exists($ruta)){
					//aqui movemos el archivo desde la ruta temporal a nuestra ruta
					//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
					//almacenara true o false
					$resultado = @move_uploaded_file($_FILES["userfile"]["tmp_name"], $ruta);
					
					if ($resultado){
						echo "<br><h3>El archivo ha sido movido exitosamente</h3>";
						$nombre = $_POST["nombre"];
						@mysql_query("INSERT INTO imagen_botones (ruta,nombre,cedula) VALUES ('$ruta', '$nombre' , '$cedula')") ;
					} 
					else {
						echo "ocurrio un error al mover el archivo.";
					}
				} 
				else {
					echo $_FILES['userfile']['name'] . ", este archivo existe";
				}
			  } 
			  else {
					echo "<br>Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
			  }
		}
	}
	else
	{
		echo "<h1><center>Usuario ya registrado</center></h1>";
	}
?>
