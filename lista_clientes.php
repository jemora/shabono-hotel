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
$query_Recordset2 = "SELECT * FROM clientes WHERE   doc2 LIKE '$codigo' ORDER BY fecha DESC";
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
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="613" border="0" align="center" cellspacing="0">
  <tr>
    <th width="549" scope="col"><div align="left">
      <?php include("buscar_cliente.php");?>
    </div>    </th>
  </tr>
  <tr>
    <td><span class="Estilo2">Clientes Registrados:</span></td>
  </tr>
</table>
<table width="200" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
      <tr>
        <td height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Cedula </div></td>
        <td height="16" bgcolor="#000000" class="small" ><span class="small Estilo4">Clientes </span></td>
        <td height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Pais</div></td>
        <td width="100" height="16" bgcolor="#000000" class="small"><div align="left" class="small Estilo4">Tipo de Cliente </div></td>
        <td height="16" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">Telefono </div></td>
        <td width="65" height="16" bgcolor="#000000"><span class="Estilo4"></span></td>
      </tr>
      <?php do { ?>
      <tr>
        <td width="92" height="34" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['doc2']; ?></td>
        <td width="132" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></td>
        <td width="89" bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['pais']; ?></div></td>
        <td bgcolor="#E3E9F1" class="small" ><div align="left" class="small"><?php echo $row_Recordset2['cliente']; ?></div></td>
        <td width="111" bgcolor="#E3E9F1" class="small" ><div align="center" class="small"><?php echo $row_Recordset2['telefono']; ?></div></td>
        <td bgcolor="#E3E9F1" c"><div align="center"><a href="detalles_clientes.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="Estilo1"></a>
                <table width="20" border="0">
                  <tr>
                    <th scope="col"><img src="imagenes/ico_4.gif" alt="Detalles" width="18" height="18"></th>
                    <th scope="col"><a href="detalles_clientes.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="small">Detalles</a></th>
                  </tr>
                </table>
        </div></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
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
