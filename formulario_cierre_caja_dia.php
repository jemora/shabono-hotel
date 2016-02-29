<?
require("aut_verifica.inc.php");
$nivel_acceso=10; // Nivel de acceso para esta página.

if ($nivel_acceso <= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>

<?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$resultdatocod = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultdato = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result1101 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result1102 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
////////////para  contar  cuantas  facturas  hay  y asignarle unam consecutivo al multi
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT SUM(multi) from habitacion2");
$test1 = mysql_fetch_row($test11a);
$test1[0];
$multi=$test1[0]+1;
 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo4 {font-size: 9px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<script>
function Verificar() {
	if(document.frm.d.value == "0") {
		alert("Seleccionar el Dia de Inicio");
		document.frm.d.focus();
		return false;
		}

	if(document.frm.m.value == "0") {
		alert("Seleccionar el Mes de Inicio");
		document.frm.m.focus();
		return false;	
		
		
	}
	if(document.frm.a.value == "0") {
		alert("Seleccionar el Año de Inicio");
		document.frm.a.focus();
		return false;
	}
	if(document.frm.personas.value == "") {
		alert("Falta dato por completar");
		document.frm.personas.focus();
		return false;
	}
	if(document.frm.m1.value == "0") {
		alert("Seleccionar el Mes final");
		document.frm.m1.focus();
		return false;
	}

if(document.frm.d1.value == "0") {
		alert("Seleccionar el Dia final");
		document.frm.d1.focus();
		return false;
	}
if(document.frm.a2.value == "0") {
		alert("Seleccionar el Año final");
		document.frm.a2.focus();
		return false;
	}
if(document.frm.dato8.value == "") {
		alert("Falta dato por completar");
		document.frm.dato8.focus();
		return false;
	}
	if(document.frm.dato9.value == "") {
		alert("Falta dato por completar");
		document.frm.dato9.focus();
		return false;
	}
if(document.frm.dato10.value == "") {
		alert("Falta dato por completar");
		document.frm.dato10.focus();
		return false;
	}
	if(document.frm.imagen.value == "") {
		alert("Debes Subir Una Imagen ");
		document.frm.imagen.focus();
		return false;
	}
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>


<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo14 {color: #666666; font-size: 12px; }
-->
</style>
</head>

<body>
<form name=calform onSubmit="return Verificar()"  method="post" action="?id=cierre1" enctype="multipart/form-data">
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>

 <style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
-->
</style>

<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="2">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" valign="top"><div align="right" >
      <div align="center"><img src="imagenes/banne18.gif" alt="f" width="607" height="30"></div>
    </div></td>
  </tr>
  <tr>
    <td valign="top"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="small" >Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"></a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><p align="left"><img src="imagenes/menu_caja2.gif" alt="f" width="363" height="27" border="0" usemap="#Map"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="4,4,115,20" href="formulario_crear_caja.php">
  <area shape="rect" coords="125,2,238,20" href="formulario_cierre_caja_dia.php">
  <area shape="rect" coords="241,5,353,21" href="formulario_cierre_caja_mes.php">
</map>
<form name="form1"  method="post" action="?id=cierre1" enctype="multipart/form-data" >
  <table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
    <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
    <tr>
      <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt="" /></td>
      <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt="" /></td>
      <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt="" /></td>
      <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="3"><img src="imagenes/visor_r1_c1.jpg" alt="" name="visor_r1_c1" width="607" height="11" border="0" id="visor_r1_c1" /></td>
      <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt="" /></td>
    </tr>
    <tr>
      <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
      <td><table width="0" border="0" align="center" cellspacing="0">
          <tr>
            <th width="33" height="30" class="small" scope="col">&nbsp;</th>
            <th width="556" colspan="2" rowspan="2" scope="col"><table width="176" height="28" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
                <tr>
                  <td width="174" height="28" bgcolor="#FFFFFF"><div align="left">
                      <div align="left">
                        <table width="486" border="0" cellspacing="0">
                          <tr>
                            <th width="326" scope="col"><table width="326" border="0" align="left">
                                <tr>
                                  <td width="172" class="small">Dia de Cierre de Cajas </td>
                                  <td width="144"><div align="left">
                                      <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                                  <a href="javascript:show_calendar('calform.fecha1');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
                                </tr>
                                <tr>
                                  <td class="small">Observaciones
                                  <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                                  <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" /></td>
                                  <td><textarea name="observacion" cols="25" id="fecha122" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" onClick="popUpCalendar(this, form1.dateArrival, 'yyyy-mm-dd');"></textarea></td>
                                </tr>
                            </table></th>
                            <th width="0" scope="col"></th>
                            <th width="149" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                              <input name="submit222222" type="submit" value="   Cierre de Caja Diario   " />
                            </span></font></font></th>
                            <th width="8" scope="col">&nbsp;</th>
                          </tr>
                        </table>
                      </div></td>
                </tr>
            </table></th>
          </tr>
          <tr>
            <th height="16" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th height="2" colspan="3" scope="col"></th>
          </tr>
      </table></td>
      <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
      <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
    </tr>
    <tr>
      <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
      <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
    </tr>
  </table>
  <p><label></label>
</form>


<table width="601" border="0" align="center" cellspacing="0">
  <tr>
    <td><?php						 
          	
           if ( $id  == 'cierre1' )
			  { 
$link1 = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$fecha2="0000-00-00";
$test11a1 = mysql_query("SELECT COUNT(*) from caja WHERE  opc like '1' and dia like '0'");
$test11 = mysql_fetch_row($test11a1);	

if ($test11[0] == 0) {
 echo '<FONT color="#ff0000"> <img src="imagenes/ico_10.gif" width="16" height="12"> No Hay cajas Pendientes por Cerrar</FONT>'; 
exit;
}		  
			  
			  
			  
if ($fecha1=="") {
 echo '<FONT color="#ff0000"> <img src="imagenes/ico_10.gif" width="16" height="12"> Señale La fecha de Cierre</FONT>'; 
exit;
} 
			  
			  
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from cierre_caja_dia WHERE fecha1 like '$fecha1' ");
$test1 = mysql_fetch_row($test11a);

 if ( $test1[0] >= '1' )
			  { 
			                 echo '<FONT color="#ff0000"> <img src="imagenes/ico_10.gif" width="16" height="12"> Fecha de Cierre ya realizdo</FONT>'; 
	           
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
						  echo  '<FONT color="#000099"> <img src="imagenes/ico_5.gif" width="18" height="18">Cierre de dia realizado correctamente</FONT>';
			  
	mysql_query("INSERT INTO cierre_caja_dia  (fecha1,fecha,observacion,usuario) VALUES ('$fecha1','$fecha','$observacion','$usuario')");
	mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$dia='1';
$sSQL="Update caja Set  dia='$dia', fecha1='$fecha1' Where  opc='1' and dia='0'";

mysql_db_query($database,$sSQL);	


                 } 



                 } 
		
		 ?></td>
  </tr>
  <tr>
    <td><?php include("lista_cierres_dia.php");?></td>
  </tr>
</table>
<p></p>
<p>&nbsp;</p>
  <p>
    <label></label>
  </p>
</form>
</center>
</body>
</html> 
