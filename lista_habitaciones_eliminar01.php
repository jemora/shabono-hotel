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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE opc like '0' and  doc2 LIKE '$codigo' ORDER BY fecha DESC";
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
<p><?php include("detalles_clientes2.php");?>
  <br>
Habitaciones reservadas:</p>
<table width="615" border="1" align="left" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">Fecha</div></td>
    <td height="16" bgcolor="#CCCCCC" ><span class="Estilo1">N&ordm; de Habitacion  </span></td>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">tipo</div></td>
    <td width="106" height="16" bgcolor="#CCCCCC" class="Estilo3"><div align="left" class="Estilo1">Servicio </div></td>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">Estatus</div></td>
    <td height="16" colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="90" height="34" ><span class="Estilo1"><?php echo $row_Recordset2['d']; ?>/<?php echo $row_Recordset2['m']; ?>/<?php echo $row_Recordset2['a']; ?></span></td>
    <td width="118" ><div align="center"><span class="Estilo1"><?php echo $row_Recordset2['habitacion']; ?></span></div></td>
    <td width="100" ><div align="left" class="Estilo1"><?php echo $row_Recordset2['tipo']; ?></div></td>
    <td ><div align="left" class="Estilo1"><?php echo $row_Recordset2['servicio']; ?></div></td>
    <td width="106" ><div align="center" class="Estilo1"><?php echo $row_Recordset2['status']; ?></div></td>
    <td width="41" c"><div align="center"><a href="detalles_habitacion.php?&codigo=<?php echo $row_Recordset2['doc2']; ?>&d=<?php echo $row_Recordset2['d']; ?>&m=<?php echo $row_Recordset2['m']; ?>&a=<?php echo $row_Recordset2['a']; ?>" class="Estilo1"> Detalles</a></div></td>
    <td width="24" c"><font face="Arial" size="1"><a href="borrar_asignacion.php?&amp;codigo=<?php echo $row_Recordset2['doc2']; ?><?php echo $MM_keepNone.(($MM_keepNone!="")?"&":"")."&codigo2=".$row_Recordset2['id'] ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion asignada?');return document.MM_returnValue" /></a></font></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
