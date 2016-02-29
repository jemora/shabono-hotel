<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 500;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE opc like '0' and  status LIKE 'ocupada' ORDER BY fecha DESC";
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
.Estilo14 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo15 {font-size: 10px}
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
.Estilo16 {font-size: 10; }
.Estilo17 {font-size: 10px; color: #FFFFFF; }
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
<table width="601" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="8" colspan="6" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo5">Facturas Pendientes </div>      <div align="left" class="Estilo4"></div></td>
  </tr>
  <tr>
    <td width="65" height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">
      <div align="center" class="Estilo16">Nº  Factura</div>
    </div></td>
    <td width="94" height="8" bgcolor="#000000" ><div align="center" class="Estilo15"><span class="Estilo3">Habitaci&oacute;n</span></div></td>
    <td width="113" height="8" bgcolor="#000000" ><div align="left" class="Estilo15"><span class="Estilo3">Cliente</span></div></td>
    <td width="155" height="8" bgcolor="#000000" ><span class="Estilo17">Fecha</span></td>
    <td height="8" colspan="2" bgcolor="#000000" >&nbsp;</td>
  </tr>
  <?php do { 
   if ($totalRows_Recordset2==0){
       $color= "#DEDEBE";
       $colorfila=1;
    }else{
       $color="#F0F0F0";
       $totalRows_Recordset2=0;
    }
 ?>
  <tr>
    <td width="65" height="32" rowspan="3" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo15"><?php echo $row_Recordset2['id']; ?></span></div></td>
    <td width="94" rowspan="3" bgcolor="#E3E9F1" ><span class="Estilo15"><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="113" rowspan="3" bgcolor="#E3E9F1" ><div align="left" class="Estilo15"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div></td>
    <td rowspan="3" bgcolor="#E3E9F1" ><span class="Estilo14"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
      <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
    <td width="96" bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="detalles_factura2.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>">Prefactura</a><a href="consumos_clientes.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>"></a></font></div></td>
    <td width="62" rowspan="2" bgcolor="#FFCC00" ><div align="center"><font face="Arial" size="1"><a href="detalles_factura.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>">Cancelar Factura </a></font></div>      
    <div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="cambiar_fecha1.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Ajustar Fechas</a></font></div></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="cambiar_habitacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Cambiar Habitacion</a></font></div></td>
    <td width="62" bgcolor="#E3E9F1" ><div align="center"><font face="Arial" size="1"><a href="consumos_clientes.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>">Consumos</a></font></div></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>

