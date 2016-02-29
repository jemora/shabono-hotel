<?php 	require_once('conector/conector.php');?>
				  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset22 = 20000;
$pageNum_Recordset22 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset22 = $_GET['pageNum_Recordset22'];
}
$startRow_Recordset22 = $pageNum_Recordset22 * $maxRows_Recordset22;

mysql_select_db($database, $connFlashblog);
$query_Recordset22 = "SELECT * FROM facturas_configurar WHERE opc LIKE '0'";
$query_limit_Recordset22 = sprintf("%s LIMIT %d, %d", $query_Recordset22, $startRow_Recordset22, $maxRows_Recordset22);
$Recordset22 = mysql_query($query_limit_Recordset22, $connFlashblog) or die(mysql_error());
$row_Recordset22 = mysql_fetch_assoc($Recordset22);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset22 = $_GET['totalRows_Recordset22'];
} else {
  $all_Recordset22 = mysql_query($query_Recordset22);
  $totalRows_Recordset22 = mysql_num_rows($all_Recordset22);
}
$totalPages_Recordset22 = ceil($totalRows_Recordset22/$maxRows_Recordset22)-1;

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
$queryString_Recordset22 = sprintf("&totalRows_Recordset22=%d%s", $totalRows_Recordset22, $queryString_Recordset22);
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
.Estilo18 {
	font-size: 10px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo21 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
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
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="25" valign="top"><table width="560" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_usuarios.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
        <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="16" colspan="3" bgcolor="#000000" ><table width="0" border="0" cellspacing="0">
        <tr>
          <th scope="col"><span class="Estilo4">Configuración de la Factura: </span></th>
        </tr>
    </table></td>
  </tr>

  <tr>
    <td height="4" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Numero de Factura</span></td>
    <td width="40" c"></a><?php 
	$dato1= $row_Recordset2['num_factura'];
	if ( $dato1 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id1=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato1 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id1=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></font></td>
  </tr>
  <tr>
    <td height="1" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Membrete</span></td>
    <td width="40" c"><?php 
	$dato2= $row_Recordset2['ref'];
	if ( $dato2 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id2=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato2 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id2=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="1" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Ficha Hotel</span></td>
    <td width="40" c"><?php 
	$dato3= $row_Recordset2['hotel'];
	if ( $dato3 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id3=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato3 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id3=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td width="234" height="10" bgcolor="#CBD1D9" ><span class="Estilo3">Mostrar de la ficha Hotel Lo siguiente:</span></td>
    <td width="312" bgcolor="#E3E9F1" ><span class="Estilo3">Nombre</span></td>
    <td width="40" c"><?php 
	$dato4= $row_Recordset2['nombre'];
	if ( $dato4 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id4=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato4 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id4=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="21" bgcolor="#E3E9F1" ><span class="Estilo3">Rif</span></td>
    <td width="40" c"><?php 
	$dato5= $row_Recordset2['rif'];
	if ( $dato5 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id5=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato5 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id5=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="21" bgcolor="#E3E9F1" ><span class="Estilo3">Correo</span></td>
    <td width="40" c"><?php 
	$dato6= $row_Recordset2['correo'];
	if ( $dato6 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id6=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato6 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id6=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="22" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="22" bgcolor="#E3E9F1" ><span class="Estilo3">Telefono</span></td>
    <td width="40" c"><?php 
	$dato7= $row_Recordset2['telefono2'];
	if ( $dato7 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id7=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato7 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id7=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="9" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="15" bgcolor="#E3E9F1" ><span class="Estilo3">Direcci&ograve;n</span></td>
    <td width="40" c"><?php 
	$dato8= $row_Recordset2['direccion2'];
	if ( $dato8 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id8=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato8 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id8=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="11" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Responsable de Factura</span></td>
    <td width="40" c"><?php 
	$dato9= $row_Recordset2['empresa'];
	if ( $dato9 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id9=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato9 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id9=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  
  <tr>
    <td height="4" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Observaciones</span></td>
    <td c"><?php 
	$dato10= $row_Recordset2['observaciones'];
	if ( $dato10 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id10=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato10 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id10=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="4" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Ficha de Cliente</span></td>
    <td c"><?php 
	$dato11= $row_Recordset2['cliente'];
	if ( $dato11 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id11=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato11 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id11=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="11" bgcolor="#CBD1D9" ><span class="Estilo3">Mostrar de la ficha Cliente Lo siguiente:</span></td>
    <td height="11" bgcolor="#E3E9F1" ><span class="Estilo3">Nombre </span></td>
    <td c"><?php 
	$dato12= $row_Recordset2['nombre2'];
	if ( $dato12 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id12=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato12 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id12=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Direcci&ograve;n</span></td>
    <td c"><?php 
	$dato13= $row_Recordset2['direccion'];
	if ( $dato13 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id13=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato13 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id13=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Razon social</span></td>
    <td c"><?php 
	$dato14= $row_Recordset2['razon'];
	if ( $dato14 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id14=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato14 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id14=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Telefono</span></td>
    <td c"><?php 
	$dato15= $row_Recordset2['telefono'];
	if ( $dato15 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id15=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato15 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id15=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="10" bgcolor="#E3E9F1" ><span class="Estilo3">Pais</span></td>
    <td c"><?php 
	$dato16= $row_Recordset2['pais'];
	if ( $dato16 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id16=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato16 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id16=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="11" bgcolor="#FFFFFF" >&nbsp;</td>
    <td height="11" bgcolor="#E3E9F1" ><span class="Estilo3">Ciudad</span></td>
    <td c"><?php 
	$dato17= $row_Recordset2['ciudad'];
	if ( $dato17 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id17=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato17 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id17=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="20" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">IVA</span></td>
    <td c"><?php 
	$dato18= $row_Recordset2['iva_apro'];
	if ( $dato18 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id18=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato18 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id18=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="20" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Anticipos</span></td>
    <td c"><?php 
	$dato19= $row_Recordset2['nota_credito_apro'];
	if ( $dato19 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id19=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato19 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id19=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="20" colspan="2" bgcolor="#CBD1D9" ><span class="Estilo3">Nota pie de pagina</span></td>
    <td c"><?php 
	$dato20= $row_Recordset2['pie_factura'];
	if ( $dato20 == '1' )
			  { echo "</a><a href='actualizar_permisos_factura.php?&id20=activo'><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $dato20 == '0' )  { 		   	
		echo "</a><a href='actualizar_permisos_factura.php?&id20=inactivo'><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
</table>

<br>
<table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="20" colspan="6" bgcolor="#7794AE" ><span class="Estilo18">Factura Propiedades </span></td>
  </tr>
  <tr>
    <td height="20" bgcolor="#CBD1D9" ><span class="Estilo3">Tama&ntilde;o de Factura </span></td>
    <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Ancho:</span></div></td>
    <td width="50" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo14"><?php echo $row_Recordset2['ancho']; ?></span></div></td>
    <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Largo:</span></div></td>
    <td width="50" height="20" bgcolor="#E3E9F1" ><span class="Estilo14"><?php echo $row_Recordset2['alto']; ?></span></td>
    <td width="50" c"><span class="Estilo21"><a href="?ref=modificar">Modificar</a></span></td>
  </tr>
</table>
<div align="center">
  <?php 

	if ( $ref == 'modificar' )
			  {  echo '<form name="form1" method="post" action="?ref2=actualizar">
  <table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
    <tr>
      <td height="20" colspan="6" bgcolor="#7794AE" ><span class="Estilo18">Actualizar Medidas de Factura </span></td>
    </tr>
    <tr>
      <td height="29" bgcolor="#CBD1D9" ><span class="Estilo3">Tama&ntilde;o de Factura </span></td>
      <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Ancho:</span></div></td>
      <td width="50" bgcolor="#E3E9F1" ><div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
          <input name="ancho" type="text" class="imputbox" id="ancho" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
      </font></b></div></td>
      <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Largo:</span></div></td>
      <td width="50" height="29" bgcolor="#E3E9F1" ><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
        <input name="alto" type="text" class="imputbox" id="alto" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
      </font></b></td>
      <td width="50" >
          <input type="submit" name="Submit" value="Actualizar" class="botones" /></td>
    </tr>
    <tr>
      <td height="14" colspan="6" bgcolor="#B1C3D9" ><div align="right"><span class="Estilo21"><a href="permisos_factura.php">Cerrar</a></span></div></td>
    </tr>
  </table>
</form>';   } 
			  
			  
			  
			  
			  else
				 	
					
					
					 if ( $ref2 == 'actualizar' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$sSQL="Update  facturas_configurar Set ancho='$ancho',alto='$alto' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }   
			  
			  
			  
			  
			  
			  ?></div>
<table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="20" bgcolor="#CBD1D9" ><span class="Estilo3">Tama&ntilde;o de Membrete </span></td>
    <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Ancho:</span></div></td>
    <td width="50" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo14"><?php echo $row_Recordset22['ancho']; ?></span></div></td>
    <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Largo:</span></div></td>
    <td width="50" height="20" bgcolor="#E3E9F1" ><span class="Estilo14"><?php echo $row_Recordset22['alto']; ?></span></td>
    <td width="50" c"><span class="Estilo21"><a href="?ref3=modificar">Modificar</a></span></td>
  </tr>
</table>
<div align="center"><br>
  <?php 

	if ( $ref3 == 'modificar' )
			  {  echo '<form name="form1" method="post" action="?ref3=actualizar">
  <table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
    <tr>
      <td height="20" colspan="6" bgcolor="#7794AE" ><span class="Estilo18">Actualizar Medidas de Membrete </span></td>
    </tr>
    <tr>
      <td height="29" bgcolor="#CBD1D9" ><span class="Estilo3">Tama&ntilde;o de Membrete </span></td>
      <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Ancho:</span></div></td>
      <td width="50" bgcolor="#E3E9F1" ><div align="center"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
          <input name="ancho" type="text" class="imputbox" id="ancho" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
      </font></b></div></td>
      <td width="50" bgcolor="#CBD1D9" ><div align="right"><span class="Estilo21">Largo:</span></div></td>
      <td width="50" height="29" bgcolor="#E3E9F1" ><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
        <input name="alto" type="text" class="imputbox" id="alto" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
      </font></b></td>
      <td width="50" >
          <input type="submit" name="Submit" value="Actualizar" class="botones" /></td>
    </tr>
    <tr>
      <td height="14" colspan="6" bgcolor="#B1C3D9" ><div align="right"><span class="Estilo21"><a href="permisos_factura.php">Cerrar</a></span></div></td>
    </tr>
  </table>
</form>';   } 
			  
			  
			  
			  
			  else
				 	
					
					
					 if ( $ref3 == 'actualizar' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$sSQL="Update  facturas_configurar Set ancho='$ancho',alto='$alto' Where opc='0'";
mysql_db_query($database,$sSQL);

                 }   
			  
			  
			  
			  
			  
			  ?>
</div>
<table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
  <tr>
    <td height="20" bgcolor="#CBD1D9" ><span class="Estilo3">Informacion Pie de Factura </span>
    <div align="center"></div>      </td>
    <td width="50" c"><span class="Estilo21"><a href="?ref4=modificar">Modificar</a></span></td>
  </tr>
  <tr>
    <td height="20" bgcolor="#E3E9F1" ><span class="Estilo3"><?php echo $row_Recordset2['pie_factura_info']; ?></span></td>
    <td c">&nbsp;</td>
  
</table>

<p align="center">
  <?php 

	if ( $ref4 == 'modificar' )
			  {  echo '<form name="form1" method="post" action="?ref4=actualizar">
  <table width="600" border="0" align="center" cellspacing="2" bordercolor="#CCCCCC">
    <tr>
      <td height="20" colspan="2" bgcolor="#7794AE" ><span class="Estilo18">Actualizar Informaci&ograve;n Nota Pie de factura </span></td>
    </tr>
    <tr>
      <td width="518" height="29" bgcolor="#CBD1D9" ><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
        <textarea name="pie_factura_info" cols="50" rows="5" class="imputbox" id="pie_factura_info" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
      </font></b></td>
      <td width="72" >
          <input type="submit" name="Submit" value="Actualizar" class="botones" /></td>
    </tr>
    <tr>
      <td height="14" colspan="2" bgcolor="#B1C3D9" ><div align="right"><span class="Estilo21"><a href="permisos_factura.php">Cerrar</a></span></div></td>
    </tr>
  </table>
</form>
';   } 
			  
			  
			  
			  
			  else
				 	
					
					
					 if ( $ref4 == 'actualizar' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$sSQL="Update  facturas_configurar Set pie_factura_info='$pie_factura_info' Where opc='1'";
mysql_db_query($database,$sSQL);

                 }   
			  
			  
			  
			  
			  
			  ?>
</p>
<p></p>
</body>
</html>

