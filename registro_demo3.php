 <?php 
{
require_once('conector/conector.php');
require('mensajes.php');
$dato=$_POST['doc2'];

/////////////////////////////////////////////////////////--------------------------------------
mysql_connect($hostname,$username,$password);
mysql_select_db($database);

//////////////////////////////// consulta si la fecha es  mayor  a  la del dia
if ($fecha2 < $fecha1) {

 
echo $mensaje11;
exit;
}
//////////////////////////////// consulta si la fecha es  menor  a  la del dia
$fecha=date("Y-m-d");
$dato22=$_POST['fecha1'];
if ($dato22 < $fecha and $personas != 0) {
echo $mensaje11;
exit;
}
/////////////////////////////////////////////////////////--------------------------------------
if ($personas != 0) {

$usuarios_consulta = mysql_query("SELECT id FROM habitacion2 WHERE habitacion like '$habitacion' and '$fecha2' BETWEEN fecha1 and fecha2") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);
if ($total_encontrados != 0) {
 echo $mensaje1;
exit;
} }



$usuarios_consulta = mysql_query("SELECT id FROM caja WHERE opc like '0' and ref LIKE '1'") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);
if ($total_encontrados != 1) {
echo $mensaje2;
exit;
}
/////////////////////////////////////////////////////////--------------------------------------
$habitacion;	
$tipo=$id_tipo;
require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM serv_asig WHERE tipo2 LIKE '$id_serv'");
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
$precio=$precio1;
$subtotal1=$precio * $cant_dia;
if ($personas != 0) {

mysql_connect($hostname,$username,$password);


$sSQL="Update habitacion2 Set  

subtotal1='$subtotal1',
habitacion='$habitacion',
nota='$nota',
obsev='$obsev',
tipo='$tipo',
servicio='$servicio',
personas='$personas',
precio='$precio',
cant_dia='$cant_dia',
fecha1='$fecha1',
fecha2='$fecha2',
nom_hab='$nom_hab'


Where id like'$codigo'";


mysql_db_query($database,$sSQL);

	echo ' <p align="center"><b><font face="Arial" color="#000066" size="4">La informacion se ha Actualizado Correctamente</font></b><font color="#000066"></font></b></font></p>
<p align="center" class="Estilo2">
  <font face="Arial" size="2"> </font></p>
';	

mysql_close();
exit;

/////////////////////////////////////////////////////////--------------pantallas de resultados


}
}
?>