<?php require_once('conector/conector.php');?> 



<?php  // dias del mes
$dia_1 = '01'; $dia_2 = '02'; $dia_3 = '03'; $dia_4 = '04'; $dia_5 = '05'; $dia_6= '06'; $dia_7= '07'; $dia_8 = '08'; $dia_9 = '09'; $dia_10 = '10';
$dia_11 = '11'; $dia_12 = '12'; $dia_13 = '13'; $dia_14 = '14'; $dia_15 = '15'; $dia_16 = '16'; $dia_17 = '17'; $dia_18 = '18'; $dia_19 = 19; 
$dia_20 = '20'; $dia_21 = '21'; $dia_22 = '22'; $dia_23 = '23'; $dia_24 = '24'; $dia_25 = '25'; $dia_26 = '26'; $dia_27 = '27'; $dia_28 = 28;
$dia_29 = '29'; $dia_30 = '30'; $dia_31 = '31';

?>

<?
 
 
 
 
 
 
//$ano='2008';
//$mes='02';


//$dato = date("$ano-$mes-$dia");


if (!isset($codigo))
 $dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 
//////////////// ocupadas
$fecha_1=date("$ano-$mes-$dia_1");
$result11 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_1' BETWEEN fecha1 and fecha2 ");
$fecha_2=date("$ano-$mes-$dia_2");
$result12 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_2' BETWEEN fecha1 and fecha2 ");
$fecha_3=date("$ano-$mes-$dia_3");
$result13 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_3' BETWEEN fecha1 and fecha2 ");
$fecha_4=date("$ano-$mes-$dia_4");
$result14 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_4' BETWEEN fecha1 and fecha2 ");
$fecha_5=date("$ano-$mes-$dia_5");
$result15 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_5' BETWEEN fecha1 and fecha2 ");
$fecha_6=date("$ano-$mes-$dia_6");
$result16 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_6' BETWEEN fecha1 and fecha2 ");
$fecha_7=date("$ano-$mes-$dia_7");
$result17 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_7' BETWEEN fecha1 and fecha2 ");
$fecha_8=date("$ano-$mes-$dia_8");
$result18 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_8' BETWEEN fecha1 and fecha2 ");
$fecha_9=date("$ano-$mes-$dia_9");
$result19 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_9' BETWEEN fecha1 and fecha2 ");
$fecha_120=date("$ano-$mes-$dia_10");
$result120 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_120' BETWEEN fecha1 and fecha2 ");
$fecha_121=date("$ano-$mes-$dia_11");
$result121 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_121' BETWEEN fecha1 and fecha2 ");
$fecha_122=date("$ano-$mes-$dia_12");
$result122 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_122' BETWEEN fecha1 and fecha2 ");

$fecha_123=date("$ano-$mes-$dia_13");
$result123 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_123' BETWEEN fecha1 and fecha2 ");
$fecha_124=date("$ano-$mes-$dia_14");
$result124 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_124' BETWEEN fecha1 and fecha2 ");
$fecha_125=date("$ano-$mes-$dia_15");
$result125 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_125' BETWEEN fecha1 and fecha2 ");
$fecha_126=date("$ano-$mes-$dia_16");
$result126 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_126' BETWEEN fecha1 and fecha2 ");
$fecha_127=date("$ano-$mes-$dia_17");
$result127 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_127' BETWEEN fecha1 and fecha2 ");
$fecha_128=date("$ano-$mes-$dia_18");
$result128 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_128' BETWEEN fecha1 and fecha2 ");
$fecha_129=date("$ano-$mes-$dia_19");
$result129 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_129' BETWEEN fecha1 and fecha2 ");
$fecha_130=date("$ano-$mes-$dia_20");
$result130 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_130' BETWEEN fecha1 and fecha2 ");
$fecha_131=date("$ano-$mes-$dia_21");
$result131 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_131' BETWEEN fecha1 and fecha2 ");
$fecha_132=date("$ano-$mes-$dia_22");
$result132 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_132' BETWEEN fecha1 and fecha2 ");
$fecha_133=date("$ano-$mes-$dia_23");
$result133 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_133' BETWEEN fecha1 and fecha2 ");
$fecha_134=date("$ano-$mes-$dia_24");
$result134 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_134' BETWEEN fecha1 and fecha2 ");
$fecha_135=date("$ano-$mes-$dia_25");
$result135 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_135' BETWEEN fecha1 and fecha2 ");
$fecha_136=date("$ano-$mes-$dia_26");
$result136 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_136' BETWEEN fecha1 and fecha2 ");
$fecha_137=date("$ano-$mes-$dia_27");
$result137 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_137' BETWEEN fecha1 and fecha2 ");
$fecha_138=date("$ano-$mes-$dia_28");
$result138 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_138' BETWEEN fecha1 and fecha2 ");
$fecha_139=date("$ano-$mes-$dia_29");
$result139 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_139' BETWEEN fecha1 and fecha2 ");
$fecha_140=date("$ano-$mes-$dia_30");
$result140 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_140' BETWEEN fecha1 and fecha2 ");
$fecha_141=date("$ano-$mes-$dia_31");
$result141 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'ocupada' and '$fecha_141' BETWEEN fecha1 and fecha2 ");


//////////////// reservadas

$fecha_1=date("$ano-$mes-$dia_1");
$result11a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_1' BETWEEN fecha1 and fecha2 ");
$fecha_2=date("$ano-$mes-$dia_2");
$result12a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_2' BETWEEN fecha1 and fecha2 ");
$fecha_3=date("$ano-$mes-$dia_3");
$result13a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_3' BETWEEN fecha1 and fecha2 ");
$fecha_4=date("$ano-$mes-$dia_4");
$result14a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_4' BETWEEN fecha1 and fecha2 ");
$fecha_5=date("$ano-$mes-$dia_5");
$result15a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_5' BETWEEN fecha1 and fecha2 ");
$fecha_6=date("$ano-$mes-$dia_6");
$result16a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_6' BETWEEN fecha1 and fecha2 ");
$fecha_7=date("$ano-$mes-$dia_7");
$result17a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_7' BETWEEN fecha1 and fecha2 ");
$fecha_8=date("$ano-$mes-$dia_8");
$result18a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_8' BETWEEN fecha1 and fecha2 ");
$fecha_9=date("$ano-$mes-$dia_9");
$result19a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_9' BETWEEN fecha1 and fecha2 ");
$fecha_120=date("$ano-$mes-$dia_10");
$result120a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_120' BETWEEN fecha1 and fecha2 ");
$fecha_121=date("$ano-$mes-$dia_11");
$result121a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_121' BETWEEN fecha1 and fecha2 ");
$fecha_122=date("$ano-$mes-$dia_12");
$result122a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_122' BETWEEN fecha1 and fecha2 ");

$fecha_123=date("$ano-$mes-$dia_13");
$result123a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_123' BETWEEN fecha1 and fecha2 ");
$fecha_124=date("$ano-$mes-$dia_14");
$result124a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_124' BETWEEN fecha1 and fecha2 ");
$fecha_125=date("$ano-$mes-$dia_15");
$result125a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_125' BETWEEN fecha1 and fecha2 ");
$fecha_126=date("$ano-$mes-$dia_16");
$result126a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_126' BETWEEN fecha1 and fecha2 ");
$fecha_127=date("$ano-$mes-$dia_17");
$result127a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_127' BETWEEN fecha1 and fecha2 ");
$fecha_128=date("$ano-$mes-$dia_18");
$result128a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_128' BETWEEN fecha1 and fecha2 ");
$fecha_129=date("$ano-$mes-$dia_19");
$result129a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_129' BETWEEN fecha1 and fecha2 ");
$fecha_130=date("$ano-$mes-$dia_20");
$result130a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_130' BETWEEN fecha1 and fecha2 ");
$fecha_131=date("$ano-$mes-$dia_21");
$result131a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_131' BETWEEN fecha1 and fecha2 ");
$fecha_132=date("$ano-$mes-$dia_22");
$result132a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_132' BETWEEN fecha1 and fecha2 ");
$fecha_133=date("$ano-$mes-$dia_23");
$result133a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_133' BETWEEN fecha1 and fecha2 ");
$fecha_134=date("$ano-$mes-$dia_24");
$result134a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_134' BETWEEN fecha1 and fecha2 ");
$fecha_135=date("$ano-$mes-$dia_25");
$result135a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_135' BETWEEN fecha1 and fecha2 ");
$fecha_136=date("$ano-$mes-$dia_26");
$result136a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_136' BETWEEN fecha1 and fecha2 ");
$fecha_137=date("$ano-$mes-$dia_27");
$result137a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_137' BETWEEN fecha1 and fecha2 ");
$fecha_138=date("$ano-$mes-$dia_28");
$result138a= mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_138' BETWEEN fecha1 and fecha2 ");
$fecha_139=date("$ano-$mes-$dia_29");
$result139a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_139' BETWEEN fecha1 and fecha2 ");
$fecha_140=date("$ano-$mes-$dia_30");
$result140a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_140' BETWEEN fecha1 and fecha2 ");
$fecha_141=date("$ano-$mes-$dia_31");
$result141a = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'reservada' and '$fecha_141' BETWEEN fecha1 and fecha2 ");


//////////////////////// Bloqueadas

$fecha_1=date("$ano-$mes-$dia_1");
$result1b1 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_1' BETWEEN fecha1 and fecha2 ");
$fecha_2=date("$ano-$mes-$dia_2");
$result1b2 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_2' BETWEEN fecha1 and fecha2 ");
$fecha_3=date("$ano-$mes-$dia_3");
$result1b3 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_3' BETWEEN fecha1 and fecha2 ");
$fecha_4=date("$ano-$mes-$dia_4");
$result1b4 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_4' BETWEEN fecha1 and fecha2 ");
$fecha_5=date("$ano-$mes-$dia_5");
$result1b5 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_5' BETWEEN fecha1 and fecha2 ");
$fecha_6=date("$ano-$mes-$dia_6");
$result1b6 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_6' BETWEEN fecha1 and fecha2 ");
$fecha_7=date("$ano-$mes-$dia_7");
$result1b7 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_7' BETWEEN fecha1 and fecha2 ");
$fecha_8=date("$ano-$mes-$dia_8");
$result1b8 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_8' BETWEEN fecha1 and fecha2 ");
$fecha_9=date("$ano-$mes-$dia_9");
$result1b9 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_9' BETWEEN fecha1 and fecha2 ");
$fecha_120=date("$ano-$mes-$dia_10");
$result1b20 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_120' BETWEEN fecha1 and fecha2 ");
$fecha_121=date("$ano-$mes-$dia_11");
$result1b21 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_121' BETWEEN fecha1 and fecha2 ");
$fecha_122=date("$ano-$mes-$dia_12");
$result1b22 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_122' BETWEEN fecha1 and fecha2 ");

$fecha_123=date("$ano-$mes-$dia_13");
$result1b23 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_123' BETWEEN fecha1 and fecha2 ");
$fecha_124=date("$ano-$mes-$dia_14");
$result1b24 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_124' BETWEEN fecha1 and fecha2 ");
$fecha_125=date("$ano-$mes-$dia_15");
$result1b25 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_125' BETWEEN fecha1 and fecha2 ");
$fecha_126=date("$ano-$mes-$dia_16");
$result1b26 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_126' BETWEEN fecha1 and fecha2 ");
$fecha_127=date("$ano-$mes-$dia_17");
$result1b27 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_127' BETWEEN fecha1 and fecha2 ");
$fecha_128=date("$ano-$mes-$dia_18");
$result1b28 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_128' BETWEEN fecha1 and fecha2 ");
$fecha_129=date("$ano-$mes-$dia_19");
$result1b29 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_129' BETWEEN fecha1 and fecha2 ");
$fecha_130=date("$ano-$mes-$dia_20");
$result1b30 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_130' BETWEEN fecha1 and fecha2 ");
$fecha_131=date("$ano-$mes-$dia_21");
$result1b31 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_131' BETWEEN fecha1 and fecha2 ");
$fecha_132=date("$ano-$mes-$dia_22");
$result1b32 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_132' BETWEEN fecha1 and fecha2 ");
$fecha_133=date("$ano-$mes-$dia_23");
$result1b33 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_133' BETWEEN fecha1 and fecha2 ");
$fecha_134=date("$ano-$mes-$dia_24");
$result1b34 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_134' BETWEEN fecha1 and fecha2 ");
$fecha_135=date("$ano-$mes-$dia_25");
$result1b35 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_135' BETWEEN fecha1 and fecha2 ");
$fecha_136=date("$ano-$mes-$dia_26");
$result1b36 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_136' BETWEEN fecha1 and fecha2 ");
$fecha_137=date("$ano-$mes-$dia_27");
$result1b37 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_137' BETWEEN fecha1 and fecha2 ");
$fecha_138=date("$ano-$mes-$dia_28");
$result1b38 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_138' BETWEEN fecha1 and fecha2 ");
$fecha_139=date("$ano-$mes-$dia_29");
$result1b39 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_139' BETWEEN fecha1 and fecha2 ");
$fecha_140=date("$ano-$mes-$dia_30");
$result1b40 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_140' BETWEEN fecha1 and fecha2 ");
$fecha_141=date("$ano-$mes-$dia_31");
$result1b41 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and status like 'bloqueada' and '$fecha_141' BETWEEN fecha1 and fecha2 ");

//////////////////////////////////busqueda de Id de referencia

$fecha_1=date("$ano-$mes-$dia_1");
$result1bx1 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_1' BETWEEN fecha1 and fecha2 ");
$fecha_2=date("$ano-$mes-$dia_2");
$result1bx2 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_2' BETWEEN fecha1 and fecha2 ");
$fecha_3=date("$ano-$mes-$dia_3");
$result1bx3 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_3' BETWEEN fecha1 and fecha2 ");
$fecha_4=date("$ano-$mes-$dia_4");
$result1bx4 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_4' BETWEEN fecha1 and fecha2 ");
$fecha_5=date("$ano-$mes-$dia_5");
$result1bx5 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_5' BETWEEN fecha1 and fecha2 ");
$fecha_6=date("$ano-$mes-$dia_6");
$result1bx6 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_6' BETWEEN fecha1 and fecha2 ");
$fecha_7=date("$ano-$mes-$dia_7");
$result1bx7 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_7' BETWEEN fecha1 and fecha2 ");
$fecha_8=date("$ano-$mes-$dia_8");
$result1bx8 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_8' BETWEEN fecha1 and fecha2 ");
$fecha_9=date("$ano-$mes-$dia_9");
$result1bx9 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_9' BETWEEN fecha1 and fecha2 ");
$fecha_120=date("$ano-$mes-$dia_10");
$result1bx20 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_120' BETWEEN fecha1 and fecha2 ");
$fecha_121=date("$ano-$mes-$dia_11");
$result1bx21 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_121' BETWEEN fecha1 and fecha2 ");
$fecha_122=date("$ano-$mes-$dia_12");
$result1bx22 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_122' BETWEEN fecha1 and fecha2 ");

$fecha_123=date("$ano-$mes-$dia_13");
$result1bx23 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_123' BETWEEN fecha1 and fecha2 ");
$fecha_124=date("$ano-$mes-$dia_14");
$result1bx24 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_124' BETWEEN fecha1 and fecha2 ");
$fecha_125=date("$ano-$mes-$dia_15");
$result1bx25 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_125' BETWEEN fecha1 and fecha2 ");
$fecha_126=date("$ano-$mes-$dia_16");
$result1bx26 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_126' BETWEEN fecha1 and fecha2 ");
$fecha_127=date("$ano-$mes-$dia_17");
$result1bx27 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_127' BETWEEN fecha1 and fecha2 ");
$fecha_128=date("$ano-$mes-$dia_18");
$result1bx28 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_128' BETWEEN fecha1 and fecha2 ");
$fecha_129=date("$ano-$mes-$dia_19");
$result1bx29 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_129' BETWEEN fecha1 and fecha2 ");
$fecha_130=date("$ano-$mes-$dia_20");
$result1bx30 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_130' BETWEEN fecha1 and fecha2 ");
$fecha_131=date("$ano-$mes-$dia_21");
$result1bx31 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_131' BETWEEN fecha1 and fecha2 ");
$fecha_132=date("$ano-$mes-$dia_22");
$result1bx32 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_132' BETWEEN fecha1 and fecha2 ");
$fecha_133=date("$ano-$mes-$dia_23");
$result1bx33 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_133' BETWEEN fecha1 and fecha2 ");
$fecha_134=date("$ano-$mes-$dia_24");
$result1bx34 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_134' BETWEEN fecha1 and fecha2 ");
$fecha_135=date("$ano-$mes-$dia_25");
$result1bx35 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_135' BETWEEN fecha1 and fecha2 ");
$fecha_136=date("$ano-$mes-$dia_26");
$result1bx36 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_136' BETWEEN fecha1 and fecha2 ");
$fecha_137=date("$ano-$mes-$dia_27");
$result1bx37 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_137' BETWEEN fecha1 and fecha2 ");
$fecha_138=date("$ano-$mes-$dia_28");
$result1bx38 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_138' BETWEEN fecha1 and fecha2 ");
$fecha_139=date("$ano-$mes-$dia_29");
$result1bx39 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_139' BETWEEN fecha1 and fecha2 ");
$fecha_140=date("$ano-$mes-$dia_30");
$result1bx40 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_140' BETWEEN fecha1 and fecha2 ");
$fecha_141=date("$ano-$mes-$dia_31");
$result1bx41 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and '$fecha_141' BETWEEN fecha1 and fecha2 ");















?>

<?php /////////////////////////////    consulta de Ocupados?>
<?php  while ($row=mysql_fetch_array($result11))  { $habitacion1= "".$row["habitacion"].""; } mysql_free_result($result11) ?> 
<?php  while ($row=mysql_fetch_array($result12))  { $habitacion2= "".$row["habitacion"].""; } mysql_free_result($result12) ?> 
<?php  while ($row=mysql_fetch_array($result13))  { $habitacion3= "".$row["habitacion"].""; } mysql_free_result($result13) ?>
<?php  while ($row=mysql_fetch_array($result14))  { $habitacion4= "".$row["habitacion"].""; } mysql_free_result($result14) ?>  
<?php  while ($row=mysql_fetch_array($result15))  { $habitacion5= "".$row["habitacion"].""; } mysql_free_result($result15) ?>  
<?php  while ($row=mysql_fetch_array($result16))  { $habitacion6= "".$row["habitacion"].""; } mysql_free_result($result16) ?> 
<?php  while ($row=mysql_fetch_array($result17))  { $habitacion7= "".$row["habitacion"].""; } mysql_free_result($result17) ?>  
<?php  while ($row=mysql_fetch_array($result18))  { $habitacion8= "".$row["habitacion"].""; } mysql_free_result($result18) ?> 
<?php  while ($row=mysql_fetch_array($result19))  { $habitacion9= "".$row["habitacion"].""; } mysql_free_result($result19) ?> 
<?php  while ($row=mysql_fetch_array($result120))  { $habitacion10= "".$row["habitacion"].""; } mysql_free_result($result120) ?> 
<?php  while ($row=mysql_fetch_array($result121))  { $habitacion11= "".$row["habitacion"].""; } mysql_free_result($result121) ?> 
<?php  while ($row=mysql_fetch_array($result122))  { $habitacion12= "".$row["habitacion"].""; } mysql_free_result($result122) ?>
<?php  while ($row=mysql_fetch_array($result123))  { $habitacion13= "".$row["habitacion"].""; } mysql_free_result($result123) ?> 
<?php  while ($row=mysql_fetch_array($result124))  { $habitacion14= "".$row["habitacion"].""; } mysql_free_result($result124) ?> 
<?php  while ($row=mysql_fetch_array($result125))  { $habitacion15= "".$row["habitacion"].""; } mysql_free_result($result125) ?>
<?php  while ($row=mysql_fetch_array($result126))  { $habitacion16= "".$row["habitacion"].""; } mysql_free_result($result126) ?> 
<?php  while ($row=mysql_fetch_array($result127))  { $habitacion17= "".$row["habitacion"].""; } mysql_free_result($result127) ?>
<?php  while ($row=mysql_fetch_array($result128))  { $habitacion18= "".$row["habitacion"].""; } mysql_free_result($result128) ?>
<?php  while ($row=mysql_fetch_array($result129))  { $habitacion19= "".$row["habitacion"].""; } mysql_free_result($result129) ?>
<?php  while ($row=mysql_fetch_array($result130))  { $habitacion20= "".$row["habitacion"].""; } mysql_free_result($result130) ?>
<?php  while ($row=mysql_fetch_array($result131))  { $habitacion21= "".$row["habitacion"].""; } mysql_free_result($result131) ?>
<?php  while ($row=mysql_fetch_array($result132))  { $habitacion22= "".$row["habitacion"].""; } mysql_free_result($result132) ?>
<?php  while ($row=mysql_fetch_array($result133))  { $habitacion23= "".$row["habitacion"].""; } mysql_free_result($result133) ?>
<?php  while ($row=mysql_fetch_array($result134))  { $habitacion24= "".$row["habitacion"].""; } mysql_free_result($result134) ?>
<?php  while ($row=mysql_fetch_array($result135))  { $habitacion25= "".$row["habitacion"].""; } mysql_free_result($result135) ?>
 <?php  while ($row=mysql_fetch_array($result136))  { $habitacion26= "".$row["habitacion"].""; } mysql_free_result($result136) ?>
 <?php  while ($row=mysql_fetch_array($result137))  { $habitacion27= "".$row["habitacion"].""; } mysql_free_result($result137) ?>
 <?php  while ($row=mysql_fetch_array($result138))  { $habitacion28= "".$row["habitacion"].""; } mysql_free_result($result138) ?>
 <?php  while ($row=mysql_fetch_array($result139))  { $habitacion29= "".$row["habitacion"].""; } mysql_free_result($result139) ?>
 <?php  while ($row=mysql_fetch_array($result140))  { $habitacion30= "".$row["habitacion"].""; } mysql_free_result($result140) ?>
<?php  while ($row=mysql_fetch_array($result141))  { $habitacion31= "".$row["habitacion"].""; } mysql_free_result($result141) ?>

<?php /////////////////////////////    consulta de reservados?>
<?php  while ($row=mysql_fetch_array($result11a))  { $habitacionR1= "".$row["habitacion"].""; } mysql_free_result($result11a) ?> 
<?php  while ($row=mysql_fetch_array($result12a))  { $habitacionR2= "".$row["habitacion"].""; } mysql_free_result($result12a) ?> 
<?php  while ($row=mysql_fetch_array($result13a))  { $habitacionR3= "".$row["habitacion"].""; } mysql_free_result($result13a) ?>
<?php  while ($row=mysql_fetch_array($result14a))  { $habitacionR4= "".$row["habitacion"].""; } mysql_free_result($result14a) ?>  
<?php  while ($row=mysql_fetch_array($result15a))  { $habitacionR5= "".$row["habitacion"].""; } mysql_free_result($result15a) ?>  
<?php  while ($row=mysql_fetch_array($result16a))  { $habitacionR6= "".$row["habitacion"].""; } mysql_free_result($result16a) ?> 
<?php  while ($row=mysql_fetch_array($result17a))  { $habitacionR7= "".$row["habitacion"].""; } mysql_free_result($result17a) ?>  
<?php  while ($row=mysql_fetch_array($result18a))  { $habitacionR8= "".$row["habitacion"].""; } mysql_free_result($result18a) ?> 
<?php  while ($row=mysql_fetch_array($result19a))  { $habitacionR9= "".$row["habitacion"].""; } mysql_free_result($result19a) ?> 
<?php  while ($row=mysql_fetch_array($result120a))  { $habitacionR10= "".$row["habitacion"].""; } mysql_free_result($result120a) ?> 
<?php  while ($row=mysql_fetch_array($result121a))  { $habitacionR11= "".$row["habitacion"].""; } mysql_free_result($result121a) ?> 
<?php  while ($row=mysql_fetch_array($result122a))  { $habitacionR12= "".$row["habitacion"].""; } mysql_free_result($result122a) ?>
<?php  while ($row=mysql_fetch_array($result123a))  { $habitacionR13= "".$row["habitacion"].""; } mysql_free_result($result123a) ?> 
<?php  while ($row=mysql_fetch_array($result124a))  { $habitacionR14= "".$row["habitacion"].""; } mysql_free_result($result124a) ?> 
<?php  while ($row=mysql_fetch_array($result125a))  { $habitacionR15= "".$row["habitacion"].""; } mysql_free_result($result125a) ?>
<?php  while ($row=mysql_fetch_array($result126a))  { $habitacionR16= "".$row["habitacion"].""; } mysql_free_result($result126a) ?> 
<?php  while ($row=mysql_fetch_array($result127a))  { $habitacionR17= "".$row["habitacion"].""; } mysql_free_result($result127a) ?>
<?php  while ($row=mysql_fetch_array($result128a))  { $habitacionR18= "".$row["habitacion"].""; } mysql_free_result($result128a) ?>
<?php  while ($row=mysql_fetch_array($result129a))  { $habitacionR19= "".$row["habitacion"].""; } mysql_free_result($result129a) ?>
<?php  while ($row=mysql_fetch_array($result130a))  { $habitacionR20= "".$row["habitacion"].""; } mysql_free_result($result130a) ?>
<?php  while ($row=mysql_fetch_array($result131a))  { $habitacionR21= "".$row["habitacion"].""; } mysql_free_result($result131a) ?>
<?php  while ($row=mysql_fetch_array($result132a))  { $habitacionR22= "".$row["habitacion"].""; } mysql_free_result($result132a) ?>
<?php  while ($row=mysql_fetch_array($result133a))  { $habitacionR23= "".$row["habitacion"].""; } mysql_free_result($result133a) ?>
<?php  while ($row=mysql_fetch_array($result134a))  { $habitacionR24= "".$row["habitacion"].""; } mysql_free_result($result134a) ?>
<?php  while ($row=mysql_fetch_array($result135a))  { $habitacionR25= "".$row["habitacion"].""; } mysql_free_result($result135a) ?>
 <?php  while ($row=mysql_fetch_array($result136a))  { $habitacionR26= "".$row["habitacion"].""; } mysql_free_result($result136a) ?>
 <?php  while ($row=mysql_fetch_array($result137a))  { $habitacionR27= "".$row["habitacion"].""; } mysql_free_result($result137a) ?>
 <?php  while ($row=mysql_fetch_array($result138a))  { $habitacionR28= "".$row["habitacion"].""; } mysql_free_result($result138a) ?>
 <?php  while ($row=mysql_fetch_array($result139a))  { $habitacionR29= "".$row["habitacion"].""; } mysql_free_result($result139a) ?>
 <?php  while ($row=mysql_fetch_array($result140a))  { $habitacionR30= "".$row["habitacion"].""; } mysql_free_result($result140a) ?>
<?php  while ($row=mysql_fetch_array($result141a))  { $habitacionR31= "".$row["habitacion"].""; } mysql_free_result($result141a) ?>
<?php /////////////////////////////    consulta de Bloqueadas?>
<?php  while ($row=mysql_fetch_array($result1b1))  { $habitacionB1= "".$row["habitacion"].""; } mysql_free_result($result1b1) ?> 
<?php  while ($row=mysql_fetch_array($result1b2))  { $habitacionB2= "".$row["habitacion"].""; } mysql_free_result($result1b2) ?> 
<?php  while ($row=mysql_fetch_array($result1b3))  { $habitacionB3= "".$row["habitacion"].""; } mysql_free_result($result1b3) ?>
<?php  while ($row=mysql_fetch_array($result1b4))  { $habitacionB4= "".$row["habitacion"].""; } mysql_free_result($result1b4) ?>  
<?php  while ($row=mysql_fetch_array($result1b5))  { $habitacionB5= "".$row["habitacion"].""; } mysql_free_result($result1b5) ?>  
<?php  while ($row=mysql_fetch_array($result1b6))  { $habitacionB6= "".$row["habitacion"].""; } mysql_free_result($result1b6) ?> 
<?php  while ($row=mysql_fetch_array($result1b7))  { $habitacionB7= "".$row["habitacion"].""; } mysql_free_result($result1b7) ?>  
<?php  while ($row=mysql_fetch_array($result1b8))  { $habitacionB8= "".$row["habitacion"].""; } mysql_free_result($result1b8) ?> 
<?php  while ($row=mysql_fetch_array($result1b9))  { $habitacionB9= "".$row["habitacion"].""; } mysql_free_result($result1b9) ?> 
<?php  while ($row=mysql_fetch_array($result1b20))  { $habitacionB10= "".$row["habitacion"].""; } mysql_free_result($result1b20) ?> 
<?php  while ($row=mysql_fetch_array($result1b21))  { $habitacionB11= "".$row["habitacion"].""; } mysql_free_result($result1b21) ?> 
<?php  while ($row=mysql_fetch_array($result1b22))  { $habitacionB12= "".$row["habitacion"].""; } mysql_free_result($result1b22) ?>
<?php  while ($row=mysql_fetch_array($result1b23))  { $habitacionB13= "".$row["habitacion"].""; } mysql_free_result($result1b23) ?> 
<?php  while ($row=mysql_fetch_array($result1b24))  { $habitacionB14= "".$row["habitacion"].""; } mysql_free_result($result1b24) ?> 
<?php  while ($row=mysql_fetch_array($result1b25))  { $habitacionB15= "".$row["habitacion"].""; } mysql_free_result($result1b25) ?>
<?php  while ($row=mysql_fetch_array($result1b26))  { $habitacionB16= "".$row["habitacion"].""; } mysql_free_result($result1b26) ?> 
<?php  while ($row=mysql_fetch_array($result1b27))  { $habitacionB17= "".$row["habitacion"].""; } mysql_free_result($result1b27) ?>
<?php  while ($row=mysql_fetch_array($result1b28))  { $habitacionB18= "".$row["habitacion"].""; } mysql_free_result($result1b28) ?>
<?php  while ($row=mysql_fetch_array($result1b29))  { $habitacionB19= "".$row["habitacion"].""; } mysql_free_result($result1b29) ?>
<?php  while ($row=mysql_fetch_array($result1b30))  { $habitacionB20= "".$row["habitacion"].""; } mysql_free_result($result1b30) ?>
<?php  while ($row=mysql_fetch_array($result1b31))  { $habitacionB21= "".$row["habitacion"].""; } mysql_free_result($result1b31) ?>
<?php  while ($row=mysql_fetch_array($result1b32))  { $habitacionB22= "".$row["habitacion"].""; } mysql_free_result($result1b32) ?>
<?php  while ($row=mysql_fetch_array($result1b33))  { $habitacionB23= "".$row["habitacion"].""; } mysql_free_result($result1b33) ?>
<?php  while ($row=mysql_fetch_array($result1b34))  { $habitacionB24= "".$row["habitacion"].""; } mysql_free_result($result1b34) ?>
<?php  while ($row=mysql_fetch_array($result1b35))  { $habitacionB25= "".$row["habitacion"].""; } mysql_free_result($result1b35) ?>
 <?php  while ($row=mysql_fetch_array($result1b36))  { $habitacionB26= "".$row["habitacion"].""; } mysql_free_result($result1b36) ?>
 <?php  while ($row=mysql_fetch_array($result1b37))  { $habitacionB27= "".$row["habitacion"].""; } mysql_free_result($result1b37) ?>
 <?php  while ($row=mysql_fetch_array($result1b38))  { $habitacionB28= "".$row["habitacion"].""; } mysql_free_result($result1b38) ?>
 <?php  while ($row=mysql_fetch_array($result1b39))  { $habitacionB29= "".$row["habitacion"].""; } mysql_free_result($result1b39) ?>
 <?php  while ($row=mysql_fetch_array($result1b40))  { $habitacionB30= "".$row["habitacion"].""; } mysql_free_result($result1b40) ?>
<?php  while ($row=mysql_fetch_array($result1b41))  { $habitacionB31= "".$row["habitacion"].""; } mysql_free_result($result1b41) ?>

<?php /////////////////////////////    consulta de id de referencias?>
<?php  while ($row=mysql_fetch_array($result1bx1))  { $habitacionBix1= "".$row["id"].""; } mysql_free_result($result1bx1) ?> 
<?php  while ($row=mysql_fetch_array($result1bx2))  { $habitacionBix2= "".$row["id"].""; } mysql_free_result($result1bx2) ?> 
<?php  while ($row=mysql_fetch_array($result1bx3))  { $habitacionBix3= "".$row["id"].""; } mysql_free_result($result1bx3) ?>
<?php  while ($row=mysql_fetch_array($result1bx4))  { $habitacionBix4= "".$row["id"].""; } mysql_free_result($result1bx4) ?>  
<?php  while ($row=mysql_fetch_array($result1bx5))  { $habitacionBix5= "".$row["id"].""; } mysql_free_result($result1bx5) ?>  
<?php  while ($row=mysql_fetch_array($result1bx6))  { $habitacionBix6= "".$row["id"].""; } mysql_free_result($result1bx6) ?> 
<?php  while ($row=mysql_fetch_array($result1bx7))  { $habitacionBix7= "".$row["id"].""; } mysql_free_result($result1bx7) ?>  
<?php  while ($row=mysql_fetch_array($result1bx8))  { $habitacionBix8= "".$row["id"].""; } mysql_free_result($result1bx8) ?> 
<?php  while ($row=mysql_fetch_array($result1bx9))  { $habitacionBix9= "".$row["id"].""; } mysql_free_result($result1bx9) ?> 
<?php  while ($row=mysql_fetch_array($result1bx20))  { $habitacionBix10= "".$row["id"].""; } mysql_free_result($result1bx20) ?> 
<?php  while ($row=mysql_fetch_array($result1bx21))  { $habitacionBix11= "".$row["id"].""; } mysql_free_result($result1bx21) ?> 
<?php  while ($row=mysql_fetch_array($result1bx22))  { $habitacionBix12= "".$row["id"].""; } mysql_free_result($result1bx22) ?>
<?php  while ($row=mysql_fetch_array($result1bx23))  { $habitacionBix13= "".$row["id"].""; } mysql_free_result($result1bx23) ?> 
<?php  while ($row=mysql_fetch_array($result1bx24))  { $habitacionBix14= "".$row["id"].""; } mysql_free_result($result1bx24) ?> 
<?php  while ($row=mysql_fetch_array($result1bx25))  { $habitacionBix15= "".$row["id"].""; } mysql_free_result($result1bx25) ?>
<?php  while ($row=mysql_fetch_array($result1bx26))  { $habitacionBix16= "".$row["id"].""; } mysql_free_result($result1bx26) ?> 
<?php  while ($row=mysql_fetch_array($result1bx27))  { $habitacionBix17= "".$row["id"].""; } mysql_free_result($result1bx27) ?>
<?php  while ($row=mysql_fetch_array($result1bx28))  { $habitacionBix18= "".$row["id"].""; } mysql_free_result($result1bx28) ?>
<?php  while ($row=mysql_fetch_array($result1bx29))  { $habitacionBix19= "".$row["id"].""; } mysql_free_result($result1bx29) ?>
<?php  while ($row=mysql_fetch_array($result1bx30))  { $habitacionBix20= "".$row["id"].""; } mysql_free_result($result1bx30) ?>
<?php  while ($row=mysql_fetch_array($result1bx31))  { $habitacionBix21= "".$row["id"].""; } mysql_free_result($result1bx31) ?>
<?php  while ($row=mysql_fetch_array($result1bx32))  { $habitacionBix22= "".$row["id"].""; } mysql_free_result($result1bx32) ?>
<?php  while ($row=mysql_fetch_array($result1bx33))  { $habitacionBix23= "".$row["id"].""; } mysql_free_result($result1bx33) ?>
<?php  while ($row=mysql_fetch_array($result1bx34))  { $habitacionBix24= "".$row["id"].""; } mysql_free_result($result1bx34) ?>
<?php  while ($row=mysql_fetch_array($result1bx35))  { $habitacionBix25= "".$row["id"].""; } mysql_free_result($result1bx35) ?>
 <?php  while ($row=mysql_fetch_array($result1bx36))  { $habitacionBix26= "".$row["id"].""; } mysql_free_result($result1bx36) ?>
 <?php  while ($row=mysql_fetch_array($result1bx37))  { $habitacionBix27= "".$row["id"].""; } mysql_free_result($result1bx37) ?>
 <?php  while ($row=mysql_fetch_array($result1bx38))  { $habitacionBix28= "".$row["id"].""; } mysql_free_result($result1bx38) ?>
 <?php  while ($row=mysql_fetch_array($result1bx39))  { $habitacionBix29= "".$row["id"].""; } mysql_free_result($result1bx39) ?>
 <?php  while ($row=mysql_fetch_array($result1bx40))  { $habitacionBix30= "".$row["id"].""; } mysql_free_result($result1bx40) ?>
<?php  while ($row=mysql_fetch_array($result1bx41))  { $habitacionBix31= "".$row["id"].""; } mysql_free_result($result1bx41) ?>







<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 2000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion ORDER BY id_hab ASC";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$queryString_Recordset2 = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_Recordset2") == false && 
        stristr($param, "totalRows_Recordset2") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_Recordset2 = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_Recordset2 = sprintf("&totalRows_Recordset2=%d%s", $totalRows_Recordset2, $queryString_Recordset2);
?>
<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">







<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
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
.Estilo2 {font-size: 10px}
-->
</style>
</head>

<body>
<table width="200" border="0" align="center" cellspacing="0">
  <tr>
    <td width="642"><table width="644" border="0" align="center" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td width="200" height="20" colspan="2" bgcolor="#000000" >&nbsp;</td>
        <td height="20" bgcolor="#000000" >&nbsp;</td>
      </tr>
      <?php do { ?>
      <tr>
        <td width="100" height="26" ><span class="Estilo3"><?php echo $row_Recordset2['habitacion']; ?></span></td>
        <td width="100" ><span class="Estilo3"><?php echo $row_Recordset2['observaciones']; ?></span></td>
        <td ><div align="right">
          <?php	 $dato=$row_Recordset2['habitacion']; 	 require('hab_demo11.php');	 	 ?>
        </div>
              <div align="left" class="Estilo1"></div></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><br>
</p>
</body>
</html>

