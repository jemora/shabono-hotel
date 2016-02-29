


<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");

      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $calendario1= "".$row["ver_cal"].""; }
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
<table width="140" border="1" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#C4CECF" scope="col">Calendario</th>
  </tr>
  <?php 
  if ( $calendario1 == '1' )
			  { 
  
  echo "<tr>
    <th scope='col'><div align='left'><a href='calendario.php' class='Estilo1'>Habitacion x Mes</a></div></th>
  </tr>" ;   }?>

</table>
