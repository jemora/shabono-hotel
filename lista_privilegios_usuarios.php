<?php 	require_once('conector/conector.php'); 


if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result1 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result6 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result7 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result8 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result9 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result10 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result11 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result12 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");





?>

<?php  while ($row=mysql_fetch_array($result)) { $dato= "".$row["ID"].""; }
mysql_free_result($result)?>

<?php  while ($row=mysql_fetch_array($result1)) { $admin1= "".$row["ver_cal"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $admin2= "".$row["asi_hab"].""; }
mysql_free_result($result2)?>
<?php  while ($row=mysql_fetch_array($result3)) { $admin3= "".$row["eli_hab"].""; }
mysql_free_result($result3)?>
<?php  while ($row=mysql_fetch_array($result4)) { $admin4= "".$row["ag_cli"].""; }
mysql_free_result($result4)?>
<?php  while ($row=mysql_fetch_array($result5)) { $admin5= "".$row["bus_cli"].""; }
mysql_free_result($result5)?>
<?php  while ($row=mysql_fetch_array($result6)) { $admin6= "".$row["eli_cli"].""; }
mysql_free_result($result6)?>
<?php  while ($row=mysql_fetch_array($result7)) { $admin7= "".$row["mod_cli"].""; }
mysql_free_result($result7)?>
<?php  while ($row=mysql_fetch_array($result8)) { $admin8= "".$row["fact"].""; }
mysql_free_result($result8)?>
<?php  while ($row=mysql_fetch_array($result9)) { $admin9= "".$row["asi_con"].""; }
mysql_free_result($result9)?>
<?php  while ($row=mysql_fetch_array($result10)) { $admin10= "".$row["asi_hab"].""; }
mysql_free_result($result10)?>
<?php  while ($row=mysql_fetch_array($result11)) { $admin11= "".$row["asi_hab"].""; }
mysql_free_result($result11)?>
<?php  while ($row=mysql_fetch_array($result12)) { $admin12= "".$row["usuario"].""; }
mysql_free_result($result12)?>



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
    <td height="16" colspan="2" bgcolor="#000000" ><table width="0" border="0" cellspacing="0">
        <tr>
          <th width="202" scope="col"><span class="Estilo4">Modulos de Acceso a Usuarios </span></th>
          <th width="212" bgcolor="#FFFFFF" scope="col"><?php echo $admin12; ?></th>
        </tr>
    </table></td>
  </tr>

  <tr>
    <td width="406" height="22" bgcolor="#E3E9F1" ><span class="Estilo3">Reservaciones </span></td>
    <td width="17" c"></a><?php if ( $admin1 == '1' )
			  { echo "</a><a href='?&id4=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin1 == '0' )  { 		   	
		echo "</a><a href='?&id4=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></font></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Asignar Habitaciones </span></td>
    <td c"><?php if ( $admin2 == '1' )
			  { echo "</a><a href='?&id5=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin2 == '0' )  { 		   	
		echo "</a><a href='?&id5=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Cancelar Habitaciones Asignadas </span></td>
    <td c"><?php if ( $admin3 == '1' )
			  { echo "</a><a href='?&id6=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin3 == '0' )  { 		   	
		echo "</a><a href='?&id6=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Registro de Clientes </span></td>
    <td c"><?php if ( $admin4 == '1' )
			  { echo "</a><a href='?&id7=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin4 == '0' )  { 		   	
		echo "</a><a href='?&id7=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Buscar Clientes  </span></td>
    <td c"><?php if ( $admin5 == '1' )
			  { echo "</a><a href='?&id8=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin5 == '0' )  { 		   	
		echo "</a><a href='?&id8=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Eliminar Clientes </span></td>
    <td c"><?php if ( $admin6 == '1' )
			  { echo "</a><a href='?&id9=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin6 == '0' )  { 		   	
		echo "</a><a href='?&id9=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Actualizar Clientes </span></td>
    <td c"><?php if ( $admin7 == '1' )
			  { echo "</a><a href='?&id10=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin7 == '0' )  { 		   	
		echo "</a><a href='?&id10=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">facturaci&oacute;n</span></td>
    <td c"><?php if ( $admin8 == '1' )
			  { echo "</a><a href='?&id11=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin8 == '0' )  { 		   	
		echo "</a><a href='?&id11=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
  <tr>
    <td height="23" bgcolor="#E3E9F1" ><span class="Estilo3">Consumos</span></td>
    <td c"><?php if ( $admin9 == '1' )
			  { echo "</a><a href='?&id12=activo&codigo=$dato '><img src='imagenes/inactive.gif' alt=\"Desactivar\" width='16' height='16' border='0'></a>";   }		
		else   if ( $admin9 == '0' )  { 		   	
		echo "</a><a href='?&id12=inactivo&codigo=$dato '><img src='imagenes/active.gif' alt=\"activar\" width='16' height='16' border='0'></a>";   } ?></td>
  </tr>
</table>

<p></p>
</body>
</html>

