
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
    <td colspan="4" bgcolor="#7895B0"><span class="Estilo3">Pagos de Facturas segun tipo de Pago </span></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="184" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Efectivo </span></div></td>
    <td width="174" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Cheque</span></div></td>
    <td width="144" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3"> Tarjeta Credito </span></div></td>
    <td width="108" bgcolor="#000000" class="small"><div align="center"><span class="Estilo3">Tarjeta Debito   </span></div></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 

$test_efec = mysql_query("SELECT SUM(efectivo) from facturas ");
$test1_efec = mysql_fetch_row($test_efec);

echo $test1_efec[0]; 

?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 


$test_cheque = mysql_query("SELECT SUM(cheque) from facturas ");
$test1_cheque = mysql_fetch_row($test_cheque);


 echo $test1_cheque[0];  

?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 

$test_credito = mysql_query("SELECT SUM(credito) from facturas ");
$test1_credito = mysql_fetch_row($test_credito);

  
echo $test1_credito[0]; 

?>
    </div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php 	require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 


$test_debito = mysql_query("SELECT SUM(debito) from facturas ");
$test1_debito = mysql_fetch_row($test_debito);


echo  $test1_debito[0];

?>
    </div></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF"><div align="right">
      <hr>
    </div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#B1C3D9"><div align="right"><strong>Total en Pagos </strong></div></td>
    <td bgcolor="#E3E9F1"><div align="center">
      <?php $total_facturas=$test1_efec[0] + $test1_cheque[0] + $test1_credito[0] + $test1_debito[0];
$diferencia=$test1[0] - $total_facturas;
echo $total_facturas; ?>
    </div></td>
  </tr>
</table>
<br>
<br>
</body>
</html>
