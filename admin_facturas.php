


<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");

      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $fact= "".$row["fact"].""; }
mysql_free_result($result1)?>


<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><img src="imagenes/banner_facturar.jpg" alt="facturacion" width="139" height="17" longdesc="imagenes/banner_facturar.jpg" /></th>
  </tr>
  <?php 
  if ( $fact == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente7.php' target='frame' >Facturación</a></div></th>
  </tr>" ;   }?>

 <?php 
  if ( $fact == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente4.php' target='frame' >Consumos</a></div></th>
  </tr>" ;   }?>


</table>
