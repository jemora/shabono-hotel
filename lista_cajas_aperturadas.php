<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM caja WHERE opc LIKE '0'";
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

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
<style type="text/css">
td {
    font-family:verdana,arial;
    font-size:8pt;
}
.estilotabla{
    background-color:ffffff;
    border-style:solid;
    border-color:666666;
    border-width:1px;
}
.estilocelda{
    background-color:C4CECF;
    color:333333;
    font-weight:bold;
    font-size:10pt;
}
.Estilo4 {color: #990000}
</style> 
</head>

<body><table width=601 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Cajas Aperturadas</td>
</tr>
<tr><td><table width="600" border="0" align="center" cellspacing="2">
  <?php do { ?>
  <tr>
    <td width="352" height="19" bgcolor="#E3E9F1" ><strong>Tipo de caja:</strong><?php echo $row_Recordset2['tipo']; ?> <strong>Fecha:</strong><?php echo $row_Recordset2['fecha']; ?><br>
      <strong>Monto de Apertura:</strong><span class="Estilo4"><?php echo $row_Recordset2['monto1']; ?></span></td>
    <td width="238" bgcolor="#E3E9F1" ><strong>Recepcionista:</strong><?php echo $row_Recordset2['recep']; ?><br>
      <strong>Botones:</strong><?php echo $row_Recordset2['boton']; ?></td>
    </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table></td>
</tr>
</table> 
<p></p>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
