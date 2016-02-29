<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 50;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM botones ORDER BY  id ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
 // $all_Recordset2 = mysql_query($query_Recordset2);
//  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
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

<title>lista de tarifas</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
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
.Estilo4 {color: #FFFFFF; font-weight: bold; }
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
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
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="280" height="84" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Botones Registrados</td>
  </tr>
  <tr>
    <td height="53"><table width="600" border="0" align="center" cellspacing="2">
      <tr>
        <td width="82" height="16" bgcolor="#000000" ><span class="Estilo4">Foto</span>
          <div align="left" class="Estilo4" ></div></td>
        <td height="16" colspan="4" bgcolor="#000000" ><span class="Estilo4">Informacion</span></td>
        </tr>
       <?php
			$link=mysql_connect($hostname,$username,$password);
			mysql_select_db($database,$link);
		?>
       
      <?php do { 
		  $ced = $row_Recordset2['cedula'];
		  $resultado = mysql_query("SELECT * FROM imagen_botones WHERE cedula LIKE $ced", $link);
		  $fila = mysql_fetch_array($resultado);
		  ?>
      <tr>
        <td height="28" bgcolor="#E3E9F1" ><img src="<?php echo $fila['ruta']; ?>" width="80" height="80" border="1" align="right";width="359" /></td>
        <td width="455" height="28" bgcolor="#E3E9F1" >Nombre:<?php echo $row_Recordset2['nombre']; ?> <?php echo $row_Recordset2['apellido']; ?><br>
          Cedula: <?php echo $row_Recordset2['cedula']; ?><br>
          Telefono: <?php echo $row_Recordset2['telefono']; ?><br>
          Correo: <?php echo $row_Recordset2['correo']; ?><br>
          Direcci&ograve;n: <?php echo $row_Recordset2['direccion']; ?></td>
        <td width="9" bgcolor="#B1C3D9" c"><div align="center"><font face="Arial" size="1"><a href="actualizar_botones_imagen.php?&amp;codigo=<?php echo $ced; ?>">Actualizar Foto</a><a href="actualizar_botones?&amp;codigo=<?php echo $row_Recordset2['id']; ?>"></a></font></div></td>
        <td width="9" c"><font face="Arial" size="1"><a href="actualizar_botones.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>"><img src="imagenes/edit.gif" alt="Borrar " width="17" height="17" border="0"  /></a></font></td>
        <td width="25" c"><font face="Arial" size="1"><a href="borrar_botones.php?&amp;codigo=<?php echo $row_Recordset2['id']; ?>"><img src="borrar.gif" alt="Borrar " width="24" height="24" border="0" onClick="GP_popupConfirmMsg('&iquest;Est&aacute;s seguro que quieres borrar este Botones?');return document.MM_returnValue" /></a></font></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
<p><br>
</p>
<p>&nbsp;</p>
<p><br></p>
<p></p>
</body>
</html>

