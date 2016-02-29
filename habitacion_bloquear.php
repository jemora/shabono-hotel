  
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



?>


<html>
<html>
<head>
<title>pagina1.php</title>

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

<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
</head>

<body>
<table width="450" border="0" align="center" cellspacing="0">
  <tr>
    <th width="448" scope="col"><div align="left">
      <?php include("buscar_cliente3.php");?>
    </div>    </th>
  </tr>
  <tr>
    <td><?php include("logo.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include("menu_calendario.php");?></td>
  </tr>
  <tr>
    <td>
	
	<form name=frm onSubmit="return Verificar()" method="post" action="pagina4.php" enctype="multipart/form-data">
	

      <img src="imagenes/ico_8.gif" width="96" height="39">
      <table width="98%" border="0" align="center">
    <?php


$paisant=$pais;

print ("
  
    <input type=\"hidden\" name=\"paisant\" value=\"$paisant\">

    <tr>
       <td><div align=\"right\">Tipo de Habitacion:</div></td>
       <td><select name=\"pais\" onchange=\"submit();\">
       ");
if (!isset($pais)){
    print ("<option selected><span class='Estilo4'>Tipo de habitacion</span></option>");
    $pais="0";
}
$sql="select * from hab_tipo order by id_tipo";
$res=mysql_query($sql);
while($fila=mysql_fetch_array($res)){
print("<option value=\"$fila[id_tipo]\"");
if ($fila[id_tipo] == $pais) {
print ("selected");
}
print(">$fila[tipo]</option>\n");
}
print("</select></td></tr>");

if ($pais!="0"){
print("
<tr>
    <td><div align=\"right\"><span class='Estilo2'>Habitacion:</span></div></td>
<td><select name=\"prov\" id=\"prov\">
");
$sqlprov="select * from habitacion where tipo='$pais' ";
$resprov=mysql_query($sqlprov);

while($filaprov=mysql_fetch_array($resprov)){
print("<option value=\"$filaprov[habitacion]\">$filaprov[observaciones]</option>");
}
print("
    </select>
    </td>
       </tr>
");
}
       ?>
<tr>
       <td colspan="2"><div align="right">
         <table width="100%" border="0" align="center">
           <tr>
             <td width="37%"><div align="right" >Fecha Inicio </span></div></td>
             <td><input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
               <a href="javascript:show_calendar('frm.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
           </tr>
           <tr>
             <td><div align="right">Fecha Final </div></td>
             <td><input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha1; ?>" size="15" />
               <a href="javascript:show_calendar('frm.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
           </tr>
           <tr>
             <td><div align="right">Observaciones</div></td>
             <td rowspan="2"><textarea name="obsev" id="obsev"></textarea></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td><div align="right"><span class="Estilo3">
               <input name="status" type="hidden" id="status" value="bloqueada" />
             <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
             </span></div></td>
             <td><span class="Estilo3">
               <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
             </span></td>
           </tr>
         </table>
       </div></td>
      </tr>
<tr>
  <td><div align="right">
    <input name="button" type="submit" value="Enviar">
  </div></td>
  <td><input name="reset" type="reset" value="Borrar"></td>
</tr>
    </table>
</form></td>
  </tr>
</table>
</body>
</html> 
