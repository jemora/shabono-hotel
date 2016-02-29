<html><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
}
-->
</style>

<?php 	require_once('css.php');?>
<body><div align="center"><img src="imagenes/banne16.gif" width="607" height="30"><br>
</div>
<table width=601 height=140 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="estilocelda">Actualizar Banner Principal </td>
  </tr>
  <tr>
    <td height="92"><table width="165" border="0" align="center" cellpadding="0" cellspacing="2" class="tabla">
      <!--DWLayoutTable-->
      <tr valign="middle" > </tr>
    </table>
    <form ENCTYPE="multipart/form-data" action="informacion01.php?id5=banner" method="POST">
	<p>
	  <INPUT NAME="userfile" TYPE="file">
  </p>
	<p>
	  <input type="submit" value="Guardar Imagen" class="boton">
    </form></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>

<?

require_once('conector/conector.php');

$link=mysql_connect($hostname,$username,$password);
mysql_select_db($database,$link);

if ($userfile!="none" && $userfile!="")
{
	if ($userfile_type=="image/jpeg" || $userfile_type=="image/pjpeg" || $userfile_type=="image/gif" || $userfile_type=="image/bmp")
	{
		$info=getimagesize($userfile);
		$x=addslashes(fread(fopen($userfile,"r"),filesize($userfile)));
		
		
		$sSQL="Update logo Set  anchura=".$info[0].", altura=".$info[0]." ,tipo=".$info[1].",ref='$ref',imagen='$x'
  
Where id='27'";
		
		
		
		$result=mysql_query($sSQL,$link);
		$id=mysql_insert_id();
		echo "Imagen  Actualizada<BR>";
		echo "<img src='ver_logo.php?id=26'>";
	}else{
		$error="El tipo de archivo tienes que ser JPG, GIF o BMP.";
	}
}else{
	if ($userfile!="")
		$error="No ha seleccionado ninguna imagen...";
}
mysql_close($link);
if ($error!="")
{
	echo "</center><P><font face='Arial' size=2 color='#ff0000'> Error: ".$error."</font><br>";
}
?>
</body>
</html>