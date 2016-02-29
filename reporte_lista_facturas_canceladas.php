 <?php 	require_once('conector/conector.php');?>
<?php

//$fecha1= date("$a-$m-$d");


$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 1000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM facturas WHERE   fecha3 BETWEEN '$fecha1' and '$fecha2'  ORDER BY id DESC";
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

.Estilo5 {
	color: #000000;
	font-weight: bold;
}
.Estilo6 {font-size: 12px; font-weight: bold; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>



<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="small" >Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')" class="small">Imprimir Reporte</a></strong></div></td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br><DIV ID="seleccion">
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr bgcolor="#7794AE">
    <td height="8" colspan="6" bgcolor="#FFFFFF" ><div align="left" class="Estilo1 Estilo5">Facturas por Fechas Desde<?php echo $fecha1; ?> Hasta <?php echo $fecha2; ?> </div>      <div align="left" class="Estilo1"></div></td>
    </tr>
  <tr bgcolor="#B1C3D9">
    <td width="110" height="8" ><div align="left" class="Estilo6">Nº de Factura</div></td>
    <td width="107" ><div align="left"><span class="Estilo6">Fecha</span></div></td>
    <td height="8" ><span class="Estilo6">Cliente</span></td>
    <td height="8" colspan="3" ><span class="Estilo6">Monto</span></td>
    </tr>
  <?php do { ?>
  <tr>
    <td width="110" height="17" bgcolor="#E3E9F1" ><span class="small"><?php echo $row_Recordset2['numero']; ?></span></td>
    <td width="107" height="17" bgcolor="#E3E9F1" ><span class="small"><?php echo $row_Recordset2['fecha3']; ?></span></td>
    <td width="156" bgcolor="#E3E9F1" ><div align="left"><span class="Estilo1"><strong class="small"><?php echo $row_Recordset2['doc2']; ?></strong> </span><span class="small"><?php echo $row_Recordset2['dato1']; ?></span> <span class="small"><?php echo $row_Recordset2['dato2']; ?></span></div></td>
    <td width="108" bgcolor="#E3E9F1" ><div align="left" class="small"><?php echo $row_Recordset2['total']; ?></div></td>
    <td width="45" bgcolor="#ECE9D8" ><div align="center"><font face="Arial" size="1"><a href="factura_confi.php?&codigo3=<?php echo $row_Recordset2['codigo']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Detalles Factura </a></font></div></td>
    <td width="49" bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="reporte_cabana.php?&codigo3=<?php echo $row_Recordset2['codigo']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Reporte Factura </a></font></div></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</DIV>
</body>
</html>

