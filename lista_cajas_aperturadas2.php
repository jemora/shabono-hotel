<?php 	require_once('conector/conector.php');?>
<?php				
           if ( $id4  == 'caja' )
			  {     require_once('conector/conector.php');
			  
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11b = mysql_query("SELECT SUM(monto) from caja_gastos WHERE ref LIKE '$dato'");
$test1d = mysql_fetch_row($test11b);

$test1d[0];  
			  
			  
mysql_connect($hostname,$username,$password);
$opc='1';
$monto2=$test1d[0]; 
$sSQL="UPDATE caja SET  opc='$opc', monto2='$monto2' WHERE id LIKE '$dato'";
mysql_db_query($database,$sSQL);

$sSQL="UPDATE caja_gastos SET  opc='$opc' WHERE ref LIKE '$dato'";
mysql_db_query($database,$sSQL);
                 } 
 		   
				  ?>
				  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM caja WHERE opc LIKE '0' AND ref LIKE '0'";
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
.Estilo2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
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

<body>
<table width=280 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Cajas Aperturadas</td>
</tr>
<tr><td><table width="602" border="0" align="center" cellspacing="2" bordercolor="#000000">
  <tr>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3">Tipo de Caja</div></td>
    <td width="197" height="16" bgcolor="#000000" ><span class="Estilo4">Monto de Apertura </span></td>
    <td height="16" bgcolor="#000000" ><div align="left" class="Estilo4">Gastos Generados </div></td>
    <td width="97" height="16" bgcolor="#FFFFFF"><div align="center"></div></td>
  </tr>
  <?php do { ?>
  <tr>
    <td width="150" height="22" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['tipo']; ?></span></td>
    <td bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset2['monto1']; ?></span>
        <div align="left" class="Estilo1"></div></td>
    <td width="153" bgcolor="#E3E9F1" ><div align="center" class="Estilo1">
      <?php	 $dato=$row_Recordset2['id']; 	 require('detalles_monto_caja.php');	 	 ?>
    </div></td>
    <td c"><div align="center"><a href="?&id4=caja&dato=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/cerrar_caja.jpg" alt="eliminar" width="88" height="20" border="0"></a></div>
        <div align="center"><a href="actualizar_clientes_datos.php?&codigo=<?php echo $row_Recordset2['ID']; ?>" class="Estilo1"></a> <a href="borrar_caja_creada.php?&codigo=<?php echo $row_Recordset2['id']; ?>"></a></div></td>
  </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table></td></tr>
</table> 
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
