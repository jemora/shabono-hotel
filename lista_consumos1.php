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
$query_Recordset2 = "SELECT * FROM consumo WHERE opc like '0' and  cliente LIKE '$codigo' ORDER BY fecha DESC";
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
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
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
<table width="603" border="0" align="center" cellspacing="0">
  <tr>
    <th width="606" scope="col"><div align="left">
      <?php  include("buscar_cliente4.php"); ?>
    </div>    </th>
  </tr>
  <tr>
    <td><?php include("detalles_clientes2.php");?></td>
  </tr>
  <tr>
    <td><span class="Estilo2"><strong>Consumos Realizados</strong> <img src="imagenes/ico_6.gif" alt="Consumos" width="18" height="18"></span></td>
  </tr>
</table>
<table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">Articulo</div></td>
    <td height="16" bgcolor="#000000" ><span class="Estilo4">Cantidad</span></td>
    <td height="16" colspan="3" bgcolor="#000000" ><div align="left" class="Estilo4">Precio</div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="263" height="28" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['consumo']; ?></span></td>
    <td width="180" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo1"><?php echo $row_Recordset2['canti']; ?></span></div></td>
    <td width="60" bgcolor="#E3E9F1" ><div align="left" class="Estilo1"><?php echo $row_Recordset2['precio']; ?></div></td>
    <td width="60" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['subt'] ?></span></td>
    <td width="34" c"><font face="Arial" size="1"><a href="borrar_consumos.php?&amp;codigo2=<?php echo $row_Recordset2['ref']; ?>&amp;codigo3=<?php echo $row_Recordset2['id']; ?>&amp;codigo=<?php echo $row_Recordset2['cliente']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion asignada?');return document.MM_returnValue" /></a></font></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#B1C3D9">
  <tr>
    <td height="19" bgcolor="#B1C3D9" >&nbsp;</td>
  </tr>

  <tr>
    <td height="25" ><table width="299" border="00" align="right" cellspacing="0">
      <tr>
        <th width="226" scope="col">Total en Consumos </th>
        <th width="69" scope="col">  <?php
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and  cliente LIKE '$codigo' ");
$test1 = mysql_fetch_row($test11a);

echo $test1[0];
?></th>
      </tr>
    </table>
    <div align="right"></div></td>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
</body>
</html>

