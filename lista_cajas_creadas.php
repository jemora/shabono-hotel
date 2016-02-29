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
$query_Recordset2 = "SELECT * FROM caja_creada";
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

<?php 	require_once('css.php');?>




<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<body>
<table width=280 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Cajas Creadas</td>
</tr>
<tr><td><table width="601" border="0" align="center" cellspacing="2" bordercolor="#000000" class="Estilo1">
  <tr>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">Tipo de Caja</div></td>
    <td width="128" height="16" bgcolor="#000000" ><span class="Estilo4">Descripcion </span></td>
    <td width="129" bgcolor="#000000" ><span class="Estilo4">Estado de la caja</span></td>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo4">Usuario </div></td>
    <td height="16" colspan="3" bgcolor="#000000"><span class="Estilo3"></span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="91" height="22" bgcolor="#E3E9F1" ><?php echo $row_Recordset2['caja']; ?></td>
    <td bgcolor="#E3E9F1" ><?php echo $row_Recordset2['descripcion']; ?>
        <div align="left" class="Estilo1"></div></td>
    <td bgcolor="#E3E9F1" ><div align="center"><?php echo $row_Recordset2['estado']; ?></div></td>
    <td width="106" bgcolor="#E3E9F1" ><div align="center" class="Estilo1"><?php echo $row_Recordset2['usuario']; ?></div></td>
    <td width="20" c"><div align="center"><a href="actualizar_caja.php?&id=detalles2&codigo=<?php echo $row_Recordset2['doc2']; ?>" class="Estilo1"></a> <a href="actualizar_caja.php?&id=detalles2&codigo=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/ico_4.gif" alt="Actualizar" width="18" height="18" border="0"></a></div></td>
    <td width="20" c"><div align="center"><a href="actualizar_clientes_datos.php?&codigo=<?php echo $row_Recordset2['ID']; ?>" class="Estilo1"></a> <a href="borrar_caja_creada.php?&codigo=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/ico_10.gif" alt="eliminar" width="16" height="12" border="0"></a></div></td>
    <td width="20" c"><div align="center"><a href="activar_caja.php?&id=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/ico_9.gif" width="13" height="17" border="0" /></a></div></td>
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
