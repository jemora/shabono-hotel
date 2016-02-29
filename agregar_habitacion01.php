
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
.Estilo7 {
	font-size: xx-small;
	font-weight: bold;
}
</style>


<?php 	require_once('css.php');?>

<p align="center"><img src="imagenes/banne10.gif" width="607" height="30" />
  <?php						 
          	
           if ( $id3  == 'agregar' )
			  { 
			  
				require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT id_hab FROM habitacion where habitacion like '$habitacion'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
      Habitacion Registrada</font></b></p>
    <p>&nbsp;</p></th>
  </tr>
</table>';
exit;
}

mysql_query("INSERT INTO habitacion (habitacion,tipo,observaciones,detalles) VALUES ('$habitacion','$tipo','$observaciones','$detalles')");



mysql_close();



echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">La habitacion se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';


                 } 
							
		 ?>
<br /></p>
<table width="280" height="165" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Agregar Habitaci&ograve;n </td>
  </tr>
  <tr>
    <td height="135"><form action="?id3=agregar" method="post">
        <div align="left">
              <table width="471" border="0" cellspacing="0">
                <tr>
                  <th width="144" class="Estilo7" scope="col"><div align="left">Numero de Habitacion</div></th>
                  <th width="318" scope="col"><div align="left"><input name="habitacion" type="text" id="habitacion" size="5" maxlength="50" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Tipo de Habitacion </div></th>
                  <th scope="col"><div align="left"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  hab_tipo ORDER BY  id_tipo ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <option value="<?php echo $row_rsCategorias['id_tipo']?>" selected="selected" ><?php echo $row_rsCategorias['tipo']?></option>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                  </select>
                  </span></font></font></div></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Nombre de la habitaci&oacute;n </div></th>
                  <th scope="col"><div align="left"><input name="observaciones" type="text" id="observaciones" value="" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"> <div align="left">Detalles de la Habitaci&oacute;n </div></th>
                  <th scope="col"><div align="left">
                    <textarea name="detalles" id="detalles" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
                  </div></th>
                </tr>
              </table>
        <input name="submit2" type="submit" value="Agregar" />
            </div>
        </form></td>
  </tr>
</table>
<p><br /> 
  <br />
</p>
<table width="528" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="528" height="277" valign="top"><table width="664" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
     
        <td width="600" height="28" bgcolor="#FFFFFF"></td>
        <td width="68" height="28" bgcolor="#FFFFFF">&nbsp;</td>

