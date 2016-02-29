
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>






<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title><script language='javascript' src="popcalendar.js"></script> 
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script>
<script language='javascript' src="popcalendar2.js"></script><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /></div>
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
    <th width="246" height="30" class="small" scope="col"><strong>Reporte Facturas por fecha</strong></span></th>
    <th width="335" colspan="2" rowspan="2" scope="col"><table width="176" height="28" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="174" height="28" bgcolor="#FFFFFF">
		
		<form name="form1" action="?id2=calend1" method="post">
            <div align="left">
          
              <div align="left">
                <table width="334" border="0" cellspacing="0">
                  <tr>
                    <th width="115" scope="col"><div align="right" class="small">Fecha Desde: </div></th>
                    <td width="148"><div align="right">
                      <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                    </div></td>
                    <th width="3" scope="col"><a href="javascript:show_calendar('form1.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></th>
                    <th width="54" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                      <input name="submit22222" type="submit" value="Buscar" />
                    </span></font></font></th>
                    <th width="4" scope="col">&nbsp;</th>
                  </tr>
                  <tr>
                    <th scope="col"><div align="right" class="small">Hasta:</div></th>
                    <td><div align="right">
                      <input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha2; ?>" size="15" />
                    </div></td>
                    <th scope="col"><a href="javascript:show_calendar('form1.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></th>
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
    <th height="16" scope="col">&nbsp;</th>
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
    <td><?php

if (!isset($codigo))
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 

$test11a = mysql_query("SELECT COUNT(*) from facturas WHERE   fecha3 BETWEEN '$fecha1' and '$fecha2' ");
$test1 = mysql_fetch_row($test11a);


?>
      <?php						 
          	
           if ( $id2  == 'calend1' and $test1[0] >= '1' )
			  { 
			 include("lista_facturas_canceladas.php"); 
                 } 
			else 
           if ( $test1[0] == '0' )
			  { 
			  			  echo "<table width=\"613\" border=\"0\" align=\"center\" cellspacing=\"0\">
  <tr>
    <th width=\"549\" scope=\"col\"><div align=\"left\"><strong>No hay registro de Facturas</strong></div>    </th>
  </tr>
</table>";
			  
	
                 } 
		 ?></td>
  </tr>
</table>
<p>&nbsp;</p>
