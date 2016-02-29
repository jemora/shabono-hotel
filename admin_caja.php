<?php 
$dato001= $_SESSION['usuario_login'];
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE usuario  LIKE '$dato001'");

      
	  

?>
<?php  while ($row=mysql_fetch_array($result1)) { $fact= "".$row["fact"].""; }
mysql_free_result($result1)?>




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
    <th width="113" bgcolor="#FFFFFF" scope="col"><img src="imagenes/banner_caja.jpg" alt="Caja" width="139" height="17" longdesc="imagenes/banner_caja.jpg" /></th>
  </tr>

  
  

  
  
  
    <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_caja.php' target='frame' >- Aperturar Caja</a></div></th>
  </tr>" ;   }?>
  
      <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_facturas_cerrar_caja.php' target='frame' >- Cerrar Caja</a></div></th>
  </tr>" ;   }?>
  
  
  
  
    <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_fechas_aperturas.php' target='frame' >- Listado de Cierre de Caja</a></div></th>
  </tr>" ;   }?>
    <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='lista_cierre_caja_general.php' target='frame' >- Listado de Cierre de Caja General</a></div></th>
  </tr>" ;   }?>
   
    <?php 
if ( $fact == '1' )
			  { 

   echo "<tr>  
    <th scope='col'><div align='left'><a href='formulario_caja_gastos.php' target='frame' >- Aplicar gastos a Caja</a></div></th>
  </tr>" ;   }?>
   
  
  
</table>
