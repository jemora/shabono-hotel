<?php 	require_once('conector/conector.php');?>
<?php


$conn = mysql_connect($hostname,$username,$password);
mysql_select_db($database,$conn);

$criterio = "";
if ($_GET["criterio"]!=""){
	$txt_criterio = $_GET["criterio"];
	$criterio = " where $doc2 like '%" . $txt_criterio . "%'";
}











$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "select * from habitacion2 " ;
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
.Estilo7 {
	color: #000000;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo9 {font-size: 9px}
.Estilo11 {font-size: 12px; color: #000000; font-weight: bold; }
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


</head>

<body>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span >Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')">Imprimir Reporte</a></strong></div></td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br><DIV ID="seleccion">
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#666666">
  <tr>
    <td height="8" colspan="6" bgcolor="#FFFFFF" >&nbsp;</td>
  </tr>
  <tr>
    <td height="8" bgcolor="#7794AE" ><span class="Estilo7">N&ordm; Codigo </span></td>
    <td bgcolor="#7794AE" ><span class="Estilo11">Nombre</span></td>
    <td height="8" bgcolor="#7794AE" ><span class="Estilo11">Apellido</span></td>
    <td width="160" height="8" bgcolor="#7794AE" ><span class="Estilo11">Fecha </span></td>
    <td width="79" height="8" bgcolor="#7794AE" ><span class="Estilo11">Nombre de Habitación </span></td>
    <td width="78" height="8" bgcolor="#7794AE" ><span class="Estilo11">Numero </span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="92" height="30" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['doc2']; ?></span></td>
    <td width="105" height="30" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['nombre']; ?></span></td>
    <td width="107" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['apellido']; ?></span></td>
    <td bgcolor="#E3E9F1" ><div align="left"><span class="Estilo1">Desde:<?php echo $row_Recordset2['fecha1']; ?></span>Hasta<span class="Estilo1">:<?php echo $row_Recordset2['fecha2']; ?></span></div></td>
    <td bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['nom_hab']; ?></span></td>
    <td bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['habitacion']; ?></span></td>
  </tr>
  
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table></DIV>

</body>
</html>

