<?php 
require_once('conector/conector.php');



?>








<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<p align="center"><img src="imagenes/banne12.gif" width="607" height="30" />

<table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
    <!--DWLayoutTable-->
    <tr>
      <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><div align="right"><span class="Estilo16">Imprimir</span></div></td>
            <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
          </tr>
      </table></td>
    </tr>
</table>
  <p>&nbsp;</p>
  <p align="center"><span class="estilocelda">Hemos Actualizado correctamente el Precio de la Temporada seleccionada <br />
      <a href="agregar_tipo_tarifas.php"><br />
  Regresar a Lista de Temporadas </a><br />
      <?php						 
          	

			  
require_once('conector/conector.php');
 
mysql_connect($hostname,$username,$password);
$sSQL="Update servicio   Set  
  precio='$precio',
  obser= '$obser'
 Where id_serv='$codigo'";
mysql_db_query($database,$sSQL);
////////////////////////////////////
mysql_connect($hostname,$username,$password);
$sSQL="Update serv_asig   Set  
  precio='$precio'
  Where  tipo2='$codigo2'";
mysql_db_query($database,$sSQL);

							
		 ?>
  </span><br />
<br />
</p>
