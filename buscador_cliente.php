
 
<?php require_once('conector/conector.php');?> 
<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo1 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo2 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo3 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo4 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo5 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo6 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title><style type="text/css">
<!--
body {
	background-image: url(bg_grad.jpg);
}
.Estilo7 {font-size: xx-small}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="700" border="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <th width="9" height="493" bgcolor="#000000">&nbsp;</th>
    <th width="670" valign="top" bgcolor="#FFFFFF"><div align="left"></div>
      <table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
        <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
        <tr>
          <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt="" /></td>
          <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt="" /></td>
          <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt="" /></td>
          <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt="" /></td>
        </tr>
        <tr>
          <td colspan="3"><img src="imagenes/visor_r1_c1.jpg" alt="" name="visor_r1_c1" width="607" height="11" border="0" id="visor_r1_c1" /></td>
          <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt="" /></td>
        </tr>
        <tr>
          <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
          <td><table width="562" height="62" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
              <tr>
                <td width="552" class="estilocelda"><table width="552" border="0" align="center" cellpadding="0" cellspacing="0">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="552" height="28" valign="top"><form action="resultados1.php" method="get">
  <div align="right">
    <table width="415" border="0">
      <tr>
        <th width="111" class="small" scope="col">Buscador De Clientes </th>
        <th width="90" scope="col"><input name="criterio" type="text" id="criterio" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
        <th width="118" scope="col"><label>
          <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
            <option value="0">Tipo de Busqueda</option>
            <option value="doc2">Cedula</option>
            <option value="nombre">Nombre</option>
            <option value="apellido">Apellido</option>
          </select>
        </label></th>
        <th width="78" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
      </tr>
    </table>
  </div>
</form></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="22">&nbsp;</td>
              </tr>
          </table></td>
          <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
          <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
        </tr>
        <tr>
          <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
          <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
        </tr>
      </table></th>
    <th width="7" bgcolor="#000000">&nbsp;</th>
  </tr>
</table>
</body>
</html>
