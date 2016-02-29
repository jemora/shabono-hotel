<?php 	/// conexto externo abasede  datos

require_once('conector/conector.php');?> 
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM caja_creada WHERE id  LIKE '$id'";
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
<title>Activar caja</title>
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
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo15 {color: #000000}
.Estilo20 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<?php 	require_once('css.php');?>
</head>
<body>
<table width="200" border="0" align="center" cellspacing="0">
  <tr>
    <td><img src="imagenes/banne18.gif" width="607" height="30" /></td>
  </tr>
  <tr>
    <td><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="25" valign="top"><table width="560" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="formulario_crear_caja.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo20">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><font face="Verdana">
        <?php $admin1 = $row_Recordset2['opc']; ?>
		<?php $admin2 = $row_Recordset2['ref']; ?>
      <?php $dato = $row_Recordset2['id']; ?>
      </font></td>
  </tr>
  <tr>
    <td height="77"><table width=280 height=18 cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Informaci&ograve;n de la Caja</td>
</tr>
<tr><td><table width="601" border="0" align="center" class="Estilo14">
  <!--DWLayoutTable-->
  <tr>
    <td width="106" bgcolor="#E3E9F1"><strong>Tipo de caja:</strong></td>
    <td bgcolor="#FFFFFF"><?php echo $row_Recordset2['caja']; ?></font></td>
    <td width="112" bgcolor="#E3E9F1"><div align="right"><strong>Estado:</strong></div></td>
    <td width="75" bgcolor="#FFFFFF"><font face="Verdana"><?php echo $row_Recordset2['estado']; ?></font></span></td>
    <td width="75" bgcolor="#FFFFFF"><div align="right"><strong><span class="Estilo15">Autorizar:</span></strong></div></td>
    <td width="100" bgcolor="#FFFFFF"><div align="right">
      <?php if ( $admin1 == '1' )
			  { echo "</a><a href='?id=$id&id4=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin1 == '0' )  { 		   	
		echo "</a><a href='?id=$id&id4=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?>
      <?php				
           if ( $id4  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$opc='0';
$estado='Inactivo';
$sSQL="UPDATE caja_creada SET  opc='$opc', estado='$estado' WHERE id LIKE '$codigo'";
mysql_db_query($database,$sSQL);

echo "Inactivo";
                 } 
else 	  if ( $id4  == 'inactivo' )
			  { require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);

$opc='1';
$estado='Activo';
$sSQL="Update caja_creada Set  
opc='$opc',estado='$estado'
Where id like '$codigo'";
mysql_db_query($database,$sSQL);
echo "Activado" ;
                 } 	

				  ?>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td colspan="5" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="84%" height="18" bgcolor="#FFFFFF" ><div align="right"><strong>Establecer como Caja Principal: </strong></div></td>
        <td width="100" bgcolor="#FFFFFF" ><div align="right">
          <?php if ( $admin2 == '1' )
			  { echo "</a><a href='?id=$id&id4=principal1&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin2 == '0' )  { 		   	
		echo "</a><a href='?id=$id&id4=principal2&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?>
          <?php				
            if ( $id4  == 'principal1' )
			  { require_once('conector/conector.php');
			  mysql_connect($hostname,$username,$password);
$ref='0';
$sSQL="Update caja_creada Set  
ref='$ref'
Where id like '$codigo'";
mysql_db_query($database,$sSQL);

echo "Normal" ;
                 } 	   
		   
		   else 
   
		   if ( $id4  == 'principal2' )
			  { require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
  
			  $usuarios_consulta = mysql_query("SELECT id FROM caja_creada WHERE ref like '1'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {

 echo '<table width="108" border="1" align="center" cellspacing="0" bordercolor="#990000">
<tr> <th width="317" bgcolor="#FFFFCC" scope="col"><p><font face="Arial" color="#990000" size="1">Ya hay una Caja Principal Activada</font></p> </th></tr></table>';
exit;
}	

$ref='1';
$sSQL="Update caja_creada Set  
ref='$ref'
Where id like '$codigo'";
mysql_db_query($database,$sSQL);

echo "Principal" ;
           } 	   

				  ?>
        </div></td>
      </tr>
      <tr>
        <td height="18" colspan="2" bgcolor="#FFFFFF" ><font face="Verdana"><?php echo $row_Recordset2['descripcion']; ?></font></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><strong>Descripcion:</strong></td>
  </tr>
</table></td>
</tr>
</table> </td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
