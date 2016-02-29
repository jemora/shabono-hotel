<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion  ORDER BY habitacion ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>



<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 20000;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM habitacion2  ORDER BY habitacion ASC";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$queryString_Recordset3 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset3") == false && 
        stristr($param, "totalRows_Recordset3") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset3 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset3 = sprintf("&totalRows_Recordset3=%d%s", $totalRows_Recordset3, $queryString_Recordset3);
?>
<head>

<title>lista de clientes</title>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>

<body>
<p>&nbsp;</p>
<table border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="107" height="16" bgcolor="#CCCCCC"><strong>Numero de Habitaciones  </strong></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>1 </strong> </div></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>2 </strong></div></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>3 </strong> </div></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>4</strong></div></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>5 </strong></div></td>
    <td width="15" height="16" bgcolor="#CCCCCC"><div align="center"><strong>6 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>7 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>8 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>9</strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>10 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>11</strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>12 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>13 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>14 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>15 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>16 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>17</strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>18 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>19 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>20 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>21 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>22 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>23 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>24 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>25 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>26 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>27 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>28 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>29 </strong> </div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>30</strong></div></td>
    <td width="15" bgcolor="#CCCCCC"><div align="center"><strong>31 </strong> </div></td>
  </tr>

  <tr>
    <td height="33" colspan="32"><?php include("hab_1.php");?>
    <br>
    <?php include("hab_2.php");?></td>
  </tr>
</table>
<p></p>
</body>
</html>

