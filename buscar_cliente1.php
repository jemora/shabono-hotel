
<?php 
require_once('conector/conector.php');
?>





<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
}
-->
</style>

<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo7 {font-size: xx-small}
-->
</style>
<div align="center"><img src="imagenes/banne3.gif" width="607" height="30" /></div>
<table width="600" border="1" align="center" cellspacing="0" bordercolor="#71828A">
  <tr>
    <th bgcolor="#C4CECF" scope="col"><form action="opcion2.php" method="post">
  
      <div align="left">
        <table width="562" border="0" cellspacing="0">
        <tr>
          <th width="114" scope="col"><span class="small" >Eliminar Cliente </span></th>
          <th width="56" scope="col"><img src="imagenes/ico_2.gif" width="18" height="18" /></th>
          <th width="127" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="128" scope="col"><span class="small">Clientes</span><span class="Estilo7"> <a href="javascript:Abrir_ventana('buscador_cliente.php')"><img src="imagenes/view.gif" width="17" height="17" border="0" /></a></span></th>
          <th width="71" scope="col"><span class="small">Planning <a href="javascript:Abrir_ventana('buscar_calendario.php')"><img src="imagenes/show-calendar.gif" width="18" height="16" border="0" /></a></span></th>
        </tr>
      </table>
        </div>
    </form></th>
  </tr>
</table>
<p>&nbsp;</p>
