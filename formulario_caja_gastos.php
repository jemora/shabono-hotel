<?php require('verificar.php'); ?>
<?php require_once('conector/conector.php');?>
<?
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//Ejecutamos la sentencia SQL
$result_caja = mysql_query("SELECT * FROM caja WHERE tipo  LIKE '$tipo'");
?>
<? while ($row=mysql_fetch_array($result_caja))  {$ref= "".$row["id"].""; }mysql_free_result($result_caja)
?>




<?php





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
  $insertSQL = sprintf("INSERT INTO caja_gastos (tipo, descripcion, monto, fecha,ref, usuario) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['descripcion'], "text"),
                       GetSQLValueString($_POST['monto'], "text"),
                       GetSQLValueString($_POST['fecha'], "date"),
					     GetSQLValueString($ref, "text"),
                       GetSQLValueString($_POST['usuario'], "text"));

  mysql_select_db($database, $connFlashblog);
  $Result1 = mysql_query($insertSQL, $connFlashblog) or die(mysql_error());

  $insertGoTo = "formulario_caja_gastos.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
   //header($insertGoTo);
  //header(sprintf("Location: %s", $insertGoTo));
}
?>

<?php require_once('conector/conector.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
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
<table width="62%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
<tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne18.gif" width="607" height="30"><br />
        </div>
        </div>		</td>
    </tr>
    
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><p></td>
    </tr>
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><form method="post" name="form1" action="<?php echo $editFormAction; ?>">
      <table align="center">
            <tr valign="baseline">
              <td nowrap align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Aplicar gasto a  Siguiente </strong></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Caja</strong></font></td>
              <td><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                  <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  caja WHERE  ref LIKE '0' and opc LIKE '0'";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                  <option value="<?php echo $row_rsCategorias['tipo']?>" ><?php echo $row_rsCategorias['tipo']?></option>
                  <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                </select>
              </span></font></font></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Descripci&oacute;n del Gasto </font></strong></td>
              <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <textarea name="descripcion" cols="50" class="imputbox" id="descripcion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
              </font></b></td>
            </tr>
            <tr valign="baseline">
              <td nowrap align="right"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Monto: </font></strong></td>
              <td><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="monto" type="text" class="imputbox" id="monto" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></td>
            </tr>

            <tr valign="baseline">
              <td nowrap align="right"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
              </span></font></font></font></font></font><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
              <input name="fecha" type="hidden" id="fecha" value="<? echo date("Y-m-d"); ?>" />
              </span></font></font></font></font></font></td>
              <td><input type="submit" value="Insertar registro"></td>
            </tr>
          </table>
          <input type="hidden" name="MM_insert" value="form1">
      </form>
      </td>
  </tr>
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><?php include("lista_gastos_caja.php");?></td>
    </tr>
</table>




<p>&nbsp;</p>
