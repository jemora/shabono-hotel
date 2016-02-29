

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo17 {color: #666666; font-size: 12px; }
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
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

<body >
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" />
</div>
</div>
<br>
<br>
<p align="center">&nbsp;</p>
<table width="389" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <!-- fwtable fwsrc="Sin t&iacute;tulo-1.png" fwbase="reservas.jpg" fwstyle="Dreamweaver" fwdocid = "2052003515" fwnested="0" -->
  <tr>
    <td width="104"><img src="imagenes/spacer.gif" width="104" height="1" border="0" alt=""></td>
    <td width="278"><img src="imagenes/spacer.gif" width="278" height="1" border="0" alt=""></td>
    <td width="7"><img src="imagenes/spacer.gif" width="7" height="1" border="0" alt=""></td>
    <td width="1"><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="reservas_r1_c1" src="imagenes/cajas.jpg" width="104" height="100" border="0" alt=""></td>
    <td><img name="reservas_r1_c2" src="imagenes/reservas_r1_c2.jpg" width="278" height="6" border="0" alt=""></td>
    <td rowspan="3"><img name="reservas_r1_c3" src="imagenes/reservas_r1_c3.jpg" width="7" height="100" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="6" border="0" alt=""></td>
  </tr>
  <tr>
    <td height="87" valign="top"><p align="center"><strong><br>
          <br>
        Caja Cerrada</strong></p>
        </td>
    <td><img src="imagenes/spacer.gif" width="1" height="87" border="0" alt=""></td>
  </tr>
  <tr>
    <td><img name="reservas_r3_c2" src="imagenes/reservas_r3_c2.jpg" width="278" height="7" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="7" border="0" alt=""></td>
  </tr>
</table>
<p align="center"><br>
  
  
  
  <?php require_once('conector/conector.php');
if (!isset($codigo))
//Conexion con la base
mysql_connect($hostname,$username,$password);
$opc='1';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="UPDATE facturas SET opc='$opc' WHERE caja LIKE '$codigo'";
mysql_db_query($database,$sSQL);

?>
  <?php require_once('conector/conector.php');
if (!isset($codigo))
//Conexion con la base
mysql_connect($hostname,$username,$password);
$opc='1';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="UPDATE caja SET opc='$opc',monto2='$monto2' WHERE id LIKE '$codigo'";
mysql_db_query($database,$sSQL);


?>
</p>
<p align="center">&nbsp;</p>
</body>
</html>
