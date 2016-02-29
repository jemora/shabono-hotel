<html>
<head>

<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo4 {color: #FFFFFF}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(bg_grad.jpg);
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><p align="center"><b>
<script LANGUAGE="JavaScript">

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function checkAll() {
for (var j = 1; j <= 14; j++) {
box = eval("document.checkboxform.C" + j); 
if (box.checked == false) box.checked = true;
   }
}

function uncheckAll() {
for (var j = 1; j <= 14; j++) {
box = eval("document.checkboxform.C" + j); 
if (box.checked == true) box.checked = false;
   }
}

function switchAll() {
for (var j = 1; j <= 14; j++) {
box = eval("document.checkboxform.C" + j); 
box.checked = !box.checked;
   }
}
//  End -->
</script>
</head>



<body>
<center>
  <table width="700" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr>
      <th width="10" height="335" bgcolor="#000000" scope="col">&nbsp;</th>
      <th bgcolor="#FFFFFF" scope="col"><form name="checkboxform" method="post" action="reporte_lista_facturas_x_cancelar.php">
        <table width="378" border="0" align="center">
          <tr>
            <td colspan="2" bgcolor="#CCD8E6"><strong>Generar Reporte de Impresion </strong></td>
          </tr>
          <tr>
            <td colspan="2" class="small">Selecione los datos a listar: </td>
          </tr>
          <tr>
            <td width="228">Habitaci&oacute;n</td>
            <td width="181"><input type="checkbox" name="C2" checked value="ON"></td>
          </tr>
          <tr>
            <td>Cliente</td>
            <td><input type="checkbox" name="C3" checked value="ON"></td>
          </tr>
          <tr>
            <td>Monto de Factura </td>
            <td><input type="checkbox" name="C4" checked value="ON"></td>
          </tr>
          <tr>
            <td>Nombre de Habitacion </td>
            <td><input type="checkbox" name="C5" checked value="ON"></td>
          </tr>
          <tr>
            <td>Cantidad de Dias </td>
            <td><input type="checkbox" name="C6" checked value="ON"></td>
          </tr>
          <tr>
            <td>Fechas de estadia </td>
            <td><input type="checkbox" name="C7" checked value="ON"></td>
          </tr>
          <tr>
            <td>Usuario </td>
            <td><input type="checkbox" name="C8" checked value="ON"></td>
          </tr>
          <tr>
            <td><input name="C1" type="hidden" id="C1" value="ON" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><table width="200" border="0">
                <tr>
                  <td><input name="button" type="button" onClick="checkAll()" value="Seleccionar todos"></td>
                  <td><input name="button2" type="button" onClick="uncheckAll()" value="Deseleccionar todos"></td>
                  <td><input name="button3" type="button" onClick="switchAll()" value="Cambiar estado a todos"></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2"><div align="right">
                <input type="submit" name="Submit" value="   Generar Reporte  ">
            </div></td>
          </tr>
        </table>
        <p>
          <label></label>
        </p>
      </form>
      <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </th>
      <th width="10" bgcolor="#000000" scope="col">&nbsp;</th>
    </tr>
  </table>
</center>


</body>

</html>