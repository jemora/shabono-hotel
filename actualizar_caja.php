<?php require('verificar.php'); ?>

<?php 
require_once('conector/conector.php');
?>
<?
if (!isset($codigo))

$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$result1 = mysql_query("SELECT * FROM caja_creada WHERE id  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM caja_creada WHERE id  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM caja_creada WHERE id  LIKE '$codigo'");

?>
<html>
<head>
<title>caja</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php 	require_once('css.php');?>
<style type="text/css">
<!--
.Estilo1 {font-family: Arial, Helvetica, sans-serif}
.Estilo3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.Estilo14 {color: #666666; font-size: 12px; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
<table width="20" border="0" align="center" cellspacing="0">
  <tr>
    <th scope="col"><div align="left"><img src="imagenes/banne18.gif" width="607" height="30"></div></th>
  </tr>
  <tr>
    <th scope="col"><div align="left"></div></th>
  </tr>
  <tr>
    <td><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="560" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
              <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
              <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
              <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="165"><form name="form1" method="post" action="actualizar_caja_resp.php?id=<?
	
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["id"].""; 
}
mysql_free_result($result3)
?>">
      <table width=280 height=18 cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">Actualizar Caja</td>
</tr>
<tr>
  <td><table width="584" border="0" align="center" cellspacing="0" bordercolor="#000066">
    <tr>
      <th width="582" scope="col"><table width="601" border="0" cellspacing="0" cellpadding="4" align="center">
          <tr bgcolor="#FFFFCC">
            <td width="147" bgcolor="#EEF3F7"><div align="right" class="Estilo1">
                <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre de  CAJA </strong></font></div>
            </div></td>
            <td width="403" bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
              <input name="caja" class="formulario" id="caja" value="<?
	
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["caja"].""; 
}
mysql_free_result($result1)
?>" type="text">
            </font></b></td>
          </tr>
          <tr bgcolor="#FFFFCC">
            <td width="147" bgcolor="#EEF3F7"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Descripci&oacute;n de la Caja </font></strong></div></td>
            <td bgcolor="#EEF3F7"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
              <textarea name="descripcion" cols="50" rows="5" class="formulario" id="descripcion"><?
	
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["descripcion"].""; 
}
mysql_free_result($result2)
?>
          </textarea>
            </font></b></td>
            <input type="hidden" name="nivelacceso2" value="0" />
            <input type="hidden" name="salir2" value="salir" />
          </tr>
          <tr bgcolor="#FFFFCC">
            <td height="40" colspan="2" bgcolor="#EEF3F7"><div align="center"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                </span></font></font></font></font></font>
                    <input type="submit" name="Submit2" value="Actualizar Caja" class="botones" />
            </div></td>
          </tr>
      </table></th>
    </tr>
  </table></td>
</tr>
</table> 
      </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
