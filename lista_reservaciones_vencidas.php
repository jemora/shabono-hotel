<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;
$fechat2=date("Y-m-d");
mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE status LIKE 'reservada' and fecha2 < '$fechat2' ORDER BY id ASC";
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


<script language="JavaScript">
function Abrir_ventana1 (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>



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
.Estilo21 {
	font-size: 10;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><img src="imagenes/banne17.gif" width="607" height="30" /><br>
</div>
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
<br>
<br>
<DIV ID="seleccion">
<table width="605" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="7" colspan="5" bgcolor="#FFFFFF" class="Estilo1 Estilo16" ><div align="left" class="Estilo21">Reservaciones Vencidas </div></td>
    </tr>
  <tr>
    <td width="242" height="7" bgcolor="#000000" class="Estilo1 Estilo16" ><span class="Estilo9">Cliente</span></td>
    <td bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Habitaci&oacute;n</span></td>
    <td height="7" colspan="3" bgcolor="#000000" class="Estilo1" ><span class="Estilo18">Fecha</span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="26" bgcolor="#E3E9F1" ><div align="left" class="Estilo20"><strong><?php echo $row_Recordset2['doc2']; ?></strong> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div>
        <div align="left" class="Estilo14"></div></td>
    <td width="135" height="26" bgcolor="#E3E9F1" ><span class="Estilo20"><?php echo $row_Recordset2['habitacion']; ?> <?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td width="160" bgcolor="#E3E9F1" ><span class="Estilo20"><strong>Desde:</strong><?php echo $row_Recordset2['fecha1']; ?><br>
          <strong>Hasta:</strong><?php echo $row_Recordset2['fecha2']; ?></span></td>
    <td c"><a href="detalles_reservacion.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>"></a><a href="javascript:Abrir_ventana1('acceso3.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>')"><img src="imagenes/edit.gif" width="17" height="17" border="0" /></a></td>
    <td width="27" c"><div align="center" class="Estilo14"><a href="javascript:Abrir_ventana1('acceso2.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>')"><img src="imagenes/delete.gif" width="17" height="17" border="0" /></a></div></td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</DIV>

</body>
</html>

