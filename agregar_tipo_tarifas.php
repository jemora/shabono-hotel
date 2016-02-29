
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
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
</style>


<?php 	require_once('css.php');?>

<p align="center"><img src="imagenes/banne12.gif" width="607" height="30" /><br />
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
    <!--DWLayoutTable-->
    <tr>
      <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><div align="right"><span class="Estilo16">Imprimir</span></div></td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <div align="center"><span class="estilocelda">
  <?php						 
          	
           if ( $id3  == 'agregar' )
			  { 
			  
				require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from hab_tipo ");
$test1 = mysql_fetch_row($test11a);







$usuarios_consulta = mysql_query("SELECT  id_serv FROM servicio where tipo like '$tipo'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
      Tarifa Registrada</font></b></p>
    <p>&nbsp;</p></th>
  </tr>
</table>';
exit;
}

mysql_query("INSERT INTO servicio (tipo,obser,precio) VALUES ('$tipo','$obser','$precio')");



mysql_close();



echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">El tipo de Tarifa se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';


                 } 
							
		 ?>
  </span><br />
  </div>
<table width="280" height="116" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Agregar Tipo de Tarifas</td>
  </tr>
  <tr>
    <td height="86"><form action="?id3=agregar" method="post">
            <div align="left">
              <table width="471" border="0" cellspacing="0">
                <tr>
                  <th width="156" class="Estilo7" scope="col"><div align="left">Tipo de Tarifa</div></th>
                  <th width="310" scope="col"><div align="left"><input name="tipo" type="text" id="tipo" size="25" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Precio de este tipo de Tarifa</div></th>
                  <th scope="col"><div align="left">
                    <input name="precio" type="text" id="precio" size="25" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                  </div></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Observaciones</div></th>
                  <th scope="col"><div align="left">
                    <textarea name="obser" cols="40" id="obser" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099"></textarea>
                  </div></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col">&nbsp;</th>
                  <th scope="col"><div align="left">
                    <input name="submit2" type="submit" value="Agregar" />
                  </div></th>
                </tr>
              </table>
        </div>
</form></td>
  </tr>
</table>
<p align="center"><?php 
if ( $id3  == 'borrar' )
			  { 
			  
				if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 


$sSQL="Delete From servicio Where id_serv like '$codigo'";
mysql_query($sSQL);
				 echo "<div align='center'><strong><br />
Habitacion Eliminada Correctamente</strong></div>";	
				
                 } 

?>
  <br />
  <?php require('lista_tipo_tarifas.php'); ?>
</p>
