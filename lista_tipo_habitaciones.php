<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 50;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM hab_tipo ORDER BY id_tipo ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
 // $all_Recordset2 = mysql_query($query_Recordset2);
//  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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
.Estilo4 {color: #FFFFFF; font-weight: bold; }
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
<table width="280" height="84" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Tipo de  Habitaciones</td>
  </tr>
  <tr>
    <td height="53"><table width="600" border="0" align="center" cellspacing="2">
      <tr>
        <td width="143" height="16" bgcolor="#000000" ><span class="Estilo4">Tipo de Habitacion</span>
            </span>
          <div align="left" class="Estilo4" ></div></td>
        <td height="16" colspan="2" bgcolor="#000000" ><span class="Estilo4">Precio</span></td>
        </tr>
      <?php do { ?>
      <tr>
        <td height="28" bgcolor="#E3E9F1" ><div align="left"><?php echo $row_Recordset2['tipo']; ?></span></div>
            <div align="left" ></div></td>
        <td width="289" height="28" bgcolor="#E3E9F1" ><?php echo $row_Recordset2['precio']; ?></td>
        <td width="47" c"><div align="center"><font face="Arial" size="1"><a href="?&amp;id3=borrar&amp;codigo2=<?php echo $row_Recordset2['id_tipo']; ?>&amp;codigo=<?php echo $row_Recordset2['id_tipo']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar este Tipo de consumo?');return document.MM_returnValue" /></a></font></div></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
<p><br>
</p>
<p>&nbsp;</p>
<p><br></p>
<p></p>
</body>
</html>

