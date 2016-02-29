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
$query_Recordset2 = "SELECT * FROM usuarios WHERE adm_3 LIKE '0' ORDER BY ID ASC";
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
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.Estilo6 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #666666; }
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
.Estilo8 {color: #FFFFFF}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #FFFFFF; }
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
<p class="Estilo2"> <img src="imagenes/banne15.gif" width="607" height="30" /><br>
Usuarios Registrados: </p>
<table width="612" border="0" align="left" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td width="123" height="16" bgcolor="#000000" ><div align="left" class="Estilo7 Estilo8">Usuario</div></td>
    <td width="125" height="16" bgcolor="#000000" ><span class="Estilo9">Nombre</span></td>
    <td height="16" colspan="4" bgcolor="#000000" >&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="123" height="24" bgcolor="#C8D5E4" ><span class="Estilo6"><?php echo $row_Recordset2['usuario']; ?></span></td>
    <td colspan="2" bgcolor="#C8D5E4" ><span class="Estilo6"><?php echo $row_Recordset2['nombre']; ?></span></td>
    <td width="124" c"><div align="center" class="Estilo6">
      <table width="0" border="0" cellspacing="0">
        <tr>
          <th scope="col"><img src="imagenes/ico_9.gif" width="13" height="17"></th>
          <th scope="col"><a href="actualizar_clave.php?&amp;codigo=<?php echo $row_Recordset2['ID']; ?>" class="Estilo6">Cambio de Clave </a></th>
        </tr>
      </table>
      </div></td>
    <td width="119" c"><div align="center" class="Estilo6">
      <table width="119" border="0" cellspacing="0">
        <tr>
          <th width="18" scope="col"><img src="imagenes/ico_1.gif" width="18" height="18"></th>
          <th width="97" scope="col"><a href="registro_actualizar.php?&amp;codigo=<?php echo $row_Recordset2['ID']; ?>" class="Estilo6">Modificar Datos</a></th>
        </tr>
      </table>
    </div></td>
    <td width="98" c"><div align="center" class="Estilo6">
      <table width="0" border="0">
        <tr>
          <th scope="col"><img src="imagenes/inactive.gif" width="16" height="16"></th>
          <th scope="col"><a href="privilegios_usuarios.php?&amp;codigo=<?php echo $row_Recordset2['ID']; ?>" class="Estilo6">Privilegios</a></th>
        </tr>
      </table>
      </div>      </td>
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
<p>&nbsp;</p>
<p></p>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
