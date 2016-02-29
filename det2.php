<?php
require_once('conector/conector.php');
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 2;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM habitacion2  WHERE id  LIKE '$datox' ";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

?>
<style type="text/css">
<!--
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
</style><table width="24" border="1" cellpadding="0" cellspacing="0" bordercolor="#00B1BF">
  <tr>
    <td width="14" bgcolor="#00B1BF"><div align="right"><strong><a href="informacion_planning.php?codigo=<?php echo $row_Recordset3['id']; ?>" target="rightFrame">+</a></strong></div></td>
  </tr>
</table>
