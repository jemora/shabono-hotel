
<?php 
require_once('conector/conector.php');
?>


<style type="text/css">
body{font: 75% Arial, sans-serif;}
form{width:601px;padding:5px 0;border: 2px solid #71828A;
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
.Estilo8 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
</style>

<?php 	require_once('css.php');?>


<p align="center"><img src="imagenes/banne13.gif" width="607" height="30" /><br />
  <?php						 
          	
           if ( $id3  == 'agregar' )
			  { 
			  
				require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);



$usuarios_consulta = mysql_query("SELECT id_tipo FROM tipo_consumo where tipo like '$tipo'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
      Tipo de consumo Registrado</font></b></p>
    <p>&nbsp;</p></th>
  </tr>
</table>';
exit;
}

mysql_query("INSERT INTO tipo_consumo (tipo) VALUES ('$tipo')");



mysql_close();



echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">El tipo de consumo se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';


                 } 
						else 
						
					      if ( $id3  == 'agregar2' )
			  { 
			  
				require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);



$usuarios_consulta = mysql_query("SELECT id FROM servicios01 where tipo like '$tipo' and nombre like '$nombre'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
      Articulo de consumo ya esta Registrado</font></b></p>
    <p>&nbsp;</p></th>
  </tr>
</table>';
exit;
}

mysql_query("INSERT INTO servicios01 (tipo,nombre,precio) VALUES ('$tipo','$nombre','$precio')");



mysql_close();



echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">El Articulo de consumo se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';


                 } 	
						
						
						
							
		 ?></p>
<table width="280" height="95" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Agregar Tipo de Consumo</td>
  </tr>
  <tr>
    <td height="65"><form action="?id3=agregar" method="post">
          <div align="left">
            <table width="600" border="0" cellspacing="0">
              <tr>
                <th width="139"  scope="col"><div align="left">Tipo de Consumo </div></th>
                    <th width="457" scope="col"><div align="left"><input name="tipo" type="text" id="tipo" size="25" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                </label></th>
              </tr>
              <tr>
                <th  scope="col">&nbsp;</th>
                    <th scope="col"><div align="left">
                      <input name="submit2" type="submit" value="Agregar" />
                      </div></th>
              </tr>
            </table>
        </div>
    </form></td>
  </tr>
  <tr>
    <td height="65"><iframe width="600" id="iframecont" onload="resize(false);" src="lista_tipo_consumos.php" scrolling="Auto" frameborder="0" height="200" marginheight="0" marginwidth="0" name="frame"></iframe></td>
  </tr>
</table>
<div align="center">
  <?php 
if ( $id4  == 'borrar2' )
			  { 
			  
				if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From tipo_consumo Where id_tipo like '$codigo'";
mysql_query($sSQL);
				 echo "<div align='center'><strong><br />
Articulo Eliminado Correctamente</strong></div>";	
				
                 } 

?></div>
<table width="280" height="184" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda">Agregar Tipo de Articulo de Consumo</td>
  </tr>
  <tr>
    <td height="118"><form action="?id3=agregar2" method="post">
                <div align="left">
                  <table width="538" border="0" cellspacing="0">
                    <tr>
                      <th colspan="3"  scope="col">&nbsp;</th>
                    </tr>
                    <tr>
                      <th width="149"  scope="col"><div align="right">Tipo de Consumo </div></th>
                  <th width="385" colspan="2" scope="col"><div align="left"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                          <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                            <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  tipo_consumo ORDER BY  tipo ASC";
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
                      </span></font></font></div></th>
                    </tr>
                    <tr>
                      <th  scope="col"><div align="right">Articulo de Consumo</div></th>
                      <th colspan="2" scope="col"><div align="left">
                          <input name="nombre" type="text" id="nombre" size="25" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                      </div></th>
                    </tr>
                    <tr>
                      <th  scope="col"><div align="right">Precio del Articulo </div></th>
                      <th colspan="2" scope="col"><div align="left">
                          <input name="precio" type="text" id="precio" size="25" /style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                      </div></th>
                    </tr>
                    <tr>
                      <th  scope="col">&nbsp;</th>
                      <th colspan="2" scope="col"><input name="submit22" type="submit" value="Agregar" /></th>
                    </tr>
                  </table>
        </div>
    </form></td>
  </tr>
  <tr>
    <td height="32"><iframe width="600" id="iframecont" onload="resize(false);" src="lista_articulos_consumos.php" scrolling="Auto" frameborder="0" height="200" marginheight="0" marginwidth="0" name="frame"></iframe></td>
  </tr>
</table>
<p align="center">
  <?php 
if ( $id3  == 'borrar' )
			  { 
			  
				if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From servicios01 Where id like '$codigo'";
mysql_query($sSQL);
				 echo "<div align='center'><strong><br />
Articulo Eliminado Correctamente</strong></div>";	
				
                 } 

?>
  <br /></p>
