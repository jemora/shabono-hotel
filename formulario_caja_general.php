<?php require('verificar.php'); ?> 
<?php require('mensajes.php'); ?>
<?php require_once('conector/conector.php');?>
<?
 $dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$result_caja = mysql_query("SELECT * FROM caja_creada WHERE caja  LIKE '$tipo'");
?>
<? while ($row=mysql_fetch_array($result_caja))  {$ref= "".$row["ref"].""; }mysql_free_result($result_caja)
?>






<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<script language='javascript' src="popcalendar.js"></script> 
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>
<script>
function Verificar() {
	if(document.frm.nombre.value == "") {
		alert("Debe Colocar Los Nombres del Cliente");
		document.frm.nombre.focus();
		return false;
		}

	if(document.frm.apellido.value == "") {
		alert("Debe colocar Los Apellidos del Cliente");
		document.frm.apellido.focus();
		return false;	
		
		
	}
	if(document.frm.nac.value == "0") {
		alert("Falta nacionalidad del Cliente");
		document.frm.nac.focus();
		return false;
	}
	if(document.frm.doc.value == "0") {
		alert("Falta Señalar tipo de Documentacion");
		document.frm.doc.focus();
		return false;
	}
	if(document.frm.doc2.value == "") {
		alert("Falta por completar Numero de Identificacion");
		document.frm.doc2.focus();
		return false;
	}

if(document.frm.pais.value == "") {
		alert("Debe Colocar el Pais ");
		document.frm.pais.focus();
		return false;
	}
if(document.frm.ciudad.value == "") {
		alert("Debe Colocar la Ciudad");
		document.frm.ciudad.focus();
		return false;
	}
if(document.frm.direccion.value == "") {
		alert("Debe colocar la Direccion");
		document.frm.direccion.focus();
		return false;
	}
	if(document.frm.correo.value == "") {
		alert("Debe colocar el Correo");
		document.frm.correo.focus();
		return false;
	}
if(document.frm.cliente.value == "0") {
		alert("Debe señalar el tipo de cliente");
		document.frm.cliente.focus();
		return false;
	}
	if(document.frm.vehiculo.value == "") {
		alert("Debes Señalar una placa de Vehiculo ");
		document.frm.vehiculo.focus();
		return false;
	}
	// Quita sólo la siguiente línea para que se envíe el formulario
	alert("Estimado"+document.frm.dato1.value+".\nEl formulario se enviaría a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>
<style type="text/css">
body{font: 76 Arial, sans-serif;}
form{width:600px;padding:5px 0;border: 2px solid #71828A;
background: #C4CECF;}
fieldset{border: 0px solid #000;}
legend{font: bold 140% Arial,sans-serif;color: #27518A;}
Ahora definimos las medidas del div que contiene al formulario, tanto el margen, ancho y alto.
div.medidas,div.check{margin: 10px 0 10px 10px;}
div.medidas label{float:left;width:90px;line-height:23px;}
div.medidas input{width:120px;}

Finalmente, modificamos el botón de submit, fíjate como lo hacemos, al haberle dado una id (“login”) en el código html, ahora para referirnos solamente a ese botón precisamos su id.

input#login{margin-left: 100px;border: 1px solid #27518A;
background: #ccc url(fondoBoton.jpg) repeat-x;}
</style>

<body text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><div align="center">
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
            <td width="136" bgcolor="#F4F4F4"><span >Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"></a></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="18" valign="top" bgcolor="#FFFFFF"><p align="left"><img src="imagenes/menu_caja.gif" alt="f" width="502" height="27" border="0" usemap="#Map"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="4,4,115,20" href="formulario_caja.php">
  <area shape="rect" coords="124,3,237,21" href="lista_facturas_cerrar_caja.php">
  <area shape="rect" coords="241,5,353,21" href="lista_fechas_aperturas.php">
  <area shape="rect" coords="361,4,494,22" href="lista_cierre_caja_general.php">
</map>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    
    <tr>
      <td width="100%" height="18" valign="top" bgcolor="#FFFFFF"><p align="center"><?php require_once('conector/conector.php');?> 
      
<?php 
  $fecha2=date("Y-m-d");
if ($fecha > $fecha2) {


echo $mensaje_caja_error;
exit;
}


?>
      
      
<?php

//////////////////////////////////////////

$usuarios_consulta = mysql_query("SELECT id FROM caja WHERE tipo like '$tipo' and opc LIKE '0' ") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {


echo $mensaje_caja_apertura;
exit;
}


////////////////////////////////////////////////

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO caja (fecha, monto1, monto2, usuario,recep,boton,ref, opc, tipo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['fecha'], "date"),
                       GetSQLValueString($_POST['monto1'], "text"),
                       GetSQLValueString($_POST['monto2'], "text"),
                       GetSQLValueString($_POST['usuario'], "text"),
					       GetSQLValueString($_POST['recep'], "text"),
						       GetSQLValueString($_POST['boton'], "text"),
					       GetSQLValueString($ref, "text"),
                       GetSQLValueString($_POST['opc'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"));

  mysql_select_db($database, $connFlashblog);
  $Result1 = mysql_query($insertSQL, $connFlashblog) or die(mysql_error());

  $insertGoTo = "guardar_apertura.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  //header("Location: %s", $insertGoTo);
}
?></td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF"><form method="post" name="form1" action="<?php echo $editFormAction; ?>">
        <table width="600" align="center">
    <tr valign="baseline">
              <td width="129" align="right" nowrap><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Tipo de  CAJA </strong></font>:</div></td>
            <td colspan="3"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
        <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                  <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  caja_creada WHERE ref LIKE '1'";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                  <option value="<?php echo $row_rsCategorias['caja']?>" ><?php echo $row_rsCategorias['caja']?></option>
                  <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
              </select>
              </span></font></font></td>
          </tr>
            <tr valign="baseline">
              <td nowrap align="right"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Fecha de Apertura CAJA </strong></font></div></td>
              <td><input name="fecha" type="text" id="fecha" value="<?  echo  $fecha; ?>" size="15" />
                <a href="javascript:show_calendar('form1.fecha');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></td>
              <td><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Recepcionista </strong></font>:</td>
              <td><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                <select name="recep" id="recep" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                  <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  usuarios WHERE  adm_1 LIKE '0' ORDER BY  ID ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                  <option value="<?php echo $row_rsCategorias['nombre']?> <?php echo $row_rsCategorias['apellido']?>" ><?php echo $row_rsCategorias['nombre']?> <?php echo $row_rsCategorias['apellido']?></option>
                  <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                </select>
              </span></font></font></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Monto de Apertura </font></strong></div></td>
              <td width="167"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="monto1" type="text" class="imputbox" id="monto1" value="0" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></td>
              <td width="137"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Botones </strong></font>:</td>
              <td width="147"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                <select name="boton" id="boton" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                  <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  botones ORDER BY  id ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                  <option value="<?php echo $row_rsCategorias['nombre']?> <?php echo $row_rsCategorias['apellido']?>" ><?php echo $row_rsCategorias['nombre']?> <?php echo $row_rsCategorias['apellido']?></option>
                  <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                </select>
              </span></font></font></td>
            </tr>

            <tr valign="baseline">
              <td nowrap align="right"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="opc" type="hidden" id="opc" value="0" />
              </span></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font><span class="Estilo3"></span></font></font></font></font></font></font></font></font><span class="Estilo3">
              <input name="monto2" type="hidden" id="monto2" value="0" />
              </span></font></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
              <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
              </span></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font><span class="Estilo3"></span></font></font></font></font></font></font></font></font><span class="Estilo3"></span></font></font></font></font><span class="Estilo3"></span></font></font></font></font></font></td>
              <td colspan="3"><input type="submit" value="Insertar registro"></td>
            </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1">
      </form>      </td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td height="18" valign="top" bgcolor="#FFFFFF"><?php include('opcion_caja_apertura.php'); ?></td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>
