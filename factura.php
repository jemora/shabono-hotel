<?php 	require_once('conector/conector.php');?>

<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset_responsable = 100;
$pageNum_Recordset_responsable = 0;
if (isset($_GET['pageNum_Recordset_responsable'])) {
  $pageNum_Recordset_responsable = $_GET['pageNum_Recordset_responsable'];
}
$startRow_Recordset_responsable = $pageNum_Recordset_responsable * $maxRows_Recordset_responsable;

mysql_select_db($database, $connFlashblog);
$query_Recordset_responsable = "SELECT * from facturas  WHERE multi LIKE '$multi'";
$query_limit_Recordset_responsable = sprintf("%s LIMIT %d, %d", $query_Recordset_responsable, $startRow_Recordset_responsable, $maxRows_Recordset_responsable);
$Recordset_responsable = mysql_query($query_limit_Recordset_responsable, $connFlashblog) or die(mysql_error());
$row_Recordset_responsable = mysql_fetch_assoc($Recordset_responsable);

if (isset($_GET['totalRows_Recordset_responsable'])) {
  $totalRows_Recordset_responsable = $_GET['totalRows_Recordset_responsable'];
} else {
  $all_Recordset_responsable = mysql_query($query_Recordset_responsable);
  $totalRows_Recordset_responsable = mysql_num_rows($all_Recordset_responsable);
}
$totalPages_Recordset_responsable = ceil($totalRows_Recordset_responsable/$maxRows_Recordset_responsable)-1;

$queryString_Recordset_responsable = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset_responsable") == false && 
        stristr($param, "totalRows_Recordset_responsable") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset_responsable = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset_responsable = sprintf("&totalRows_Recordset_responsable=%d%s", $totalRows_Recordset_responsable, $queryString_Recordset_responsable);
?>



<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset_consecutivo = 100;
$pageNum_Recordset_consecutivo = 0;
if (isset($_GET['pageNum_Recordset_consecutivo'])) {
  $pageNum_Recordset_consecutivo = $_GET['pageNum_Recordset_consecutivo'];
}
$startRow_Recordset_consecutivo = $pageNum_Recordset_consecutivo * $maxRows_Recordset_consecutivo;

mysql_select_db($database, $connFlashblog);
$query_Recordset_consecutivo = "SELECT * from habitacion2  WHERE multi LIKE '$multi'";
$query_limit_Recordset_consecutivo = sprintf("%s LIMIT %d, %d", $query_Recordset_consecutivo, $startRow_Recordset_consecutivo, $maxRows_Recordset_consecutivo);
$Recordset_consecutivo = mysql_query($query_limit_Recordset_consecutivo, $connFlashblog) or die(mysql_error());
$row_Recordset_consecutivo = mysql_fetch_assoc($Recordset_consecutivo);

if (isset($_GET['totalRows_Recordset_consecutivo'])) {
  $totalRows_Recordset_consecutivo = $_GET['totalRows_Recordset_consecutivo'];
} else {
  $all_Recordset_consecutivo = mysql_query($query_Recordset_consecutivo);
  $totalRows_Recordset_consecutivo = mysql_num_rows($all_Recordset_consecutivo);
}
$totalPages_Recordset_consecutivo = ceil($totalRows_Recordset_consecutivo/$maxRows_Recordset_consecutivo)-1;

$queryString_Recordset_consecutivo = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset_consecutivo") == false && 
        stristr($param, "totalRows_Recordset_consecutivo") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset_consecutivo = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset_consecutivo = sprintf("&totalRows_Recordset_consecutivo=%d%s", $totalRows_Recordset_consecutivo, $queryString_Recordset_consecutivo);
?>







<?php 	require_once('conector/conector.php');?>
 <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;

if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM facturas_configurar WHERE opc LIKE '1'";
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
<?php include('imprimir.php'); ?>
<DIV ID="seleccion">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo4 {
	font-size: 14px;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="<?php echo $row_Recordset2['ancho']; ?>" height="<?php echo $row_Recordset2['alto']; ?>" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="<?php echo $row_Recordset2['ancho']; ?>" height="<?php echo $row_Recordset2['alto']; ?>" border="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php $dato= $row_Recordset22['ref']; ?>          <?php		
				 if ( $dato == '1' )
			  {   include("logo_membrete.php");   } 
		
               

				 
		 ?>         </td>
      </tr>
      <tr>
        <td rowspan="2"><?php $dato2= $row_Recordset22['hotel']; ?>
          <?php		
				 if ( $dato2 == '1' )
			  {   include("hotel_datos.php"); 
			 
			    } 
		
		
		
               

				 
		 ?></td>
        <td><div align="left" class="Estilo4">
          <?php
		  $dato_factura= $row_Recordset22['num_factura'];
  if ( $dato_factura == '1' )
   { echo ' Factura No ';  
   echo $row_Recordset_consecutivo['numero'];   }  
  ?>
        </div></td>
      </tr>
      <tr>
        <td><?php echo '<strong>Fecha:</strong>'; echo date("d-m-Y"); 
echo  '<br />Hora:';
echo date ( "h:i:s" );
?>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><?php $dato1= $row_Recordset22['cliente']; ?>
          <?php		
				 if ( $dato1 == '1' )
			  {   include("cliente_datos.php");   } 
		
               

				 
		 ?>
          <br />
       
          <?php	$dato1_resp= $row_Recordset22['empresa'];	
				 if ( $dato1_resp == '1' )
			  { 
			  echo '<strong>Responsable de Factura:</strong>';
			  echo $row_Recordset_responsable['empresa']; 
			  
			  
			     } 
		
               

				 
		 ?>
<br />
          <?php include("lista_facturas_cancelada2.php");?>
          <br />
          <br />
          <?php include("valores_factura.php");?></td>
      </tr>

    </table></td>
  </tr>
</table>

</body>
</html>
</DIV>
<?php
mysql_free_result($Recordset2);
?>