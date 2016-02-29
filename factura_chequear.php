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
$query_Recordset_responsable = "SELECT * from facturas  WHERE codigo LIKE '$codigo3'";
$query_limit_Recordset_responsable = sprintf("%s LIMIT %d, %d", $query_Recordset_responsable, $startRow_Recordset_responsable, $maxRows_Recordset_responsable);
$Recordset_responsable = mysql_query($query_limit_Recordset_responsable, $connFlashblog) or die(mysql_error());
$row_Recordset_responsable = mysql_fetch_assoc($Recordset_responsable);

if (isset($_GET['totalRows_Recordset_responsable'])) {
  $totalRows_Recordset_responsable = $_GET['totalRows_Recordset_responsable'];
} else {
  //$all_Recordset_responsable = mysql_query($query_Recordset_responsable);
  //$totalRows_Recordset_responsable = mysql_num_rows($all_Recordset_responsable);
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
$query_Recordset_consecutivo = "SELECT * from habitacion2  WHERE id LIKE '$codigo3'";
$query_limit_Recordset_consecutivo = sprintf("%s LIMIT %d, %d", $query_Recordset_consecutivo, $startRow_Recordset_consecutivo, $maxRows_Recordset_consecutivo);
$Recordset_consecutivo = mysql_query($query_limit_Recordset_consecutivo, $connFlashblog) or die(mysql_error());
$row_Recordset_consecutivo = mysql_fetch_assoc($Recordset_consecutivo);

if (isset($_GET['totalRows_Recordset_consecutivo'])) {
  $totalRows_Recordset_consecutivo = $_GET['totalRows_Recordset_consecutivo'];
} else {
  //$all_Recordset_consecutivo = mysql_query($query_Recordset_consecutivo);
  //$totalRows_Recordset_consecutivo = mysql_num_rows($all_Recordset_consecutivo);
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

$maxRows_Recordset2ae = 20000;
$pageNum_Recordset2ae = 0;
if (isset($_GET['pageNum_Recordset2ae'])) {
  $pageNum_Recordset2ae = $_GET['pageNum_Recordset2ae'];
}
$startRow_Recordset2ae = $pageNum_Recordset2ae * $maxRows_Recordset2ae;

mysql_select_db($database, $connFlashblog);
$query_Recordset2ae = "SELECT * FROM facturas_configurar WHERE opc LIKE '1'";
$query_limit_Recordset2ae = sprintf("%s LIMIT %d, %d", $query_Recordset2ae, $startRow_Recordset2ae, $maxRows_Recordset2ae);
$Recordset2ae = mysql_query($query_limit_Recordset2ae, $connFlashblog) or die(mysql_error());
$row_Recordset2ae = mysql_fetch_assoc($Recordset2ae);

if (isset($_GET['totalRows_Recordset2ae'])) {
  $totalRows_Recordset2ae = $_GET['totalRows_Recordset2ae'];
} else {
  //$all_Recordset2ae = mysql_query($query_Recordset2ae);
  //$totalRows_Recordset2ae = mysql_num_rows($all_Recordset2ae);
}
$totalPages_Recordset2ae = ceil($totalRows_Recordset2ae/$maxRows_Recordset2ae)-1;

$queryString_Recordset2ae = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2ae") == false && 
        stristr($param, "totalRows_Recordset2ae") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2ae = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2ae = sprintf("&totalRows_Recordset2ae=%d%s", $totalRows_Recordset2ae, $queryString_Recordset2ae);
?>

				  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset22ae = 20000;
$pageNum_Recordset22ae = 0;
if (isset($_GET['pageNum_Recordset22ae'])) {
  $pageNum_Recordset22ae = $_GET['pageNum_Recordset22ae'];
}
$startRow_Recordset22ae = $pageNum_Recordset22ae * $maxRows_Recordset22ae;

mysql_select_db($database, $connFlashblog);
$query_Recordset22ae = "SELECT * FROM facturas_configurar WHERE opc LIKE '1'";
$query_limit_Recordset22ae = sprintf("%s LIMIT %d, %d", $query_Recordset22ae, $startRow_Recordset22ae, $maxRows_Recordset22ae);
$Recordset22ae = mysql_query($query_limit_Recordset22ae, $connFlashblog) or die(mysql_error());
$row_Recordset22ae = mysql_fetch_assoc($Recordset22ae);

if (isset($_GET['totalRows_Recordset22ae'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset22ae'];
} else {
  //$all_Recordset22ae = mysql_query($query_Recordset22ae);
  //$totalRows_Recordset22ae = mysql_num_rows($all_Recordset22ae);
}
$totalPages_Recordset22ae = ceil($totalRows_Recordset2/$maxRows_Recordset22ae)-1;

$queryString_Recordset22ae = "";
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
    $queryString_Recordset22ae = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset22ae = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset22ae, $queryString_Recordset22ae);
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
</head>

<body>
<table width="<?php echo $row_Recordset2['ancho']; ?>" height="<?php echo $row_Recordset2['alto']; ?>" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="<?php echo $row_Recordset2['ancho']; ?>" height="<?php echo $row_Recordset2['alto']; ?>" border="0" cellspacing="0">
      <tr>
        <td colspan="2"><?php $dato= $row_Recordset22ae['ref']; ?>          <?php		
				 if ( $dato == '1' )
			  {   include("logo_membrete.php");   } 
		
               

				 
		 ?>         </td>
      </tr>
      <tr>
        <td rowspan="2"><?php $dato2= $row_Recordset22ae['hotel']; ?>
          <?php		
				 if ( $dato2 == '1' )
			  {   include("hotel_datos.php");   } 
		
               

				 
		 ?></td>
        <td><div align="left" class="Estilo4"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><?php $dato1= $row_Recordset22ae['cliente']; ?>
          <?php		
				 if ( $dato1 == '1' )
			  {   include("cliente_datos2.php");   } 
		
               

				 
		 ?><br /></td>
      </tr>

    </table></td>
  </tr>
</table>
</body>
</html>
</DIV>
