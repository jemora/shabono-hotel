
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
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo4 {font-size: 12px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
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


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="488" border="0" align="center" cellspacing="0">
  <tr>
    <td width="486">
	
	<form name=frm onSubmit="return Verificar()" method="post" action="pagina5.php" enctype="multipart/form-data">
	  <table width="90%" border="0" align="center">
    <?php


$paisant=$pais;

print ("
  

    <input type=\"hidden\" name=\"paisant\" value=\"$paisant\">

   
       <td><div align=\"right\">Tipo de Habitacion:</div></td>
       <td><select name=\"pais\" onchange=\"submit();\">
       ");
//Muestra el combobox de las provincias una vez que se haya elegido el país, no antes
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
print("</select></td>");

if ($pais!="0"){
print("

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
     
");
}
       ?>

  <td>
    <input name="button" type="submit" value="Ver Galerias">    </tr>
    </table>
</form></td>
  </tr>
</table>
</body>
</html> 
