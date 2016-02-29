

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
.Estilo1 {
	color: #990000;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo17 {font-size: 12px}
-->
</style></head>

<body>
<p align="center" class="Estilo1"><img src="imagenes/banne18.gif" width="607" height="30"><br>
</p>
<div align="center"><span class="Estilo1">
  <?php require('mensajes.php'); ?>
  <?php 

require_once('conector/conector.php');
 
$dato=$_POST['doc2'];

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT id FROM caja_creada WHERE usuario='$usuario' and caja LIKE '$caja'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {
echo $mensaje_caja_apertura1;
exit;
}


mysql_query("INSERT INTO caja_creada (caja,descripcion,usuario) VALUES ('$caja','$descripcion','$usuario')");






mysql_close();






echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">Se ha Creado la caja Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';



?>
  </span>
</div>
<table width="566" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="560" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="formulario_crear_caja.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
        <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
        <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
        <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<p align="center" class="Estilo1">

<table width="567" border="1" align="center" cellspacing="0" bordercolor="#B1C3D9">
  <!--DWLayoutTable-->
  <tr bgcolor="#000000">
    <td colspan="5" bgcolor="#B1C3D9"><span class="Estilo17"><strong>Informacion de Apertura de Caja :</strong>
      </div>
    </span></td>
  </tr>
  <tr>
    <td width="150" bgcolor="#E3E9F1"><div align="left"><strong>Nombre de caja  :</span></strong>
        </div>
    </div></td>
    <td colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="252" height="18" bgcolor="#FFFFFF" class="Estilo14"><?  echo  $_POST['caja']; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="left"><strong>Descripcion de Caja :</strong>
        </div>
    </div></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="Estilo14">
      <?  echo  $_POST['descripcion']; ?>
    </span></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="left"><strong>Usuario de Apertura: </strong></div></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="Estilo14">
      <?  echo  $_POST['usuario']; ?>
    </span></td>
  </tr>
  <tr>  </tr>
</table>
<p>&nbsp;</p>
<p>
</p>
<p>&nbsp;</p>
</body>
</html>
