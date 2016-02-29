<?php require('verificar.php'); ?> 
<?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja = mysql_query("SELECT * FROM caja WHERE opc  LIKE '1'");


?>
<?  while ($row=mysql_fetch_array($resultcaja)) { $caja= "".$row["id"].""; } mysql_free_result($resultcaja)?>




<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 9000;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM facturas WHERE caja LIKE '$id' ORDER BY id DESC ";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset3 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$queryString_Recordset3 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset3") == false && 
        stristr($param, "totalRows_Recordset3") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset3 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset3 = sprintf("&totalRows_Recordset3=%d%s", $totalRows_Recordset3, $queryString_Recordset3);
?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo3 {color: #FFFFFF}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<?php 	require_once('css.php');?>
</head>

<body>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" valign="top"><div align="right" >
      <div align="center"><img src="imagenes/banne18.gif" alt="f" width="607" height="30"></div>
    </div></td>
  </tr>
  <tr>
    <td valign="top"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span >Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"></a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><p align="left"><img src="imagenes/menu_caja.gif" alt="f" width="502" height="27" border="0" usemap="#Map"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="4,4,115,20" href="formulario_caja.php">
  <area shape="rect" coords="124,3,237,21" href="lista_facturas_cerrar_caja.php">
  <area shape="rect" coords="241,5,353,21" href="lista_fechas_aperturas.php">
  <area shape="rect" coords="361,4,494,22" href="lista_cierre_caja_general.php">
</map>
<br>
<table width=280 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Caja por Referencia</td>
</tr>
<tr><td><table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td width="50" height="8" bgcolor="#000000" ><div align="left" class="Estilo3">N&ordm; Factura </div></td>
    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo3">Fecha</span></td>
    <td width="60" height="8" bgcolor="#000000" ><span class="Estilo3">Cliente</span></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo3">Monto Pagado </span></td>
    <td width="60" height="8" bgcolor="#000000" ><span class="Estilo3">Usuario</span></td>
    </tr>
  <?php do { ?>
  <tr>
    <td width="50" height="21" bgcolor="#E3E9F1" ><?php echo $row_Recordset3['numero']; ?></td>
    <td width="50" bgcolor="#E3E9F1" ><?php echo $row_Recordset3['fecha3']; ?></td>
    <td width="60" bgcolor="#E3E9F1" ><div align="left"><?php echo $row_Recordset3['codigo']; ?></div></td>
    <td width="100" bgcolor="#E3E9F1" ><div align="left">Efectivo:<?php echo $row_Recordset3['efectivo']; ?><br>
    Cheque:<?php echo $row_Recordset3['cheque']; ?><br>
    Credito:<?php echo $row_Recordset3['credito']; ?><br>
    Debito:<?php echo $row_Recordset3['debito']; ?></div></td>
    <td width="60" bgcolor="#E3E9F1" ><div align="left"><?php echo $row_Recordset3['usuario']; ?></div></td>
    </tr>
  <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
</table></td>
</tr>
</table> 
</body>
</html>

