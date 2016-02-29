<?php require_once('conector/conector.php');?> 
<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo1 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo2 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo3 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo4 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo5 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo6 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>
<style type="text/css">
<!--
body {
	background-image: url(bg_grad.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="700" border="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <th width="9" height="493" bgcolor="#000000">&nbsp;</th>
    <th width="670" valign="top" bgcolor="#FFFFFF"><div align="left"></div>
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
            <td><table width="562" height="62" align="center" cellpadding="2" cellspacing="2" class="estilotabla">
                <tr>
                  <td width="552" class="estilocelda"><table width="552" border="0" align="center" cellpadding="0" cellspacing="0">
                      <!--DWLayoutTable-->
                      <tr>
                        <td width="552" height="28" valign="top"><form action="resultados1.php" method="get">
                            <div align="right">
                              <table width="415" border="0">
                                <tr>
                                  <th width="111" class="small" scope="col">Buscador De Clientes </th>
                                  <th width="90" scope="col"><input name="criterio" type="text" id="criterio" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" /></th>
                                  <th width="118" scope="col"><label>
                                    <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099">
                                      <option value="0">Tipo de Busqueda</option>
                                      <option value="doc2">Cedula</option>
                                      <option value="nombre">Nombre</option>
                                      <option value="apellido">Apellido</option>
                                    </select>
                                  </label></th>
                                  <th width="78" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
                                </tr>
                              </table>
                            </div>
                        </form></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="22">&nbsp;</td>
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
        <div align="left"><br>
          <br />
          <?php require_once('conector/conector.php');?>
            <? 
//conecto con la base de datos
$conn = mysql_connect($hostname,$username,$password);
mysql_select_db($database,$conn);

//inicializo el criterio y recibo cualquier cadena que se desee buscar
$criterio = "";
if ($_GET["criterio"]!=""){
	$txt_criterio = $_GET["criterio"];
	$criterio = " where $tipo like '%" . $txt_criterio . "%'";
}

//Limito la busqueda
$TAMANO_PAGINA = 15;

//examino la p&aacute;gina a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
		$inicio = 0;
		$pagina=1;
}
else {
	$inicio = ($pagina - 1) * $TAMANO_PAGINA;
}

//miro a ver el n&uacute;mero total de campos que hay en la tabla con esa b&uacute;squeda
$ssql = "select * from clientes " . $criterio;
$rs = mysql_query($ssql,$conn);
$num_total_registros = mysql_num_rows($rs);
//calculo el total de p&aacute;ginas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

//pongo el n&uacute;mero de registros total, el tama&ntilde;o de p&aacute;gina y la p&aacute;gina que se muestra
echo "N&uacute;mero de registros encontrados: " . $num_total_registros . "<br><br>";


//construyo la sentencia SQL
$ssql = "select * from clientes " . $criterio . " limit " . $inicio . "," . $TAMANO_PAGINA;
$ssql1 = "select * from clientes ";


$rs = mysql_query($ssql);
$rs1 = mysql_query($ssql1);

while ($row=mysql_fetch_array($rs1))
while ($fila = mysql_fetch_object($rs)){

echo ' - '; echo $fila->doc2. "";
echo ' '; echo $fila->nombre. "";
echo ' '; echo $fila->apellido. "";
echo "<br>";
	
}
//cerramos el conjunto de resultados y la conexi&oacute;n con la base de datos
mysql_free_result($rs);





mysql_close($conn);


echo "<p>";

//muestro los distintos &iacute;ndices de las p&aacute;ginas, si es que hay varias p&aacute;ginas
if ($total_paginas >= 1){
	
			//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
		echo "P&aacute;gina " . $pagina . " de " . $total_paginas . "<p><b>";
}

if ($total_paginas > 1){
	for ($i=1;$i<=$total_paginas;$i++){
		if ($pagina == $i) 
			//si muestro el &iacute;ndice de la p&aacute;gina actual, no coloco enlace
			echo $pagina . " ";
		else
			//si el &iacute;ndice no corresponde con la p&aacute;gina mostrada actualmente, coloco el enlace para ir a esa p&aacute;gina
			echo "<a href='resultados1.php?pagina=" . $i . "&criterio=" . $txt_criterio . "'>" . $i . "</a> ";
	}
}

//muestro un formulario para marcar el criterio?>
        </div>    </th>
    <th width="7" bgcolor="#000000">&nbsp;</th>
  </tr>
</table>
</body>
</html>
