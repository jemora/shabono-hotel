<?php

if ($paisant!=$pais) {
       header("location:habitacion_bloquear.php?codigo=$codigo&pais=$pais");
    }
else {

		
		
	require_once('conector/conector.php');
 require('mensajes.php');
 
$dato=$_POST['doc2'];



mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT id FROM habitacion2 WHERE habitacion like '$prov' and '$fecha1' BETWEEN fecha1 and fecha2") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {

 include("buscar_cliente3.php");
echo $mensaje1;
exit;
}

if ($fecha2 < $fecha1) {

 include("buscar_cliente3.php");
echo $mensaje1;
exit;
}





$usuarios_consulta = mysql_query("SELECT id FROM habitacion2 WHERE habitacion like '$prov' and '$fecha2' BETWEEN fecha1 and fecha2") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {

 include("buscar_cliente3.php");
echo $mensaje1;
exit;
}

$usuarios_consulta = mysql_query("SELECT id FROM caja WHERE opc like '0' and ref LIKE '1'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 1) {

 include("buscar_cliente3.php");

echo $mensaje2;

exit;
}





$habitacion=$prov;	
$tipo=$pais;


require_once('conector/conector.php');
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM hab_tipo WHERE id_habitacion  LIKE '$tipo'");
$result12 = mysql_query("SELECT * FROM habitacion WHERE habitacion  LIKE '$habitacion'");

 while ($row=mysql_fetch_array($result1))
      {
$precio= "".$row["precio"].""; 
}
mysql_free_result($result1);

 while ($row=mysql_fetch_array($result12))
      {
$nom_hab= "".$row["observaciones"].""; 
}
mysql_free_result($result12);



///////////////////////////////////////////// cantidad de dias
function diff_days($fecha1, $fecha2)
{
        return floor(abs(strtotime($fecha1) - strtotime($fecha2))/86400);
}
$dias = diff_days($fecha1, $fecha2);
$cant_dia = $dias;
///////////////////////////////////////////////////////////





	
mysql_query("INSERT INTO habitacion2(habitacion,obsev,tipo,status,fecha,cant_dia,fecha1,fecha2,nom_hab,usuario) VALUES ('$habitacion','$obsev','$tipo','$status','$fecha','$cant_dia','$fecha1','$fecha2','$nom_hab','$usuario')");






mysql_close();



include("buscar_cliente3.php");

include("menu_calendario1.php");

echo $mensaje3;
	
		
 require('detalles_asignar_hab.php'); 
		
		
		
		
		
    }
?>


   <?php ?> 
<?


?>

     

