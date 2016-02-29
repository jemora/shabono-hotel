
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
.Estilo17 {color: #666666; font-size: 12px; }
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
.Estilo1 {	color: #990000;
	font-weight: bold;
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
</head>

<body >
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
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="opcion8.php" method="post">
  
      <div align="left">
        <table width="562" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8"> Facturas de Clientes </span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="138" scope="col"><span class="Estilo7">Busqueda de Clientes </span></th>
        </tr>
      </table>
        </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

   

</td>
  </tr>
</table>
<p>
  <?php require_once('conector/conector.php');

if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from facturas  ");
$test1 = mysql_fetch_row($test11a);

$numero= $test1[0] +1;

if (!isset($codigo))
//Conexion con la base
mysql_connect($hostname,$username,$password);
$opc='1';
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update habitacion2 Set  
opc='$opc',
numero='$numero',
fecha3='$fecha3'
  

Where multi='$multi' and opc2='1'";

mysql_db_query($database,$sSQL);

		

?>
  <br>
  <?php require_once('conector/conector.php');?>
  
    <?
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
  <?  while ($row=mysql_fetch_array($resultcaja)) {$caja= "".$row["id"].""; } mysql_free_result($resultcaja)?>
  
<? ///////////////////////busqueda de cliente
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcliente = mysql_query("SELECT * FROM habitacion2 WHERE multi  LIKE '$multi' and  opc2 LIKE '1'");
?>
 <?  while ($row=mysql_fetch_array($resultcliente)) {$dato= "".$row["doc2"].""; } mysql_free_result($resultcliente)?>

<? ///////////////////////busqueda de  datos de cliente
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcliente1 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$dato' ");
$resultcliente2 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$dato' ");
?>
 <?  while ($row=mysql_fetch_array($resultcliente1)) {$dato1= "".$row["nombre"].""; } mysql_free_result($resultcliente1)?>
 <?  while ($row=mysql_fetch_array($resultcliente2)) {$dato2= "".$row["apellido"].""; } mysql_free_result($resultcliente2)?>
   
  
  
  
  
  <?php require_once('conector/conector.php');
if (!isset($codigo))
//Conexion con la base
mysql_connect($hostname,$username,$password);
$opc='1';
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update consumo Set  
opc='$opc'
  
Where multi='$multi'";

//$total= $efectivo+$cheque+$credito+$debito;
$empresa=$txtImagen;
mysql_query("INSERT INTO facturas (doc2,codigo,total,fecha3,numero,efectivo,credito,cheque,debito,usuario,caja,nota2,reten_iva,reten_isrl,empresa,multi,dato1,dato2) VALUES ('$doc2','$codigo','$total','$fecha3','$numero','$efectivo','$credito','$cheque','$debito','$usuario','$caja','$nota2','$reten_iva','$reten_isrl','$empresa','$multi','$dato1','$dato2')");


mysql_db_query($database,$sSQL);	

?>
<table width="389" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <!-- fwtable fwsrc="Sin t&iacute;tulo-1.png" fwbase="reservas.jpg" fwstyle="Dreamweaver" fwdocid = "2052003515" fwnested="0" -->
  <tr>
    <td width="104"><img src="imagenes/spacer.gif" width="104" height="1" border="0" alt=""></td>
    <td width="278"><img src="imagenes/spacer.gif" width="278" height="1" border="0" alt=""></td>
    <td width="7"><img src="imagenes/spacer.gif" width="7" height="1" border="0" alt=""></td>
    <td width="1"><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="reservas_r1_c1" src="imagenes/imprimir_r1_c1.jpg" width="104" height="100" border="0" alt=""></td>
    <td><img name="reservas_r1_c2" src="imagenes/reservas_r1_c2.jpg" width="278" height="6" border="0" alt=""></td>
    <td rowspan="3"><img name="reservas_r1_c3" src="imagenes/reservas_r1_c3.jpg" width="7" height="100" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="6" border="0" alt=""></td>
  </tr>
  <tr>
    <td height="87" valign="top"><p align="center"><strong><br>
      Factura Procesada </strong></p>
        <form name="form1" method="post" action="factura.php?&codigo3=<?php echo $codigo; ?>&codigo=<?php echo $codigo; ?>&multi=<?php echo $multi; ?>">

          <div align="center">
            <input type="submit" name="Submit" value="Imprimir Factura" class="botones" />
            <br>
            </p>
            </div>
      </form></td>
    <td><img src="imagenes/spacer.gif" width="1" height="87" border="0" alt=""></td>
  </tr>
  <tr>
    <td><img name="reservas_r3_c2" src="imagenes/reservas_r3_c2.jpg" width="278" height="7" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="7" border="0" alt=""></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
