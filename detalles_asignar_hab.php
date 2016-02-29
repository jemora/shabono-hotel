<head>

<title>lista de habitaciones</title>



<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
.Estilo13 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo14 {font-size: 10px}
.Estilo15 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style><script language="Javascript">
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="208" bgcolor="#F4F4F4"><b><font face="Arial" color="#000066" size="2">Se ha registrado Correctamente</font></b><font color="#000066">&nbsp;</font> </td>
        <td width="21" bgcolor="#F4F4F4"><img src="imagenes/ico_5.gif" width="18" height="18" /></td>
        <td width="336" bgcolor="#F4F4F4"><div align="right"><strong><a href="javascript:imprSelec('seleccion')">Imprimir ficha de datos</a></strong></div></td>
        <td width="28" bgcolor="#F4F4F4"><div align="right"><a href="javascript:imprSelec('seleccion')"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
      </tr>
    </table></td>
  </tr>
</table><DIV ID="seleccion"><br />
<table width="601" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr bgcolor="#CBD1D9">
    <th width="306" bgcolor="#DDE4D7" scope="col"><div align="left"><span class="Estilo1">Ficha de Datos del Cliente:</span></div></th>
  </tr>
  <tr>
    <td><table width="601" border="0">

      <tr>
        <td width="105"><div align="left"><strong><span class="Estilo9">Cliente:</span></strong></div></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13">
          <?  echo  $_POST['doc2']; ?>
          <?  echo  $_POST['nombre']; ?>
          <?  echo  $_POST['apellido']; ?>
        </div>          </td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">Habitaci&oacute;n:</span></strong></div></td>
        <td width="78" class="Estilo9"><div align="left" class="Estilo13">
          <?  echo  $habitacion; ?>
        </div></td>
        <td width="142" class="Estilo9"><div align="right"><strong>Fecha Estadia</strong></div></td>
        <td width="258" class="Estilo9">Desde: <span class="Estilo13">
          <?  echo  $_POST['fecha1']; ?>
        Hasta: 
        <?  echo  $_POST['fecha2']; ?>
        </span></td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">N&ordm; de Personas:</span></strong></div></td>
        <td class="Estilo9"><div align="left" class="Estilo13">
          <?  echo  $_POST['personas']; ?>
        </div></td>
        <td class="Estilo9"><div align="right"><strong>Cantidad de dias</strong></div></td>
        <td class="Estilo9"><span class="Estilo13">
          <?  echo  $cant_dia; ?>
        </span></td>
      </tr>
      <tr>
        <td><div align="left"><strong><span class="Estilo9">Servicio:</span></strong></div></td>
        <td colspan="3" class="Estilo9"><div align="left" class="Estilo13">
          <?  echo  $_POST['servicio']; ?>
        </div></td>
      </tr>
      <tr>
        <td><strong><span class="Estilo9">Observaciones:</span></strong></td>
        <td colspan="3" class="Estilo9"><span class="Estilo13">
          <?  echo  $_POST['obsev']; ?>
        </span></td>
        </tr>
    </table></td>
  </tr>
</table>
</DIV>
</body>
</html>
