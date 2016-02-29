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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE status LIKE 'ocupada' and opc LIKE '0'";
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
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo6 {color: #FFFFFF; font-weight: bold; }
-->
</style></head>

<body>
<br>
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo6" >Fecha</div></td>
    <td height="16" bgcolor="#000000" ><span class="Estilo6" >N&ordm; de Habitacion  </span></td>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo6" >tipo</div></td>
    <td width="106" height="16" bgcolor="#000000" class="Estilo3"><div align="left" class="Estilo6" >Servicio </div></td>
    <td height="16" colspan="3" bgcolor="#000000" ><div align="left" class="Estilo6" >Estatus</div>      </td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="90" height="26" bgcolor="#E3E9F1" ><?php echo $row_Recordset2['fecha1']; ?></span></td>
    <td width="118" bgcolor="#E3E9F1" ><div align="center"><?php echo $row_Recordset2['habitacion']; ?></span></div></td>
    <td width="100" bgcolor="#E3E9F1" ><div align="left" ><?php echo $row_Recordset2['tipo']; ?></div></td>
    <td bgcolor="#E3E9F1" ><div align="left" ><?php echo $row_Recordset2['servicio']; ?></div></td>
    <td width="106" bgcolor="#E3E9F1" ><div align="center" ><?php echo $row_Recordset2['status']; ?></div></td>
    <td width="41" c"><div align="center"><a href="detalles_habitacion2.php?&codigo=<?php echo $row_Recordset2['id']; ?>&d=<?php echo $row_Recordset2['d']; ?>&m=<?php echo $row_Recordset2['m']; ?>&a=<?php echo $row_Recordset2['a']; ?>" > Detalles</a></div></td>
    <td width="24" c"><font face="Arial" size="1"><a href="borrar_asignacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?><?php echo $MM_keepNone.(($MM_keepNone!="")?"&":"")."&codigo2=".$row_Recordset2['id'] ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion asignada?');return document.MM_returnValue" /></a></font></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
