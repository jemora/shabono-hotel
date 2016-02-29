 
   <?php require_once('conector/conector.php'); 
    require('mensajes.php');
   
   ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 WHERE opc like '0' and  status LIKE 'ocupada' ORDER BY fecha DESC");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
             include("lista_facturas_x_cancelar.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 echo  $mensaje_factura1;
			  
	
                 } 
							 
		 ?>
</p>
<p>&nbsp;</p>
