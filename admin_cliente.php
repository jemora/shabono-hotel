


<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result3 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result4 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $cliente1= "".$row["ag_cli"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $cliente2= "".$row["bus_cli"].""; }
mysql_free_result($result2)?>
<?php  while ($row=mysql_fetch_array($result3)) { $cliente3= "".$row["eli_cli"].""; }
mysql_free_result($result3)?>
<?php  while ($row=mysql_fetch_array($result4)) { $cliente4= "".$row["mod_cli"].""; }
mysql_free_result($result4)?>
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
<script language="JavaScript">
function Abrir_ventana (pagina) {
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=860, height=400, top=85, left=140";
window.open(pagina,"",opciones);
}
</script>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><a href="visualizador.php" target="frame"><img src="imagenes/banner_inicio.jpg" alt="Inicio" width="139" height="17" border="0" longdesc="imagenes/banner_inicio.jpg" /></a></th>
  </tr>
<tr>  
    <th scope='col'><div align='left'><a href="javascript:Abrir_ventana('buscar_calendario.php')">Planning</a></div></th>
  </tr>
  
  
  <?php 
  if ( $cliente1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='reservacion2.php' target='frame' >Reservaciones</a></div></th>
  </tr>" ;   }?>
  
      <?php 
  if ( $cliente1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente3.php' target='frame' >Asignar Habitación</a></div></th>
  </tr>" ;   }?>
  
  
       <?php 
  if ( $cliente1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_reservaciones.php' target='frame' >lista de Reservaciones</a></div></th>
  </tr>" ;   }?>
  
     
  
  
  
  
  
</table>
