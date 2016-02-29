<?php require('verificar.php'); ?>
<html>
<head>
<script language='javascript' src="popcalendar.js"></script> 
<script language='javascript' src="popcalendar2.js"></script> 
</head>
<body>
<?php require_once('conector/conector.php'); ?>
<?php
	$codigo = $_POST["codigo"];
	if (isset($codigo))
	{
		$link = mysql_connect($hostname, $username , $password); 
		mysql_select_db($database ); 
		$feha=date("d-m-Y");
		$test11a = mysql_query("SELECT COUNT(*) from clientes  WHERE doc2 LIKE '$codigo' ");
		$test1 = mysql_fetch_row($test11a);
	}
?>  
<?php 
	if ( $test1[0] >= '1' )
	{ 	  
		include("habitacion_reservacion.php"); 
	} 
	elseif ( $test1[0] == '0' )
	{ 	  
		include("reservacion1.php");
		echo "";  
		include("menu_reservacion.php");  
	} 
	elseif ( $id  == 'detalles' )
	{     
		include("detalles_venta.php");  
	}  
?>
