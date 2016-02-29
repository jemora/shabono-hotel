<?php
	require_once('conector/conector.php');
 require('mensajes.php');
 
$dato=$_POST['doc2'];



$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result12 = mysql_query("SELECT * FROM habitacion2 WHERE id  LIKE '$codigo'");

 while ($row=mysql_fetch_array($result12))
      {
$precio= "".$row["precio"].""; 
}
mysql_free_result($result12);



///////////////////////////////////////////// cantidad de dias
function diff_days($fecha1, $fecha2)
{
        return floor(abs(strtotime($fecha1) - strtotime($fecha2))/86400);
}
$dias = diff_days($fecha1, $fecha2);
$cant_dia = $dias;
$subtotal1=$precio * $cant_dia;

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$usuarios_consulta = mysql_query("SELECT id FROM habitacion2 WHERE habitacion like '$prov' and '$fecha2'!= fecha1 and fecha1 BETWEEN '$fecha2' and fecha2") or die(mysql_error());
$total_encontrados = mysql_num_rows ($usuarios_consulta);
mysql_free_result($usuarios_consulta);

if ($total_encontrados != 0) {



mysql_connect($hostname,$username,$password);
$sSQL="Update habitacion2 Set  fecha2='$fecha2', cant_dia='$cant_dia', subtotal1='$subtotal1' Where id like'$codigo'";
mysql_db_query($database,$sSQL);

 include('recursos2.php');
 

mysql_close();


}

else if ($total_encontrados != 1) {



echo $mensaje111;

mysql_close();

}









//$usuarios_consulta = mysql_query("SELECT id FROM habitacion2 WHERE habitacion like '$prov' and '$fecha2' BETWEEN fecha1 and fecha2") or die(mysql_error());
//$total_encontrados = mysql_num_rows ($usuarios_consulta);
//mysql_free_result($usuarios_consulta);

//if ($total_encontrados != 0) {

// include("buscar_cliente3.php");
//echo $mensaje1;
//exit;
//}

//$usuarios_consulta = mysql_query("SELECT id FROM caja WHERE opc like '0' and ref LIKE '1'") or die(mysql_error());
//$total_encontrados = mysql_num_rows ($usuarios_consulta);
//mysql_free_result($usuarios_consulta);

//if ($total_encontrados != 1) {

// include("buscar_cliente3.php");

//echo $mensaje2;

//exit;
//}













?>



     

