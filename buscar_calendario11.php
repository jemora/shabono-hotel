
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
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<div align="center"><img src="imagenes/banne8.gif" width="607" height="30" /><br />
</div>
<table width="594" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="594" height="28" valign="top"><table width="596" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="584" height="28" bgcolor="#FFFFFF"><form action="?id2=calend1" method="post">
            <div align="left">
              <table width="582" border="0" cellspacing="0">
                <tr>
                  <th width="183" class="small" scope="col">Busqueda por Habitacion </th>
                  <th width="55" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="small">
                    Habitacion
                    
                  </span></font></font></th>
                  <th width="66" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="dato" id="dato">
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  id_hab ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <option value="<?php echo $row_rsCategorias['habitacion']?>" ><?php echo $row_rsCategorias['observaciones']?></option>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                    </select>
                  </span></font></font></th>
                  <th width="40" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="small">
                    Mes:
                    
                  </span></font></font></th>
                  <th width="104" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="mes_dato" id="mes_dato">
                      <option>Mes</option>
                      <option value="1">Enero</option>
                      <option value="2">Febrero</option>
                      <option value="3">Marzo</option>
                      <option value="4">Abril</option>
                      <option value="5">Mayo</option>
                      <option value="6">Junio</option>
                      <option value="7">Julio</option>
                      <option value="8">Agosto</option>
                      <option value="9">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  id_hab ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                    </select>
                  </span></font></font></th>
                  <th width="66" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="a" id="a">
                      <option value="0">A&ntilde;o</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  id_hab ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                      </select>
                    </span></font></font></th>
                  <th width="54" scope="col"><input name="submit2" type="submit" value="Buscar" /></th>
                </tr>
              </table>
              </div>
        </form></td>
        <td width="8" height="28" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td height="28" valign="top"><table width="598" height="15" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
      <tr>
        <td width="584" height="28" bgcolor="#FFFFFF"><form action="?id2=calend2" method="post">
            <div align="left">
              <table width="583" border="0" cellspacing="0">
                <tr>
                  <th width="244" class="small" scope="col">Busqueda por Mes </th>
                  <th width="40" scope="col">&nbsp;</th>
                  <th width="7" scope="col">&nbsp;</th>
                  <th width="48" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="small"> Mes: </span></font></font></th>
                  <th width="104" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="mes" id="select3">
                      <option>Mes</option>
                      <option value="1">Enero</option>
                      <option value="2">Febrero</option>
                      <option value="3">Marzo</option>
                      <option value="4">Abril</option>
                      <option value="5">Mayo</option>
                      <option value="6">Junio</option>
                      <option value="7">Julio</option>
                      <option value="8">Agosto</option>
                      <option value="9">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  id_hab ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                    </select>
                  </span></font></font></th>
                  <th width="66" scope="col"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
                    <select name="a" id="a">
                      <option value="0">A&ntilde;o</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  habitacion ORDER BY  id_hab ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
                      <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
                    </select>
                  </span></font></font></th>
                  <th width="60" scope="col"><input name="submit22" type="submit" value="Buscar" /></th>
                </tr>
              </table>
              </div>
        </form></td>
        <td width="10" height="28" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>
  <?php						 
          	
           if ( $id2  == 'calend1' )
			  { 
			  
				include("hab_11.php"); 	
                 } 
			else 
           if ( $id2  == 'calend2' )
			  { 
			include("demo33.php"); 		
                 } 
				
		 ?> ffffffffffffffffffffffffffffffffff
</p>
