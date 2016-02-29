

<?php 
require_once('conector/conector.php');
?>
<?
	$codigo = $_GET['codigo'];
	if (isset($codigo)){

		$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db ($database); 

		$result1 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result2 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result3 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result4 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result5 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result6 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result7 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result8 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result9 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
		$result10 = mysql_query("SELECT * FROM botones WHERE id  LIKE '$codigo'");
	}
?>
<html>
	<head>
		<title>Documento sin t&iacute;tulo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	</head>

<body>
<br>
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
     <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4">&nbsp;</td>
        <td width="23" bgcolor="#F4F4F4">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="20" border="0" align="center" cellspacing="0">
  <tr>
    <td height="35"><strong>Actualizar Botones: </strong></td>
  </tr>
  <tr>
    <td height="285"><form name="form1" method="post" action="actualizar_botones2.php?&amp;buscar=<?
	
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result9)
?>">
      <table width="584" border="0" align="center" cellspacing="0" bordercolor="#000066">
        <tr>
          <th width="582" scope="col"><table width="582" border="0" cellspacing="0" cellpadding="4" align="center">
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#EEF3F7"><div align="right" class="Estilo1">
                <div align="left"><font size="2">Nombre
                  : </font></div>
              </div></td>
              <td bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="nombre" class="formulario" id="nombre" value="<?
	
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["nombre"].""; 
}
mysql_free_result($result1)
?>" type="text">
              </font></b></td>
            </tr>
            <tr>
              <td width="147" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Apellido
                : </font></div></td>
              <td bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="apellido" class="formulario" id="apellido" value="<?
	
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["apellido"].""; 
}
mysql_free_result($result2)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="147" bgcolor="#EEF3F7"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Cedula:</font></td>
              <td bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="cedula" readonly="readonly" class="formulario" id="cedula" value="<?
	
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["cedula"].""; 
}
mysql_free_result($result3)
?>" type="text">
              </font></b></td>
              </tr>
            <tr bgcolor="#FFFFCC">
              <td height="13" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Telefono :</font></div></td>
              <td height="13" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="telefono" class="formulario" id="telefono" value="<?
	
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["telefono"].""; 
}
mysql_free_result($result6)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="7" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Correo Electronico:</font></div></td>
              <td height="7" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <input name="correo" class="formulario" id="correo" value="<?
	
      while ($row=mysql_fetch_array($result7))
      {
echo "".$row["correo"].""; 
}
mysql_free_result($result7)
?>" type="text">
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="40" bgcolor="#EEF3F7"><div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Placa de Vehiculo   :</font></div></td>
              <td height="40" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <textarea name="direccion" cols="50" rows="5" class="formulario" id="direccion"><?
	
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["direccion"].""; 
}
mysql_free_result($result5)
?>
                </textarea>
              </font></b></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td height="40" colspan="2" bgcolor="#EEF3F7"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="fecha" type="hidden" id="fecha" value="<?php echo date("d-m-Y"); ?>" size="25" />
                </span></font></font></font>
                          <input type="submit" name="Submit" value="Actualizar" class="botones" />
              </div></td>
            </tr>
          </table></th>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
