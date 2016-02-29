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
</head>

<body>
<br />
<form name=calform onSubmit="return Verificar()"  method="post" action="?&amp;id=guardar2&amp;id3=<?php echo $dia; ?>" enctype="multipart/form-data">
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
 <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
 <style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
-->
</style>

<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<form name="form1" onSubmit="enviarDatosEmpleado1(); return false" method="post" action="combo.php" enctype="multipart/form-data" >
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
                                  <td class="small">Observaciones</td>
                                  <td><textarea name="fecha1222" cols="25" id="fecha122" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" onClick="popUpCalendar(this, form1.dateArrival, 'yyyy-mm-dd');"></textarea></td>
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
  <p><label></label></p>
</form>


<table width="601" border="0" align="center" cellspacing="0">
  <tr>
    <td><?php

if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 

$test11a = mysql_query("SELECT COUNT(*) from facturas WHERE   fecha3 BETWEEN '$fecha1' and '$fecha2' ");
$test1 = mysql_fetch_row($test11a);


?>
        <?php						 
          	
           if ( $id2  == 'calend1' and $test1[0] >= '1' )
			  { 
			 include("lista_facturas_canceladas.php"); 
                 } 
			else 
           if ( $test1[0] == '0' )
			  { 
			  			  echo "<table width=\"613\" border=\"0\" align=\"center\" cellspacing=\"0\">
  <tr>
    <th width=\"549\" scope=\"col\"><div align=\"left\"><strong>No hay registro de Facturas</strong></div>    </th>
  </tr>
</table>";
			  
	
                 } 
		 ?></td>
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
