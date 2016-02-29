<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
$usuario= $_SESSION['usuario_login']; 
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where  banco like '1' and opc like '0' ORDER BY fecha ASC";
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
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<table width="200" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="453" border="0" align="center" cellspacing="1" bordercolor="#CCCCCC">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" colspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">Informacion de  Reservaciones </div>
        </div></td>
        <td colspan="3" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">Informaci&oacute;n de Pago </div>
        </div></td>
        </tr>
      
      <?php do { ?>
      <tr>
        <td width="110" height="26" bgcolor="#B1C3D9" class="small" >Fecha desde: </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha1']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Fecha Deposito:</td>
        <td width="138" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha_depo']; ?></td>
        
      </tr>
      <tr>
        <td height="17" bgcolor="#B1C3D9" class="small" >Fecha Hasta: </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha2']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Banco:</td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['banco_dep']; ?></td>
        </tr>
      <tr>
        <td height="14" bgcolor="#B1C3D9" class="small" >Cliente:</td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['doc2']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >N&ordm; Deposito: </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['numero_dep']; ?></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#B1C3D9" class="small" >Cant de Personas </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['personas']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Depositado: </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['monto_dep']; ?></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#B1C3D9" class="small" >Dias:</td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['cant_dia']; ?></td>
        <td bgcolor="#B1C3D9" class="small" >N&ordm; Ticket </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['num_web']; ?></td>
      </tr>
      <tr>
        <td height="19" bgcolor="#B1C3D9" class="small" >Monto a Cancelar: </td>
        <td colspan="3" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['subtotal1']; ?></td>
        </tr>
      <tr>
        <td height="4" colspan="5" bgcolor="#FFFFFF" class="small" ><hr></td>
        </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
