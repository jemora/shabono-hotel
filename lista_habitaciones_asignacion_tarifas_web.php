<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 10000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM hab_tipo_web  ORDER BY nombre_tipo";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  //$totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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
.Estilo2 {color: #FFFFFF}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>

<?php 	require_once('css.php');?>
</head>

<body>
<p align="center"><br>
<?php						 
          	
           if ( $id3  == 'borrar' )
			  { 
			  
				if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From hab_tipo_web   Where id like '$codigo'";
mysql_query($sSQL);
				 echo "<div align='center'><strong><br />
Tarifa Eliminada Correctamente</strong></div>";	
				
                 } 
							
		 ?></p>
<table width=175 height=51 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="estilocelda">Habitaciones Con tarifas Asignadas</td>
  </tr>
  <tr>
    <td height="20"><table width="165" border="0" align="center" cellpadding="0" cellspacing="2" class="tabla">
      <!--DWLayoutTable-->
      <tr valign="middle" > </tr>
    </table>
        <table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
          <tr>
            <td width="50" height="16" bgcolor="#000000" ><div align="left" class="Estilo2" >Ref</div></td>
            <td height="16" bgcolor="#000000" ><span class="Estilo2" >Tipo de Habitaciòn</span></td>
            <td height="16" bgcolor="#000000" ><div align="left" class="Estilo2" >Tarifa aplicada </div></td>
            <td height="16" bgcolor="#000000" ><span class="Estilo2">Precio</span></td>
            <td height="16" bgcolor="#000000" >&nbsp;</td>
          </tr>
          <?php do { ?>
          <tr>
            <td width="50" height="26" bgcolor="#CCD8E6" ><span ><?php echo $row_Recordset2['id']; ?></span></td>
            <td width="89" bgcolor="#CCD8E6" ><div align="left"><span ><?php echo $row_Recordset2['nombre_tipo']; ?></span></div></td>
            <td width="164" bgcolor="#CCD8E6" ><div align="left" ><?php echo $row_Recordset2['tipo_tarifa']; ?></div></td>
            <td bgcolor="#CCD8E6" ><?php echo $row_Recordset2['precio']; ?></td>
            <td width="44" c"><div align="center"><font face="Arial" size="1"><a href="?&amp;id3=borrar&amp;codigo2=<?php echo $row_Recordset2['id_hab']; ?>&amp;codigo=<?php echo $row_Recordset2['id']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar esta Habitacion?');return document.MM_returnValue" /></a></font></div></td>
          </tr>
          <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><br></p>
<p></p>
</body>
</html>

