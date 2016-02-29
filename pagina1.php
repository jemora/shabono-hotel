
<html>
<head>
<title>pagina1.php</title>
</head>

<body>
<form method="post" action="pagina2.php">

    <table width="53%" border="0" align="center">
    <?php
	require_once('conector/conector.php');
// Me conecto a la base de datos


// Declaro la variable $paisant que es la que me va a indicar si hay que volver a cargar los datos de las provincias
$paisant=$tipo;
print ("
    

    <input type=\"hidden\" name=\"paisant\" value=\"$paisant\">

    <tr>
       <td><div align=\"right\"><strong>Tipo de Habitacion:</strong></div></td>
       <td><select name=\"tipo\" onchange=\"submit();\">
       ");
//Muestra el combobox de las provincias una vez que se haya elegido el país, no antes
if (!isset($tipo)){
    print ("<option selected>Seleccione el tipo</option>");
    $tipo="0";
}

$sql="select * from hab_tipo ";
$res=mysql_query($sql);

while($fila=mysql_fetch_array($res)){
print("<option value=\"$fila[id_tipo]\"");
if ($fila[id_tipo] == $tipo) {
print ("selected");
}
print(">$fila[tipo]</option>\n");
}
print("</select></td></tr>");

if ($tipo!="0"){
print("
<tr>
    <td><div align=\"right\"><strong>Habitacion:</strong></div></td>
<td><select name=\"habitacion\">
");

$sqlprov="select * from habitacion where tipo='$tipo' ";
$resprov=mysql_query($sqlprov);

while($filaprov=mysql_fetch_array($resprov)){
print("<option value=\"$filaprov[id_hab]\">$filaprov[habitacion]</option>");
}
print("
    </select>
    </td>
       </tr>
");
}
       ?>
<tr>
       <td width="36%">servicio</td>
       <td colspan="3"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
         <select name="servicio" id="servicio">
           <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  servicio ORDER BY  tipo ASC";
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
<tr>
  <td>Numero de personas </td>
  <td colspan="3"><input name="personas" type="text" id="personas" size="10" /></td>
</tr>
<tr>
  <td>Fecha</td>
  <td width="9%"><div align="left">
    <select name="d" id="d">
      <option>Dia</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div></td>
  <td width="10%"><div align="left">
    <select name="m" id="m">
      <option>Mes</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div></td>
  <td width="45%"><div align="left">
    <select name="a" id="a">
      <option>A&ntilde;o</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
  </div></td>
</tr>
<tr>
  <td>Status de Habitacion </td>
  <td colspan="3"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
    <select name="status" id="select">
      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias2 = "SELECT * FROM  status_hab ORDER BY  id ASC";
$rsCategorias2 = mysql_query($query_rsCategorias2, $connFlashblog) or die(mysql_error());
$row_rsCategorias2 = mysql_fetch_assoc($rsCategorias2);
$totalRows_rsCategorias2 = mysql_num_rows($rsCategorias2); 
	  
	  
do {  
?>
      <option value="<?php echo $row_rsCategorias2['status']?>" ><?php echo $row_rsCategorias2['status']?></option>
      <?php
} while ($row_rsCategorias2 = mysql_fetch_assoc($rsCategorias2));
?>
    </select>
  </span></font></font></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td colspan="3">&nbsp;</td>
</tr>
<tr>
  <td><input name="button" type="submit" value="Enviar"></td>
  <td colspan="3"><input name="reset" type="reset" value="Borrar"></td>
</tr>
    </table>

</form>

</body>
</html> 