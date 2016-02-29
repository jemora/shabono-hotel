   <?php require_once('conector/conector.php');?> 
<?php
	$codigo2 = $_GET['codigo2'];
	$codigo = $_GET['codigo'];
	if (isset($codigo)){
	 
		$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db ($database); 



		//Ejecutamos la sentencia SQL
		$result1 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2'  ");
		$result2 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result3 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result4 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result5 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result6 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result7 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result8 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result9 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result10 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result11 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
		$result12 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo2' ");
	}
?>





<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<?php include("logo.php");?>
<br>
<div align="center"><img src="imagenes/banne9.gif" width="607" height="30" />
</div>
</div>
<table width="601" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="619" height="28" valign="top"><table width="601" height="148" border="0" align="left" cellspacing="0" bgcolor="#FF9900">
  <tr>
    <td height="28" bgcolor="#FFFFFF"><form action="opcion8.php" method="post">
  
      <div align="left">
        <table width="609" border="0" cellspacing="0">
        <tr>
          <th width="230" scope="col"><span class="Estilo8"> Facturas de Clientes </span></th>
          <th width="132" scope="col"><input name="codigo" type="text" id="codigo" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" ></th>
          <th width="54" scope="col"><input name="submit" type="submit" value="Buscar" /></th>
          <th width="185" scope="col"><span class="small">Busqueda de Clientes </span></th>
        </tr>
      </table>
        </div>
    </form>    </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="601" border="0" align="center" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
              <td width="136" bgcolor="#F4F4F4" class="small">Regresar</td>
              <td width="364" bgcolor="#F4F4F4"><div align="right" class="small"><span >Imprimir</span></div></td>
              <td width="23" bgcolor="#F4F4F4"><div align="right"><a href="javascript: window.print()"><img src="imagenes/print.gif" width="16" height="11" border="0" /></a></div></td>
            </tr>
        </table></td>
      </tr>
    </table>
  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF"><?php include("detalles_clientes2.php");?>        </tr>
  <tr>
    <td height="10" bgcolor="#FFFFFF"><div align="left"><img src="imagenes/prefactura.gif" width="75" height="29"></div>
      </tr>
  <tr>
    <td height="10" bgcolor="#FFFFFF"><?php include("lista_facturas_pendientes1.php");?>  
  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF"><?php include("lista_consumos_prefactura1.php");?>  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF"><?php include("totales1.php");?>  </tr>
</table>

   

</td>
  </tr>
</table>
<br>
<br>
<br>
<br>
<p align="center">&nbsp;</p>
</body>
</html>
