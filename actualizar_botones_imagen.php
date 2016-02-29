<html>
	<head>
		<title>Actualizar imagen botones</title>
		<script language="javascript">
			function actuar(peso, anchura, altura)	{
				this.peso.value = peso;
				this.ancho.value = anchura;
				this.alto.value = altura;
			}

			function ini()	{
				document.forms.formu.actualizar = actuar;
				window.frames.ver.location.href = "previsor1.php";
				document.forms.formu.actualizar(0, 0, 0);

			}
			function validar(f)	{
				enviar = /\.(gif|jpg|png|ico|bmp)$/i.test(f.archivo.value);
				if (!enviar)	alert("seleccione imagen");
				return enviar;
			}

			function limpiar()	{
				document.forms.formu.actualizar(0, 0, 0);
				f = document.getElementById("archivo");
				nuevoFile = document.createElement("input");
				nuevoFile.id = f.id;
				nuevoFile.type = "file";
				nuevoFile.name = "archivo";
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
					f.form.action = "previsor1.php";
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
<?php $codigo = $_GET["codigo"]; ?>
<?php 	require_once('css.php');

?>
<body onload="ini()">
	<div align="center"><img src="imagenes/banne16.gif" width="607" height="30"><br>
</div>
<table width=601 height=140 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="estilocelda">Actualizar Imagen Botones</td>
  </tr>
  <tr>
    <td height="92"><table width="165" border="0" align="center" cellpadding="0" cellspacing="2" class="tabla">
      <tr valign="middle" > </tr>
    </table>
    <form name="formu" ENCTYPE="multipart/form-data" onsubmit="return validar(this)"
		action="actualizar_botones_imagen2.php?codigo=<?  echo  $codigo; ?>" method="POST">
	<p>
	  <INPUT name="archivo" id="archivo" TYPE="file" onChange="checkear(this)">
  </p>
	<p>
		<!-- Area que muestra la imagen -->
		<iframe  src="previsor1.php" id="ver" name="ver" style="display: block; margin: auto; border-width: 2px; width: 200px; height: 250px;">
		</iframe>
		
		<!-- Limites aceptados para cargar la imagen -->
		<input type="hidden" name="maxpeso" value="80000" />
		<input type="hidden" disabled name="maxancho" value="640" />
		<input type="hidden" disabled name="maxalto" value="480" />
		
	  <input type="submit" value="Guardar Imagen" class="boton">
    </form></td>
  </tr>
  <tr>
    <td height="22">

</td>
  </tr>
</table>
<p>&nbsp;</p>

</body>
</html>
