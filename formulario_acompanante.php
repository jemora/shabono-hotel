<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(bg_grad.jpg);
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo4 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="700" border="0" align="center">
  <tr>
    <th width="10" height="335" bgcolor="#000000" scope="col">&nbsp;</th>
    <th bgcolor="#FFFFFF" scope="col"><table width="601" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="100%" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne9.gif" width="607" height="30" /><br />
                  <br />
          </div>
        </div>
              <form action="?id=agregar&codigo=<?php echo $codigo ?>&multi=<?php echo $multi; ?>" method="post" enctype="multipart/form-data" name="frm" id="frm" onsubmit="return Verificar()">
                <table width="601" border="0" align="center" cellspacing="0">
                  <tr>
                    <th width="552" height="131" scope="col"><table width="597" border="0" cellspacing="0" cellpadding="4" align="center">
                        <tr >
                          <td colspan="2" bgcolor="#000000"><div align="left" class="Estilo4">Registro de Acompa&ntilde;antes: </div>                            <div align="left"></div></td>
                        </tr>
                        <tr >
                          <td bgcolor="#B1C3D9"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Nombre y Apelliddo </strong></font></div></td>
                          <td width="454" bgcolor="#E3E9F1" ><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                            <input name="nombre" type="text" class="imputbox" id="nombre" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                          </font></b></div></td>
                        </tr>
                        <tr>
                          <td width="127" bgcolor="#B1C3D9"><div align="left"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Cedula</font></strong></div></td>
                          <td bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                              <input name="cedula" type="text" class="imputbox" id="cedula" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                          </font></b></div></td>
                        </tr>
                        <tr>
                          <td height="26" bgcolor="#B1C3D9"><div align="left"><strong>Telefono</strong></div></td>
                          <td height="26" bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                            <input name="telefono" type="text" class="imputbox" id="telefono" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                          </font></b></div></td>
                        </tr>
                        <tr>
                          <td height="26" bgcolor="#B1C3D9"><div align="left"><strong>Email</strong></div></td>
                          <td height="26" bgcolor="#E3E9F1"><div align="left"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                            <input name="correo" type="text" class="imputbox" id="correo" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                          </font></b></div></td>
                        </tr>
                      </table>
                        <input name="Submit" type="submit" class="botones" id="Submit" value="    Agregar Acompa&ntilde;ante   " />
                        <font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="usuario" type="hidden" id="usuario" value="<? echo $_SESSION['usuario_login'] ?>" />
                        </span><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
                        <input name="multi" type="hidden" id="multi" value="<?php echo $multi; ?>" />
                      </span></font></font></font></font></font></font></font></font></font></th>
                  </tr>
                </table>
            </form>
          <div align="center">  <?php

           if ( $id  == 'agregar' )
			  { 
			    require_once('conector/conector.php');
				mysql_connect($hostname,$username,$password);
                mysql_select_db($database);
				mysql_query("INSERT INTO acompanantes(nombre,cedula,telefono,correo,multi,usuario) VALUES ('$nombre','$cedula','$telefono','$correo','$multi','$usuario')");


mysql_close();

echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">El Acompañante se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';
		         } 

				else  if ( $id  == 'borrar' )
			  {  
			  require_once('conector/conector.php');


if (!isset($codigo))

mysql_connect($hostname,$username,$password);
 
mysql_select_db($database); 

$sSQL="Delete From acompanantes Where id like '$codigo2'";
mysql_query($sSQL);
			   } 
		 ?></div></td>
      </tr>
      <tr>
        <td height="18" valign="top" bgcolor="#FFFFFF"><p>
          <?php include("lista_cliente_acompanantes.php");?>
        </p></td>
      </tr>
    </table>
        <p>&nbsp;</p>
    <p>&nbsp;</p></th>
    <th width="10" bgcolor="#000000" scope="col">&nbsp;</th>
  </tr>
</table>
</body>
</html>
