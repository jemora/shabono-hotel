
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
.Estilo7 {font-size: xx-small}
.Estilo8 {font-size: x-small}
</style>




<div align="center"><img src="imagenes/banne3.gif" width="607" height="30" /></div>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="619" height="28" valign="top"><table width="410" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td width="220" height="28" bgcolor="#FFFFFF"><form action="opcion2.php" method="post">
  
      <div align="left">
        <table width="562" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8">Eliminar Cliente </span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" /></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="138" scope="col"><span class="Estilo7">Busqueda de Clientes </span></th>
        </tr>
      </table>
        </div>
    </form>
    <td width="186" height="28" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

   

</td>
  </tr>
</table>
<p><?php require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From clientes Where doc2 like '$codigo'";
mysql_query($sSQL);
				 echo "<div align='center'><strong><br />
Cliente Eliminado Correctamente</strong></div>";	
				
				   ?>&nbsp;</p>
