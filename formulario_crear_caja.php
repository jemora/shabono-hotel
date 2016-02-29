<?php require('verificar.php'); ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo14 {color: #666666; font-size: 12px; }
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>
<script>
function Verificar() {
	if(document.frm.caja.value == "") {
		alert("Debe Colocar el Nombre de la Caja");
		document.frm.caja.focus();
		return false;
		}

	if(document.frm.descripcion.value == "") {
		alert("Debe colocar la descripcion de la caja");
		document.frm.descripcion.focus();
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
	alert("Estimado Usuario la Caja llamada"+document.frm.caja.value+".\n se creara a partir de este punto sin problema");
	return true;	// Cambia "false" por "true" para que funcione el formulario
}
</script>


<body text="#000000"><div align="center">
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
  <area shape="rect" coords="124,2,237,20" href="formulario_cierre_caja_dia.php">
  <area shape="rect" coords="241,5,353,21" href="formulario_cierre_caja_mes.php">
</map>
<table width="601" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
<tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><br />
        </div>
        </div>
		
		<form name=frm onSubmit="return Verificar()" method="post" action="guardar_crear_caja.php" enctype="multipart/form-data">
     
          <table width="601" border="0" align="center" cellspacing="0">
        <tr>
          <th width="552" scope="col"><table width="597" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr >
              <td width="82" bgcolor="#C4CECF"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre de  CAJA </strong></font></div></td>
              <td width="452" bgcolor="#C4CECF" ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="caja" type="text" class="imputbox" id="caja" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              </font></b></div></td>
            </tr>
            <tr>
              <td width="82" bgcolor="#C4CECF"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Descripci&oacute;n de la Caja </font></strong></div></td>
              <td bgcolor="#C4CECF"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <textarea name="descripcion" cols="50" class="imputbox" id="descripcion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
              </font></b></div></td>
            </tr>
            <tr>
              <td height="40" colspan="2" bgcolor="#C4CECF"><div align="left"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                </span><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                  </span><span class="Estilo3">
                    <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                    </span></font></font></font></font></font>
                <input type="submit" name="Submit" value="Crear Caja" class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
        </form>        <div align="center"></td>
    </tr>
<tr>
  <td valign="top" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
</tr>
    
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><p>
        <?php include("lista_cajas_creadas.php");?>
      </td>
    </tr>
</table>




<p>&nbsp;</p>
