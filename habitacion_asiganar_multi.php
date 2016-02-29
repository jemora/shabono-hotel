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


</head>

<body>

<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <th width="349" scope="col"><div align="left">
      <?php include("buscar_cliente3.php");?>
    </div></th>
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
</table>
<br /><div id="resultado"><?php include('registro_demo2.php');?></div>
<form name=calform onSubmit="return Verificar()"  method="post" action="?&amp;id=guardar2&amp;id3=<?php echo $dia; ?>" enctype="multipart/form-data">
 
 
 
 <?php 

require_once('conector/conector.php');
$hostname_Conn = $hostname;
$database_Conn = $database;
$username_Conn = $username;
$password_Conn = $password;
$Conn = mysql_connect($hostname_Conn, $username_Conn, $password_Conn) or die(mysql_error());





 ?>
  <script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
 <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
 
 <?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 ";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);


?><?php
mysql_free_result($Recordset2);
?>
 
 
 
 
 
 
<?php
//NeXTenesio Special List Recordset
mysql_select_db($database_Conn, $Conn);

$query_Paises = "SELECT * FROM hab_tipo ORDER BY id_tipo ASC";
$Paises = mysql_query($query_Paises, $Conn) or die(mysql_error());
$row_Paises = mysql_fetch_assoc($Paises);
$totalRows_Paises = mysql_num_rows($Paises);
//End NeXTenesio Special List Recordset

//NeXTenesio Special List Recordset
$colname_Provincias = "-1";
if (isset($_POST['id_tipo'])) {
  $colname_Provincias = $_POST['id_tipo'];
}
mysql_select_db($database_Conn, $Conn);

/// dato

$test11a = mysql_query("SELECT * FROM habitacion2 WHERE habitacion like '$habitacion' and fecha1 BETWEEN '$fecha1' and '$fecha2' ");
$test1 = mysql_fetch_row($test11a);




////////////////////////////////////////




$query_Provincias = sprintf("SELECT * FROM habitacion WHERE tipo = '%s' and habitacion != '$dato1'  ORDER BY id_hab ASC   

 ", $colname_Provincias);
$Provincias = mysql_query($query_Provincias, $Conn) or die(mysql_error());
$row_Provincias = mysql_fetch_assoc($Provincias);
$totalRows_Provincias = mysql_num_rows($Provincias);
//End NeXTenesio Special List Recordset

//NeXTenesio Special List Recordset
$colname_Ciudades = "-1";
if (isset($_POST['habitacion'])) {
  $colname_Ciudades = $_POST['habitacion'];
}
mysql_select_db($database_Conn, $Conn);

$query_Ciudades = sprintf("SELECT * FROM serv_asig WHERE  id_serv= '%s' ", $colname_Ciudades);
$Ciudades = mysql_query($query_Ciudades, $Conn) or die(mysql_error());
$row_Ciudades = mysql_fetch_assoc($Ciudades);
$totalRows_Ciudades = mysql_num_rows($Ciudades);
//End NeXTenesio Special List Recordset
?>
<style type="text/css">
<!--
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12px; }
-->
</style>

<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" /> 

<form name="form1" onSubmit="enviarDatosEmpleado1(); return false" method="post" action="combo.php" enctype="multipart/form-data" >
<br />
<table width="475" border="0" align="center">
    <tr>
      <td width="172"><div align="left">Fecha Inicio </div></td>
      <td width="293"><div align="left">
        <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
        <a href="javascript:show_calendar('calform.fecha1');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
    </tr>
    <tr>
      <td width="172"><div align="left">Fecha Final </div></td>
      <td><input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha2; ?>" size="15" />
        <a href="javascript:show_calendar('calform.fecha2');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
    </tr>
    <tr>
      <td width="172"><div align="left">Tipo de Habitaci&oacute;n </div></td>
      <td><select name="id_tipo" id="id_tipo" onChange="submit()">
        <option value="" <?php if (!(strcmp("", $_POST['tipo']))) {echo "SELECTED";} ?>>Seleccionar</option>
        <?php
do {  
?>
        <option value="<?php echo $row_Paises['id_tipo']?>"<?php if (!(strcmp($row_Paises['id_tipo'], $_POST['id_tipo']))) {echo "SELECTED";} ?>><?php echo $row_Paises['tipo']?></option>
        <?php
} while ($row_Paises = mysql_fetch_assoc($Paises));
  $rows = mysql_num_rows($Paises);
  if($rows > 0) {
      mysql_data_seek($Paises, 0);
	  $row_Paises = mysql_fetch_assoc($Paises);
  }
?>
      </select></td>
    </tr>
    <tr>
      <td width="172"><div align="left">Habitacion</div></td>
      <td><select name="habitacion" id="habitacion" onChange="submit()">
        <option value="" <?php if (!(strcmp("", $_POST['habitacion']))) {echo "SELECTED";} ?>>Seleccionar</option>
        <?php
do {  
?>
        <option value="<?php echo $row_Provincias['habitacion']?>"<?php if (!(strcmp($row_Provincias['habitacion'], $_POST['habitacion']))) {echo "SELECTED";} ?>><?php echo $row_Provincias['observaciones']?></option>
        <?php
} while ($row_Provincias = mysql_fetch_assoc($Provincias));
  $rows = mysql_num_rows($Provincias);
  if($rows > 0) {
      mysql_data_seek($Provincias, 0);
	  $row_Provincias = mysql_fetch_assoc($Provincias);
  }
?>
      </select>
      <?php if ( $test1[0] >= '1' )
			  { 
			   
             echo '<FONT color="#ff0000"> Habitacion No DIsponible </FONT>'; 
                 } ?></td>
    </tr>
    <tr>
      <td><div align="left">Tarifa por Temporada</div></td>
      <td width="293"><select name="id_serv" id="id_serv" >
        <option value="" <?php if (!(strcmp("", $_POST['tipo2']))) {echo "SELECTED";} ?>>Seleccionar</option>
        <?php
do {  
?>
        <option value="<?php echo $row_Ciudades['tipo2']?>"<?php if (!(strcmp($row_Ciudades['tipo2'], $_POST['tipo2']))) {echo "SELECTED";} ?>><?php echo $row_Ciudades['tipo2']?></option>
        <?php
} while ($row_Ciudades = mysql_fetch_assoc($Ciudades));
  $rows = mysql_num_rows($Ciudades);
  if($rows > 0) {
      mysql_data_seek($Ciudades, 0);
	  $row_Ciudades = mysql_fetch_assoc($Ciudades);
  }
?>
      </select></td>
    </tr>
    <tr>
      <td><div align="left">N&ordm; de personas </div></td>
      <td><div align="left">
        <input name="personas" type="text" id="personas" size="5" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left">Aplicar Nota credito</div></td>
      <td><div align="left">
        <input name="nota" type="text" id="nota" />
      </div></td>
    </tr>
    <tr>
      <td><div align="left">Observaciones</div></td>
      <td><label>
        <textarea name="obsev" id="obsev"></textarea>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
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
        <input name="opc2" type="hidden" id="opc2" value="0" />
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
        <input type="submit" name="Submit" value="Enviar" />
      </div></td>
      </tr>
  </table>
  <p><label></label>
  </p>
  </form>


<p>
  <br />
  <?php
mysql_free_result($Paises);

mysql_free_result($Provincias);

mysql_free_result($Ciudades);
?>

<p>&nbsp;</p>
  <p>
    <label></label>
  </p>
</form>
</center>
</body>
</html> 
