<head>

<title>lista de habitaciones</title>
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
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE id LIKE '$codigo' ORDER BY id DESC";
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


<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.Estilo13 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo14 {font-size: 10px}
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style><script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="270" bgcolor="#F4F4F4" class="small"><b><font face="Arial" color="#000066" size="2">Se ha ocupado la Habitación Correctamente</font></b><font color="#000066">&nbsp;</font> </td>
        <td width="20" bgcolor="#F4F4F4"><img src="imagenes/ico_5.gif" width="18" height="18" /></td>
        <td width="275" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')">Imprimir ficha de datos</a></strong></div></td>
        <td width="28" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<DIV ID="seleccion"><br />
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CBD1D9">
    <th width="306" bgcolor="#DDE4D7" scope="col"><div align="left"><span class="Estilo1">Ficha de Datos del Cliente:</span></div></th>
  </tr>
  <tr>
    <td><table width="601" border="0">

      <tr>
        <td width="100"><div align="left"><strong><span class="Estilo9">Cliente:</span></strong></div></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13"><?php echo $row_Recordset2['doc2']; ?> <?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?></div>           </td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">Habitaci&oacute;n:</span></strong></div></td>
        <td width="178" class="Estilo9"><div align="left" class="Estilo13">
          <div align="left" class="Estilo13"><?php echo $row_Recordset2['habitacion']; ?><?php echo $row_Recordset2['nom_hab']; ?></div>
        </div></td>
        <td width="106" class="Estilo9"><div align="right"><strong>Fecha Estadia</strong></div></td>
        <td width="199" class="Estilo9">Desde:
          <span class="Estilo13"><?php echo $row_Recordset2['fecha1']; ?></span>
          <div align="left" class="Estilo13"></div>          <span class="Estilo13">
        Hasta: 
        
        <?php echo $row_Recordset2['fecha2']; ?></span>
          <div align="left" class="Estilo13"></div></td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">N&ordm; de Personas:</span></strong></div></td>
        <td class="Estilo9"><div align="left" class="Estilo13">
          <div align="left" class="Estilo13"><?php echo $row_Recordset2['personas']; ?></div>
        </div></td>
        <td class="Estilo9"><div align="right"><strong>Cantidad de dias</strong></div></td>
        <td class="Estilo9"><div align="left" class="Estilo13"><?php echo $row_Recordset2['cant_dia']; ?></div></td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">Servicio:</span></strong></div></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13">
          <div align="left" class="Estilo13"><?php echo $row_Recordset2['servicio']; ?></div>
        </div></td>
      </tr>
      <tr>
        <td><strong><span class="Estilo9">Observaciones:</span></strong></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13"><?php echo $row_Recordset2['obsev']; ?></div></td>
        </tr>
    </table></td>
  </tr>
</table>
</DIV>
</body>
</html>
