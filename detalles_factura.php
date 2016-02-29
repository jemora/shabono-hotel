  
   <?php require_once('conector/conector.php');?> 
<?php
  
  ////////////consumos
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0'  and multi like '$multi' ");
$test1c = mysql_fetch_row($test11a);

$test1c[0];
?>

    <?php
  ///////////facturas
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(precio) from habitacion2 WHERE opc like '0' and  multi LIKE '$multi' ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
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
$query_Recordset2 = "SELECT * from habitacion2  WHERE doc2 LIKE '$codigo' and status like 'ocupada' and id like '$codigo2'";
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
<?php
  
  ////////////consumos
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and multi like '$multi'");
$test1c = mysql_fetch_row($test11a);

$test1c[0];
?>
      <?php
  ///////////facturas
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(precio) from habitacion2 WHERE opc like '0' and multi like '$multi' ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
?>
<?php $factura= $row_Recordset2['cant_dia'] * $test1[0]; ?>



<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2'  ");
$result2 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result3 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result4 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result5 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result6 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result7 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result8 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result9 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result10 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result11 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result12 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result13 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result14 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result15 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result16 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result17 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result18 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result19 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
?>





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
.Estilo16 {font-size: 12px; color: #000000; }
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
.Estilo18 {font-size: 12px; color: #000000; font-weight: bold; }
.Estilo19 {color: #FFFFFF}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<?php include("logo.php");?>
<br>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" />
</div>
</div>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><table width="606" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="600" height="28" bgcolor="#FFFFFF"><form action="opcion8.php" method="post">
  
      <div align="left">
        <table width="600" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8"> Facturas de Clientes </span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" ></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="176" scope="col"><span class="small">Busqueda de Clientes </span></th>
        </tr>
      </table>
        </div>
    </form>
    <td width="8" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td height="28" valign="top"><?php include("recursos.php");?></td>
  </tr>
</table>
<br>
<table width="593" height="28" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="pago_factura.php?&codigo2=<? while ($row=mysql_fetch_array($result18)) { echo "".$row["id"].""; } mysql_free_result($result18)?>&codigo=<? while ($row=mysql_fetch_array($result19)) { echo "".$row["doc2"].""; } mysql_free_result($result19)?>&multi=<? while ($row=mysql_fetch_array($result17)) { echo "".$row["multi"].""; } mysql_free_result($result17)?>" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="601" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="32" valign="top"><table width="601" border="0" align="center">
                      <!--DWLayoutTable-->
                      <tr>
                        <td bgcolor="#FFFFFF">
                          <div align="right">
                            <input name="submit" type="submit" id="submit" value="   Cancelar Facturas   " />
                            <font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                              <input name="fecha3" type="hidden" id="fecha3" value="<?php echo date("Y-m-d"); ?>" size="25" />
                              </span></a></font><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                              <input name="doc2" type="hidden" id="doc2" value="<? while ($row=mysql_fetch_array($result11))   { echo "".$row["doc2"]."";} mysql_free_result($result11)?>" size="25" />
                              </span></a></font><font face="Arial" size="1">
                              <input name="codigo" type="hidden" id="codigo" value="<? while ($row=mysql_fetch_array($result12))   { echo "".$row["id"]."";} mysql_free_result($result12)?>" size="25" />
                                  
                              </span></a></font><font face="Arial" size="1">
                              <input name="total" type="hidden" id="total" value="<?php echo  $test1c[0] + $factura ?>" size="25" />
                              </font></div></td>
                        </tr>
                  </table></td>
              </tr>
            </table></th>
            </tr>
        </table>
      </div>
  </form>    </tr>
</table>
<p>
  <?php include("lista_facturas_pendientes1.php");?>
  <br>
  <?php include("lista_consumos_prefactura1.php");?>
  <br>
  <?php include("totales1.php");?>
</p>
<p align="center">&nbsp;</p>
</body>
</html>
