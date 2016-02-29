<table width="24" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="14" bgcolor="#6699FF">&nbsp;</td>
  </tr>
</table>
<?php 
require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultdet1 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");


?>
<?php  while ($row=mysql_fetch_array($resultdet1))  { $datoX1= "".$row["nombre"].""; } mysql_free_result($resultdet1) ?>



