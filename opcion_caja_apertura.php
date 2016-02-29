<?php require('mensajes.php'); ?>
<?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from caja WHERE opc LIKE '0'");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   
             include("lista_cajas_aperturadas.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 
			  echo $mensaje_caja_apertura2;

			  	
                 } 
				

				 
		 ?>
