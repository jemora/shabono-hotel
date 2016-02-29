<?php require_once('conector/conector.php'); ?>
<?php
	$codigo = $_POST["codigo"];
	if (isset($codigo)){
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
			include("lista_consumos1.php"); 
		} 
		elseif ( $test1[0] == '0' )
		{ 
			include("buscar_cliente4.php");
			echo "<strong><br />  <br>
			Cliente No Registrado</strong>";
		} 
		elseif ( $id  == 'detalles' )
		{ 
			include("detalles_venta.php"); 
		} 

	?>
</p>
<p>&nbsp;</p>
