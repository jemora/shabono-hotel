<?php require('verificar.php'); ?> 
<?php require_once('conector/conector.php'); ?>  
<?php
if (!isset($codigo)){
	$link = mysql_connect($hostname, $username , $password); 
	mysql_select_db($database ); 
	$feha=date("d-m-Y");
	$codigo = $_POST["codigo"];  // <----- Nuevo
	$test11a = mysql_query("SELECT COUNT(*) from clientes  WHERE doc2 LIKE '$codigo' ");
	$test1 = mysql_fetch_row($test11a);
}
?> 
<?php  
	if ( $test1[0] >= '1' )
	{
	 	 include("habitacion.php"); 
	} 
	elseif ( $test1[0] == '0' )
	{  
		include("buscar_cliente3.php");
		include("menu_reservacion1.php"); 
	}
	elseif ( $id  == 'detalles' )
	{  
		include("detalles_venta.php");    
	} 
	
?>
