<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2456 = 3000;
$pageNum_Recordset2456 = 0;
if (isset($_GET['pageNum_Recordset2456'])) {
  $pageNum_Recordset2456 = $_GET['pageNum_Recordset2456'];
}
$startRow_Recordset2456 = $pageNum_Recordset2456 * $maxRows_Recordset2456;

mysql_select_db($database, $connFlashblog);
$query_Recordset2456 = "SELECT * from informacion  WHERE cod LIKE '0'";
$query_limit_Recordset2456 = sprintf("%s LIMIT %d, %d", $query_Recordset2456, $startRow_Recordset2456, $maxRows_Recordset2456);
$Recordset2456 = mysql_query($query_limit_Recordset2456, $connFlashblog) or die(mysql_error());
$row_Recordset2456 = mysql_fetch_assoc($Recordset2456);

if (isset($_GET['totalRows_Recordset2456'])) {
  $totalRows_Recordset2456 = $_GET['totalRows_Recordset2456'];
} else {
  $all_Recordset2456 = mysql_query($query_Recordset2456);
  $totalRows_Recordset2456 = mysql_num_rows($all_Recordset2456);
}
$totalPages_Recordset2456 = ceil($totalRows_Recordset2456/$maxRows_Recordset2456)-1;

$queryString_Recordset2456 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2456") == false && 
        stristr($param, "totalRows_Recordset2456") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2456 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2456 = sprintf("&totalRows_Recordset2456=%d%s", $totalRows_Recordset2456, $queryString_Recordset2456);
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
<table width="0" border="0" cellspacing="0">
  
  <?php $dato_nom= $row_Recordset22['nombre2']; ?> 
   <?php
  if ( $dato_nom == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#FFFFFF"><strong>Nombre:</strong></td>
    <td width="317" bgcolor="#FFFFFF">'; echo $row_Recordset2456['nombre'];  echo $row_Recordset2456['apellido']; 
	echo '</td>  </tr>';  }  
  ?>
  
  <?php $dato_rif= $row_Recordset22['rif']; ?> 
   <?php
  if ( $dato_rif == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#FFFFFF"><strong>Rif:</strong></td>
    <td width="317" bgcolor="#FFFFFF">'; echo $row_Recordset2456['rif']; 
	echo '</td>  </tr>';  }  
  ?>
  
    <?php $dato_correo= $row_Recordset22['correo']; ?> 
   <?php
  if ( $dato_correo == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#FFFFFF"><strong>Correo:</strong></td>
    <td width="317" bgcolor="#FFFFFF">'; echo $row_Recordset2456['correo']; 
	echo '</td>  </tr>';  }  
  ?>
  
  <?php $dato_tel2= $row_Recordset22['telefono2']; ?> 
   <?php
  if ( $dato_tel2 == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#FFFFFF"><strong>Telefono:</strong></td>
    <td width="317" bgcolor="#FFFFFF">'; echo $row_Recordset2456['telefono']; 
	echo '</td>  </tr>';  }  
  ?>

   <?php $dato_dir= $row_Recordset22['direccion2']; ?> 
   <?php
  if ( $dato_dir == '1' )
   { echo '<tr>
    <td width="92" bgcolor="#FFFFFF"><strong>Direccion:</strong></td>
    <td width="317" bgcolor="#FFFFFF">'; echo $row_Recordset2456['direccion']; 
	echo '</td>  </tr>';  }  
  ?>
   
  
</table>

</body>
</html>
<?php
mysql_free_result($Recordset2456);
?>
