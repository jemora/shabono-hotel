<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sistema Hotelero</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>



</head>

<body>
<table width="0" border="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <th width="29" height="9" valign="top" scope="col"><div align="left">
      <p><img src="imagenes/banne19.gif" width="190" height="30" /></p>
      </div></th>
    <th width="19" rowspan="4" valign="top" scope="col"><div align="left">
      <?php include("visualizador_galeria.php");?>
      <br />
      <?php include("visualizador_habitaciones.php");?>
      <?php include("visualizador_habitaciones_bloqueadas.php");?>
    </div></th>
  </tr>
  <tr>
    <th height="10" valign="top" scope="col"><iframe width="500" id="iframecont" onload="resize(false);" src="opcion_visualizar1.php" scrolling="Auto" frameborder="0" height="200" marginheight="0" marginwidth="0" name="frame1"></iframe></th>
  </tr>
  <tr>
    <td height="9" valign="top"><div align="left"><img src="imagenes/banne20.gif" width="190" height="30" /></div></td>
  </tr>
  <tr>
    <td height="10" valign="top"><iframe width="500" id="iframecont" onload="resize(false);" src="opcion_visualizar2.php" scrolling="Auto" frameborder="0" height="200" marginheight="0" marginwidth="0" name="frame2"></iframe></td>
  </tr>
  <tr>
    <td height="10" valign="top"><img src="imagenes/banne_reserva_web.gif" width="190" height="30" /></td>
    <th valign="top" scope="col"><!--DWLayoutEmptyCell-->&nbsp;</th>
  </tr>
  <tr>
    <td height="10" valign="top"><iframe width="500" id="iframecont" onload="resize(false);" src="opcion_reservas_web.php" scrolling="Auto" frameborder="0" height="200" marginheight="0" marginwidth="0" name="frame2"></iframe></td>
    <th valign="top" scope="col"><!--DWLayoutEmptyCell-->&nbsp;</th>
  </tr>
</table>
</body>
</html>
