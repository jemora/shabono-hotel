
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="628" border="0" cellspacing="2">
  <tr>
    <td colspan="4" bgcolor="#7895B0"><span class="Estilo3">Informacion</span></td>
  </tr>
  <tr>
    <td width="184" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Clientes Registrados </span></div></td>
    <td width="174" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Habitaciones Registradas </span></div></td>
    <td width="144" bgcolor="#000000" class="small"><div align="center"></div></td>
    <td width="108" bgcolor="#000000" class="small">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11_clie = mysql_query("SELECT COUNT(*) from clientes ");
$test1_clie = mysql_fetch_row($test11_clie);
echo $test1_clie[0]; ?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11_hab = mysql_query("SELECT COUNT(*) from habitacion  ");
$test1_hab = mysql_fetch_row($test11_hab);
echo $test1_hab[0]; ?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center"></div></td>
    <td bgcolor="#E3E9F1"><div align="center"></div></td>
  </tr>
</table>
<br>
<table width="628" border="0" cellspacing="2">
  <tr>
    <td colspan="4" bgcolor="#7895B0"><span class="Estilo3">Facturas</span></td>
  </tr>
  <tr>
    <td width="184" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Total en facturas Emitidas </span></div></td>
    <td width="174" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Total en Facturas pagas </span></div></td>
    <td width="144" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3"> Diferencias </span></div></td>
    <td width="108" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Facturas Emitdas  </span></div></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="center"><?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT SUM(total) from facturas ");
$test1 = mysql_fetch_row($test11a);
echo $test1[0]; ?></div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 

$test_efec = mysql_query("SELECT SUM(efectivo) from facturas ");
$test1_efec = mysql_fetch_row($test_efec);


$test_cheque = mysql_query("SELECT SUM(cheque) from facturas ");
$test1_cheque = mysql_fetch_row($test_cheque);


$test_credito = mysql_query("SELECT SUM(credito) from facturas ");
$test1_credito = mysql_fetch_row($test_credito);


$test_debito = mysql_query("SELECT SUM(debito) from facturas ");
$test1_debito = mysql_fetch_row($test_debito);


$total_facturas=$test1_efec[0] + $test1_cheque[0] + $test1_credito[0] + $test1_debito[0];
$diferencia=$test1[0] - $total_facturas;
echo $total_facturas; 

?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center"><?php echo $diferencia; ?></div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php  
	   require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test113a = mysql_query("SELECT COUNT(*) from facturas  ");
$test13 = mysql_fetch_row($test113a);
echo $test13[0];

?>
    </div></td>
  </tr>
</table>
<br>
<?php include('reportes_tipos_pagos.php'); ?>
<br>
</body>
</html>
