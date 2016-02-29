<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>.....:::..</title>
		</style>
		<script language="javascript">
			
			function actuar(peso, anchura, altura)	{
				this.peso.value = peso;
				this.ancho.value = anchura;
				this.alto.value = altura;
			}

			function ini()	{
				document.forms.formu.actualizar = actuar;
				window.frames.ver.location.href = "previsor.php";
				document.forms.formu.actualizar(0, 0, 0);

			}
			function validar(f)	{
				if(document.formu.nombre.value == "") {
					alert("Debe Colocar Los Nombres del Cliente");
					document.formu.nombre.focus();
					return false;
				}

				if(document.formu.apellido.value == "") {
					alert("Debe colocar Los Apellidos del Cliente");
					document.formu.apellido.focus();
					return false;	
				}
				if(document.formu.cedula.value == "") {
					alert("Debe colocar La Cedula del Cliente");
					document.formu.cedula.focus();
					return false;	
				}
				if(document.formu.telefono.value == "") {
					alert("Debe colocar El Telefono del Cliente");
					document.formu.telefono.focus();
					return false;	
				}
				if(document.formu.correo.value == "") {
					alert("Debe colocar El Correo del Cliente");
					document.formu.correo.focus();
					return false;	
				}
					
				if(document.formu.direccion.value == "") {
					alert("Debe colocar La Direccion del Cliente");
					document.formu.direccion.focus();
					return false;	
				}
				enviar = /\.(gif|jpg|png|ico|bmp)$/i.test(f.userfile.value);
				if (!enviar)	
					alert("seleccione imagen");
				return enviar;
			}

			function limpiar()	{
				document.forms.formu.actualizar(0, 0, 0);
				f = document.getElementById("userfile");
				nuevoFile = document.createElement("input");
				nuevoFile.id = f.id;
				nuevoFile.type = "file";
				nuevoFile.name = "userfile";
				nuevoFile.value = "";
				nuevoFile.onchange = f.onchange;
				nodoPadre = f.parentNode;
				nodoSiguiente = f.nextSibling;
				nodoPadre.removeChild(f);
				(nodoSiguiente == null) ? nodoPadre.appendChild(nuevoFile):
					nodoPadre.insertBefore(nuevoFile, nodoSiguiente);
			}

			function checkear(f)	{
				function no_prever() {
					alert("El fichero seleccionado no es válido...");
					limpiar();
				}
				function prever() {
					var campos = new Array("maxpeso", "maxalto", "maxancho");
					for (i = 0, total = campos.length; i < total; i ++)
						f.form[campos[i]].disabled = false;
					actionActual = f.form.action;
					targetActual = f.form.target;
					f.form.action = "previsor.php";
					f.form.target = "ver";
					f.form.submit();
					for (i = 0, total = campos.length; i < total; i ++)
						f.form[campos[i]].disabled = true;
					f.form.action = actionActual;
					f.form.target = targetActual;
				}

				(/\.(gif|jpg|png|ico|bmp)$/i.test(f.value)) ? prever() : no_prever();
			}

			function datosImagen(peso, ancho, alto, error)	{
				function mostrar_error()	{
					enviar = false;					
					mensaje = "Ha habido un error (error nº " + error + "):";
					if (error % 2 == 1) // tipo incorrecto
						mensaje += "\nel fichero no es válido";
					error = parseInt(error / 2);
					if (error % 2 == 1) // excede en peso
						mensaje += "\nla imagen pesa mogollón (" + peso + ").";
					error = parseInt(error / 2);
					if (error % 2 == 1) // excede en anchura
						mensaje += "\nla imagen excede en anchura (" + ancho + ").";
					error = parseInt(error / 2);
					if (error % 2 == 1) // excede en altura
						mensaje += "\nla imagen excede en altura (" + alto + ").";
					error = parseInt(error / 2);
					alert (mensaje);
					limpiar();
				}
				if (error == 0)
					document.forms.formu.actualizar(peso, ancho, alto);
				else
					mostrar_error();
			}
		</script>
	</head>
	<body onload="ini()">
<?php 	require_once('css.php');?>

<div align="center">
<div align="center"><img src="imagenes/banne14.gif" width="607" height="30" /></div>
<br />
<table width="280" height="165" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
  <tr>
    <td class="estilocelda"><strong>Registro de Botones:</strong>      

</td>
	  </tr>
	  <tr>
		<td height="135"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
		  <td width="350" height="279" valign="top">
		  <form name="formu" id="formu" ENCTYPE="multipart/form-data" action="guardar_botones.php" 
			method="POST" onsubmit="return validar(this)">
		<table width="600" border="0" cellspacing="0" cellpadding="4" align="center">
		  <tr bgcolor="#FFFFCC">
			<td width="183" bgcolor="#EEF3F7"><div align="right" class="Estilo1">
				<div align="left"><font size="2">Nombre
				  : </font></div>
			</div></td>
			<td width="401" bgcolor="#EEF3F7"><b>
			  <input type="text" name="nombre" class="imputbox" maxlength="15" id="nombre" />
			</b></td>
		  </tr>
	<td width="183" bgcolor="#EEF3F7"><div align="left">Apellido
	  : </div></td>
		<td width="401" bgcolor="#EEF3F7"><b>
		  <input type="text" name="apellido" class="imputbox" maxlength="15" id="apellido" />
		</b></td>
	</tr><tr>
	  <td width="183" bgcolor="#EEF3F7">Cedula: </td>
	  <td bgcolor="#EEF3F7"><b>
		<input type="text" name="cedula" class="imputbox" maxlength="15" id="cedula" />
	  </b></td>
	</tr>
	<td width="183" bgcolor="#EEF3F7"><div align="left">Telefono:</div></td>
		<td width="401" bgcolor="#EEF3F7"><b>
		  <input type="text" name="telefono" class="imputbox" maxlength="15" id="telefono" />
		</b></td>
	</tr>
	<tr bgcolor="#FFFFCC">
	  <td width="183" bgcolor="#EEF3F7"><div align="left">Correo : </div></td>
	  <td width="401" bgcolor="#EEF3F7"><b>
		<input type="text" name="correo" class="imputbox" size="20" maxlength="50" id="correo" />
	  </b></td>
	  <input type="hidden" name="nivelacceso" value="0" />
	  <input type="hidden" name="salir" value="salir" />
	</tr>
	<tr bgcolor="#FFFFCC">
	  <td width="183" bgcolor="#EEF3F7"><div align="left">Direccion : </div></td>
	  <td bgcolor="#EEF3F7"><label></label>
		  <b>
		  <textarea name="direccion" cols="20" class="imputbox" id="direccion"></textarea>
		</b></td>
	</tr>
	<tr bgcolor="#FFFFCC">
		<td height="40" colspan="2" bgcolor="#EEF3F7">
			<!-- Area que muestra la imagen -->
			<iframe  src="previsor.php" id="ver" name="ver" style="display: block; margin: auto; border-width: 2px; width: 200px; height: 250px;">
			</iframe>
			
			<!-- Limites aceptados para cargar la imagen -->
			<input type="hidden" name="maxpeso" value="80000" />
			<input type="hidden" disabled name="maxancho" value="640" />
			<input type="hidden" disabled name="maxalto" value="480" />
		</td>
	</tr>
	<tr bgcolor="#FFFFCC">
		<td height="40" colspan="2" bgcolor="#EEF3F7">
			<input name="userfile"  type="file" id="userfile" onChange="checkear(this)"/>
		</td>
	</tr>
	<tr bgcolor="#FFFFCC">
	  <td height="40" colspan="2" bgcolor="#EEF3F7"><input type="submit" name="Submit" value="  Registrar  " class="botones" /></td>
	</tr>
	<tr bgcolor="#FFFFCC"></tr>
	  </table>
		  </form>        <div align="center"></td>
		</tr>
	</table></td>
	  </tr>
	</table>
	</body>
</html>
