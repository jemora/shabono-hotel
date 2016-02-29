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
$query_Recordset2 = "SELECT * from habitacion2  WHERE id LIKE '$codigo3'";
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
.Estilo7 {font-size: 12px; color: #000000; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
    <td width="120" height="8" bgcolor="#F4F4F4" ><strong>Habitaciones
      </div>
    </strong></td>
    <td width="120" height="8" >&nbsp;</td>
    <td width="171" height="8" >&nbsp;</td>
    <td height="8" colspan="3" ><div align="left" class="Estilo1"></div></td>
  </tr>
  <tr>
    <td height="8" colspan="2" bgcolor="#F4F4F4" ><span class="Estilo7">Habitacion</span></td>
    <td height="8" colspan="2" bgcolor="#F4F4F4" ><div align="left"><span class="Estilo7">Dias</span></div></td>
    <td width="50" height="8" bgcolor="#F4F4F4" ><div align="left"><span class="Estilo7">Precio</span></div></td>
    <td width="50" height="8" bgcolor="#F4F4F4" ><div align="right"><span class="Estilo7">Subtotal</span></div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="17" colspan="2" ><span class="Estilo1"><?php echo $row_Recordset2['habitacion']; ?><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td colspan="2" ><div align="left" class="Estilo1">
      <div align="left"><?php echo $row_Recordset2['cant_dia']; ?></div>
    </div></td>
    <td width="50" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['precio']; ?></span></div></td>
    <td width="50" ><div align="left"><font face="Arial" size="1"><span class="Estilo1"><?php echo $row_Recordset2['precio'] * $row_Recordset2['cant_dia']; ?></span></font></div></td>
    </tr>
  
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>

</body>
</html>

