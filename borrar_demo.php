<html>
<head>
	<title>cajas de texto y javascript - ejemplo 32</title>
	<script>
function Verificar() {
	if(document.calform.datebox1.value == "") {
		alert("falta Ingresar una fecha");
		document.calform.datebox1.focus();
		return false;
		}

	if(document.calform.datebox2.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox2.focus();
		return false;	
		
		
	}
	if(document.calform.datebox3.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox3.focus();
		return false;	
		
		
	}
	if(document.calform.datebox4.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox4.focus();
		return false;	
		
		
	}
	if(document.calform.datebox5.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox5.focus();
		return false;	
		
		
	}
	if(document.calform.datebox6.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox6.focus();
		return false;	
		
		
	}
	if(document.calform.datebox7.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox7.focus();
		return false;	
		
		
	}
	if(document.calform.datebox8.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox8.focus();
		return false;	
		
		
	}
	if(document.calform.datebox9.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox9.focus();
		return false;	
		
		
	}
	if(document.calform.datebox10.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox10.focus();
		return false;	
		
		
	}
	if(document.calform.datebox11.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox11.focus();
		return false;	
		
		
	}
	if(document.calform.datebox12.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox12.focus();
		return false;	
		
		
	}
	if(document.calform.datebox13.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox13.focus();
		return false;	
		
		
	}
	if(document.calform.datebox14.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox14.focus();
		return false;	
		
		
	}
	if(document.calform.datebox15.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox15.focus();
		return false;	
		
		
	}
	if(document.calform.datebox16.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox16.focus();
		return false;	
		
		
	}
	if(document.calform.datebox17.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox17.focus();
		return false;	
		
		
	}
	if(document.calform.datebox18.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox18.focus();
		return false;	
		
		
	}
	if(document.calform.datebox19.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox19.focus();
		return false;	
		
		
	}
	if(document.calform.datebox20.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox20.focus();
		return false;	
		
		
	}
	if(document.calform.datebox21.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox21.focus();
		return false;	
		
		
	}
	if(document.calform.datebox22.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox22.focus();
		return false;	
		
		
	}
	if(document.calform.datebox23.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox23.focus();
		return false;	
		
		
	}
	if(document.calform.datebox24.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox24.focus();
		return false;	
		
		
	}
	if(document.calform.datebox25.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox25.focus();
		return false;	
		
		
	}
	if(document.calform.datebox26.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox26.focus();
		return false;	
		
		
	}
	if(document.calform.datebox27.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox27.focus();
		return false;	
		
		
	}
	if(document.calform.datebox28.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox28.focus();
		return false;	
		
		
	}
	if(document.calform.datebox29.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox29.focus();
		return false;	
		
		
	}
	if(document.calform.datebox30.value == "") {
		alert("Falta dato por completar");
		document.calform.datebox30.focus();
		return false;	
		
		
	}
	
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Realizara un Clasificado para la Categoria "+document.frm.datebox1.value+".\nSi es Correcto proceda a Continuar");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>
    <script language="JavaScript" type="text/javascript" src="date-picker.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body>

<center>
<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <th width="349" scope="col"><div align="left">
      <?php include("reservacion1.php");?>
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
<br /><div id="resultado"><?php include('registro_demo.php');?></div>
<form name=calform onSubmit="return Verificar()"  method="post" action="?&amp;id=guardar2&amp;id3=<?php echo $dia; ?>" enctype="multipart/form-data">
 
 
 
 <?php 


$hostname_Conn = "localhost";
$database_Conn = "hotel";
$username_Conn = "root";
$password_Conn = "";
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
$query_datos = "SELECT * FROM habitacion2 WHERE habitacion like '$habitacion' and fecha1 BETWEEN '$fecha1' and '$fecha2' ";
$datos = mysql_query($query_datos, $Conn) or die(mysql_error());
$row_datos = mysql_fetch_assoc($datos);
$totalRows_dato = mysql_num_rows($datos);
$dato1= $row_datos['habitacion'];

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

<form name="form1" onSubmit="enviarDatosEmpleado(); return false" method="post" action="combo.php" enctype="multipart/form-data" >
<br />
<table width="475" border="0" align="center">
    <tr>
      <td width="172"><div align="left">Fecha Inicio </div></td>
      <td width="293"><div align="left">
        <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
        <a href="javascript:show_calendar('calform.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
    </tr>
    <tr>
      <td width="172"><div align="left">Fecha Final </div></td>
      <td><input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha2; ?>" size="15" />
        <a href="javascript:show_calendar('calform.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
    </tr>
    <tr>
      <td width="172"><div align="left">Tipo de Habitaci&oacute;n </div></td>
      <td><select name="id_tipo" id="id_tipo" onchange="submit()">
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
      <td><select name="habitacion" id="habitacion" onchange="submit()">
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
      <td colspan="2"><input name="nombre" type="hidden" id="nombre" value="<?
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
               <input name="status" type="hidden" id="status" value="reservada" />
               <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
</td>
      </tr>
  </table>
  <p><label></label><input type="submit" name="Submit" value="Enviar" />
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
