
<?php 
require_once('conector/conector.php');
?>


<style type="text/css">
body{font: 75% Arial, sans-serif;}
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
.Estilo9 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo10 {font-size: 10px}
</style>




<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><img src="imagenes/banne18.gif" alt="" width="607" height="30" /></td>
  </tr>
  <tr>
    <td height="28" valign="top"><?php require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From caja_creada Where id like '$codigo'";
mysql_query($sSQL);
				 
				
				   ?>
      &nbsp;<br /></td>
  </tr>
  <tr>
    <td height="28" valign="top"><table width="323" border="0" align="center" cellspacing="0" bordercolor="#000000">
      <tr>
        <th width="317" scope="col"><span class="Estilo9"><font face="Arial">Caja Eliminada Correctamente</font></span></th>
      </tr>
      <tr>
        <th scope="col"><a href="formulario_crear_caja.php" class="Estilo10">Regresar a lista de tipos de Cajas</a></th>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
