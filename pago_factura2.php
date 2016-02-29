<?php require('verificar.php'); ?> 
<?php require_once('conector/conector.php');?> 
				  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset22 = 20000;
$pageNum_Recordset22 = 0;
if (isset($_GET['pageNum_Recordset22'])) {
  $pageNum_Recordset22 = $_GET['pageNum_Recordset22'];
}
$startRow_Recordset22 = $pageNum_Recordset22 * $maxRows_Recordset22;

mysql_select_db($database, $connFlashblog);
$query_Recordset22 = "SELECT * FROM facturas_configurar WHERE opc LIKE '1'";
$query_limit_Recordset22 = sprintf("%s LIMIT %d, %d", $query_Recordset22, $startRow_Recordset22, $maxRows_Recordset22);
$Recordset22 = mysql_query($query_limit_Recordset22, $connFlashblog) or die(mysql_error());
$row_Recordset22 = mysql_fetch_assoc($Recordset22);

if (isset($_GET['totalRows_Recordset22'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset22'];
} else {
  $all_Recordset22 = mysql_query($query_Recordset22);
  $totalRows_Recordset22 = mysql_num_rows($all_Recordset22);
}
$totalPages_Recordset22 = ceil($totalRows_Recordset2/$maxRows_Recordset22)-1;

$queryString_Recordset22 = "";
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
    $queryString_Recordset22 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset22 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset22, $queryString_Recordset22);
?>


<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2_iva = 100;
$pageNum_Recordset2_iva = 0;
if (isset($_GET['pageNum_Recordset2_iva'])) {
  $pageNum_Recordset2_iva = $_GET['pageNum_Recordset2_iva'];
}
$startRow_Recordset2_iva = $pageNum_Recordset2_iva * $maxRows_Recordset2_iva;

mysql_select_db($database, $connFlashblog);
$query_Recordset2_iva = "SELECT * from iva  WHERE cod LIKE '0'";
$query_limit_Recordset2_iva = sprintf("%s LIMIT %d, %d", $query_Recordset2_iva, $startRow_Recordset2_iva, $maxRows_Recordset2_iva);
$Recordset2_iva = mysql_query($query_limit_Recordset2_iva, $connFlashblog) or die(mysql_error());
$row_Recordset2_iva = mysql_fetch_assoc($Recordset2_iva);

if (isset($_GET['totalRows_Recordset2_iva'])) {
  $totalRows_Recordset2_iva = $_GET['totalRows_Recordset2_iva'];
} else {
  $all_Recordset2_iva = mysql_query($query_Recordset2_iva);
  $totalRows_Recordset2_iva = mysql_num_rows($all_Recordset2_iva);
}
$totalPages_Recordset2_iva = ceil($totalRows_Recordset2_iva/$maxRows_Recordset2_iva)-1;

$queryString_Recordset2_iva = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2_iva") == false && 
        stristr($param, "totalRows_Recordset2_iva") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2_iva = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2_iva = sprintf("&totalRows_Recordset2_iva=%d%s", $totalRows_Recordset2_iva, $queryString_Recordset2_iva);
?>
<?php require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);



//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update habitacion2 Set  
subtotal='$subtotal',
iva='$iva',
nota2='$nota2',
descripcion='$descripcion'

  
Where id='$codigo2'";

mysql_db_query($database,$sSQL);      ?>





<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE multi  LIKE '$multi'";
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
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and multi  LIKE '$multi'");
$test1c = mysql_fetch_row($test11a);

$test1c[0];
?>
      <?php
  ///////////facturas
if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT SUM(precio) from habitacion2 WHERE opc like '0' and  multi  LIKE '$multi' ");
$test1 = mysql_fetch_row($test11a);
 $test1[0];
?>
<?php $factura= $row_Recordset2['cant_dia'] * $test1[0]; ?>



<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi'  ");
$result2 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result3 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result4 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result5 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result6 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result7 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result8 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result9 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result10 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result11 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result12 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result13 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result14 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result15 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result16 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result17 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_nota2 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_nota23 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_nota22 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_nota222 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_reten = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_reten2 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_srl = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$result_srl2 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$resultiva = mysql_query("SELECT * FROM iva WHERE cod  LIKE '0' ");
?>

<?  while ($row=mysql_fetch_array($resultiva))  { $iva= "".$row["iva"]."";  } mysql_free_result($resultiva) ?>
<? while ($row=mysql_fetch_array($result_nota222)) {$nota2 = "".$row["nota2"]."";} mysql_free_result($result_nota222)?>
<?  while ($row=mysql_fetch_array($result_reten2)){ $reten_iva = "".$row["reten_iva"].""; } mysql_free_result($result_reten2)?>
<?	 while ($row=mysql_fetch_array($result_srl2)) { $reten_isrl = "".$row["reten_isrl"].""; } mysql_free_result($result_srl2)?>
<? while ($row=mysql_fetch_array($result_nota23)) {$nota = "".$row["nota"].""; } mysql_free_result($result_nota23) ?>

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
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo20 {color: #FF0000}
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

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<div align="center">
  <?php include("logo.php");?>
  <br>
  <img src="imagenes/banne9.gif" width="607" height="30" /></div>
</div>
<table width="568" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="568" height="28" valign="top"><table width="410" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="opcion8.php" method="post">
  
      <div align="left">
        <table width="562" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8"> Facturas de Clientes </span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" /></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="138" scope="col"><span class="Estilo7">Busqueda de Clientes </span></th>
        </tr>
      </table>
        </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td height="18" valign="top"><?php include("recursos.php");?></td>
  </tr>
</table>
<br>
<table width="593" height="28" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="opcion10.php?&multi=<?php echo $multi; ?>" method="post" name="form1">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="589" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="149" valign="top"><br>
                    <table width="567" border="0" align="center">
                      <!--DWLayoutTable-->
                      <tr>
                        <td colspan="5" bgcolor="#B1C3D9"><strong>Factura</strong></td>
                        </tr>
                      <tr>
                        <td width="201" colspan="4" bgcolor="#B1C3D9"><div align="right">Subtotal</div></td>
                        <td width="197" bgcolor="#FFFFFF">
						
										<?php
    ////////////notas creditos principales
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11n1 = mysql_query("SELECT SUM(nota) from habitacion2 WHERE opc like '0'  and multi like '$multi' ");
$test1n1 = mysql_fetch_row($test11n1);

$test1n1[0];
?>
						
						
						<?php echo  $test1c[0] + $factura; ?>
						<?php $subtotal= $test1c[0] + $factura; ?> 
						<?php $subtota2=  $subtotal * $iva/100 ?>
					    <?php $subtota3= $subtotal + $subtota2 ; ?>
                         
                        <?php $debitar= $test1n1[0] + $nota2 ; ?>
						<?php $total=  $subtota3; ?></td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#B1C3D9"><div align="right">I.V.A (<?php echo  $iva; ?>) </div></td>
                        <td bgcolor="#FFFFFF"><div align="left"><?php //echo  $subtota2; ?>
                          <?php		$dato_subtotal_iva_apro= $row_Recordset22['iva_apro'];
				 if ( $dato_subtotal_iva_apro == '1' )
			  {  echo  $subtota2; } else
			  if ( $dato_subtotal_iva_apro == '0' )
			  {  echo  " "; } 
	 
		 ?>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#B1C3D9"><div align="right">Anticipos</div></td>
                        <td bgcolor="#FFFFFF"><div align="left"><font face="Verdana">
						<?php
    ////////////notas creditos
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11n = mysql_query("SELECT SUM(nota) from habitacion2 WHERE opc like '0'  and multi like '$multi' ");
$test1n = mysql_fetch_row($test11n);

$test1n[0];
?> <? echo $test1n[0]; ?>
                        </font></div></td>
                      </tr>
                      <tr>
                        <td colspan="4" bgcolor="#FFFFFF"><div align="right">Anticipos Adicionados:</div></td>
                        <td bgcolor="#FFFFFF"><div align="left" class="Estilo20"><font face="Verdana">
 <? while ($row=mysql_fetch_array($result_nota22)) {echo "".$row["nota2"]."";} mysql_free_result($result_nota22)?>
                        </font></div></td>
                      </tr>
                      <tr>
                        <td height="16" colspan="4" bgcolor="#E3E9F1"><div align="right"><strong>Total:</strong></div></td>
                        <td height="16" bgcolor="#E3E9F1"><div align="left"><strong><font face="Arial" size="1">
                          <?php  $total_general= $tota1-$debitar; ?>
                        </font>
                              <?php //echo  $total - $debitar; ?>
                              <?php		$dato_subtotal_iva_apro= $row_Recordset22['iva_apro'];
				 if ( $dato_subtotal_iva_apro == '1' )
			  {   echo   $subtotal + $subtota2 - $nota2;
 
			    } else 
				if ( $dato_subtotal_iva_apro == '0' )
			  {   echo  $subtotal - $nota2;
 
			    }  ?>
						
						
						
						
						
						
						
						
						
						
						
						
						 </strong><span class="Estilo3">
                        <input name="codigo" type="hidden" id="codigo" value="<?php echo $codigo; ?>" />
                        </span><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                        </span></font></font><span class="Estilo3"></span></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="fecha3" type="hidden" id="fecha3" value="<? echo date("Y-m-d"); ?>" />
                        </span></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="total" type="hidden" id="total" value="<?php $dato_subtotal_iva_apro= $row_Recordset22['iva_apro'];	 if ( $dato_subtotal_iva_apro == '1' )
			  {   echo   $subtotal + $subtota2 - $nota2;
 
			    } else 
				if ( $dato_subtotal_iva_apro == '0' )
			  {   echo  $subtotal - $nota2;
 
			    }  ?>"/>
                        </span></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="doc2" type="hidden" id="doc2" value="<?php echo $codigo; ?>"/>
                        </span></font></font></font><span class="Estilo3">
                        <input name="numero" type="hidden" id="numero" value="<?php echo $codigo2; ?>" />
                        </span></div></td>
                      </tr>
                      <tr>
                        <td colspan="5" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="5" bgcolor="#FFFFFF"><table width="559" border="0">
                          <tr>
                            <th width="132" height="26" bgcolor="#7794AE" scope="col"><div align="left" class="Estilo19">Asignar pago a: </div></th>
                            <th width="54" scope="col"><div align="left"><input name="boton" type="button" value="Buscar" onClick="open('popup_empresas.php?txtImagen=txtImagen','PopUp','directories=no scrollbars=yes resizable=no height=200,width=615 left=100')">
                            </div></th>
                            <th width="359" scope="col"><input name="txtImagen" type="text" id="txtImagen" size="59"></th>
                          </tr>
                        </table></td>
                        </tr>
                      <tr>
                        <td colspan="5" bgcolor="#B1C3D9"><strong>Metodos de Pagos: </strong></td>
                      </tr>
                      <tr>
                        <td width="150" bgcolor="#E3E9F1">Efectivo:</td>
                        <td colspan="4" bgcolor="#FFFFFF"><label>
                          <input name="efectivo" type="text" id="efectivo" value="0">
                        </label></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1">Cheque:</td>
                        <td colspan="4" bgcolor="#FFFFFF"><input name="cheque" type="text" id="cheque" value="0"></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1">Tarjeta Credito: </td>
                        <td colspan="4" bgcolor="#FFFFFF"><input name="credito" type="text" id="credito" value="0"></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1">Tarjeta Debito: </td>
                        <td colspan="4" bgcolor="#FFFFFF"><input name="debito" type="text" id="debito" value="0"></td>
                        </tr>
                      <tr>
                        <td bgcolor="#E3E9F1">Retencion Iva</td>
                        <td colspan="4" bgcolor="#FFFFFF"><input name="reten_iva" type="text" id="reten_iva" value="0"></td>
                      </tr>
                      <tr>
                        <td bgcolor="#E3E9F1"><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos"> </span></a></font>Retencion I.S.R.L</td>
                        <td colspan="4" bgcolor="#FFFFFF"><input name="reten_isrl" type="text" id="reten_isrl" value="0"></td>
                      </tr>
                      <tr>
                        <td height="48" colspan="5" bgcolor="#FFFFFF"><div align="center">
                          <input name="submit2" type="submit" id="submit" value="Pagar Factura" />
                        </div></td>
                        </tr>
                  </table></td>
              </tr>
            </table></th>
            </tr>
        </table>
      </div>
  </form>    </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
