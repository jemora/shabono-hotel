 
   <?php require_once('conector/conector.php'); ?>
  
  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 WHERE opc like '0' and status LIKE 'reservada' and  doc2 LIKE '$codigo' ");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			    include("buscar_reservacion.php");
             include("lista_reservaciones2.php"); 
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			include("buscar_reservacion.php");
			  echo "<strong><br />  <br>
  Cliente no tiene Reservaciones</strong>";
			  
	
                 } 
				 else 
           if ( $id  == 'detalles' )
			  { 
			    include("detalles_venta.php"); 
                 } 

				 
		 ?>
</p>
<p>&nbsp;</p>
