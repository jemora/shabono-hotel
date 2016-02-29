<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset245 = 2450000;
$pageNum_Recordset245 = 0;
if (isset($_GET['pageNum_Recordset245'])) {
  $pageNum_Recordset245 = $_GET['pageNum_Recordset245'];
}
$startRow_Recordset245 = $pageNum_Recordset245 * $maxRows_Recordset245;

mysql_select_db($database, $connFlashblog);
$query_Recordset245 = "SELECT * from clientes  WHERE doc2 LIKE '$doc2'";
$query_limit_Recordset245 = sprintf("%s LIMIT %d, %d", $query_Recordset245, $startRow_Recordset245, $maxRows_Recordset245);
$Recordset245 = mysql_query($query_limit_Recordset245, $connFlashblog) or die(mysql_error());
$row_Recordset245 = mysql_fetch_assoc($Recordset245);

if (isset($_GET['totalRows_Recordset245'])) {
  $totalRows_Recordset245 = $_GET['totalRows_Recordset245'];
} else {
  $all_Recordset245 = mysql_query($query_Recordset245);
  $totalRows_Recordset245 = mysql_num_rows($all_Recordset245);
}
$totalPages_Recordset245 = ceil($totalRows_Recordset245/$maxRows_Recordset245)-1;

$queryString_Recordset245 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset245") == false && 
        stristr($param, "totalRows_Recordset245") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset245 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset245 = sprintf("&totalRows_Recordset245=%d%s", $totalRows_Recordset245, $queryString_Recordset245);
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
.Estilo1 {font-size: 12px}
.Estilo2 {font-size: 10px}
-->
</style>
</head>

<body>
<table width="600" border="0" align="center" cellspacing="0">
  <tr>
    <td width="355"><table width="400" border="0" cellspacing="2">
      <tr>
        <td width="349" bgcolor="#CCD8E6"><strong>Nombre y Apellido /Name</strong></td>
      </tr>
      <tr>
        <td><span class="Estilo1"><span class="Estilo2"><?php echo $row_Recordset245['nombre']; ?></span> <span class="Estilo2"><?php echo $row_Recordset245['apellido']; ?></span></span></td>
      </tr>
    </table></td>
    <td width="200"><table width="200" border="0" align="center" cellspacing="2">
      <tr>
        <td width="221" bgcolor="#CCD8E6"> <div align="center"><strong>Habitaci&ograve;n / Room</strong></div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?  echo  $habitacion; ?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><hr>
      <table width="600" border="0" cellspacing="2">
      <tr>
        <td width="120"><strong>Procedencia</strong></td>
        <td colspan="3"><span class="Estilo2"><?php echo $row_Recordset245['ciudad']; ?></span></td>
      </tr>
      <tr>
        <td><strong>Direcci&ograve;n</strong></td>
        <td colspan="3"><span class="Estilo2"><?php echo $row_Recordset245['direccion']; ?></span></td>
      </tr>
      <tr>
        <td><strong>Telefono</strong></td>
        <td colspan="3"><span class="Estilo2"><?php echo $row_Recordset245['telefono']; ?></span></td>
      </tr>
      <tr>
        <td><strong>Fecha</strong></td>
        <td colspan="3"><?  echo  $_POST['fecha1']; ?></td>
      </tr>
      <tr>
        <td><strong>Pais de Nacionalidad</strong></td>
        <td width="190"><span class="Estilo2"><?php echo $row_Recordset245['pais']; ?></span></td>
        <td width="112"><strong>Placa Vehiculo:</strong></td>
        <td width="160"><span class="Estilo2"><?php echo $row_Recordset245['vehiculo']; ?></span></td>
      </tr>
    </table>
        <br>
    <hr></td>
  </tr>
  <tr>
    <td colspan="2"><table width="600" border="0" cellspacing="0">
      <tr>
        <td width="200"><table width="200" border="0" cellspacing="2">
          <tr>
            <td bgcolor="#CCD8E6"><div align="center"><strong>Check in</strong></div></td>
          </tr>
          <tr>
            <td><div align="center"><?  echo  $_POST['fecha1']; ?></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="200"><table width="200" border="0" cellspacing="2">
          <tr>
            <td bgcolor="#CCD8E6"><div align="center"><strong>Check out</strong></div></td>
          </tr>
          <tr>
            <td><div align="center">
              <?  echo  $_POST['fecha2']; ?>
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="200"><table width="200" border="0" cellspacing="0">
          <tr>
            <td><div align="right"><?php echo '<strong>Fecha:</strong>'; echo date("d-m-Y"); ?></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center">Firma de Huesped</div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset245);
?>
