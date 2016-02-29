<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM caja WHERE mes like '$mes' and ano like '$ano' ORDER BY id DESC";
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







<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo14 {color: #666666; font-size: 12px; }
-->
</style>
</head>

<body>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" valign="top"><div align="right" >
      <div align="center"><img src="imagenes/banne18.gif" alt="f" width="607" height="30"></div>
    </div></td>
  </tr>
  <tr>
    <td valign="top"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="small" >Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"></a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><p align="left"><img src="imagenes/menu_caja2.gif" alt="f" width="363" height="27" border="0" usemap="#Map"></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><span class="small">Lista de Cajas cerradas durante el Mes:</span></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="4,4,115,20" href="formulario_crear_caja.php">
  <area shape="rect" coords="125,2,238,20" href="formulario_cierre_caja_dia.php">
  <area shape="rect" coords="241,5,353,21" href="formulario_cierre_caja_mes.php">
</map>
<table width="663" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4 Estilo1">
      <div align="center">Recepcionista</div>
    </div></td>
    <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="center" class="Estilo1"><span class="small Estilo4">Boton</span></div></td>
    <td height="16" rowspan="2" bgcolor="#000000" class="small" ><div align="center" class="Estilo1"><span class="small Estilo4">Dia de Cierre de caja </span></div></td>
    <td height="7" colspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4 Estilo1">
      <div align="center">Montos</div>
    </div></td>
    <td width="127" height="16" rowspan="2" bgcolor="#000000" class="small"><div align="left" class="small Estilo4 Estilo1">
      <div align="center">Tipo de Caja </div>
    </div></td>
    <td width="87" height="16" rowspan="2" bgcolor="#000000" class="small Estilo1" ><div align="left" class="small Estilo4">
      <div align="center">Usuario Responsable de cierre </div>
    </div>
    </td>
  </tr>
  <tr>
    <td height="7" bgcolor="#000000" class="small" ><div align="center" class="Estilo1"><span class="small Estilo4"> Apertura</span></div></td>
    <td height="7" bgcolor="#000000" class="small" ><div align="center" class="Estilo1"><span class="small Estilo4">Cierre</span></div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="80" height="15" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['recep']; ?></div></td>
    <td width="81" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['boton']; ?></div></td>
    <td width="80" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['fecha']; ?></div></td>
    <td width="89" bgcolor="#E3E9F1" class="small" ><div align="left" class="small">
      <div align="center"><?php echo $row_Recordset2['monto1']; ?></div>
    </div></td>
    <td width="89" bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['monto2']; ?></div></td>
    <td bgcolor="#E3E9F1" class="small" ><div align="center"><?php echo $row_Recordset2['tipo']; ?></div></td>
    <td bgcolor="#E3E9F1" class="small" ><div align="center" class="small">
      <div align="left" class="small">
        <div align="center"><?php echo $row_Recordset2['usuario']; ?></div>
      </div>
    </div></td>
    </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
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
