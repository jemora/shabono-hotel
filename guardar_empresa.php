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
		<?php 

		require_once('conector/conector.php');
		 


		mysql_connect($hostname,$username,$password);
		mysql_select_db($database);

		$empresa = $_POST["empresa"];
		$nac = $_POST["nac"];
		$pais = $_POST["pais"];
		$ciudad = $_POST["ciudad"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		$correo = $_POST["correo"];
		$rif = $_POST["rif"];
		$fecha = $_POST["fecha"];
		$usuario = $_POST["usuario"];


		$usuarios_consulta = mysql_query("SELECT ID FROM empresas WHERE empresa='$empresa'") or die(mysql_error());
		$total_encontrados = mysql_num_rows ($usuarios_consulta);
		mysql_free_result($usuarios_consulta);

		if ($total_encontrados != 0) {
			echo '<table width="323" border="1" align="center" cellspacing="0" bordercolor="#000000">
			  <tr>
				<th width="317" scope="col"><p><b><font face="Arial" color="#990000" size="2"><br />
				  empresa ya esta Registrada</font></b></p>
				<p>&nbsp;</p></th>
			  </tr>
			</table>';
			exit;
		}

		mysql_query("INSERT INTO empresas (empresa,nac,pais,ciudad,direccion,telefono,correo,rif,fecha,usuario) VALUES ('$empresa','$nac','$pais','$ciudad','$direccion','$telefono','$correo','$rif','$fecha','$usuario')");

		mysql_close();

		echo ' <p align="center"><b><font face="Arial" color="#000066" size="2">LA Empresa se Ha registrado Correctamente</font></b><font color="#000066"></font></b></font></p>
		<p align="center" class="Estilo2">
		  <font face="Arial" size="2"> </font></p>
		';
	?>
	</p>
	<p>&nbsp;</p>
	</body>
</html>
