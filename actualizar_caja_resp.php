
<?php require('mensajes.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo17 {font-size: 10px}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo18 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style></head>

<body>
<p>
  <?php require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update caja_creada Set  
caja='$caja',
  descripcion='$descripcion',
  usuario= '$usuario'

  
Where id='$id'";

mysql_db_query($database,$sSQL);

				
?></p>
<table width="20" border="0" align="center" cellspacing="0">
  <tr>
    <th scope="col"><div align="left"><img src="imagenes/banne18.gif" width="607" height="30"></div></th>
  </tr>
  <tr>
    <th scope="col"><div align="left"></div></th>
  </tr>
  <tr>
    <td><table width="566" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
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
    <td><table width="323" border="0" align="center" cellspacing="0" bordercolor="#000000"> <tr><th width="317" scope="col"><span class="Estilo18"><font face="Arial">Caja actualizada Correctamente</font></span></th></tr>
      <tr>
        <th scope="col"><a href="formulario_crear_caja.php" class="Estilo17">Regresar a lista de tipos de Cajas</a></th>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
