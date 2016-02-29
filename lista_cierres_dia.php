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
$query_Recordset2 = "SELECT * FROM cierre_caja_dia ORDER BY id DESC";
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

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="613" border="0" align="center" cellspacing="0">
  <tr>
    <td width="549"><span class="Estilo2">Lista de Cajas cerradas por dia :</span></td>
  </tr>
</table>
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Referencias</div></td>
    <td height="16" bgcolor="#000000" class="small" ><div align="center"><span class="small Estilo4">Dia de Cierre de caja </span></div></td>
    <td height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Observaciones</div></td>
    <td width="105" height="16" bgcolor="#000000" class="small"><div align="left" class="small Estilo4">
      <div align="center">Usuario Responsable </div>
    </div></td>
    <td width="110" height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
      <div align="center">Fecha de Operacion </div>
    </div>      </td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="80" height="15" bgcolor="#E3E9F1" class="small" ><a href="lista_cierres_dia2.php?codigo=<?php echo $row_Recordset2['fecha1']; ?>">Ref</a></td>
    <td width="99" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['fecha1']; ?></div></td>
    <td width="185" bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['observacion']; ?></div></td>
    <td bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['usuario']; ?></div></td>
    <td bgcolor="#E3E9F1" class="small" ><div align="center" class="small">
      <div align="left" class="small">
        <div align="center"><?php echo $row_Recordset2['fecha']; ?></div>
      </div>
    </div></td>
    </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
