<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 9000;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM habitacion2 WHERE id  LIKE '$codigo' ";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);


?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-image: url(bg_grad.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body class="small">
<table width="151" border="0" cellspacing="2">
  <tr>
    <td width="145" bgcolor="#ECE9D8" class="small"><strong>Informacion</strong></td>
  </tr>
  <tr>
    <td bgcolor="#7895AF" class="small">Habitacion:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['nom_hab']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#7895B0" class="small">Numero:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['tipo']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#7895B0" class="small">Desde:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['fecha1']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#7895B0" class="small">Hasta:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['fecha2']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#7895B0" class="small"> Estatus:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['status']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#7895B0" class="small">N&ordm; Dias:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['cant_dia']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#ECE9D8" class="small"><strong>Huesped </strong></td>
  </tr>
  <tr>
    <td bgcolor="#B1C3D9" class="small">Codigo:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['doc2']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#B1C3D9" class="small">Nombre:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['nombre']; ?></td>
  </tr>
  <tr>
    <td bgcolor="#B1C3D9" class="small">Apellido:</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="small"><?php echo $row_Recordset3['apellido']; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
