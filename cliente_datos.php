<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset245 = 2450000;
$pageNum_Recordset245 = 0;
if (isset($_GET['pageNum_Recordset245'])) {
  $pageNum_Recordset245 = $_GET['pageNum_Recordset245'];
}
$startRow_Recordset245 = $pageNum_Recordset245 * $maxRows_Recordset245;

mysql_select_db($database, $connFlashblog);
$query_Recordset245 = "SELECT * from clientes  WHERE doc2 LIKE '$codigo'";
$query_limit_Recordset245 = sprintf("%s LIMIT %d, %d", $query_Recordset245, $startRow_Recordset245, $maxRows_Recordset245);
$Recordset245 = mysql_query($query_limit_Recordset245, $connFlashblog) or die(mysql_error());
$row_Recordset245 = mysql_fetch_assoc($Recordset245);

if (isset($_GET['totalRows_Recordset245'])) {
  $totalRows_Recordset245 = $_GET['totalRows_Recordset245'];
} else {
  $all_Recordset245 = mysql_query($query_Recordset245);
  $totalRows_Recordset245 = mysql_num_rows($all_Recordset245);
}
$totalPages_Recordset245 = ceil($totalRows_Recordset245/$maxRows_Recordset245)-1;

$queryString_Recordset245 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset245") == false && 
        stristr($param, "totalRows_Recordset245") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset245 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset245 = sprintf("&totalRows_Recordset245=%d%s", $totalRows_Recordset245, $queryString_Recordset245);
?>
<head>

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
</head>

<body>
<table width="<?php echo $row_Recordset2['ancho']; ?>" border="0" cellspacing="2">
  
  <?php $dato_clie= $row_Recordset22['cliente']; ?> 
   <?php
  if ( $dato_clie == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Cliente:</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['nombre'];  echo $row_Recordset245['apellido']; 
	echo '</td>  </tr>';  }  
  ?>
  
  <?php $dato_dir= $row_Recordset22['direccion']; ?> 
   <?php
  if ( $dato_dir == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Direcci&ograve;n:</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['direccion']; 
	echo '</td>  </tr>';  }  
  ?>
  
    <?php $dato_raz= $row_Recordset22['razon']; ?> 
   <?php
  if ( $dato_raz == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Razon Social</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['doc2']; 
	echo '</td>  </tr>';  }  
  ?>
  
  <?php $dato_tel= $row_Recordset22['telefono']; ?> 
   <?php
  if ( $dato_tel == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Telefono:</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['telefono']; 
	echo '</td>  </tr>';  }  
  ?>

   <?php $dato_pais= $row_Recordset22['pais']; ?> 
   <?php
  if ( $dato_pais == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Pais:</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['pais']; 
	echo '</td>  </tr>';  }  
  ?>
   <?php $dato_ciudad= $row_Recordset22['ciudad']; ?> 
   <?php
  if ( $dato_ciudad == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#B1C3D9"><strong>Ciudad:</strong></td>
    <td width="317" bgcolor="#E3E9F1">'; echo $row_Recordset245['ciudad']; 
	echo '</td>  </tr>';  }  
  ?>
  
  </table>

</body>
</html>
<?php
mysql_free_result($Recordset245);
?>
