<?php require('verificar.php'); ?> 
<?php require_once('conector/conector.php');?> 

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
$test11a = mysql_query("SELECT SUM(subt) from consumo WHERE opc like '0' and  multi  LIKE '$multi' ");
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
$result18 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
////////
$result19 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result1m = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
$result_nota2 = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' ");
$resultiva = mysql_query("SELECT * FROM iva WHERE cod  LIKE '0' ");
?>
<?php
    ////////////notas creditos
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11n = mysql_query("SELECT SUM(nota) from habitacion2 WHERE opc like '0'  and multi like '$multi' ");
$test1n = mysql_fetch_row($test11n);

$test1n[0];
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
  <img src="imagenes/banne9.gif" width="607" height="30" />
</div>
</div>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><table width="410" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="pago_factura.php" method="post">
  
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
    <td height="28" valign="top"><?php include("recursos.php");?></td>
  </tr>
</table>
<br>
<table width="593" height="28" border="0" align="center" cellspacing="0" bordercolor="#666666" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="pago_factura2.php?&codigo2=<? while ($row=mysql_fetch_array($result18)) { echo "".$row["id"].""; } mysql_free_result($result18)?>&codigo=<? while ($row=mysql_fetch_array($result19)) { echo "".$row["doc2"].""; } mysql_free_result($result19)?>&multi=<? while ($row=mysql_fetch_array($result1m)) { echo "".$row["multi"].""; } mysql_free_result($result1m)?>" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="589" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="587" height="149" valign="top"><br>
                    <table width="567" border="0" align="center">
                      <!--DWLayoutTable-->
                      <tr bgcolor="#000000">
                        <td colspan="2" bgcolor="#B1C3D9"><div align="left" class="Estilo14 Estilo15"><strong>Cancelar Factura: </strong></div></td>
                        </tr>
                      <tr>
                        <td width="351" bgcolor="#B1C3D9"><div align="right">Subtotal</div></td>
                        <td width="197" colspan="-2" bgcolor="#FFFFFF">
						<?php echo  $test1c[0] + $factura; ?>
						<?php $subtotal= $test1c[0] + $factura; ?> 
						<?php $subtota2=  $subtotal * $iva/100 ?>
					    <?php $subtota3= $subtotal + $subtota2 ; ?>
						<?php $total=  $subtota3; ?></td>
                      </tr>
                      <tr>
                        <td bgcolor="#B1C3D9"><div align="right">I.V.A (<?php echo  $iva; ?>) </div></td>
                        <td colspan="-2" bgcolor="#FFFFFF"><div align="left"><?php //echo  $subtota2; ?>
                          <?php		$dato_subtotal_iva_apro= $row_Recordset22['iva_apro'];
				 if ( $dato_subtotal_iva_apro == '1' )
			  {  
	
$iva= $row_Recordset2_iva['iva']; 
 $iva1=$subtotal*$iva;
 $iva2=$iva1/100;
 
			   echo  '
			  <table width="0" border="0">
  <tr>
    <th  width="50" >I.V.A:</th>
    <th  width="50" >'; echo $iva2;
	echo '</th>
  </tr>
</table>  
	'; 
	

	
			    } 
		
               

				 
		 ?>
                        </div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#B1C3D9"><div align="right">Anticipos</div></td>
                        <td colspan="-2" bgcolor="#FFFFFF"><div align="left"><span class="Estilo20"><font face="Verdana">
                          <?
	
echo $test1n[0]; 
?>
                        </font></span></div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF"><div align="right">Adicionar Anticipos :</div></td>
                        <td colspan="-2" bgcolor="#FFFFFF"><div align="left">
                          <input name="nota2" type="text" id="nota2" value="0">
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#FFFFFF"><div align="right"><font face="Arial" size="1"><a href="actualizar_reservacion.php?&amp;codigo=<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>"><span class="titulos">
                            <input name="iva" type="hidden" id="iva" value="<?php echo $subtota2; ?> " size="25" />
                            <input name="subtotal" type="hidden" id="subtotal" value="<?php echo $subtotal; ?> " size="25" />
                          </span></a></font></div>                          <div align="left"></div></td>
                        </tr>
                      
                      <tr>
                        <td bgcolor="#FFFFFF"><div align="right">Descripcion o/o Observaciones</div></td>
                        <td colspan="-2" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#FFFFFF"><div align="right">
                          <textarea name="descripcion" cols="30" id="descripcion">
</textarea>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#FFFFFF"><div align="right">
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
