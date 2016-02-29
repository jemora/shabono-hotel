<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2365 = 100;
$pageNum_Recordset2365 = 0;
if (isset($_GET['pageNum_Recordset2365'])) {
  $pageNum_Recordset2365 = $_GET['pageNum_Recordset2365'];
}
$startRow_Recordset2365 = $pageNum_Recordset2365 * $maxRows_Recordset2365;

mysql_select_db($database, $connFlashblog);
$query_Recordset2365 = "SELECT * from habitacion2  WHERE multi LIKE '$multi'";
$query_limit_Recordset2365 = sprintf("%s LIMIT %d, %d", $query_Recordset2365, $startRow_Recordset2365, $maxRows_Recordset2365);
$Recordset2365 = mysql_query($query_limit_Recordset2365, $connFlashblog) or die(mysql_error());
$row_Recordset2365 = mysql_fetch_assoc($Recordset2365);

if (isset($_GET['totalRows_Recordset2365'])) {
  $totalRows_Recordset2365 = $_GET['totalRows_Recordset2365'];
} else {
  $all_Recordset2365 = mysql_query($query_Recordset2365);
  $totalRows_Recordset2365 = mysql_num_rows($all_Recordset2365);
}
$totalPages_Recordset2365 = ceil($totalRows_Recordset2365/$maxRows_Recordset2365)-1;

$queryString_Recordset2365 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2365") == false && 
        stristr($param, "totalRows_Recordset2365") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2365 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2365 = sprintf("&totalRows_Recordset2365=%d%s", $totalRows_Recordset2365, $queryString_Recordset2365);
?>
<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset23655 = 100;
$pageNum_Recordset23655 = 0;
if (isset($_GET['pageNum_Recordset23655'])) {
  $pageNum_Recordset23655 = $_GET['pageNum_Recordset23655'];
}
$startRow_Recordset23655 = $pageNum_Recordset23655 * $maxRows_Recordset23655;

mysql_select_db($database, $connFlashblog);
$query_Recordset23655 = "SELECT * FROM consumo WHERE  multi LIKE '$multi' ORDER BY fecha DESC";
$query_limit_Recordset23655 = sprintf("%s LIMIT %d, %d", $query_Recordset23655, $startRow_Recordset23655, $maxRows_Recordset23655);
$Recordset23655 = mysql_query($query_limit_Recordset23655, $connFlashblog) or die(mysql_error());
$row_Recordset23655 = mysql_fetch_assoc($Recordset23655);

if (isset($_GET['totalRows_Recordset23655'])) {
  $totalRows_Recordset23655 = $_GET['totalRows_Recordset23655'];
} else {
  $all_Recordset23655 = mysql_query($query_Recordset23655);
  $totalRows_Recordset23655 = mysql_num_rows($all_Recordset23655);
}
$totalPages_Recordset23655 = ceil($totalRows_Recordset23655/$maxRows_Recordset23655)-1;

$queryString_Recordset23655 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset23655") == false && 
        stristr($param, "totalRows_Recordset23655") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset23655 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset23655 = sprintf("&totalRows_Recordset23655=%d%s", $totalRows_Recordset23655, $queryString_Recordset23655);
?>



<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
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
.Estilo5 {	color: #000000;
	font-weight: bold;
}
.Estilo7 {font-size: 10px}
.Estilo9 {font-size: 10px; font-weight: bold; }
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
<table width="<?php echo $row_Recordset2['ancho']; ?>" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr bgcolor="#7794AE">
    <td height="8" colspan="4" bgcolor="#FFFFFF" ><div align="left" class="Estilo1 Estilo5"></div>
        <div align="left" class="Estilo1"></div></td>
  </tr>
  <tr bgcolor="#B1C3D9">
    <td width="100" height="8" ><div align="left" class="Estilo7"><strong>Detalles</strong></div></td>
    <td width="50" ><div align="center" class="Estilo7"><strong>Cantidad</strong></div></td>
    <td width="50" height="8" class="Estilo7" ><strong>Precio Unitario</strong></td>
    <td width="50" height="8" ><span class="Estilo7"><strong>Valor Total</strong></span></td>
  </tr>
  <?php do { ?>
  <tr bgcolor="#FFFFFF">
    <td width="100" height="44" ><span class="Estilo7">Habitacion <?php echo $row_Recordset2365['numero']; ?><?php echo $row_Recordset2365['nom_hab']; ?></span></td>
    <td width="50" height="44" ><div align="center" class="Estilo7"><?php echo $row_Recordset2365['cant_dia']; ?></div></td>
    <td width="50" ><div align="center" class="Estilo7"><?php echo $row_Recordset2365['precio']; ?></div></td>
    <td width="50" ><div align="left" class="Estilo7"><?php echo $valor= $row_Recordset2365['precio'] * $row_Recordset2365['cant_dia']; ?></div>
    <div align="center" class="Estilo7"></div></td>
    </tr>
  <?php } while ($row_Recordset2365 = mysql_fetch_assoc($Recordset2365)); ?>
</table>
<br>
<table width="<?php echo $row_Recordset2['ancho']; ?>" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <?php do { ?>
  <tr>
    <td width="100" height="17" bgcolor="#FFFFFF" ><span class="Estilo7"><?php echo $row_Recordset23655['consumo']; ?></span></td>
    <td width="50" height="17" bgcolor="#FFFFFF" ><div align="center" class="Estilo7"><?php echo $row_Recordset23655['canti']; ?></div></td>
    <td width="50" bgcolor="#FFFFFF" ><div align="center" class="Estilo7"><?php echo $row_Recordset23655['precio']; ?></div></td>
    <td width="50" bgcolor="#FFFFFF" ><div align="left" class="Estilo7">
      <div align="left"><?php echo $row_Recordset23655['canti'] * $row_Recordset23655['precio'] ; ?></div>
    </div></td>
  </tr>
  <?php } while ($row_Recordset23655 = mysql_fetch_assoc($Recordset23655)); ?>
</table>
</body>
</html>

