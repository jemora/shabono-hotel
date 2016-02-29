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
$query_Recordset2 = "SELECT * FROM habitacion2  WHERE  status LIKE 'ocupada' and fecha1 BETWEEN '$fecha1' and '$fecha2' ";
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
.Estilo19 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo20 {font-size: 10px}
.Estilo21 {font-size: 10; }
.Estilo17 {font-size: 10px; color: #FFFFFF; }
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {	color: #FFCC00;
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
<DIV ID="seleccion">
  <table width="601" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <td height="8" colspan="6" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo5">Facturas Pendientes </div>
          <div align="left" class="Estilo4"></div></td>
    </tr>
    <tr>
      <td width="65" height="22" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">
          <div align="center" class="Estilo21">N&ordm;  Factura</div>
      </div></td>
      <td width="94" height="22" bgcolor="#000000" ><div align="center" class="Estilo20"><span class="Estilo16">Habitaci&oacute;n</span></div></td>
      <td width="90" height="22" bgcolor="#000000" ><div align="left" class="Estilo20"><span class="Estilo16">Cliente</span></div></td>
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
      <td width="65" height="32" rowspan="4" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo20"><?php echo $row_Recordset2['id']; ?></span></div></td>
      <td width="94" rowspan="4" bgcolor="#E3E9F1" ><span class="Estilo20"><?php echo $row_Recordset2['nom_hab']; ?></span></td>
      <td width="90" rowspan="4" bgcolor="#E3E9F1" ><div align="left" class="Estilo20"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div></td>
      <td rowspan="4" bgcolor="#E3E9F1" ><span class="Estilo19"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
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
</DIV>

</body>
</html>