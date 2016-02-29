
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>






<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title><script language='javascript' src="popcalendar.js"></script> 
<script language='javascript' src="popcalendar2.js"></script><style type="text/css">
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo5 {color: #000000}
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
    <th width="29" scope="col">&nbsp;</th>
    <th width="553" colspan="2" scope="col"><table width="176" height="28" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="174" height="28" bgcolor="#FFFFFF"><form name="form1" action="?id2=tipo" method="post">
          <div align="left">
                <table width="550" border="0" cellspacing="0">
                  <tr>
                    <th colspan="5" scope="col"><div align="left" class="medium Estilo5"><strong>Habitaciones Ocupadas por Fecha </strong></div></th>
                    </tr>
                  <tr>
                    <th width="147" height="26" scope="col"><span class="Estilo5"></span></th>
                    <th width="47" scope="col"><span class="Estilo5"></span></th>
                    <th width="72" scope="col"><div align="right" class="small Estilo5">Fecha Desde:</div></th>
                    <th width="195" scope="col"><div align="right">
                      <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                      <a href="javascript:show_calendar('calform.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                    <th width="79" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos Estilo5">
                      <input name="submit22222" type="submit" value="Buscar" />
                    </span></font></font></th>
                  </tr>
                  <tr>
                    <th scope="col"><span class="Estilo5"></span></th>
                    <th scope="col"><span class="Estilo5"></span></th>
                    <th scope="col"><div align="right" class="small Estilo5">Fecha Hasta:</div></th>
                    <th scope="col"><div align="right">
                      <input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha1; ?>" size="15" />
                      <a href="javascript:show_calendar('calform.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                    <th scope="col"><span class="Estilo5"></span></th>
                  </tr>
                </table>
              </div>
        </form></td>
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
			 include("lista_ocupadas.php"); 
                 } 
			else 
           if ( $test1[0] == '0' )
			  { 
			  			  echo "";
			  
	
                 } 
		 ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
