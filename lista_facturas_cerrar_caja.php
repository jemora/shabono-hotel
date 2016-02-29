<?php require('verificar.php'); ?> 
<?php require_once('conector/conector.php');?> 
    <?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja1 = mysql_query("SELECT * FROM caja_creada WHERE opc  LIKE '1' and  ref LIKE '1'");
?>
<?  while ($row=mysql_fetch_array($resultcaja1)) {$caja1= "".$row["caja"].""; } mysql_free_result($resultcaja1)?>

  <?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja = mysql_query("SELECT * FROM caja WHERE tipo  LIKE '$caja1' and  opc LIKE '0'");
?>
  <?  while ($row=mysql_fetch_array($resultcaja)) {$caja= "".$row["id"].""; } mysql_free_result($resultcaja)?>




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
$query_Recordset3 = "SELECT * FROM facturas WHERE opc LIKE '0' and caja LIKE '$caja'";
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
.Estilo1 {font-size: 12px}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {
	color: #FFCC00;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo14 {color: #666666; font-size: 12px; }
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
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" valign="top"><div align="right" >
      <div align="center"><img src="imagenes/banne18.gif" alt="s" width="607" height="30"></div>
    </div></td>
  </tr>
  <tr>
    <td valign="top"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="601" height="24" valign="top"><table width="600" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="small">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"></a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><p align="left"><img src="imagenes/menu_caja.gif" alt="s" width="502" height="27" border="0" usemap="#Map"></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><?php require_once('conector/conector.php'); ?>
      <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from caja    WHERE  opc LIKE '0' and ref LIKE '1' ");
$test1 = mysql_fetch_row($test11a);


if ( $test1[0] >= '1' )
			  { 
			   
             include("detalles_caja.php");
                 } 
		else 
		if ( $test1[0] >= '0' )
			  { 
			   
             echo '<FONT color="#ff0000"><B> No hay Cajas General Aperturada</B> </FONT>';
                 } 

?>
      <br>
      <?php include("lista_cajas_aperturadas2.php");?></td>
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
  <td class="estilocelda">facturas Canceladas</td>
</tr>
<tr><td><table width="601" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">N&ordm; de Factura</div></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Cliente</span></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Total Factura </span></td>
    <td height="8" bgcolor="#000000" ><span class="Estilo4">Usuario</span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="122" height="21" ><span class="Estilo1"><?php echo $row_Recordset3['numero']; ?></span></td>
    <td width="126" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset3['doc2']; ?></span></div></td>
    <td width="201" ><div align="left" class="Estilo1"><?php echo $row_Recordset3['total']; ?></div></td>
    <td bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset3['usuario']; ?></span></td>
  </tr>
  <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
</table></td></tr>
</table> 
</body>
</html>

