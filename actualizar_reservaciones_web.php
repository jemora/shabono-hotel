<?php 	require_once('conector/conector.php');?>
<head>

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<?php
    
require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update habitacion_reservas_web Set  
opc='$opc'
Where id='$codigo'";

mysql_db_query($database,$sSQL);

		echo ' <p align="center"><b><font face="Arial" color="#000066" size="4">Reservacion Procesada Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>';
  
		 ?>
		<?php 
		if ( $opc== '1' )
{ 
	  include('lista_reservaciones_web.php');
require_once('procesar_reservacion.php');		 
	   exit;
                 } 
else 
 if ( $opc == '0' )
{ 
		echo ' ';
		  }
		?>
		

</body>
</html>

