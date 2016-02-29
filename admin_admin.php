


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
$result5 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result6 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
?>
<?php  while ($row=mysql_fetch_array($result1)) { $admin1= "".$row["adm_1"].""; }
mysql_free_result($result1)?>
<?php  while ($row=mysql_fetch_array($result2)) { $admin2= "".$row["adm_2"].""; }
mysql_free_result($result2)?>
<?php  while ($row=mysql_fetch_array($result3)) { $admin3= "".$row["adm_3"].""; }
mysql_free_result($result3)?>
<?php  while ($row=mysql_fetch_array($result4)) { $admin4= "".$row["adm_4"].""; }
mysql_free_result($result4)?>
<?php  while ($row=mysql_fetch_array($result5)) { $admin5= "".$row["adm_5"].""; }
mysql_free_result($result5)?>
<?php  while ($row=mysql_fetch_array($result6)) { $admin6= "".$row["adm_6"].""; }
mysql_free_result($result6)?>
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
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<table width="140" border="0" cellspacing="0" bordercolor="#666600">
  <tr>
    <th width="113" bgcolor="#FFFFFF" scope="col"><img src="imagenes/banner_admin.jpg" alt="Administracion" width="139" height="17" longdesc="imagenes/banner_admin.jpg" /></th>
  </tr>
    <?php 
  if ( $admin1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='reportes.php' target='frame' >- Reportes de Cuentas </a></div></th>
  </tr>" ;   }?>
   
  
 <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
  
      <?php 
  if ( $admin1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='habitacion_bloquear.php' target='frame' >- Bloquear Habitación </a></div></th>
  </tr>" ;   }?>
   
   
   
   
    <?php 
  if ( $admin1 == '1' )
			  { 
  
  echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente5.php' target='frame' >- Cancelar Habitación Asignada</a></div></th>
  </tr>" ;   }?>
  
  
<?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='agregar_habitacion01.php' target='frame' >- Agregar Habitación</a></div></th>
  </tr>" ;   }?>
  
  
  <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_habitaciones_creadas.php' target='frame' >- Habitación Creadas</a></div></th>
  </tr>" ;   }?>
  
  
  
    <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='agregar_tipo_habitacion.php' target='frame' >- Agregar Tipo de Habitación</a></div></th>
  </tr>" ;   }?>
  
  
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
      <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='agregar_tipo_tarifas.php' target='frame' >- Agregar Temporadas</a></div></th>
  </tr>" ;   }?>
  
   <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_asignar_temporada.php' target='frame' >- Asignar Temporada a Habitacion</a></div></th>
  </tr>" ;   }?>
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
  
     <?php 
  if ( $admin1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_empresas_admin.php' target='frame' >- Lista de Empresas</a></div></th>
  </tr>" ;   }?>
  
     <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='agregar_tipo_consumo.php' target='frame' >- Agreagar Articulo de Consumo</a></div></th>
  </tr>" ;   }?>
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
     <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='registro_botones.php' target='frame' >- Agregar Botones</a></div></th>
  </tr>" ;   }?>
   <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_botones.php' target='frame' >- Lista de Botones</a></div></th>
  </tr>" ;   }?>
  
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
    <?php 
  if ( $admin1 == '1' )
			  { 
  
    echo "<tr>  
    <th scope='col'><div align='left'><a href='buscar_cliente1.php' target='frame' >- Eliminar Clientes</a></div></th>
  </tr>" ;   }?>
   <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='registro.php' target='frame' >- Agregar Usuario</a></div></th>
  </tr>" ;   }?>
  
  
    <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_usuarios.php' target='frame' >- Privilegios Usuarios</a></div></th>
  </tr>" ;   }?>
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
  
  
  
  
  
    <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_crear_caja.php' target='frame' >- Crear Caja</a></div></th>
  </tr>" ;   }?>
  
       <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_cierre_caja_dia.php' target='frame' >- Cerrar Caja por Fecha</a></div></th>
  </tr>" ;   }?>
       <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_cierre_caja_mes.php' target='frame' >- Cerrar Caja por Mes</a></div></th>
  </tr>" ;   }?>
  
  
    <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='impuesto.php' target='frame' >- Impuestos</a></div></th>
  </tr>" ;   }?>
  
     <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='hora_hotel.php' target='frame' >- Hora Hotelera</a></div></th>
  </tr>" ;   }?>
  
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
  
  
  
  
  
    <?php 
if ( $admin2 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='informacion01.php' target='frame' >- Información del Sistema</a></div></th>
  </tr>" ;   }?>
    <?php 
if ( $admin2 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_usuarios_admin.php' target='frame' >- Administrador del Sistema</a></div></th>
  </tr>" ;   }?>
      <?php 
if ( $admin2 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='permisos_factura.php' target='frame' >- Configurar Factura</a></div></th>
  </tr>" ;   }?>
  
  
      <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'>_________________</a></div></th>
  </tr>" ;   }?>
      <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_reservaciones_web.php' target='frame' >- Reservaciones Online</a></div></th>
  </tr>" ;   }?>
      <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_asignar_temporada_web.php' target='frame' >- Tarifas WEB</a></div></th>
  </tr>" ;   }?>
        <?php 
if ( $admin1 == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='comentarios.php' target='frame' >- Comentarios y sugerencias</a></div></th>
  </tr>" ;   }?>
</table>
