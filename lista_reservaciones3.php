<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE habitacion LIKE '$numero' ORDER BY id ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
 // $all_Recordset2 = mysql_query($query_Recordset2);
//  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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
.Estilo9 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo14 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo16 {color: #FFFFFF}
.Estilo18 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; }
.Estilo20 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
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
<DIV ID="seleccion">
<table width="605" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td width="242" height="16" bgcolor="#000000" class="Estilo1 Estilo16" ><span class="Estilo9">Cliente</span>
        <div align="left" class="Estilo9"></div></td>
    <td bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Habitaci&oacute;n</span></td>
    <td height="16" colspan="4" bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Fecha</span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="28" bgcolor="#E3E9F1" ><div align="left" class="Estilo14"><?php echo $row_Recordset2['doc2']; ?> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div>
        <div align="left" class="Estilo14"></div></td>
    <td width="135" height="28" bgcolor="#E3E9F1" ><span class="Estilo20"><?php echo $row_Recordset2['habitacion']; ?> <?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="160" bgcolor="#E3E9F1" ><span class="Estilo20"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
          <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
    <td width="8" c"><a href="detalles_reservacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/ico_5.gif" alt="Habilitar" width="18" height="18" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quiere Habilitar esta Habitaci&oacute;n?');return document.MM_returnValue" /></a></td>
    <td width="9" c"><a href="javascript:Abrir_ventana('acceso3.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>')"><img src="imagenes/edit.gif" width="17" height="17" border="0" /></a></td>
    <td width="27" c"><div align="center" class="Estilo14"><a href="javascript:Abrir_ventana('acceso2.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>')"><img src="imagenes/delete.gif" width="17" height="17" border="0" /></a></div></td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table></DIV>

</body>
</html>

