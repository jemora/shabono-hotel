
<?php 
require_once('conector/conector.php');
?>

<html>
<head>
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>






<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
<table width="0" border="0" align="center" cellspacing="0">
  <tr>
    <th width="246" height="30" scope="col"><table width="100" height="28" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td height="28" bgcolor="#FFFFFF"><form action="resultados_buscar_reservacion.php?id=resultados1" method="post">
            <div align="left">
              <table width="244" border="0" cellspacing="0">
                <tr>
                  <th width="96" class="Estilo7" scope="col"><div align="right"> N&ordm; Habitacion </div></th>
                  <th width="37" class="Estilo7" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="numero" id="numero" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  habitacion ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <option value="<?php echo $row_rsCategorias['habitacion']?>" ><?php echo $row_rsCategorias['habitacion']?></option>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                    </select>
                  </span></font></font></th>
                  <th width="105" class="Estilo7" scope="col"><div align="left"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <input name="submit" type="submit" id="submit" value="Buscar" height="6"  size="6"/>
                  </span></font></font></div></th>
                </tr>
              </table>
            </div>
        </form></td>
      </tr>
    </table>    </th>
    <th width="335" colspan="2" rowspan="2" scope="col"><table width="176" height="28" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="174" height="28" bgcolor="#FFFFFF">
		
		<form name="form1" action="resultados_buscar_reservacion.php?id=resultados3" method="post">
            <div align="left">
          
              <div align="left">
                <table width="334" border="0" cellspacing="0">
                  <tr>
                    <th width="114" scope="col"><div align="right">Fecha Desde: </div></th>
                    <td width="152"><div align="right">
                      <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                      <a href="javascript:show_calendar('form1.fecha1');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
                    <th width="2" scope="col"></th>
                    <th width="54" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                      <input name="submit" type="submit" value="Buscar" />
                    </span></font></font></th>
                    <th width="2" scope="col">&nbsp;</th>
                  </tr>
                  <tr>
                    <th scope="col"><div align="right">Hasta:</div></th>
                    <td><div align="right">
                      <input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha1; ?>" size="15" />
                    <a href="javascript:show_calendar('form1.fecha2');" onMouseOver="window.status='Date Picker';return true;" onMouseOut="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></td>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                              </table>
              </div>
        </form></td>
      </tr>
    </table>    </th>
  </tr>
  <tr>
    <th height="31" scope="col"><form action="resultados_buscar_reservacion.php?id=resultados2" method="post">
      <div align="left">
      <div align="left">
        <table width="243" border="0" cellspacing="0">
          <tr>
            <th width="96" scope="col"><div align="right"><span class="Estilo7"> Habitacion</span></div></th>
            <th width="38" scope="col"><div align="right"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
              <select name="habitacion" id="habitacion" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  habitacion ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                <option value="<?php echo $row_rsCategorias['observaciones']?>" ><?php echo $row_rsCategorias['observaciones']?></option>
                <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
              </select>
            </span></font></font></div></th>
            <th scope="col"><div align="left"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
              <input name="submit2" type="submit" value="Buscar" />
            </span></font></font></div></th>
            </tr>
        </table>
      </div>
    </form></th>
  </tr>
  <tr>
    <th height="2" colspan="3" scope="col"></th>
  </tr>
</table>
</html>