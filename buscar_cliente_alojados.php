
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>






<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo2 {font-size: 10px}
-->
</style>
<script language="JavaScript" type="text/javascript" src="date-picker.js"></script> 


<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" /></div>
<br />
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
    <td><table width="582" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="582" height="18" valign="top">
    <form name="form1" action="?id2=calend1" method="post">
    
    

    <div align="left">
              <table width="572" border="0" align="right" cellspacing="0">
                <tr>
                  <th width="283" class="Estilo7" scope="col"><div align="right"><span class="Estilo1">Reportes Clientes Alojados por Fecha </span></div></th>
                  <th width="72" class="Estilo7" scope="col"><div align="right" class="small">Desde</div></th>
                  <th width="154" scope="col"><div align="right">
                    <input name="fecha1" type="text" id="fecha1" value="<?  echo  $fecha1; ?>" size="15" />
                    <a href="javascript:show_calendar('form1.fecha1');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                  <th width="55" scope="col"><input name="submit2" type="submit" value="Buscar" /></th>
                </tr>
                <tr>
                  <th colspan="2" class="Estilo7" scope="col"><div align="right" class="small">Hasta</div></th>
                  <th scope="col"><div align="right">
                    <input name="fecha2" type="text" id="fecha2" value="<?  echo  $fecha1; ?>" size="15" />
                    <a href="javascript:show_calendar('form1.fecha2');" onmouseover="window.status='Date Picker';return true;" onmouseout="window.status='';return true;"><img src="show-calendar.gif" width="24" height="22" border="0" align="absmiddle" /></a></div></th>
                  <th scope="col">&nbsp;</th>
                </tr>
                <tr>
                  <th colspan="4" class="Estilo7" scope="col"><hr /></th>
                  </tr>
          </table>
        </div>
    </form></td>
  </tr>
</table>
   <?php include('buscador_cliente2.php'); ?></td>
    <td background="imagenes/visor_r2_c3.jpg">&nbsp;</td>
    <td><img src="imagenes/spacer.gif" width="1" height="55" border="0" alt="" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="imagenes/visor_r3_c1.jpg" alt="" name="visor_r3_c1" width="607" height="13" border="0" id="visor_r3_c1" /></td>
    <td><img src="imagenes/spacer.gif" width="1" height="13" border="0" alt="" /></td>
  </tr>
</table>
<table width="600" border="0" align="center" cellspacing="0">
  <tr>
    <td><?php require_once('conector/conector.php'); ?>
      <?php
 

//if (!isset($codigo))
//$link = mysql_connect($hostname, $username , $password); 
//mysql_select_db($database ); 

//$test11a = mysql_query("SELECT COUNT(*) from facturas WHERE  fecha3 like '$fecha1' ");
//$test1 = mysql_fetch_row($test11a);  and $test1[0] >= '1'

$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$result1T4 = mysql_query("SELECT * FROM habitacion2  WHERE  '$fecha11' BETWEEN fecha1 and '$fecha22' ");
?>
      <?php  while ($row=mysql_fetch_array($result1T4))  { $habitacionT4= "".$row["habitacion"].""; } mysql_free_result($result1T4) ?>
      <?php						 
          	if ( $id2  == 'calend1'  )
			  { 
		    include("lista_cliente_alojados.php"); 
                 } 
			else 
           if ( $id2  == 'calend2'  )
			  { 
		   echo "dasdasdasd";
		    include("lista_cliente_alojados2.php"); 
                 } 
			else 
           
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
<p>&nbsp;</p>
