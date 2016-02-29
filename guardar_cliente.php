<html>
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
		-->
		</style>
	</head>

<body>
<p align="center" class="Estilo1"><img src="imagenes/banne1.gif" width="607" height="30"><br>
  <?php include("logo.php");?>
  <br>
</p>
<table width="389" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="104"><img src="imagenes/spacer.gif" width="104" height="1" border="0" alt=""></td>
    <td width="278"><img src="imagenes/spacer.gif" width="278" height="1" border="0" alt=""></td>
    <td width="7"><img src="imagenes/spacer.gif" width="7" height="1" border="0" alt=""></td>
    <td width="1"><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
    <td rowspan="3"><img name="reservas_r1_c1" src="imagenes/reservas_r1_c1.jpg" width="104" height="100" border="0" alt=""></td>
    <td><img name="reservas_r1_c2" src="imagenes/reservas_r1_c2.jpg" width="278" height="6" border="0" alt=""></td>
    <td rowspan="3"><img name="reservas_r1_c3" src="imagenes/reservas_r1_c3.jpg" width="7" height="100" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="6" border="0" alt=""></td>
  </tr>
  <tr>
    <td height="87" valign="top"><p align="center"><span class="Estilo1">
      <?php 

		require_once('conector/conector.php');
		 
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$nac = $_POST["nac"];
		$doc = $_POST["doc"];
		$doc2 = $_POST["doc2"];
		$pais = $_POST["pais"];
		$ciudad = $_POST["ciudad"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$cliente = $_POST["cliente"];
		$vehiculo = $_POST["vehiculo"];
		$fecha = $_POST["fecha"];
		$usuario = $_POST["usuario"];

		mysql_connect($hostname,$username,$password);
		mysql_select_db($database);
		
		/** Anteriormente la siguiente consulta estaba apuntando a la tabla habitacion2 se cambio a
		 * clientes para que verificara si ya se han guardado clientes
		 * */
		$usuarios_consulta = mysql_query("SELECT ID FROM clientes WHERE doc2='$doc2'") or die(mysql_error());
		$total_encontrados = mysql_num_rows ($usuarios_consulta);
		mysql_free_result($usuarios_consulta);

		if ($total_encontrados != 0) {
		echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
		  <tr>
			<th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
			  El Cliente ya esta Registrado</font></b></p>
			<p>&nbsp;</p></th>
		  </tr>
		</table>';
		exit;
		}
		

		mysql_query("INSERT INTO clientes (nombre,apellido,nac,doc,doc2,pais,ciudad,direccion,telefono,correo,cliente,vehiculo,fecha,usuario) VALUES ('$nombre','$apellido','$nac','$doc','$doc2','$pais','$ciudad','$direccion','$telefono','$correo','$cliente','$vehiculo','$fecha','$usuario')");

		mysql_close();

		echo ' <p align="center"><b><font face="Arial" color="#000066" size="1">El Cliente se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
		<p align="center" class="Estilo2">
		  <font face="Arial" size="2"> </font></p>
		';



		?>
    </span></p>
      <form name="form1" method="post" action="opcion_reserva.php?&codigo=<?php echo $doc2;  ?>">
        <div align="right">
          <input type="submit" name="Submit" value="Asignar Reservacion" class="botones" />
          <br>
          </p>
          </div>
      </form></td>
    <td><img src="imagenes/spacer.gif" width="1" height="87" border="0" alt=""></td>
  </tr>
  <tr>
    <td><img name="reservas_r3_c2" src="imagenes/reservas_r3_c2.jpg" width="278" height="7" border="0" alt=""></td>
    <td><img src="imagenes/spacer.gif" width="1" height="7" border="0" alt=""></td>
  </tr>
</table>
<p align="center" class="Estilo1">&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
