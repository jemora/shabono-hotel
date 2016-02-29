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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE opc like '0' and multi like '$multi' and  status LIKE 'ocupada' ORDER BY fecha DESC";
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
<script language="JavaScript">
function Abrir_ventana1 (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=650, height=350, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
</head>

<body>
<table width="607" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="8" colspan="6" bgcolor="#666666" ><div align="left" class="Estilo1 Estilo5">Facturas Pendientes </div>      <div align="left" class="Estilo4"></div></td>
  </tr>
  <tr>
    <td width="65" height="8" bgcolor="#666666" ><div align="left" class="Estilo1 Estilo3">
      <div align="center" class="Estilo16">Nº  Factura</div>
    </div></td>
    <td width="94" height="8" bgcolor="#666666" ><div align="center" class="Estilo15"><span class="Estilo3">Habitaci&oacute;n</span></div></td>
    <td width="90" height="8" bgcolor="#666666" ><div align="left" class="Estilo15"><span class="Estilo3">Cliente</span></div></td>
    <td width="148" height="8" bgcolor="#666666" ><span class="Estilo17">Fecha</span></td>
    <td height="8" colspan="2" bgcolor="#666666" >&nbsp;</td>
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
    <td width="65" height="32" rowspan="2" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo15"><?php echo $row_Recordset2['id']; ?></span></div></td>
    <td width="94" rowspan="2" bgcolor="#E3E9F1" ><span class="Estilo15"><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="90" rowspan="2" bgcolor="#E3E9F1" ><div align="left" class="Estilo15"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div></td>
    <td rowspan="2" bgcolor="#E3E9F1" ><span class="Estilo14"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
      <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
    <td width="88" height="20" bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="cambiar_fecha1.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Ajustar Fechas</a></font></div></td>
    <td width="106" bgcolor="#FFFFFF" ><div align="center"><font face="Arial" size="1"><a href="consumos_clientes.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>">Agregar Consumos</a><a href="consumos_clientes.php?&codigo2=<?php echo $row_Recordset2['id']; ?>&codigo=<?php echo $row_Recordset2['doc2']; ?>&multi=<?php echo $row_Recordset2['multi']; ?>"><img src="imagenes/ico_6.gif" width="18" height="18" border="0"></a></font>
    </div>
      <div align="center"></div>      <div align="center"><font face="Arial" size="1"><a href="consumos_clientes.php?&amp;codigo2=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;multi=<?php echo $row_Recordset2['multi']; ?>"></a></font></div></td>
  </tr>
  
  <tr>
    <td height="26" bgcolor="#CCCCCC" ><div align="center"><font face="Arial" size="1"><a href="cambiar_habitacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>">Cambiar Habitacion</a></font></div></td>
    <td width="106" bgcolor="#FFFFFF" ><div align="center"><span class="Estilo14"><a href="javascript:Abrir_ventana1('separar_factura.php?&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;codigo2=<?php echo $row_Recordset2['id']; ?>')">Separar factura</a></span><a href="javascript:Abrir_ventana1('separar_factura.php?&amp;codigo=<?php echo $row_Recordset2['doc2']; ?>&amp;codigo2=<?php echo $row_Recordset2['id']; ?>')"><img src="imagenes/reparar.gif" width="21" height="21" border="0" /></a></div></td>
  </tr>
  
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>

