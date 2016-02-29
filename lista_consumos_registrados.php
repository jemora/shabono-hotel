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
.Estilo1 {font-size: 12px}
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
<p><br>
  Tipo de Habitaciones
:<br>
<?php						 
          	
           
							
		 ?>
</p>
<table width="493" border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="213" height="16" bgcolor="#CCCCCC" ><span class="Estilo1">Tipo</span>      <div align="left" class="Estilo1"></div></td>
    <td width="213" bgcolor="#CCCCCC" >&nbsp;</td>
    <td height="16" bgcolor="#CCCCCC" >&nbsp;</td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="28" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset2['tipo']; ?></span></div>
      <div align="left" class="Estilo1"></div></td>
    <td height="28" >&nbsp;</td>
    <td width="57" c"><div align="center"><font face="Arial" size="1"><a href="?&amp;id3=borrar&amp;codigo2=<?php echo $row_Recordset2['id_tipo']; ?>&amp;codigo=<?php echo $row_Recordset2['id_tipo']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar este Tipo de Habitacion?');return document.MM_returnValue" /></a></font></div></td>
  </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>&nbsp;</p>
<p><br></p>
<p></p>
</body>
</html>

