
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
.Estilo7 {font-size: xx-small}
.Estilo8 {font-size: x-small}
</style>

<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>


<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<table width="0" border="0" align="center">
  <tr>
    <th scope="col"><form action="opcion7.php" method="post">
  
      <div align="left">
        <table width="588" border="0" cellspacing="0">
        <tr>
          <th width="133" scope="col"><span class="small"> Consumo Realizados </span></th>
          <th width="112" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
          <th width="82" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="154" scope="col"><span class="small">Clientes</span><span class="Estilo7"> <a href="javascript:Abrir_ventana('buscador_cliente.php')"><img src="imagenes/view.gif" width="17" height="17" border="0" /></a></span></th>
          <th width="97" scope="col"><span class="small">Planning <a href="javascript:Abrir_ventana('buscar_calendario.php')"><img src="imagenes/show-calendar.gif" width="18" height="16" border="0" /></a></span></th>
        </tr>
      </table>
        </div>
    </form></th>
  </tr>
</table>
