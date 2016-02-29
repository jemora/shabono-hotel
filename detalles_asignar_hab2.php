<head>

<title>lista de habitaciones</title>



<script language="Javascript">
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
<style type="text/css">
<!--
.Estilo2 {font-size: 9px}
-->
</style>
</head>

<body>

<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
  <!--DWLayoutTable-->
  <tr>
    <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="122" height="30" bgcolor="#F4F4F4"><span class="Estilo2"><b class="small"><font face="Arial" color="#000066">Se ha registrado Correctamente</font></b> </span></td>
        <td width="18" bgcolor="#FFFFFF"><img src="imagenes/ico_5.gif" width="18" height="18" /></td>
        <td width="8" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
        <td width="205" bgcolor="#EFEFEF"><a href="javascript:Abrir_ventana('formulario_acompanante.php?&codigo=<?php echo $codigo ?>&multi=<?php echo $multi; ?>')"><img src="imagenes/mas_visitas.gif" width="235" height="28" border="0" /></a></td>
        <td width="238" bgcolor="#F4F4F4"><a href="habitacion_reservacion_multi.php?&codigo=<?php echo $codigo ?>&multi=<?php echo $multi; ?>"><img src="imagenes/mas_reservas.gif" width="235" height="28" border="0" longdesc="imagenes/mas_reservas.gif"></a></td>
      </tr>
    </table></td>
  </tr>
</table>
  </DIV>
</body>
</html>
