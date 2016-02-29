<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 1;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2  WHERE multi LIKE '$multi'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);


?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3= 100;
$pageNum_Recordset3= 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset3= $_GET['pageNum_Recordset2'];
}
$startRow_Recordset3= $pageNum_Recordset3* $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset3= "SELECT * FROM acompanantes  WHERE multi LIKE '$multi'";
$query_limit_Recordset3= sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3= mysql_fetch_assoc($Recordset3);


?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">







<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo2 {color: #000000}
-->
</style>
</head>

<body>
<table width="407" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="16" bgcolor="#FFFFFF" ><div align="left" class="Estilo1 Estilo1">
      <div align="center" class="Estilo2">Nombre del pax </div>
    </div>      </td>
    <td height="16" bgcolor="#FFFFFF" ><div align="left" class="Estilo1">
      <div align="center" class="Estilo2">In</div>
    </div></td>
    <td height="16" bgcolor="#FFFFFF" ><div align="center" class="Estilo2">Out</div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td height="20" bgcolor="#FFFFFF" ><span class="small"><?php echo $row_Recordset2['nombre']; ?></span></span>      <span class="small"><?php echo $row_Recordset2['apellido']; ?></span>
      <div align="center"></span></div></td>
    <td width="50" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="50" bgcolor="#FFFFFF" ><table width="20" border="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  
  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<table width="407" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <?php do { ?>
  <tr>
    <td height="20" bgcolor="#FFFFFF" ><span class="small"><?php echo $row_Recordset3['nombre']; ?></span></span>
      <div align="center"></span></div></td>
    <td width="50" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="50" bgcolor="#FFFFFF" ><table width="20" border="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
</body>
</html>

