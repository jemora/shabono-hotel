  
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
<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE  id LIKE '$codigo'";
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

<html>
<html>
<head>
<title></title>
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo7 {font-size: xx-small}
.Estilo8 {font-size: x-small}
.Estilo9 {font-size: 10px}
.Estilo10 {color: #FFFFFF}
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

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /></div>
<?php include("logo.php");?>
<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE id like '$codigo'";
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
<table width="601" border="0" align="center">
  <tr>
    <th width="392" scope="col"><form action="opcion8.php" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th width="160" scope="col"><span class="small"> Facturas de Clientes </span></th>
            <th width="139" scope="col"><input name="codigo2" type="text" id="codigo2" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
            <th width="74" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
            <th width="74" scope="col"><span class="small">Clientes</span><span class="Estilo7"> <a href="javascript:Abrir_ventana('buscador_cliente.php')"><img src="imagenes/view.gif" width="17" height="17" border="0" /></a></span></th>
            <th width="105" scope="col"><span class="small">Planning <a href="javascript:Abrir_ventana('buscar_calendario.php')"><img src="imagenes/show-calendar.gif" width="18" height="16" border="0" /></a></span></th>
          </tr>
        </table>
      </div>
    </form></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="col"><div align="left" class="Estilo10">
      <table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
        <!--DWLayoutTable-->
        <tr>
          <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
                <td width="136" bgcolor="#F4F4F4"><span class="small" >Regresar</span></td>
                <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
                <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table>
    </div></th>
  </tr>
</table>
<br>
<table width="351" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="349">
	
	  <form name=frm onSubmit="return Verificar()" method="post" action="pagina35.php?&codigo=<?php echo $row_Recordset2['id']; ?>&prov=<?php echo $row_Recordset2['habitacion']; ?>" enctype="multipart/form-data">
	    <table width="601" border="0" align="center">

  <tr>
    <td colspan="2"><table width="601" border="0" align="center">

      <tr>
        <th colspan="4" bgcolor="#000000" scope="col"><div align="left"><span class="medium">Cambio de Habitaci&ograve;n </span></div></th>
      </tr>
      <tr>
        <th width="112" bgcolor="#B1C3D9" scope="col"><div align="left"><span class="Estilo9">Cliente</span></div></th>
        <th colspan="3" bgcolor="#E3E9F1" ><div align="left"><span class="Estilo9"><?php echo $row_Recordset2['doc2']; ?></span> <span class="Estilo9"><?php echo $row_Recordset2['nombre']; ?></span> <span class="Estilo9"><?php echo $row_Recordset2['apellido']; ?></span></div></th>
      </tr>
      <tr>
        <th height="20" bgcolor="#B1C3D9" scope="col"><div align="left"><span class="Estilo9">No Habitaci&oacute;n:</span> </div></th>
        <th width="150" bgcolor="#FFCC00" scope="col"><div align="left"><span class="Estilo9"><?php echo $row_Recordset2['habitacion']; ?></span></div></th>
        <th width="130" bgcolor="#B1C3D9" scope="col"><span class="Estilo9">Nombre de Habitaci&oacute;n</span> </th>
        <th bgcolor="#FFCC00" scope="col"><div align="left"><span class="Estilo9"><?php echo $row_Recordset2['nom_hab']; ?></span></div></th>
      </tr>
      <tr>
        <th height="20" bgcolor="#B1C3D9" scope="col"><div align="left"><span class="Estilo9">Fecha Desde:</span> </div></th>
        <th bgcolor="#E3E9F1" scope="col"><div align="left"><span class="Estilo9"><?php echo $row_Recordset2['fecha1']; ?></span></div></th>
        <th bgcolor="#B1C3D9" scope="col"><div align="left"><span class="Estilo9">Fecha Hasta:</span></div></th>
        <th bgcolor="#E3E9F1" scope="col"><div align="left"><span class="Estilo9"></span>
          <input name="fecha2" type="text" id="fecha2" value="<?php echo $row_Recordset2['fecha2']; ?>" size="15" />
          <a href="javascript:show_calendar('frm.fecha2');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
      </tr>
      <tr>
        <th height="20" colspan="3" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
        <th bgcolor="#E3E9F1" scope="col"><div align="left">
          <input name="button" type="submit" value="   Cambiar Fecha   ">
        </div></th>
      </tr>
    </table>
      <div align="right">
      <table width="100%" border="0" align="center">
        
        <tr>
          <td width="37%"><div align="right" ></div></td>
               <td><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos"><?php require_once('conector/conector.php');?> 
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
  <?php 	require_once('conector/conector.php');?>
  <?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE  id LIKE '$codigo'";
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
                 
                 
                 </span></font></font></td>
             </tr>
        <tr>
          <td><div align="right"><span class="Estilo3">
            <input name="codigo" type="hidden" id="codigo" value="<?php echo $row_Recordset2['id']; ?>" />
            </span></div></td>
               <td><span class="Estilo3">
                 <input name="fecha1" type="hidden" id="fecha1" value="<?php echo $row_Recordset2['fecha1']; ?>" />
               </span></td>
             </tr>
        </table>
         </div></td>
        </tr>
  <tr>
    <td>
      <div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
        </table>
        </form></td>
  </tr>
</table>
</body>
</html> 
