
 
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
mysql_free_result($resultinfo)?></title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><form action="resultados2.php" method="get">
  <div align="right">
    <table width="462" border="0">
      <tr>
        <th width="157" class="Estilo1" scope="col">Reportes por Referencia </th>
        <th width="90" scope="col"><input name="criterio" type="text" id="criterio" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
        <th width="116" scope="col"><label>
          <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
            <option value="0">Tipo de Busqueda</option>
            <option value="doc2">Cedula</option>
            <option value="nombre">Nombre</option>
            <option value="apellido">Apellido</option>
          </select>
        </label></th>
        <th width="81" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
