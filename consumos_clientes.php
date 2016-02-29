   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$resultserv1 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv2 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv3 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv4 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$resultserv5 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
?>





<html xmlns="http://www.w3.org/1999/xhtml">
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
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo14 {font-size: 12px}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style></head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
<table width="20" border="0" align="center" cellspacing="0">
  <tr>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col"><?php include("buscar_cliente4.php");?></th>
  </tr>
  <tr>
    <td><?php include("recursos.php");?></td>
  </tr>
  <tr>
    <td><?php include("detalles_clientes2.php");?></td>
  </tr>
  <tr>
    <td><?php include("menu_calendario2.php");?></td>
  </tr>
  <tr>
    <td height="96"><table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="626" height="23" valign="top" bgcolor="#FFFFFF"><strong>Consumos</strong> <img src="imagenes/ico_6.gif" alt="Consumos" width="18" height="18"></td>
      </tr>
      <tr>
        <td height="28" valign="top"><form name="form1" method="post" action="consumos_clientes.php?&id=consumo&codigo=<?
	      while ($row=mysql_fetch_array($resultserv5)) { echo "".$row["doc2"].""; } mysql_free_result($resultserv5)?>&codigo2=<?php echo $codigo2 ?>&multi=<?php echo $multi; ?>">
          <span class="Estilo14"><font 
                                face="Arial, Helvetica, sans-serif"><font 
                                face="Arial, Helvetica, sans-serif" size="1"><span class="titulos">
            <select name="tipo" id="tipo" style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
              <?php mysql_select_db($database, $connFlashblog);
$query_rsCategorias = "SELECT * FROM  tipo_consumo ORDER BY  tipo ASC";
$rsCategorias = mysql_query($query_rsCategorias, $connFlashblog) or die(mysql_error());
$row_rsCategorias = mysql_fetch_assoc($rsCategorias);
$totalRows_rsCategorias = mysql_num_rows($rsCategorias); 
	  
	  
do {  
?>
              <option value="<?php echo $row_rsCategorias['tipo']?>" ><?php echo $row_rsCategorias['tipo']?></option>
              <?php
} while ($row_rsCategorias = mysql_fetch_assoc($rsCategorias));
?>
            </select>
            </span></font></font></span>
          <label>
            <input type="submit" name="Submit" value="Consultar">
            </label>
        </form></td>
      </tr>
      <tr>
        <td height="22" valign="top"><?php		

           if ( $id  == 'consumo' )
			  { 
			    include("servicios.php");
				
                 } 
			
			
				
				
				
				
				
				else 
				
           if ( $id1  == 'adicionar' )
			  {
			  
			  require_once('conector/conector.php');
			  
 if (!isset($consumo))
 if (!isset($codigo3))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$resultdato1 = mysql_query("SELECT * FROM servicios01 WHERE nombre  LIKE '$consumo'");
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 


      while ($row=mysql_fetch_array($resultdato1))
      {
$precio="".$row["precio"].""; 
}
mysql_free_result($resultdato1);
				
$subt=$precio * $canti;			
mysql_query("INSERT INTO consumo (cliente,consumo,canti,precio,multi,fecha,subt,ref) VALUES ('$cliente','$consumo','$canti','$precio','$multi','$fecha','$subt','$ref')");






mysql_close();
			  
			   
			    echo "<strong>Consumo Agregado a Cuenta</strong>";	
                 } 
			 
		 ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
