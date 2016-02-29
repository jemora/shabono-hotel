

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>caja</title>
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
.Estilo15 {color: #000000}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>

<body>
<p align="center" class="Estilo1"><img src="imagenes/banne18.gif" width="607" height="30"><br></p>
<table width="567" border="0" align="center">
  <!--DWLayoutTable-->
  <tr bgcolor="#000000">
    <td colspan="5" bgcolor="#B1C3D9"><div align="left" class="Estilo14 Estilo15"><strong>Informacion de Apertura de Caja :</strong></div></td>
  </tr>
  <tr>
    <td width="150" bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong><span class="Estilo15">Nombre de caja  :</span></strong></div></td>
    <td colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="252" height="18" bgcolor="#FFFFFF" class="Estilo14"><?  echo  $_POST['caja']; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><div align="left" class="Estilo14"><strong>Descripcion de Caja :</strong></div></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="Estilo14">
      <?  echo  $_POST['descripcion']; ?>
    </span></td>
  </tr>
  <tr>
    <td bgcolor="#E3E9F1"><strong>Usuario de Apertura: </strong></td>
    <td colspan="4" bgcolor="#FFFFFF"><span class="Estilo14">
      <?  echo  $_POST['usuario']; ?>
    </span></td>
  </tr>
  <tr>
    
  </tr>
</table>
<p>&nbsp;</p>
<p>
</p>
<p>&nbsp;</p>
</body>
</html>
