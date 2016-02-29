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


<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo3 {
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
<?php				
           if ( $id1  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$num_factura='0';
$sSQL="Update  facturas_configurar Set  num_factura='$num_factura' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id1 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$num_factura='1';
$sSQL="Update  facturas_configurar Set  num_factura='$num_factura' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 
				 if ( $id2  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ref='0';
$sSQL="Update  facturas_configurar Set  ref='$ref' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id2 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ref='1';
$sSQL="Update  facturas_configurar Set  ref='$ref' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 
				 
				 
				 	 if ( $id3  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$hotel='0';
$sSQL="Update  facturas_configurar Set  hotel='$hotel' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id3 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$hotel='1';
$sSQL="Update  facturas_configurar Set  hotel='$hotel' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 
				 
				 	 if ( $id4  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nombre='0';
$sSQL="Update  facturas_configurar Set  nombre='$nombre' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id4 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nombre='1';
$sSQL="Update  facturas_configurar Set  nombre='$nombre' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 	 if ( $id5  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$rif='0';
$sSQL="Update  facturas_configurar Set  rif='$rif' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id5 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$rif='1';
$sSQL="Update  facturas_configurar Set  rif='$rif' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 	 	 if ( $id6  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$correo='0';
$sSQL="Update  facturas_configurar Set  correo='$correo' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id6 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$correo='1';
$sSQL="Update  facturas_configurar Set  correo='$correo' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 		 	 	 if ( $id7 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$telefono2='0';
$sSQL="Update  facturas_configurar Set  telefono2='$telefono2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id7 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$telefono2='1';
$sSQL="Update  facturas_configurar Set  telefono2='$telefono2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 
				 	 	 	 if ( $id8 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$direccion2='0';
$sSQL="Update  facturas_configurar Set  direccion2='$direccion2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id8 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$direccion2='1';
$sSQL="Update  facturas_configurar Set  direccion2='$direccion2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 	 	 	 if ( $id9 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$empresa='0';
$sSQL="Update  facturas_configurar Set  empresa='$empresa' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id9 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$empresa='1';
$sSQL="Update  facturas_configurar Set  empresa='$empresa' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }

				 
				 
				 
				  	 	 if ( $id10 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$observaciones='0';
$sSQL="Update  facturas_configurar Set  observaciones='$observaciones' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id10 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$observaciones='1';
$sSQL="Update  facturas_configurar Set  observaciones='$observaciones' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				  	 	 if ( $id11 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$cliente='0';
$sSQL="Update  facturas_configurar Set  cliente='$cliente' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id11 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$cliente='1';
$sSQL="Update  facturas_configurar Set  cliente='$cliente' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				   	 	 if ( $id12 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nombre2='0';
$sSQL="Update  facturas_configurar Set  nombre2='$nombre2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id12 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nombre2='1';
$sSQL="Update  facturas_configurar Set  nombre2='$nombre2' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 	   	 	 if ( $id13 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$direccion='0';
$sSQL="Update  facturas_configurar Set  direccion='$direccion' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id13 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$direccion='1';
$sSQL="Update  facturas_configurar Set  direccion='$direccion' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				  	   	 	 if ( $id14 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$razon='0';
$sSQL="Update  facturas_configurar Set  razon='$razon' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id14 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$razon='1';
$sSQL="Update  facturas_configurar Set  razon='$razon' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 	   	 	 if ( $id15 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$telefono='0';
$sSQL="Update  facturas_configurar Set  telefono='$telefono' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id15 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$telefono='1';
$sSQL="Update  facturas_configurar Set  telefono='$telefono' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 	 	 if ( $id16 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$pais='0';
$sSQL="Update  facturas_configurar Set  pais='$pais' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id16 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$pais='1';
$sSQL="Update  facturas_configurar Set  pais='$pais' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 
				 
				 
				 	 	 if ( $id17 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ciudad='0';
$sSQL="Update  facturas_configurar Set  ciudad='$ciudad' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id17 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ciudad='1';
$sSQL="Update  facturas_configurar Set  ciudad='$ciudad' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 	 if ( $id18 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$iva_apro='0';
$sSQL="Update  facturas_configurar Set iva_apro='$iva_apro' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id18 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$iva_apro='1';
$sSQL="Update  facturas_configurar Set iva_apro='$iva_apro' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 	 if ( $id19 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nota_credito_apro='0';
$sSQL="Update  facturas_configurar Set nota_credito_apro='$nota_credito_apro' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id19 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$nota_credito_apro='1';
$sSQL="Update  facturas_configurar Set nota_credito_apro='$nota_credito_apro' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				 
				 
				 
				 
				 	 if ( $id20 == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$pie_factura='0';
$sSQL="Update  facturas_configurar Set pie_factura='$pie_factura' Where opc='1'";
mysql_db_query($database,$sSQL);

                 } 
				 else
				  if ( $id20 == 'inactivo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$pie_factura='1';
$sSQL="Update  facturas_configurar Set pie_factura='$pie_factura' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }
				  ?>

<?php include("permisos_factura.php");?>


</body>
</html>

