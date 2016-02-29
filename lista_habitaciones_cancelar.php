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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE   doc2 LIKE '$codigo' ORDER BY fecha DESC";
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
.Estilo1 {font-size: 12px}
-->
</style>
</head>

<body>
<p><br>
Facturas por cancelar:</p>
<table width="677" border="1" align="left" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">Cliente</div></td>
    <td height="16" bgcolor="#CCCCCC" ><span class="Estilo1">Habitacion</span></td>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">Estatus</div></td>
    <td width="97" height="16" bgcolor="#CCCCCC" class="Estilo3"><div align="left" class="Estilo1">Fecha</div></td>
    <td height="16" bgcolor="#CCCCCC" ><div align="left" class="Estilo1">Precio</div></td>
    <td width="132" height="16" bgcolor="#CCCCCC">Pagar Habitacion </td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="92" height="19" ><span class="Estilo1"><?php echo $row_Recordset2['doc2']; ?></span></td>
    <td width="126" ><span class="Estilo1"><?php echo $row_Recordset2['habitacion']; ?></span></td>
    <td width="98" ><div align="left" class="Estilo1"><?php echo $row_Recordset2['status']; ?></div></td>
    <td ><div align="left" class="Estilo1"><?php echo $row_Recordset2['fecha']; ?></div></td>
    <td width="106" ><div align="center" class="Estilo1"><?php echo $row_Recordset2['precio']; ?></div></td>
    <td c"><div align="center"><a href="detalles_clientes.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="Estilo1"> </a>
      <form name="form1" method="post" action="">
        <label>
          <input type="checkbox" name="checkbox" value="checkbox">
          </label>
        <a href="detalles_clientes.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="Estilo1">Detalles</a>
      </form>
      </div></td>
    </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
