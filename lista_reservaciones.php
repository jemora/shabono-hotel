
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo9 {font-size: 10; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo10 {font-size: 10}
.Estilo14 {font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo15 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
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
</style></head>

<body>
<table width="537" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="2"><?php include("buscar_reservacion.php");?></td>
  </tr>
  <tr>
    <td width="403"><span class="Estilo15">Reservaciones Realizadas </span></td>
    <td width="130"><div align="right"><span class="small"><a href="javascript:Abrir_ventana('reporte_lista_reservaciones.php')">Imprimir Reporte</a> </span><img src="imagenes/print.gif" width="16" height="11"></div></td>
  </tr>
  <tr>
    <td colspan="2"><?php require_once('conector/conector.php'); 
	 require('mensajes.php');
	?>
  
  <?php
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$feha=date("d-m-Y");
$test11a = mysql_query("SELECT COUNT(*) from habitacion2 WHERE status LIKE 'reservada' ");
$test1 = mysql_fetch_row($test11a);


?>
  
  <?php		
				 
           if ( $test1[0] >= '1' )
			  { 
			   require('lista_reservaciones1.php');
         
                 } 
		else 
           if ( $test1[0] == '0' )
			  { 
			 			  echo "<strong><br />  <br>
  No hay Reservaciones</strong>";
			  
	
                 } 
							 
		 ?></td>
  </tr>
</table>
<p><br>
</p>
</body>
</html>

