<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM consumo WHERE opc like '0' and multi like '$multi' ORDER BY fecha DESC";
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
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {
	color: #FFCC00;
	font-weight: bold;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body>
<table width="601" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo5">Consumos</div></td>
    <td height="8" >&nbsp;</td>
    <td height="8" colspan="3" ><div align="left" class="Estilo4"></div></td>
  </tr>
  <tr>
    <td height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">Articulo</div></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Cantidad</span></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Precio</span></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Subtotal</span></td>
    <td height="8" bgcolor="#000000" >&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="120" height="28" ><span class="Estilo1"><?php echo $row_Recordset2['consumo']; ?></span></td>
    <td width="268" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['canti']; ?></span></div></td>
    <td width="99" ><div align="left" class="Estilo1"><?php echo $row_Recordset2['precio']; ?></div></td>
    <td width="90" ><span class="Estilo1"><?php echo $row_Recordset2['subt'] ?></span></td>
    <td width="28" c"><font face="Arial" size="1"><a href="borrar_consumos.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['cliente']; ?>"></a></font></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>

