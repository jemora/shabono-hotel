
<?php require_once('conector/conector.php');?> 

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2caja = 100;
$pageNum_Recordset2caja = 0;
if (isset($_GET['pageNum_Recordset2caja'])) {
  $pageNum_Recordset2caja = $_GET['pageNum_Recordset2caja'];
}
$startRow_Recordset2caja = $pageNum_Recordset2caja * $maxRows_Recordset2caja;

mysql_select_db($database, $connFlashblog);
$query_Recordset2caja = "SELECT * FROM caja WHERE opc like '0' and  ref LIKE '1' ORDER BY fecha DESC";
$query_limit_Recordset2caja = sprintf("%s LIMIT %d, %d", $query_Recordset2caja, $startRow_Recordset2caja, $maxRows_Recordset2caja);
$Recordset2caja = mysql_query($query_limit_Recordset2caja, $connFlashblog) or die(mysql_error());
$row_Recordset2caja = mysql_fetch_assoc($Recordset2caja);

if (isset($_GET['totalRows_Recordset2caja'])) {
  $totalRows_Recordset2caja = $_GET['totalRows_Recordset2caja'];
} else {
  $all_Recordset2caja = mysql_query($query_Recordset2caja);
  $totalRows_Recordset2caja = mysql_num_rows($all_Recordset2caja);
}
$totalPages_Recordset2caja = ceil($totalRows_Recordset2caja/$maxRows_Recordset2caja)-1;

$queryString_Recordset2caja = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2caja") == false && 
        stristr($param, "totalRows_Recordset2caja") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2caja = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2caja = sprintf("&totalRows_Recordset2caja=%d%s", $totalRows_Recordset2caja, $queryString_Recordset2caja);
?>










<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2'";
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

    <?
/////////////////////////////////////////////// variable para  caja
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja1 = mysql_query("SELECT * FROM caja_creada WHERE opc  LIKE '1' and  ref LIKE '1'");
?>
<?  while ($row=mysql_fetch_array($resultcaja1)) {$caja1= "".$row["caja"].""; } mysql_free_result($resultcaja1)?>

  <?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja = mysql_query("SELECT * FROM caja WHERE tipo  LIKE '$caja1' and  opc LIKE '0'");
?>
  <?  while ($row=mysql_fetch_array($resultcaja)) {$caja= "".$row["id"].""; } mysql_free_result($resultcaja)
 /////////////////////////////////////////////////////////////////////////////////// 
  
  ?>




<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM caja WHERE ref  LIKE '1' and opc LIKE '0' ");
$result2 = mysql_query("SELECT * FROM caja WHERE ref  LIKE '1' and opc LIKE '0'  ");
$result3 = mysql_query("SELECT * FROM caja WHERE ref  LIKE '1' and opc LIKE '0'  ");
$result333 = mysql_query("SELECT * FROM caja_creada WHERE ref  LIKE '1' and opc LIKE '0'  ");
$result4 = mysql_query("SELECT * FROM caja WHERE ref  LIKE '1' and opc LIKE '0'  ");
$result5 = mysql_query("SELECT * FROM caja WHERE ref  LIKE '1' and opc LIKE '0'  ");
$resultiva = mysql_query("SELECT * FROM iva WHERE cod  LIKE '0' ");
?>

<?  while ($row=mysql_fetch_array($resultiva))  { $iva= "".$row["iva"]."";  } mysql_free_result($resultiva) ?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo15 {color: #000000}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
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
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<?php 	require_once('css.php');?>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<div align="center"></div>
<table width=280 height=279 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Detalles Caja Principal</td>
</tr>
<tr><td height="253"><table width="593" height="28" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="php" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th height="247" scope="col"><table width="601" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="245" valign="top"><table width="601" border="0" align="center">
                  <!--DWLayoutTable-->
                  <tr>
                    <td width="150" bgcolor="#E3E9F1" class="small"><span class="small"><strong>Fecha de Apertura: </strong></span><strong></span></strong></td>
                    <td width="86" bgcolor="#FFFFFF" class="small"><font face="Verdana"><?php echo $row_Recordset2caja['fecha']; ?></font></td>
                    <td width="115" bgcolor="#E3E9F1" class="small"><div align="right"><span class="Estilo14"><strong><span class="Estilo15">Usuario:</span></strong></span></div></td>
                    <td width="197" bgcolor="#FFFFFF" class="small"><? echo $_SESSION['usuario_login'] ?>&nbsp;</td>
                  </tr>
                  <tr>
                    <td bgcolor="#E3E9F1" class="small"><div align="left" class="Estilo14"><span class="small"><strong>Monto de Apertura :</strong></span><strong></span></strong></div></td>
                    <td colspan="3" valign="top" class="small"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <!--DWLayoutTable-->
                      <tr>
                        <td width="252" height="18" bgcolor="#FFFFFF" class="Estilo14"><font face="Verdana"><?php echo $row_Recordset2caja['monto1']; ?></font></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td colspan="4" bgcolor="#B1C3D9"><div align="center"><strong>Pagos Realizados </strong></div></td>
                  </tr>
                  <tr>
                    <td bgcolor="#E3E9F1" class="small"><div align="left" ><strong>Efectivo:</strong></div></td>
                    <td bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(efectivo) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test1 = mysql_fetch_row($test11a);
echo  $test1[0];
?>
                      Bs.f </td>
                    <td bgcolor="#E3E9F1" class="small">Retencion Iva</td>
                    <td bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a2 = mysql_query("SELECT SUM(reten_iva) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test122 = mysql_fetch_row($test11a2);
echo  $test122[0];
?>                       Bs.f </td>
                  </tr>
                  <tr>
                    <td bgcolor="#E3E9F1" class="small"><div align="left"><strong><span >Cheque:</span></strong></div></td>
                    <td bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a1 = mysql_query("SELECT SUM(cheque) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test11 = mysql_fetch_row($test11a1);
echo  $test11[0];
?>
                      Bs.f </td>
                    <td bgcolor="#E3E9F1" class="small">Retencion I.S.R.L</td>
                    <td bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a133 = mysql_query("SELECT SUM(reten_isrl) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test1133 = mysql_fetch_row($test11a133);
echo  $test1133[0];
?>
Bs.f </td>
                  </tr>
                  <tr>
                    <td bgcolor="#E3E9F1" class="small"><strong><span >Tarjeta Credito: </span></strong></td>
                    <td colspan="3" bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a2 = mysql_query("SELECT SUM(credito) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test12 = mysql_fetch_row($test11a2);
echo  $test12[0];
?>
                      Bs.f </td>
                  </tr>
                  <tr>
                    <td bgcolor="#E3E9F1" class="small"><strong>Tarjeta Debito:</strong></td>
                    <td colspan="3" bgcolor="#FFFFFF" class="small"><?php
  require_once('conector/conector.php');
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a3 = mysql_query("SELECT SUM(debito) from facturas WHERE opc like '0' and  caja LIKE '$caja' ");
$test13 = mysql_fetch_row($test11a3);
echo  $test13[0];
?>
                      Bs.f </td>
                  </tr>
                  <tr>
                    <td colspan="4" bgcolor="#B1C3D9"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" bgcolor="#FFFFFF" class="small"><div align="right"><strong>Recepcionista</strong></div></td>
                    <td bgcolor="#FFFFFF" class="small"><font face="Verdana">
                      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["recep"].""; 
}
mysql_free_result($result3)
?>
                    </font></td>
                  </tr>
                  <tr>
                    <td colspan="3" bgcolor="#FFFFFF" class="small"><div align="right"><strong>Botones</strong></div></td>
                    <td bgcolor="#FFFFFF" class="small"><font face="Verdana">
                      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["boton"].""; 
}
mysql_free_result($result4)
?>
                    </font></td>
                  </tr>
                  <tr>
                    <td colspan="4" bgcolor="#FFFFFF" class="small"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" bgcolor="#B1C3D9" class="small"><div align="right"><font face="Arial" size="1">
                      <strong>
                      <?php $subtotal= $test11[0] + $test1[0] + $test12[0] + $test122[0] + $test13[0] + $test133[0]; ?>
                      </strong>
                      <input name="total2" type="hidden" id="total2" value="<?php echo  $total; ?>" size="25" />
                    </font>Total en Facturas:</div></td>
                    <td bgcolor="#FFCC00" class="small"><?php echo  $subtotal; ?></td>
                  </tr>
                  <tr>
                    <td height="30" colspan="4" bgcolor="#FFFFFF" class="small"><div align="right"><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                      <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" size="25" />
                      </span></a></font><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                        <input name="doc" type="hidden" id="doc" value="<? while ($row=mysql_fetch_array($result11))   { echo "".$row["doc2"]."";} mysql_free_result($result11)?>" size="25" />
                        </span></a></font><font face="Arial" size="1">
                          <input name="codigo2" type="hidden" id="codigo2" value="<? while ($row=mysql_fetch_array($result12))   { echo "".$row["id"]."";} mysql_free_result($result12)?>" size="25" />
                          </font><span class="Estilo3">
                            <input name="usuario2" type="hidden" id="usuario2" value="<? echo $_SESSION['usuario_login'] ?>" />
                            <a href="cerrar_caja.php?&codigo=<?php echo $row_Recordset2caja['id']; ?>&monto2=<?php echo  $subtotal; ?>"><img src="imagenes/cerrar_caja.jpg" alt="Cerrar Caja" width="88" height="20" border="0"></a></span></div></td>
                  </tr>
                </table></td>
              </tr>
            </table></th>
          </tr>
        </table>
      </div>
    </form>
    </tr>
</table></td></tr>
</table> 
</body>
</html>
