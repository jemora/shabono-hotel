


<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");

      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $consumos1= "".$row["asi_con"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $consumos2= "".$row["con_rea"].""; }
mysql_free_result($result2)?>

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
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><img src="imagenes/banner_reportes.jpg" alt="Reportes" width="139" height="17" longdesc="imagenes/banner_reportes.jpg" /></th>
  </tr>
  <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_factura.php' target='frame' >- Reporte de Facturas</a></div></th>
  </tr>" ;   }?>
   <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_habitacion_x_cancelarse.php' target='frame' >- Habitaciones por Cancelarse</a></div></th>
  </tr>" ;   }?>
  <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente_alojados.php' target='frame' >- Clientes Alojados</a></div></th>
  </tr>" ;   }?>
  
   <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_reservacion_x_tipo.php' target='frame' >- Habitaciones Reservadas por Tipo</a></div></th>
  </tr>" ;   }?>
     <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscador_ocupadas2.php' target='frame' >- Habitaciones Ocupadas por Tipo</a></div></th>
  </tr>" ;   }?>
  <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscador_reservadas.php' target='frame' >- Habitaciones Reservadas</a></div></th>
  </tr>" ;   }?>
  <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='buscador_ocupadas.php' target='frame' >- Habitaciones Ocupadas</a></div></th>
  </tr>" ;   }?>
    <?php 
  if ( $consumos1 == '1' )
			  { 
  
   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_reservaciones_vencidas.php' target='frame' >- Reservaciones Vencidas</a></div></th>
  </tr>" ;   }?>
  
</table>
