<?php

if ($paisant!=$pais) {
    header("location:opcion_reserva.php?codigo=$codigo&pais=$pais&fecha1=$fecha1&fecha2=$fecha2&habitacion=$habitacion");
    }
else {
require_once('conector/conector.php');
require('mensajes.php');
                                         $dato=$_POST['doc2'];

/////////////////////////////////////////////////////////--------------------------------------
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
//////////////////////////////// consulta si la fecha es  mayor  a  la del dia
if ($fecha2 < $fecha1) {

 include("buscar_cliente3.php");
echo $mensaje11;
exit;
}
//////////////////////////////// consulta si la fecha es  menor  a  la del dia
$fecha=date("Y-m-d");
if ($fecha1 < $fecha) {

 include("buscar_cliente3.php");
echo $mensaje11;
exit;
}

/////////////////////////////////////////////////////////--------------------------------------

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

/////////////////////////////////////////////////////////--------------------------------------
$habitacion=$prov;	
$tipo=$pais;
require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM hab_tipo WHERE id_tipo LIKE '$tipo'");
$result12 = mysql_query("SELECT * FROM habitacion WHERE habitacion  LIKE '$habitacion'");

while ($row=mysql_fetch_array($result1))
      {
$precio1= "".$row["precio"].""; 
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
$precio=$precio1+$servicio;
$subtotal1=$precio * $cant_dia;
mysql_query("INSERT INTO habitacion2(doc2,habitacion,nota,subtotal1,obsev,tipo,status,servicio,personas,fecha,precio,cant_dia,fecha1,fecha2,opc2,multi,nombre,apellido,nom_hab,usuario) VALUES ('$doc2','$habitacion','$nota','$subtotal1','$obsev','$tipo','$status','$servicio','$personas','$fecha','$precio','$cant_dia','$fecha1','$fecha2','$opc2','$multi','$nombre','$apellido','$nom_hab','$usuario')");
mysql_close();


/////////////////////////////////////////////////////////--------------pantallas de resultados
include("buscar_cliente3.php");
include("menu_calendario1.php");
require('detalles_asignar_hab2.php'); 
}
?>
     

