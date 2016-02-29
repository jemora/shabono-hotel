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

<script language='javascript' src="popcalendar.js"></script> 
<script language='javascript' src="popcalendar2.js"></script>
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
    <td><?php include("detalles_clientes2.php");?></td>
  </tr>
  <tr>
    <td><?php include("menu_calendario.php");?></td>
  </tr>
  <tr>
    <td>
	
	<form name=frm onSubmit="return Verificar()" method="post" action="pagina2.php" enctype="multipart/form-data">
	

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
             <td width="37%"><div align="right" >Tarifa por Temporada</span></div></td>
             <td><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
               <select name="servicio" id="servicio">
                 <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  servicio ORDER BY  tipo ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                 <option value="<?php echo $row_rsCategorias['precio']?>" ><?php echo $row_rsCategorias['tipo']?></option>
                 <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
               </select>
             </span></font></font></td>
           </tr>
           <tr>
             <td><div align="right" >N&ordm; de personas </span></div></td>
             <td><input name="personas" type="text" id="personas" size="5" /></td>
           </tr>
           <tr>
             <td><div align="right" >Fecha Inicio </span></div></td>
             <td><input name="fecha1" type="text" id="dateArrival" onClick="popUpCalendar(this, frm.dateArrival, 'yyyy-mm-dd');" size="10"></td>
             </tr>
           <tr>
             <td><div align="right">Fecha Final </div></td>
             <td><input name="fecha2" type="text" id="dateArrival2" onClick="popUpCalendar2(this, frm.dateArrival2, 'yyyy-mm-dd');" size="10"></td>
             </tr>
           <tr>
             <td><div align="right">Aplicar Nota credito</div></td>
             <td><input name="nota" type="text" id="nota" /> 
               <span class="Estilo4">*Opcional </span></td>
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
                 <input name="doc2" type="hidden" id="doc2" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultdato))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($resultdato)
?>" />
                 <input name="codigo" type="hidden" id="codigo" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($resultdatocod))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($resultdatocod)
?>" />
<input name="status" type="hidden" id="status" value="ocupada" />
               <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
             </span></div></td>
             <td><span class="Estilo3">
               <input name="nombre" type="hidden" id="nombre" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1101))
      {
echo "".$row["nombre"].""; 
}
mysql_free_result($result1101)
?>" />
               <input name="apellido" type="hidden" id="apellido" value="<?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1102))
      {
echo "".$row["apellido"].""; 
}
mysql_free_result($result1102)
?>" />
               <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
               <input name="multi" type="hidden" id="multi" value="<?php echo $multi; ?>" />
               <input name="opc2" type="hidden" id="opc2" value="1" />
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
