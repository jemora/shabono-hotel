<?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultcaja = mysql_query("SELECT * FROM empresas ");


?>





<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset3 = 9000;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database, $connFlashblog);
$query_Recordset3 = "SELECT * FROM empresas";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $connFlashblog) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset3 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;

$queryString_Recordset3 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset3") == false && 
        stristr($param, "totalRows_Recordset3") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset3 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset3 = sprintf("&totalRows_Recordset3=%d%s", $totalRows_Recordset3, $queryString_Recordset3);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es"><head>

	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		
		<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
-->
        </style>
		</head>
<body onload="" leftmargin="5" topmargin="0" background="" marginheight="1" marginwidth="5">
		<script>
function fSelecciona(Imagen)
 {
 
  window.opener.document.form1.<?php echo $txtImagen?>.value=Imagen.value;
  //Cierra el popup
  window.close();
 }
</script>
<form name="form_pop" method="post">
  <table class="tabla_consulta" align="left" border="0" cellpadding="2" cellspacing="1" width="619">
    <tbody>
      <tr>
        <td width="613" align="center" class="contenido_td"><table width=600 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
            <tr>
              <td class="estilocelda">Empresas registradas </td>
            </tr>
            <tr>
              <td><table width="601" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
                  <tr>
                    <td height="8" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo3"></div></td>
                    <td height="8" bgcolor="#000000" ><span class="Estilo4">Empresa</span></td>
                    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo4">Rif</span></td>
                    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo4">Telefono </span></td>
                    <td width="50" height="8" bgcolor="#000000" ><span class="Estilo4">Correo</span></td>
                  </tr>
                  <?php do { ?>
                  <tr>
                    <td width="20" height="21" ><input name="r_niv_edu" value="<?php echo $row_Recordset3['empresa']; ?>" type="radio" onClick="fSelecciona(this)"></td>
                    <td width="61" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset3['empresa']; ?></span></td>
                    <td width="50" bgcolor="#E3E9F1" ><div align="left"><span class="Estilo1"><?php echo $row_Recordset3['rif']; ?></span></div></td>
                    <td width="50" bgcolor="#E3E9F1" ><div align="left" class="Estilo1"><?php echo $row_Recordset3['telefono']; ?></div></td>
                    <td width="50" bgcolor="#E3E9F1" ><span class="Estilo1"><?php echo $row_Recordset3['correo']; ?></span></td>
                  </tr>
                  <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </tbody>
  </table>
  <script language="JavaScript1.2" type="text/javascript" charset="UTF-8"></script>
</form>
		
</body></html>