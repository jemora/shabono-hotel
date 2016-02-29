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
$query_Recordset2 = "SELECT * from habitacion2 WHERE   fecha2 BETWEEN '$fecha1' and '$fecha2' and opc2 like '1'   ORDER BY fecha2 DESC";
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
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo14" >Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
        <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="601" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="8" colspan="6" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo5">Facturas Pendientes </div>
        <div align="left" class="Estilo4"></div></td>
  </tr>
  <tr>
    <td width="65" height="22" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">
      <div align="center" class="Estilo16">N&ordm;  Factura</div>
    </div></td>
    <td width="94" height="22" bgcolor="#000000" ><div align="center" class="Estilo15"><span class="Estilo3">Habitaci&oacute;n</span></div></td>
    <td width="90" height="22" bgcolor="#000000" ><div align="left" class="Estilo15"><span class="Estilo3">Cliente</span></div></td>
    <td width="147" height="22" bgcolor="#000000" ><span class="Estilo17">Fecha</span></td>
    <td height="22" colspan="2" bgcolor="#000000" >&nbsp;</td>
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
    <td width="65" height="32" rowspan="4" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo15"><?php echo $row_Recordset2['id']; ?></span></div></td>
    <td width="94" rowspan="4" bgcolor="#E3E9F1" ><span class="Estilo15"><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="90" rowspan="4" bgcolor="#E3E9F1" ><div align="left" class="Estilo15"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div></td>
    <td rowspan="4" bgcolor="#E3E9F1" ><span class="Estilo14"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
          <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
    <td width="96" bgcolor="#7794AE" ><div align="center"><font face="Arial" size="1"><a href="detalles_factura2.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Prefactura</a><a href="consumos_clientes.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>"></a></font></div></td>
    <td width="93" rowspan="2" bgcolor="#FFCC00" ><div align="center"><font face="Arial" size="1"><a href="detalles_factura.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Cancelar Factura </a></font></div>
        <div align="center"></div></td>
  </tr>
  <tr>
    <td bgcolor="#B1C3D9" ><div align="center"><font face="Arial" size="1"><a href="cambiar_fecha1.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Ajustar Fechas</a></font></div></td>
  </tr>
  <tr>
    <td height="13" rowspan="2" bgcolor="#C8D5E4" ><div align="center"><font face="Arial" size="1"><a href="cambiar_habitacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Cambiar Habitacion</a></font></div></td>
    <td width="93" bgcolor="#FF9900" ><div align="center"><font face="Arial" size="1"><a href="lista_consumos_general.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Consumos</a></font></div></td>
  </tr>
  <tr>
    <td height="14" bgcolor="#E3E9F1" ><div align="center"><font face="Arial" size="1"><a href="buscar_facturas_multi.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Habitaciones</a></font></div></td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>

