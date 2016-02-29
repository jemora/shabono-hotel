

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<p><?php 

require_once('conector/conector.php');
	$buscar = $_GET['buscar'];
	if (isset($buscar)){
		//Conexion con la base
		mysql_connect($hostname,$username,$password);
		
		// Obtenemos los datos del formulario
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$cedula = $_POST['cedula'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$correo = $_POST['correo'];

		//Creamos la sentencia SQL y la ejecutamos
		$sSQL="Update botones Set  
		  nombre='$nombre',
		  apellido= '$apellido',
		cedula='$cedula',
		direccion='$direccion',
		telefono='$telefono',
		correo='$correo'
		  
		Where id='$buscar'";

		mysql_db_query($database,$sSQL);
		
	}
 include('lista_botones.php');
	
?>&nbsp;</p>
</body>
</html>
