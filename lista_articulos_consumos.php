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
$query_Recordset2 = "SELECT * FROM servicios01  ORDER BY id DESC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  //$all_Recordset2 = mysql_query($query_Recordset2);
  //$totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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
.Estilo4 {
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo6 {color: #FFFFFF; font-weight: bold; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
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
<table width="577" border="0" align="center" cellspacing="2" bordercolor="#FFFFFF">
  <tr>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo6"><strong>Articulo</strong></div></td>
    <td height="16" bgcolor="#000000" ><span class="Estilo6">Nombre</span></span></td>
    <td height="16" colspan="3" bgcolor="#000000" ><div align="left" class="Estilo6">Precio</div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="112" height="26" bgcolor="#E3E9F1" ><?php echo $row_Recordset2['tipo']; ?></span></td>
    <td width="193" bgcolor="#E3E9F1" ><div align="left"><?php echo $row_Recordset2['nombre']; ?></span></div></td>
    <td width="133" bgcolor="#E3E9F1" ><?php echo $row_Recordset2['precio']; ?></div></td>
    <td width="87" bgcolor="#B1C3D9" ><div align="center"><a href="actualizar_consumo01.php?&dato=<?php echo $row_Recordset2['id']; ?>">Modificar</a></div></td>
    <td width="30" c"><font face="Arial" size="1"><a href="?&amp;codigo2=<?php echo $row_Recordset2['ref']; ?>&amp;id3=borrar&amp;codigo=<?php echo $row_Recordset2['id']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar este articulo?');return document.MM_returnValue" /></a></font></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>&nbsp;</p>
<p></p>
<p></p>
</body>
</html>

