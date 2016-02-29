
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>






<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {font-size: 10px}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo4 {color: #006600}
-->
</style>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" />



<br />
</div>
</p>
<table width="607" border="0" align="center" cellpadding="0" cellspacing="0">
  <!-- fwtable fwsrc="Untitled" fwbase="visor.jpg" fwstyle="Dreamweaver" fwdocid = "237802607" fwnested="0" -->
  <tr>
    <td><img src="imagenes/spacer.gif" width="5" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="593" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="9" height="1" border="0" alt="" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r1_c1.jpg" alt="" name="visor_r1_c1" width="607" height="11" border="0" id="visor_r1_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="11" border="0" alt="" /></td>
  </tr>
  <tr>
    <td background="imagenes/visor_r2_c1.jpg">&nbsp;</td>
    <td><table width="0" border="0" align="center" cellspacing="0">
  <tr>
    <th width="245" height="81" scope="col"><form name="form2" action="?id2=tipo2" method="post">
          <div align="left">
                <table width="232" border="0" cellspacing="0">
                  <tr>
                    <th colspan="3" scope="col"><div align="left">Busqueda por Codigo Cliente</div></th>
                  </tr>
                  <tr>
                    <th width="68" scope="col">&nbsp;</th>
                    <th width="90" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
                    <th width="68" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                      <input name="submit2" type="submit" value="Buscar" />
                    </span></font></font></th>
                  </tr>
                </table>
              </div>
    </form></th>
    <th width="344" colspan="2" scope="col"><table width="326" height="64" border="0" align="center" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="324" height="64" bgcolor="#FFFFFF"><form name="form1" action="?id2=tipo" method="post">
          <div align="left">
                <table width="338" border="0" cellspacing="0">
                  <tr>
                    <th colspan="3" scope="col"><div align="left" class="medium Estilo4"><strong>Habitaciones Reservadas por Fecha </strong></div></th>
                    </tr>
                  <tr>
                    <th width="102" height="26" scope="col"><div align="right" class="small">Fecha Desde:</div></th>
                    <th width="148" scope="col"><div align="right">
                      <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                      <a href="javascript:show_calendar('form1.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                    <th width="82" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                      <input name="submit" type="submit" id="submit" value="Buscar" />
                    </span></font></font></th>
                  </tr>
                  <tr>
                    <th scope="col"><div align="right" class="small">Fecha Hasta:</div></th>
                    <th scope="col"><div align="right">
                      <input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha2; ?>" size="15" />
                      <a href="javascript:show_calendar('form1.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                    <th scope="col"><a href="javascript:show_calendar('form1.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"></a></th>
                  </tr>
                </table>
                </div>
        </form>
          </td>
      </tr>
      
    </table>    </th>
  </tr>
  
  <tr>
    <th height="2" colspan="3" scope="col"></th>
  </tr>
</table></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
  </tr>
</table>
<table width="601" border="0" align="center" cellspacing="0">
  <tr>
    <td><?php include('imprimir.php'); ?></td>
  </tr>
  <tr>
    <td><?php						 
          	
           if ( $id2  == 'tipo' )
			  { 
			 include("lista_reservadas.php"); 
                 } 
			else 
           if ( $id2  == 'tipo2'  )
			  { 
			  			
						
						include("lista_reservadas_codigo.php");  
			  
	
                 } 
		 ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
