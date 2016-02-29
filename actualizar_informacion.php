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
-->
</style></head>

<body>
<table width="81%" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="100%" valign="top"><div align="right" >
      <div align="left"><img src="imagenes/banne16.gif" width="607" height="30"><br />
            <table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="560" height="26" valign="top"><table width="560" border="0" align="center" cellspacing="0">
                    <tr>
                      <td width="364" bgcolor="#F4F4F4"><table width="560" border="0" align="center" cellspacing="0">
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
            </table>
            <br />
      </div>
    </div>
        <table width="597" border="0" align="center" cellspacing="0">
          <tr>
            <th width="591" scope="col"><table width="567" border="0" cellspacing="0" cellpadding="4" align="center">

                <tr>
                  <td width="151" height="26"><?php require_once('conector/conector.php');
if (!isset($buscar))
//Conexion con la base
mysql_connect($hostname,$username,$password);

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update informacion Set  

  nombre='$nombre',
  telefono= '$telefono',
correo='$correo',
rif='$rif',
info='$info',
direccion='$direccion',
url='$url'
  
Where id like'1'";

mysql_db_query($database,$sSQL);

		echo ' <p align="center"><b><font face="Arial" color="#000066" size="4">La informacion se ha Actualizado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';		
?>
                  <br></td>
              </tr>
            </table></th>
          </tr>
        </table>
      <div align="center"></td>
  </tr>
  <tr>
    <td height="25" valign="top" bgcolor="#FFFFFF"><p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
