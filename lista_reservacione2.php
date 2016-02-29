
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
</head>

<body>
<table width="537" border="0" align="center" cellspacing="0">
  <tr>
    <td width="535"><?php include("buscar_reservacion.php");?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="Estilo15">Reservaciones Realizadas </span></td>
  </tr>
  <tr>
    <td><?php		
				 
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

