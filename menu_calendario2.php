
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

Finalmente, modificamos el bot�n de submit, f�jate como lo hacemos, al haberle dado una id (�login�) en el c�digo html, ahora para referirnos solamente a ese bot�n precisamos su id.

input#login{margin-left: 100px;border: 1px solid #27518A;
background: #ccc url(fondoBoton.jpg) repeat-x;}
.Estilo23 {font-size: xx-small}
</style>


<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<table width="0" border="0" align="center">
  <tr>
    <th scope="col"><form action="opcion2.php" method="post">
  
      <div align="left">
        <table width="588" border="0" cellspacing="0">
        <tr>
          <th width="250" scope="col"><div align="right"> <span class="Estilo23">Listado de Facturas  </span><a href="buscar_cliente7.php?&amp;codigo=<?php echo $codigo ?>&amp;codigo2=<?php echo $codigo2 ?>"><img src="imagenes/ico_11.gif" width="12" height="12" border="0" /></a></div></th>
          <th width="161" scope="col"><div align="right"><span class="Estilo23">Consumos realizados </span><a href="lista_consumos.php?&amp;codigo=<?php echo $codigo ?>&amp;codigo2=<?php echo $codigo2 ?>"><img src="imagenes/edit.gif" width="17" height="17" border="0" /></a></div></th>
          <th width="171" scope="col"><div align="right"><span class="Estilo23">Calendario de Habitaciones </span><a href="javascript:Abrir_ventana('planning.php?id2=calend1')"><img src="imagenes/show-calendar.gif" width="18" height="16" border="0" /></a><a href="javascript:Abrir_ventana('buscar_calendario.php')"></a></div></th>
        </tr>
      </table>
        </div>
    </form></th>
  </tr>
</table>
