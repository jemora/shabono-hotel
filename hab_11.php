<?php 
require_once('conector/conector.php');

$dia1 = 1; $dia_2 = 2; $dia_3 = 3; $dia_4 = 4; $dia_5 = 5; $dia_6= 6; $dia_7= 7; $dia_8 = 8; $dia_9 = 9; $dia_10 = 10;
$dia_11 = 11; $dia_12 = 12; $dia_13 = 13; $dia_14 = 14; $dia_15 = 15; $dia_16 = 16; $dia_17 = 17; $dia_18 = 18; $dia_19 = 19; 
$dia_20 = 20; $dia_21 = 21; $dia_22 = 22; $dia_23 = 23; $dia_24 = 24; $dia_25 = 25; $dia_26 = 26; $dia_27 = 27; $dia_28 = 28;
$dia_29 = 29; $dia_30 = 30; $dia_31 = 31;

?>

<?php


$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 


 ?>
<?php
//Ejecutamos la sentencia SQL
$result230 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '10' ");
$result231 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a'and d like '11' ");
$result46 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '6' ");
$result36 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '6' ");
$result1 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '1' ");

$result12 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '2' ");

$result2 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '1' ");

$result22 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '2' ");
$result3 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '1' ");
$result32 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '2' ");
$result4 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '1' ");
$result42 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '2' ");
$result13 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and d like '3' ");
$result23 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '3' ");
$result33 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '3' ");
$result43 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '3' ");
$result14 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '4' ");
$result24 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '4' ");
$result34 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '4' ");
$result44 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '4' ");
$result15 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '5' ");
$result25 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '5' ");
$result35 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '5' ");
$result45 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '5' ");
$result16 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '6' ");
$result17 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '7' ");
$result18 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '8' ");
$result19 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '9' ");
$result120 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '10' ");
$result121 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '11' ");
$result122 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '12' ");
$result123 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '13' ");
$result124 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '14' ");
$result125 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '14' ");
$result126 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '15' ");
$result127 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '16' ");
$result128 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '17' ");
$result129 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '18' ");
$result130 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '19' ");
$result131 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '20' ");
$result132 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '21' ");
$result133 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '22' ");
$result134 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '23' ");
$result135 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '24' ");
$result136 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '25' ");
$result137 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '26' ");
$result138 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '27' ");
$result139 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '28' ");
$result140 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '29' ");
$result141 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '30' ");
$result142 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '31' ");
$result26 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '6' ");
$result27 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '7' ");
$result28 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '8' ");
$result29 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '9' ");
$result30 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '10' ");
$result31 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '11' ");
$result232 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '12' ");
$result233 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '13' ");
$result234 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '14' ");
$result235 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '15' ");
$result236 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and d like '16' ");
$result237 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '17' ");
$result238 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '18' ");
$result239 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '19' ");
$result240 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '20' ");
$result241 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '21' ");
$result242 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '22' ");
$result243 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '23' ");
$result244 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '24' ");
$result245 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '25' ");
$result246 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '26' ");
$result247 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '27' ");
$result248 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '28' ");
$result249 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '29' ");
$result250 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '30' ");
$result251 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '31' ");
$result37 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '7' ");
$result38 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '8' ");
$result39 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a'  and d like '9' ");
$result340 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato'  and a LIKE '$a' and d like '10' ");
$result341 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '11' ");
$result342 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '12' ");
$result343 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '13' ");
$result344 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '14' ");
$result345 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '15' ");
$result346 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '16' ");
$result347 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '17' ");
$result348 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '18' ");
$result349 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '19' ");
$result350 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '20' ");
$result351 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '21' ");
$result352 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '22' ");
$result353 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '23' ");
$result354 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '24' ");
$result355 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '25' ");
$result356 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '26' ");
$result357 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '27' ");
$result358 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '28' ");
$result359 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '29' ");
$result360 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '30' ");
$result361 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '31' ");
$result47 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '7' ");
$result48 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '8' ");
$result49 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '9' ");
$result450 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '10' ");
$result451 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '11' ");
$result452 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '12' ");
$result453 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '13' ");
$result454 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '14' ");
$result455 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '15' ");
$result456 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '16' ");
$result457 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '17' ");
$result458 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '18' ");
$result459 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '19' ");
$result460 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '20' ");
$result461 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '21' ");
$result462 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '22' ");
$result463 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '23' ");
$result464 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '24' ");
$result465 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '25' ");
$result466 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '26' ");
$result467 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '27' ");
$result468 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '28' ");
$result469 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '29' ");
$result470 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '30' ");
$result471 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and d like '31' ");


$fechat1=date("$a.$mes.01");
$result1T1 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat1' BETWEEN fecha1 and fecha2 ");


$fechat2=date("$a-$mes-02");
$result1T2 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat2' BETWEEN fecha1 and fecha2 ");



$fechat3=date("$a-$mes-03");
$result1T3 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat3' BETWEEN fecha1 and fecha2 ");






$fechat4=date("$a-$mes-04");
$result1T4 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat4' BETWEEN fecha1 and fecha2 ");

$fechat5=date("$a.$mes.05");
$result1T5 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat5' BETWEEN fecha1 and fecha2 ");

$fechat6=date("$a.$mes.06");
$result1T6 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat6' BETWEEN fecha1 and fecha2 ");

$fechat7=date("$a.$mes.07");
$result1T7 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat7' BETWEEN fecha1 and fecha2 ");

$fechat8=date("$a.$mes.08");
$result1T8 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat8' BETWEEN fecha1 and fecha2 ");

$fechat9=date("$a.$mes.09");
$result1T9 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat9' BETWEEN fecha1 and fecha2 ");

$fechat10=date("$a.$mes.10");
$result1T10 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat10' BETWEEN fecha1 and fecha2 ");

$fechat11=date("$a.$mes.11");
$result1T11 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat11' BETWEEN fecha1 and fecha2 ");

$fechat12=date("$a.$mes.12");
$result1T12 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat12' BETWEEN fecha1 and fecha2 ");

$fechat13=date("$a.$mes.13");
$result1T13 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat13' BETWEEN fecha1 and fecha2 ");

$fechat14=date("$a.$mes.14");
$result1T14 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat14' BETWEEN fecha1 and fecha2 ");

$fechat15=date("$a.$mes.15");
$result1T15 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat15' BETWEEN fecha1 and fecha2 ");

$fechat16=date("$a.$mes.16");
$result1T16 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat16' BETWEEN fecha1 and fecha2 ");

$fechat17=date("$a.$mes.17");
$result1T17 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat17' BETWEEN fecha1 and fecha2 ");

$fechat18=date("$a.$mes.18");
$result1T18 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat18' BETWEEN fecha1 and fecha2 ");

$fechat19=date("$a.$mes.19");
$result1T19 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat19' BETWEEN fecha1 and fecha2 ");

$fechat20=date("$a.$mes.20");
$result1T20 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat20' BETWEEN fecha1 and fecha2 ");

$fechat21=date("$a.$mes.21");
$result1T21 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat21' BETWEEN fecha1 and fecha2 ");

$fechat22=date("$a.$mes.22");
$result1T22 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat22' BETWEEN fecha1 and fecha2 ");

$fechat23=date("$a.$mes.23");
$result1T23 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat23' BETWEEN fecha1 and fecha2 ");

$fechat24=date("$a.$mes.24");
$result1T24 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat24' BETWEEN fecha1 and fecha2 ");

$fechat25=date("$a.$mes.25");
$result1T25 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat25' BETWEEN fecha1 and fecha2 ");

$fechat26=date("$a.$mes.26");
$result1T26 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat26' BETWEEN fecha1 and fecha2 ");

$fechat27=date("$a.$mes.27");
$result1T27 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat27' BETWEEN fecha1 and fecha2 ");

$fechat28=date("$a.$mes.28");
$result1T28 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat28' BETWEEN fecha1 and fecha2 ");

$fechat29=date("$a.$mes.29");
$result1T29 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat29' BETWEEN fecha1 and fecha2 ");

$fechat30=date("$a.$mes.30");
$result1T30 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat30' BETWEEN fecha1 and fecha2 ");

$fechat31=date("$a.$mes.31");
$result1T31 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat31' BETWEEN fecha1 and fecha2 ");

$resulth1 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat1' BETWEEN fecha1 and fecha2 ");
$resulth2 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat2' BETWEEN fecha1 and fecha2 ");
$resulth3 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat3' BETWEEN fecha1 and fecha2 ");
$resulth4 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat4' BETWEEN fecha1 and fecha2 ");
$resulth5 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat5' BETWEEN fecha1 and fecha2 ");
$resulth6 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat6' BETWEEN fecha1 and fecha2 ");
$resulth7 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat7' BETWEEN fecha1 and fecha2 ");
$resulth8 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat8' BETWEEN fecha1 and fecha2 ");
$resulth9 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat9' BETWEEN fecha1 and fecha2 ");
$resulth10 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat10' BETWEEN fecha1 and fecha2 ");
$resulth11 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat11' BETWEEN fecha1 and fecha2 ");
$resulth12 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat12' BETWEEN fecha1 and fecha2 ");
$resulth13 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat13' BETWEEN fecha1 and fecha2 ");
$resulth14 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat14' BETWEEN fecha1 and fecha2 ");
$resulth15 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat15' BETWEEN fecha1 and fecha2 ");
$resulth16 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat16' BETWEEN fecha1 and fecha2 ");
$resulth17 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat17' BETWEEN fecha1 and fecha2 ");
$resulth18 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat18' BETWEEN fecha1 and fecha2 ");
$resulth19 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat19' BETWEEN fecha1 and fecha2 ");
$resulth20 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat20' BETWEEN fecha1 and fecha2 ");
$resulth21 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat21' BETWEEN fecha1 and fecha2 ");
$resulth22 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat22' BETWEEN fecha1 and fecha2 ");
$resulth23 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat23' BETWEEN fecha1 and fecha2 ");
$resulth24 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat24' BETWEEN fecha1 and fecha2 ");
$resulth25 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat25' BETWEEN fecha1 and fecha2 ");
$resulth26 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat26' BETWEEN fecha1 and fecha2 ");
$resulth27 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat27' BETWEEN fecha1 and fecha2 ");
$resulth28 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat28' BETWEEN fecha1 and fecha2 ");
$resulth29 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat29' BETWEEN fecha1 and fecha2 ");
$resulth30 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat30' BETWEEN fecha1 and fecha2 ");
$resulth31 = mysql_query("SELECT * FROM habitacion2  WHERE habitacion  LIKE '$dato' and a LIKE '$a' and m LIKE '$mes' and '$fechat31' BETWEEN fecha1 and fecha2 ");









$result500 = mysql_query("SELECT * FROM habitacion  WHERE habitacion  LIKE '$dato'");


$resulthabt = mysql_query("SELECT * FROM habitacion  WHERE habitacion  LIKE '$dato' ");
?>
<?php  while ($row=mysql_fetch_array($resulthabt))  { $dato2= "".$row["observaciones"].""; } mysql_free_result($resulthabt) ?>
<?php  while ($row=mysql_fetch_array($result1))  { $habitacion= "".$row["habitacion"].""; } mysql_free_result($result1) ?> 
<?php  while ($row=mysql_fetch_array($result1T1))  { $habitacionT1= "".$row["habitacion"].""; } mysql_free_result($result1T1) ?> 

<?php  while ($row=mysql_fetch_array($result1T2))  { $habitacionT2= "".$row["habitacion"].""; } mysql_free_result($result1T2) ?> 
<?php  while ($row=mysql_fetch_array($result1T3))  { $habitacionT3= "".$row["habitacion"].""; } mysql_free_result($result1T3) ?>
 <?php  while ($row=mysql_fetch_array($result1T4))  { $habitacionT4= "".$row["habitacion"].""; } mysql_free_result($result1T4) ?>
<?php  while ($row=mysql_fetch_array($result1T5))  { $habitacionT5= "".$row["habitacion"].""; } mysql_free_result($result1T5) ?>
<?php  while ($row=mysql_fetch_array($result1T6))  { $habitacionT6= "".$row["habitacion"].""; } mysql_free_result($result1T6) ?>
<?php  while ($row=mysql_fetch_array($result1T7))  { $habitacionT7= "".$row["habitacion"].""; } mysql_free_result($result1T7) ?>
<?php  while ($row=mysql_fetch_array($result1T8))  { $habitacionT8= "".$row["habitacion"].""; } mysql_free_result($result1T8) ?>
<?php  while ($row=mysql_fetch_array($result1T9))  { $habitacionT9= "".$row["habitacion"].""; } mysql_free_result($result1T9) ?>
<?php  while ($row=mysql_fetch_array($result1T10))  { $habitacionT10= "".$row["habitacion"].""; } mysql_free_result($result1T10) ?>
<?php  while ($row=mysql_fetch_array($result1T11))  { $habitacionT11= "".$row["habitacion"].""; } mysql_free_result($result1T11) ?>
<?php  while ($row=mysql_fetch_array($result1T12))  { $habitacionT12= "".$row["habitacion"].""; } mysql_free_result($result1T12) ?>
<?php  while ($row=mysql_fetch_array($result1T13))  { $habitacionT13= "".$row["habitacion"].""; } mysql_free_result($result1T13) ?>
<?php  while ($row=mysql_fetch_array($result1T14))  { $habitacionT14= "".$row["habitacion"].""; } mysql_free_result($result1T14) ?>
<?php  while ($row=mysql_fetch_array($result1T15))  { $habitacionT15= "".$row["habitacion"].""; } mysql_free_result($result1T15) ?>
<?php  while ($row=mysql_fetch_array($result1T16))  { $habitacionT16= "".$row["habitacion"].""; } mysql_free_result($result1T16) ?>
<?php  while ($row=mysql_fetch_array($result1T17))  { $habitacionT17= "".$row["habitacion"].""; } mysql_free_result($result1T17) ?>
<?php  while ($row=mysql_fetch_array($result1T18))  { $habitacionT18= "".$row["habitacion"].""; } mysql_free_result($result1T18) ?>
<?php  while ($row=mysql_fetch_array($result1T19))  { $habitacionT19= "".$row["habitacion"].""; } mysql_free_result($result1T19) ?>
<?php  while ($row=mysql_fetch_array($result1T20))  { $habitacionT20= "".$row["habitacion"].""; } mysql_free_result($result1T20) ?>
<?php  while ($row=mysql_fetch_array($result1T21))  { $habitacionT21= "".$row["habitacion"].""; } mysql_free_result($result1T21) ?>
<?php  while ($row=mysql_fetch_array($result1T22))  { $habitacionT22= "".$row["habitacion"].""; } mysql_free_result($result1T22) ?>
<?php  while ($row=mysql_fetch_array($result1T23))  { $habitacionT23= "".$row["habitacion"].""; } mysql_free_result($result1T23) ?>
<?php  while ($row=mysql_fetch_array($result1T24))  { $habitacionT24= "".$row["habitacion"].""; } mysql_free_result($result1T24) ?>
<?php  while ($row=mysql_fetch_array($result1T25))  { $habitacionT25= "".$row["habitacion"].""; } mysql_free_result($result1T25) ?>
<?php  while ($row=mysql_fetch_array($result1T26))  { $habitacionT26= "".$row["habitacion"].""; } mysql_free_result($result1T26) ?>
<?php  while ($row=mysql_fetch_array($result1T27))  { $habitacionT27= "".$row["habitacion"].""; } mysql_free_result($result1T27) ?>
<?php  while ($row=mysql_fetch_array($result1T28))  { $habitacionT28= "".$row["habitacion"].""; } mysql_free_result($result1T28) ?>
<?php  while ($row=mysql_fetch_array($result1T29))  { $habitacionT29= "".$row["habitacion"].""; } mysql_free_result($result1T29) ?>
<?php  while ($row=mysql_fetch_array($result1T30))  { $habitacionT30= "".$row["habitacion"].""; } mysql_free_result($result1T30) ?>
<?php  while ($row=mysql_fetch_array($result1T31))  { $habitacionT31= "".$row["habitacion"].""; } mysql_free_result($result1T31) ?>

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
<?php  while ($row=mysql_fetch_array($result122))  { $habitacion11= "".$row["habitacion"].""; } mysql_free_result($result122) ?>
<?php  while ($row=mysql_fetch_array($result123))  { $habitacion12= "".$row["habitacion"].""; } mysql_free_result($result123) ?> 
<?php  while ($row=mysql_fetch_array($result124))  { $habitacion13= "".$row["habitacion"].""; } mysql_free_result($result124) ?> 
<?php  while ($row=mysql_fetch_array($result125))  { $habitacion14= "".$row["habitacion"].""; } mysql_free_result($result125) ?>
<?php  while ($row=mysql_fetch_array($result126))  { $habitacion15= "".$row["habitacion"].""; } mysql_free_result($result126) ?> 
<?php  while ($row=mysql_fetch_array($result127))  { $habitacion16= "".$row["habitacion"].""; } mysql_free_result($result127) ?>
<?php  while ($row=mysql_fetch_array($result128))  { $habitacion17= "".$row["habitacion"].""; } mysql_free_result($result128) ?>
<?php  while ($row=mysql_fetch_array($result129))  { $habitacion18= "".$row["habitacion"].""; } mysql_free_result($result129) ?>
<?php  while ($row=mysql_fetch_array($result130))  { $habitacion19= "".$row["habitacion"].""; } mysql_free_result($result130) ?>
<?php  while ($row=mysql_fetch_array($result131))  { $habitacion20= "".$row["habitacion"].""; } mysql_free_result($result131) ?>
<?php  while ($row=mysql_fetch_array($result132))  { $habitacion21= "".$row["habitacion"].""; } mysql_free_result($result132) ?>
<?php  while ($row=mysql_fetch_array($result133))  { $habitacion22= "".$row["habitacion"].""; } mysql_free_result($result133) ?>
<?php  while ($row=mysql_fetch_array($result134))  { $habitacion23= "".$row["habitacion"].""; } mysql_free_result($result134) ?>
<?php  while ($row=mysql_fetch_array($result135))  { $habitacion24= "".$row["habitacion"].""; } mysql_free_result($result135) ?>
 <?php  while ($row=mysql_fetch_array($result136))  { $habitacion25= "".$row["habitacion"].""; } mysql_free_result($result136) ?>
 <?php  while ($row=mysql_fetch_array($result137))  { $habitacion26= "".$row["habitacion"].""; } mysql_free_result($result137) ?>
 <?php  while ($row=mysql_fetch_array($result138))  { $habitacion27= "".$row["habitacion"].""; } mysql_free_result($result138) ?>
 <?php  while ($row=mysql_fetch_array($result139))  { $habitacion28= "".$row["habitacion"].""; } mysql_free_result($result139) ?>
 <?php  while ($row=mysql_fetch_array($result140))  { $habitacion29= "".$row["habitacion"].""; } mysql_free_result($result140) ?>
 <?php  while ($row=mysql_fetch_array($result141))  { $habitacion30= "".$row["habitacion"].""; } mysql_free_result($result141) ?>
 <?php  while ($row=mysql_fetch_array($result142))  { $habitacion31= "".$row["habitacion"].""; } mysql_free_result($result142) ?>
        

<?php   while ($row=mysql_fetch_array($result2)) { $status= "".$row["status"].""; } mysql_free_result($result2) ?>
<?php   while ($row=mysql_fetch_array($resulth1)) { $statush1= "".$row["status"].""; } mysql_free_result($resulth1) ?>
<?php   while ($row=mysql_fetch_array($resulth2)) { $statush2= "".$row["status"].""; } mysql_free_result($resulth2) ?>
<?php   while ($row=mysql_fetch_array($resulth3)) { $statush3= "".$row["status"].""; } mysql_free_result($resulth3) ?>
<?php   while ($row=mysql_fetch_array($resulth4)) { $statush4= "".$row["status"].""; } mysql_free_result($resulth4) ?>
<?php   while ($row=mysql_fetch_array($resulth5)) { $statush5= "".$row["status"].""; } mysql_free_result($resulth5) ?>
<?php   while ($row=mysql_fetch_array($resulth6)) { $statush6= "".$row["status"].""; } mysql_free_result($resulth6) ?>
<?php   while ($row=mysql_fetch_array($resulth7)) { $statush7= "".$row["status"].""; } mysql_free_result($resulth7) ?>
<?php   while ($row=mysql_fetch_array($resulth8)) { $statush8= "".$row["status"].""; } mysql_free_result($resulth8) ?>
<?php   while ($row=mysql_fetch_array($resulth9)) { $statush9= "".$row["status"].""; } mysql_free_result($resulth9) ?>
<?php   while ($row=mysql_fetch_array($resulth10)) { $statush10= "".$row["status"].""; } mysql_free_result($resulth10) ?>
<?php   while ($row=mysql_fetch_array($resulth11)) { $statush11= "".$row["status"].""; } mysql_free_result($resulth11) ?>
<?php   while ($row=mysql_fetch_array($resulth12)) { $statush12= "".$row["status"].""; } mysql_free_result($resulth12) ?>
<?php   while ($row=mysql_fetch_array($resulth13)) { $statush13= "".$row["status"].""; } mysql_free_result($resulth13) ?>
<?php   while ($row=mysql_fetch_array($resulth14)) { $statush14= "".$row["status"].""; } mysql_free_result($resulth14) ?>
<?php   while ($row=mysql_fetch_array($resulth15)) { $statush15= "".$row["status"].""; } mysql_free_result($resulth15) ?>
<?php   while ($row=mysql_fetch_array($resulth16)) { $statush16= "".$row["status"].""; } mysql_free_result($resulth16) ?>
<?php   while ($row=mysql_fetch_array($resulth17)) { $statush17= "".$row["status"].""; } mysql_free_result($resulth17) ?>
<?php   while ($row=mysql_fetch_array($resulth18)) { $statush18= "".$row["status"].""; } mysql_free_result($resulth18) ?>
<?php   while ($row=mysql_fetch_array($resulth19)) { $statush19= "".$row["status"].""; } mysql_free_result($resulth19) ?>
<?php   while ($row=mysql_fetch_array($resulth20)) { $statush20= "".$row["status"].""; } mysql_free_result($resulth20) ?>
<?php   while ($row=mysql_fetch_array($resulth21)) { $statush21= "".$row["status"].""; } mysql_free_result($resulth21) ?>
<?php   while ($row=mysql_fetch_array($resulth22)) { $statush22= "".$row["status"].""; } mysql_free_result($resulth22) ?>
<?php   while ($row=mysql_fetch_array($resulth23)) { $statush23= "".$row["status"].""; } mysql_free_result($resulth23) ?>
<?php   while ($row=mysql_fetch_array($resulth24)) { $statush24= "".$row["status"].""; } mysql_free_result($resulth24) ?>
<?php   while ($row=mysql_fetch_array($resulth25)) { $statush25= "".$row["status"].""; } mysql_free_result($resulth25) ?>
<?php   while ($row=mysql_fetch_array($resulth26)) { $statush26= "".$row["status"].""; } mysql_free_result($resulth26) ?>
<?php   while ($row=mysql_fetch_array($resulth27)) { $statush27= "".$row["status"].""; } mysql_free_result($resulth27) ?>
<?php   while ($row=mysql_fetch_array($resulth28)) { $statush28= "".$row["status"].""; } mysql_free_result($resulth28) ?>
<?php   while ($row=mysql_fetch_array($resulth29)) { $statush29= "".$row["status"].""; } mysql_free_result($resulth29) ?>
<?php   while ($row=mysql_fetch_array($resulth30)) { $statush30= "".$row["status"].""; } mysql_free_result($resulth30) ?>
<?php   while ($row=mysql_fetch_array($resulth31)) { $statush31= "".$row["status"].""; } mysql_free_result($resulth31) ?>




<?php   while ($row=mysql_fetch_array($result22)) { $status2= "".$row["status"].""; } mysql_free_result($result22) ?>
<?php   while ($row=mysql_fetch_array($result23)) { $status3= "".$row["status"].""; } mysql_free_result($result23) ?>
<?php   while ($row=mysql_fetch_array($result24)) { $status4= "".$row["status"].""; } mysql_free_result($result24) ?>
<?php   while ($row=mysql_fetch_array($result25)) { $status5= "".$row["status"].""; } mysql_free_result($result25) ?>
<?php   while ($row=mysql_fetch_array($result26)) { $status6= "".$row["status"].""; } mysql_free_result($result26) ?>
<?php   while ($row=mysql_fetch_array($result27)) { $status7= "".$row["status"].""; } mysql_free_result($result27) ?>
<?php   while ($row=mysql_fetch_array($result28)) { $status8= "".$row["status"].""; } mysql_free_result($result28) ?>
<?php   while ($row=mysql_fetch_array($result29)) { $status9= "".$row["status"].""; } mysql_free_result($result29) ?>
<?php   while ($row=mysql_fetch_array($result230)) { $status10= "".$row["status"].""; } mysql_free_result($result230) ?>
<?php   while ($row=mysql_fetch_array($result231)) { $status11= "".$row["status"].""; } mysql_free_result($result231) ?>
<?php   while ($row=mysql_fetch_array($result232)) { $status12= "".$row["status"].""; } mysql_free_result($result232) ?>
<?php   while ($row=mysql_fetch_array($result233)) { $status13= "".$row["status"].""; } mysql_free_result($result233) ?>
<?php   while ($row=mysql_fetch_array($result234)) { $status14= "".$row["status"].""; } mysql_free_result($result234) ?>
<?php   while ($row=mysql_fetch_array($result235)) { $status15= "".$row["status"].""; } mysql_free_result($result235) ?>
<?php   while ($row=mysql_fetch_array($result236)) { $status16= "".$row["status"].""; } mysql_free_result($result236) ?>
<?php   while ($row=mysql_fetch_array($result237)) { $status17= "".$row["status"].""; } mysql_free_result($result237) ?>
<?php   while ($row=mysql_fetch_array($result238)) { $status18= "".$row["status"].""; } mysql_free_result($result238) ?>
<?php   while ($row=mysql_fetch_array($result239)) { $status19= "".$row["status"].""; } mysql_free_result($result239) ?>
<?php   while ($row=mysql_fetch_array($result240)) { $status20= "".$row["status"].""; } mysql_free_result($result240) ?>
<?php   while ($row=mysql_fetch_array($result241)) { $status21= "".$row["status"].""; } mysql_free_result($result241) ?>
<?php   while ($row=mysql_fetch_array($result242)) { $status22= "".$row["status"].""; } mysql_free_result($result242) ?>
<?php   while ($row=mysql_fetch_array($result243)) { $status23= "".$row["status"].""; } mysql_free_result($result243) ?>
<?php   while ($row=mysql_fetch_array($result244)) { $status24= "".$row["status"].""; } mysql_free_result($result244) ?>
<?php   while ($row=mysql_fetch_array($result245)) { $status25= "".$row["status"].""; } mysql_free_result($result245) ?>
<?php   while ($row=mysql_fetch_array($result246)) { $status26= "".$row["status"].""; } mysql_free_result($result246) ?>
<?php   while ($row=mysql_fetch_array($result247)) { $status27= "".$row["status"].""; } mysql_free_result($result247) ?>
<?php   while ($row=mysql_fetch_array($result248)) { $status28= "".$row["status"].""; } mysql_free_result($result248) ?>
<?php   while ($row=mysql_fetch_array($result249)) { $status29= "".$row["status"].""; } mysql_free_result($result249) ?>
<?php   while ($row=mysql_fetch_array($result250)) { $status30= "".$row["status"].""; } mysql_free_result($result250) ?>
<?php   while ($row=mysql_fetch_array($result251)) { $status31= "".$row["status"].""; } mysql_free_result($result251) ?>

<?php    while ($row=mysql_fetch_array($result3)) { $m= "".$row["m"].""; } mysql_free_result($result3) ?>
<?php    while ($row=mysql_fetch_array($result32)) { $m2= "".$row["m"].""; } mysql_free_result($result32) ?>

<?php    while ($row=mysql_fetch_array($result33)) { $m3= "".$row["m"].""; } mysql_free_result($result33) ?>
<?php    while ($row=mysql_fetch_array($result34)) { $m4= "".$row["m"].""; } mysql_free_result($result34) ?>
<?php    while ($row=mysql_fetch_array($result35)) { $m5= "".$row["m"].""; } mysql_free_result($result35) ?>
<?php    while ($row=mysql_fetch_array($result36)) { $m6= "".$row["m"].""; } mysql_free_result($result36) ?>
<?php    while ($row=mysql_fetch_array($result37)) { $m7= "".$row["m"].""; } mysql_free_result($result37) ?>
<?php    while ($row=mysql_fetch_array($result38)) { $m8= "".$row["m"].""; } mysql_free_result($result38) ?>
<?php    while ($row=mysql_fetch_array($result39)) { $m9= "".$row["m"].""; } mysql_free_result($result39) ?>
<?php    while ($row=mysql_fetch_array($result340)) { $m10= "".$row["m"].""; } mysql_free_result($result340) ?>
<?php    while ($row=mysql_fetch_array($result341)) { $m11= "".$row["m"].""; } mysql_free_result($result341) ?>
<?php    while ($row=mysql_fetch_array($result342)) { $m12= "".$row["m"].""; } mysql_free_result($result342) ?>
<?php    while ($row=mysql_fetch_array($result343)) { $m13= "".$row["m"].""; } mysql_free_result($result343) ?>
<?php    while ($row=mysql_fetch_array($result344)) { $m14= "".$row["m"].""; } mysql_free_result($result344) ?>
<?php    while ($row=mysql_fetch_array($result345)) { $m15= "".$row["m"].""; } mysql_free_result($result345) ?>
<?php    while ($row=mysql_fetch_array($result346)) { $m16= "".$row["m"].""; } mysql_free_result($result346) ?>
<?php    while ($row=mysql_fetch_array($result347)) { $m17= "".$row["m"].""; } mysql_free_result($result347) ?>
<?php    while ($row=mysql_fetch_array($result348)) { $m18= "".$row["m"].""; } mysql_free_result($result348) ?>
<?php    while ($row=mysql_fetch_array($result349)) { $m19= "".$row["m"].""; } mysql_free_result($result349) ?>
<?php    while ($row=mysql_fetch_array($result350)) { $m20= "".$row["m"].""; } mysql_free_result($result350) ?>
<?php    while ($row=mysql_fetch_array($result351)) { $m21= "".$row["m"].""; } mysql_free_result($result351) ?>
<?php    while ($row=mysql_fetch_array($result352)) { $m22= "".$row["m"].""; } mysql_free_result($result352) ?>
<?php    while ($row=mysql_fetch_array($result353)) { $m23= "".$row["m"].""; } mysql_free_result($result353) ?>
<?php    while ($row=mysql_fetch_array($result354)) { $m24= "".$row["m"].""; } mysql_free_result($result354) ?>
<?php    while ($row=mysql_fetch_array($result355)) { $m25= "".$row["m"].""; } mysql_free_result($result355) ?>
<?php    while ($row=mysql_fetch_array($result356)) { $m26= "".$row["m"].""; } mysql_free_result($result356) ?>
<?php    while ($row=mysql_fetch_array($result357)) { $m27= "".$row["m"].""; } mysql_free_result($result357) ?>
<?php    while ($row=mysql_fetch_array($result358)) { $m28= "".$row["m"].""; } mysql_free_result($result358) ?>
<?php    while ($row=mysql_fetch_array($result359)) { $m29= "".$row["m"].""; } mysql_free_result($result359) ?>
<?php    while ($row=mysql_fetch_array($result360)) { $m30= "".$row["m"].""; } mysql_free_result($result360) ?>
<?php    while ($row=mysql_fetch_array($result361)) { $m31= "".$row["m"].""; } mysql_free_result($result361) ?>

<?php    while ($row=mysql_fetch_array($result4)) { $dia= "".$row["d"].""; } mysql_free_result($result4) ?>
<?php    while ($row=mysql_fetch_array($result42)) { $dia2= "".$row["d"].""; } mysql_free_result($result42) ?>

<?php    while ($row=mysql_fetch_array($result43)) { $dia3= "".$row["d"].""; } mysql_free_result($result43) ?>
<?php    while ($row=mysql_fetch_array($result44)) { $dia4= "".$row["d"].""; } mysql_free_result($result44) ?>
<?php    while ($row=mysql_fetch_array($result45)) { $dia5= "".$row["d"].""; } mysql_free_result($result45) ?>
<?php    while ($row=mysql_fetch_array($result46)) { $dia6= "".$row["d"].""; } mysql_free_result($result46) ?>
<?php    while ($row=mysql_fetch_array($result47)) { $dia7= "".$row["d"].""; } mysql_free_result($result47) ?>
<?php    while ($row=mysql_fetch_array($result48)) { $dia8= "".$row["d"].""; } mysql_free_result($result48) ?>
<?php    while ($row=mysql_fetch_array($result49)) { $dia9= "".$row["d"].""; } mysql_free_result($result49) ?>
<?php    while ($row=mysql_fetch_array($result450)) { $dia10= "".$row["d"].""; } mysql_free_result($result450) ?>
<?php    while ($row=mysql_fetch_array($result451)) { $dia11= "".$row["d"].""; } mysql_free_result($result451) ?>
<?php    while ($row=mysql_fetch_array($result452)) { $dia12= "".$row["d"].""; } mysql_free_result($result452) ?>
<?php    while ($row=mysql_fetch_array($result453)) { $dia13= "".$row["d"].""; } mysql_free_result($result453) ?>
<?php    while ($row=mysql_fetch_array($result454)) { $dia14= "".$row["d"].""; } mysql_free_result($result454) ?>
<?php    while ($row=mysql_fetch_array($result455)) { $dia15= "".$row["d"].""; } mysql_free_result($result455) ?>
<?php    while ($row=mysql_fetch_array($result456)) { $dia16= "".$row["d"].""; } mysql_free_result($result456) ?>
<?php    while ($row=mysql_fetch_array($result457)) { $dia17= "".$row["d"].""; } mysql_free_result($result457) ?>
<?php    while ($row=mysql_fetch_array($result458)) { $dia18= "".$row["d"].""; } mysql_free_result($result458) ?>
<?php    while ($row=mysql_fetch_array($result459)) { $dia19= "".$row["d"].""; } mysql_free_result($result459) ?>
<?php    while ($row=mysql_fetch_array($result460)) { $dia20= "".$row["d"].""; } mysql_free_result($result460) ?>
<?php    while ($row=mysql_fetch_array($result461)) { $dia21= "".$row["d"].""; } mysql_free_result($result461) ?>
<?php    while ($row=mysql_fetch_array($result462)) { $dia22= "".$row["d"].""; } mysql_free_result($result462) ?>
<?php    while ($row=mysql_fetch_array($result463)) { $dia23= "".$row["d"].""; } mysql_free_result($result463) ?>
<?php    while ($row=mysql_fetch_array($result464)) { $dia24= "".$row["d"].""; } mysql_free_result($result464) ?>
<?php    while ($row=mysql_fetch_array($result465)) { $dia25= "".$row["d"].""; } mysql_free_result($result465) ?>
<?php    while ($row=mysql_fetch_array($result466)) { $dia26= "".$row["d"].""; } mysql_free_result($result466) ?>
<?php    while ($row=mysql_fetch_array($result467)) { $dia27= "".$row["d"].""; } mysql_free_result($result467) ?>
<?php    while ($row=mysql_fetch_array($result468)) { $dia28= "".$row["d"].""; } mysql_free_result($result468) ?>
<?php    while ($row=mysql_fetch_array($result469)) { $dia29= "".$row["d"].""; } mysql_free_result($result469) ?>
<?php    while ($row=mysql_fetch_array($result470)) { $dia30= "".$row["d"].""; } mysql_free_result($result470) ?>
<?php    while ($row=mysql_fetch_array($result471)) { $dia31= "".$row["d"].""; } mysql_free_result($result471) ?>
<?php  while ($row=mysql_fetch_array($result500))  { $habit1= "".$row["observaciones"].""; } mysql_free_result($result500) ?> 


<head>

<title>lista de clientes</title>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo1 {color: #FFFFFF}
.Estilo2 {font-size: 9px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo3 {font-size: 10px}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="20" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <th height="104" scope="col"><table width="685" border="0" cellspacing="0">
      <tr>
        <th width="675" scope="col"> <div align="left"><strong>Mes:</strong>
                  <?php		
        
           if ( $mes== 1)    
			  {	echo "Enero"; } 
				else	 
			if ( $mes== 2)    
			  {	echo "Febrero"; } 
			  	else	 
			if ( $mes== 3)    
			  {	echo "Marzo"; }
			  	else	 
			if ( $mes== 4)    
			  {	echo "Abril"; }  
			  	else	 
			if ( $mes== 5)    
			  {	echo "Mayo"; } 
			 			  	else	 
			if ( $mes== 6)    
			  {	echo "Junio"; } 
			  	else	 
			if ( $mes== 7)    
			  {	echo "Julio"; } 
			  	else	 
			if ( $mes== 8)    
			  {	echo "Agosto"; } 
			  	else	 
			if ( $mes== 9)    
			  {	echo "Septiembre"; } 
			  	else	 
			if ( $mes== 10)    
			  {	echo "Octubre"; }
			  	else	 
			if ( $mes== 11)    
			  {	echo "Noviembre"; }  
			  	else	 
			if ( $mes== 12)    
			  {	echo "Diciembre"; } 
		 ?>
        </div></th>
      </tr>
      <tr>
        <td><table width="633" border="0" align="right" cellspacing="0">
          <tr>
            <th width="24" height="28" scope="col"><table width='22' border='0' cellspacing='0'>
              <tr>
                <th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="79" ><span class="Estilo3">Reservada</span></th>
            <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
              <tr>
                <th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="64" scope="col"><span class="Estilo3">Ocupada</span></th>
            <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
              <tr>
                <th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="73" scope="col"><span class="Estilo3">Finalizada</span></th>
            <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
              <tr>
                <th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="77" scope="col"><span class="Estilo3">Bloqueada</span></th>
            <th width="24" scope="col"><table width='22' border='2' cellspacing='0' bordercolor='#FF0000'>
              <tr>
                <th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="97" scope="col"><span class="Estilo3">Inicio de Estadia </span></th>
            <th width="26" scope="col"><table width='22' border='1' cellspacing='0' bordercolor='#000000'>
              <tr>
                <th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th>
              </tr>
            </table></th>
            <th width="73" scope="col"><span class="Estilo3">Disponible</span></th>
          </tr>
        </table></td>
      </tr>
    </table>
        <p>&nbsp;</p>
      <p></p></th>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="200" height="22" bgcolor="#000066"><span class="Estilo1"><?php echo "$habit1"; ?></span></td>
    <td width="17"><?php	/// Dia 1	
				 
 			 if ( $habitacion == $dato and $m == $mes and $dia == $dia1 and $status == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion == $dato and $m == $mes and $dia == $dia1 and $status == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion == $dato and $m == $mes and $dia == $dia1 and $status == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion == $dato and $m == $mes and $dia == $dia1 and $status == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion == $dato and $m == $mes and $dia == $dia1 and $status == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				  else 	
				 if ( $habitacionT1 == $dato and $statush1 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 
				 	
				 	else  if ( $habitacionT1 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 2	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////				
				
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////			
			
							
				
				
				
				 
 			 if ( $habitacion2 == $dato and $m2 == $mes and $dia2 == $dia_2 and $status2 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion2 == $dato and $m2 == $mes and $dia2 == $dia_2 and $status2 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion2 == $dato and $m2 == $mes and $dia2 == $dia_2 and $status2 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion2 == $dato and $m2 == $mes and $dia2 == $dia_2 and $status2 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion2 == $dato and $m2 == $mes and $dia2 == $dia_2 and $status2 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 	
					
					 else 	
				 if ( $habitacionT2 == $dato and $statush2 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
							 
					 else  if ( $habitacionT2 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }    else  
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }	
					 
					 
					 				 
		 ?></td>
    <td width="20"><?php	/// Dia 3	
				
					 
				 
 			 if ( $habitacion3 == $dato and $m3 == $mes and $dia3 == $dia_3 and $status3 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion3 == $dato and $m3 == $mes and $dia3 == $dia_3 and $status3 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion3 == $dato and $m3 == $mes and $dia3 == $dia_3 and $status3 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion3 == $dato and $m3 == $mes and $dia3 == $dia_3 and $status3 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion3 == $dato and $m3 == $mes and $dia3 == $dia_3 and $status3 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 else 	
				 if ( $habitacionT3 == $dato and $statush3 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				
				  else 		
				 if ( $habitacionT3 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }	
					 
					 
					 
					 
					 				 
		 ?></td>
    <td width="20"><?php	/// Dia 4	
				
				
				
				
				
				
				
				
				 
 			 if ( $habitacion4 == $dato and $m4 == $mes and $dia4 == $dia_4 and $status4 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion4 == $dato and $m4 == $mes and $dia4 == $dia_4 and $status4  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion4 == $dato and $m4 == $mes and $dia4 == $dia_4 and $status4  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion4 == $dato and $m4 == $mes and $dia4 == $dia_4 and $status4  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion4 == $dato and $m4 == $mes and $dia4 == $dia_4 and $status4 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				 
				 	 else 	
				 if ( $habitacionT4 == $dato and $statush4 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  			 
				 
				  else 
					 
					 	 if ( $habitacionT4 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                  }
											
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }	
					
				
					 
					 
					 
					 
					 
					 
					 				 
		 ?></td>
    <td width="20"><?php	/// Dia 5
				 
				
			 
				
				
				
				
					
				 
 			 if ( $habitacion5 == $dato and $m5 == $mes and $dia5 == $dia_5 and $status5 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion5 == $dato and $m5 == $mes and $dia5 == $dia_5 and $status5  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion5 == $dato and $m5 == $mes and $dia5 == $dia_5 and $status5 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion5 == $dato and $m5 == $mes and $dia5 == $dia_5 and $status5  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion5 == $dato and $m5 == $mes and $dia5 == $dia_5 and $status5 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				  	 else 	
				 if ( $habitacionT5 == $dato and $statush5 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
				 
				 
				 
				 
				 
				 
				 
				 		else
						 if ( $habitacionT5 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 6	
				
				
				
				
				
				
				
				
				
				 
 			 if ( $habitacion6 == $dato and $m6 == $mes and $dia6 == $dia_6 and $status6 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion6 == $dato and $m6 == $mes and $dia6 == $dia_6 and $status6  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion6 == $dato and $m6 == $mes and $dia6 == $dia_6 and $status6 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion6 == $dato and $m6 == $mes and $dia6 == $dia_6 and $status6 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion6 == $dato and $m6 == $mes and $dia6 == $dia_6 and $status6 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
				
				
                 } 	
				 
				  	 else 	
				 if ( $habitacionT6 == $dato and $statush6 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
				 
				 
				 	else  if ( $habitacionT6 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 7	
				
				
				
				
				
				
				
				
				
				 
 			 if ( $habitacion7 == $dato and $m7 == $mes and $dia7 == $dia_7 and $status7 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion7 == $dato and $m7 == $mes and $dia7 == $dia_7 and $status7   == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion7 == $dato and $m7 == $mes and $dia7 == $dia_7 and $status7  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion7 == $dato and $m7 == $mes and $dia7 == $dia_7 and $status7  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion7 == $dato and $m7 == $mes and $dia7 == $dia_7 and $status7  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				  	 else 	
				 if ( $habitacionT7 == $dato and $statush7 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
				 
				 
				 
				 
				 
				 
					else  if ( $habitacionT7 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 8	
				
				
				
				 
				
				
				
				
				 
 			 if ( $habitacion8 == $dato and $m8 == $mes and $dia8 == $dia_8 and $status8 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion8 == $dato and $m8 == $mes and $dia8 == $dia_8 and $status8   == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion8 == $dato and $m8 == $mes and $dia8 == $dia_8 and $status8  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion8 == $dato and $m8 == $mes and $dia8 == $dia_8 and $status8  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion8 == $dato and $m8 == $mes and $dia8 == $dia_8 and $status8  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				 
				  	 else 	
				 if ( $habitacionT8 == $dato and $statush8 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
				 
				 
				 
				 
				 
				 else	 if ( $habitacionT8 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 9
				
				
				 
 			 if ( $habitacion9 == $dato and $m9 == $mes and $dia9 == $dia_9 and $status9 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion9 == $dato and $m9 == $mes and $dia9 == $dia_9 and $status9  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion9 == $dato and $m9 == $mes and $dia9 == $dia_9 and $status9  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion9 == $dato and $m9 == $mes and $dia9 == $dia_9 and $status9  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion9 == $dato and $m9 == $mes and $dia9 == $dia_9 and $status9  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				  	 else 	
				 if ( $habitacionT9 == $dato and $statush9 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
				 
				 
				 
				 
				 
				 
				 	
				 		else  if ( $habitacionT9 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
											
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 10	
				
				
				
				 
 			 if ( $habitacion10 == $dato and $m10 == $mes and $dia10 == $dia_10 and $status10 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion10 == $dato and $m10 == $mes and $dia10 == $dia_10 and $status10  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion10 == $dato and $m10 == $mes and $dia10 == $dia_10 and $status10  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion10 == $dato and $m10 == $mes and $dia10 == $dia_10 and $status10  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion10 == $dato and $m10 == $mes and $dia10 == $dia_10 and $status10  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				 	
					 	 else 	
				 if ( $habitacionT10 == $dato and $statush10 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
					
					
					
					
					
					else  if ( $habitacionT10 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 11	
				
				
				
				 
 			 if ( $habitacion11 == $dato and $m11 == $mes and $dia11 == $dia_11 and $status11 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion11 == $dato and $m11 == $mes and $dia11 == $dia_11 and $status11  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion11 == $dato and $m11 == $mes and $dia11 == $dia_11 and $status11  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion11 == $dato and $m11 == $mes and $dia11 == $dia_11 and $status11  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion11 == $dato and $m11 == $mes and $dia11 == $dia_11 and $status11  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					 	 else 	
				 if ( $habitacionT11 == $dato and $statush11 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
					
					
					
					
					
					else  if ( $habitacionT11 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 12
			
				
				
				 
 			 if ( $habitacion12 == $dato and $m12 == $mes and $dia12 == $dia_12 and $status12 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion12 == $dato and $m12 == $mes and $dia12 == $dia_12 and $status12  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion12 == $dato and $m12 == $mes and $dia12 == $dia_12 and $status12  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion12 == $dato and $m12 == $mes and $dia12 == $dia_12 and $status12  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (  $habitacion12 == $dato and $m12 == $mes and $dia12 == $dia_12 and $status12  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	 	 else 	
				 if ( $habitacionT12 == $dato and $statush12 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				  		
					
					
					
					else 	 if ( $habitacionT12 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 13
				
				
				
				
				
				
				
				 
 			 if ( $habitacion13 == $dato and $m13 == $mes and $dia13 == $dia_13 and $status13 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (   $habitacion13 == $dato and $m13 == $mes and $dia13 == $dia_13 and $status13 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion13 == $dato and $m13 == $mes and $dia13 == $dia_13 and $status13  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if (  $habitacion13 == $dato and $m13 == $mes and $dia13 == $dia_13 and $status13 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion13 == $dato and $m13 == $mes and $dia13 == $dia_13 and $status13 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
				  	 	 else 	
				 if ( $habitacionT13 == $dato and $statush13 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 else 	 if ( $habitacionT13 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 14
				
				
				 
 			 if ( $habitacion14 == $dato and $m14 == $mes and $dia14 == $dia_14 and $status14 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (   $habitacion14 == $dato and $m14 == $mes and $dia14 == $dia_14 and $status14 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion14 == $dato and $m14 == $mes and $dia14 == $dia_14 and $status14  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion14 == $dato and $m14 == $mes and $dia14 == $dia_14 and $status14 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion14 == $dato and $m14 == $mes and $dia14 == $dia_14 and $status14 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 	 	 	 else 	
				 if ( $habitacionT14 == $dato and $statush14 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					
					else  if ( $habitacionT14 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 15
				
			
				
				 
				
				
				 
 			 if ( $habitacion15 == $dato and $m15 == $mes and $dia15 == $dia_15 and $status15 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (   $habitacion15 == $dato and $m15 == $mes and $dia15 == $dia_15 and $status15 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion15 == $dato and $m15 == $mes and $dia15 == $dia_15 and $status15  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion15 == $dato and $m15 == $mes and $dia15 == $dia_15 and $status15 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion15 == $dato and $m15 == $mes and $dia15 == $dia_15 and $status15 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					 	 	 else 	
				 if ( $habitacionT15 == $dato and $statush15 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					
					else	 if ( $habitacionT15 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 16
				
				
				
				
				
				
				 
 			 if ( $habitacion16 == $dato and $m16 == $mes and $dia16 == $dia_16 and $status16 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion16 == $dato and $m16 == $mes and $dia16 == $dia_16 and $status16== "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion16 == $dato and $m16 == $mes and $dia16 == $dia_16 and $status16  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion16 == $dato and $m16 == $mes and $dia16 == $dia_16 and $status16 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion16 == $dato and $m16 == $mes and $dia16 == $dia_16 and $status16 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				  	 	 else 	
				 if ( $habitacionT16 == $dato and $statush16 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 
				 	else  if ( $habitacionT16 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 17
				
				
				
				
				
				
				
				 
 			 if ( $habitacion17 == $dato and $m17 == $mes and $dia17 == $dia_17 and $status17 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion17 == $dato and $m17 == $mes and $dia17 == $dia_17 and $status17 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if (  $habitacion17 == $dato and $m17 == $mes and $dia17 == $dia_17 and $status17  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion17 == $dato and $m17 == $mes and $dia17 == $dia_17 and $status17 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion17 == $dato and $m17 == $mes and $dia17 == $dia_17 and $status17 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					 	 	 else 	
				 if ( $habitacionT17 == $dato and $statush17 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					else  if ( $habitacionT17 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 18
				
				
				
				 
				 
				 
				 
 			 if ( $habitacion18 == $dato and $m18 == $mes and $dia18 == $dia_18 and $status18 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion18 == $dato and $m18 == $mes and $dia18 == $dia_18 and $status18 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion18 == $dato and $m18 == $mes and $dia18 == $dia_18 and $status18 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion18 == $dato and $m18 == $mes and $dia18 == $dia_18 and $status18 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion18 == $dato and $m18 == $mes and $dia18 == $dia_18 and $status18 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				  	 	 else 	
				 if ( $habitacionT18 == $dato and $statush18 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				  else 	 if ( $habitacionT18 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 19
				
				
				 
				
				
				
				 
 			 if ( $habitacion19 == $dato and $m19 == $mes and $dia19 == $dia_19 and $status19 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion19 == $dato and $m19 == $mes and $dia19 == $dia_19 and $status19 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion19 == $dato and $m19 == $mes and $dia19 == $dia_19 and $status19 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion19 == $dato and $m19 == $mes and $dia19 == $dia_19 and $status19 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion19 == $dato and $m19 == $mes and $dia19 == $dia_19 and $status19 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
			
			 	 	 else 	
				 if ( $habitacionT19 == $dato and $statush19 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			
			
			
			
			
				else	 if ( $habitacionT19 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 20
				
				
				
				 
				
				
				
				
				 
 			 if ( $habitacion20 == $dato and $m20 == $mes and $dia20 == $dia_20 and $status20 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion20 == $dato and $m20 == $mes and $dia20 == $dia_20 and $status20 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion20 == $dato and $m20 == $mes and $dia20 == $dia_20 and $status20 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion20 == $dato and $m20 == $mes and $dia20 == $dia_20 and $status20 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (   $habitacion20 == $dato and $m20 == $mes and $dia20 == $dia_20 and $status20 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				 	
					 	 	 else 	
				 if ( $habitacionT20 == $dato and $statush20 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					else if ( $habitacionT20 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 21
				
				
				
				
				 
 			 if ( $habitacion21 == $dato and $m21 == $mes and $dia21 == $dia_21 and $status21 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion21 == $dato and $m21 == $mes and $dia21 == $dia_21 and $status21 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion21 == $dato and $m21 == $mes and $dia21 == $dia_21 and $status21 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion21 == $dato and $m21 == $mes and $dia21 == $dia_21 and $status21 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (  $habitacion21 == $dato and $m21 == $mes and $dia21 == $dia_21 and $status21 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
						 	 	 else 	
				 if ( $habitacionT21 == $dato and $statush21 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					else  if ( $habitacionT21 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 22
				
				
				
				 
 			 if ( $habitacion22 == $dato and $m22 == $mes and $dia22 == $dia_22 and $status23 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion22 == $dato and $m22 == $mes and $dia22 == $dia_22 and $status22  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion22 == $dato and $m22 == $mes and $dia22 == $dia_22 and $status22  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion22 == $dato and $m22 == $mes and $dia22 == $dia_22 and $status22  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (  $habitacion22 == $dato and $m22 == $mes and $dia22 == $dia_22 and $status22  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				
					 	 	 else 	
				 if ( $habitacionT22 == $dato and $statush22 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				
				
				
				
				
				 else 	 if ( $habitacionT22 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 23
				
				
				
				 
 			 if ( $habitacion23 == $dato and $m23 == $mes and $dia23 == $dia_23 and $status23 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion23 == $dato and $m23 == $mes and $dia23 == $dia_23 and $status23  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion23 == $dato and $m23 == $mes and $dia23 == $dia_23 and $status23   == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion23 == $dato and $m23 == $mes and $dia23 == $dia_23 and $status23  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if (  $habitacion23 == $dato and $m23 == $mes and $dia23 == $dia_23 and $status23   == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
						 	 	 else 	
				 if ( $habitacionT23 == $dato and $statush23 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					
					else  if ( $habitacionT23 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 24
			
				
			
				 
 			 if ( $habitacion24 == $dato and $m24 == $mes and $dia24 == $dia_24 and $status24 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion24 == $dato and $m24 == $mes and $dia24 == $dia_24 and $status24  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion24 == $dato and $m24 == $mes and $dia24 == $dia_24 and $status24  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion24 == $dato and $m24 == $mes and $dia24 == $dia_24 and $status24  == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion24 == $dato and $m24 == $mes and $dia24 == $dia_24 and $status24  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 		
							 	 	 else 	
				 if ( $habitacionT24 == $dato and $statush24 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
						
						
						
						
						
						else 	 if ( $habitacionT24 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 25
				
				
				
				 
 			 if ( $habitacion25 == $dato and $m25 == $mes and $dia25 == $dia_25 and $status25 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion25 == $dato and $m25 == $mes and $dia25 == $dia_25 and $status25  == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion25 == $dato and $m25 == $mes and $dia25 == $dia_25 and $status25  == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion25 == $dato and $m25 == $mes and $dia25 == $dia_25 and $status25 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion25 == $dato and $m25 == $mes and $dia25 == $dia_25 and $status25  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 
					 	 	 else 	
				 if ( $habitacionT25 == $dato and $statush25 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				
				
				
				
				
				 else 	 if ( $habitacionT25 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 26
				
				 
				 
 			 if ( $habitacion26 == $dato and $m26 == $mes and $dia26 == $dia_26 and $status26 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion26 == $dato and $m26 == $mes and $dia26 == $dia_26 and $status26 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion26 == $dato and $m26 == $mes and $dia26 == $dia_26 and $status26 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ( $habitacion26 == $dato and $m26 == $mes and $dia26 == $dia_26 and $status26 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ( $habitacion26 == $dato and $m26 == $mes and $dia26 == $dia_26 and $status26  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					
						 	 	 else 	
				 if ( $habitacionT26 == $dato and $statush26 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					else if ( $habitacionT26 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				 
				 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 27
				
				
				 
 			 if ( $habitacion27 == $dato and $m27 == $mes and $dia27 == $dia_27 and $status27 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion27 == $dato and $m27 == $mes and $dia27 == $dia_27 and $status27 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion27 == $dato and $m27 == $mes and $dia27 == $dia_27 and $status27 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion27 == $dato and $m27 == $mes and $dia27 == $dia_27 and $status27 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ($habitacion27 == $dato and $m27 == $mes and $dia27 == $dia_27 and $status27  == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				 	 	 	 else 	
				 if ( $habitacionT27 == $dato and $statush27 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 
				 
				 	else  if ( $habitacionT27 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				 
				 							
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 28
				
				
				
				 
 			 if ( $habitacion28 == $dato and $m28 == $mes and $dia28 == $dia_28 and $status28 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion28 == $dato and $m28 == $mes and $dia28 == $dia_28 and $status28 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion28 == $dato and $m28 == $mes and $dia28 == $dia_28 and $status28 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion28 == $dato and $m28 == $mes and $dia28 == $dia_28 and $status28 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ($habitacion28 == $dato and $m28 == $mes and $dia28 == $dia_28 and $status28 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 		
				 
				 	 	 	 else 	
				 if ( $habitacionT28 == $dato and $statush28 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 	else  if ( $habitacionT28 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 						
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 29
			
				 
				
				 
 			 if ( $habitacion29 == $dato and $m29 == $mes and $dia29 == $dia_29 and $status29 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion29 == $dato and $m29 == $mes and $dia29 == $dia_29 and $status29 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion29 == $dato and $m29 == $mes and $dia29 == $dia_29 and $status29 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion29 == $dato and $m29 == $mes and $dia29 == $dia_29 and $status29 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ($habitacion29 == $dato and $m29 == $mes and $dia29 == $dia_29 and $status29 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	else	 if ( $habitacionT29 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
												
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 30
				
				
				
				 
 			 if ( $habitacion30 == $dato and $m30 == $mes and $dia30 == $dia_30 and $status30 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion30 == $dato and $m30 == $mes and $dia30 == $dia_30 and $status30 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion30 == $dato and $m30 == $mes and $dia30 == $dia_30 and $status30 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion30 == $dato and $m30 == $mes and $dia30 == $dia_30 and $status30 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ($habitacion30 == $dato and $m30 == $mes and $dia30 == $dia_30 and $status30 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					
						 	 	 else 	
				 if ( $habitacionT30 == $dato and $statush30 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					else  if ( $habitacionT30 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
    <td width="20"><?php	/// Dia 31
				
				
				
				
				 
 			 if ( $habitacion31 == $dato and $m31 == $mes and $dia31 == $dia_31 and $status31 == "reservada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ( $habitacion31 == $dato and $m31 == $mes and $dia31 == $dia_31 and $status31 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
			else 
				if ($habitacion31 == $dato and $m31 == $mes and $dia31 == $dia_31 and $status31 == "finalizada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 }  	
					else 
				if ($habitacion31 == $dato and $m31 == $mes and $dia31 == $dia_31 and $status31 == "bloqueada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 							
					else 
				if ($habitacion31 == $dato and $m31 == $mes and $dia31 == $dia_31 and $status31 == "inicio")    
			  { 
			    echo "<table width='22' border='2' cellspacing='0' bordercolor='#FF0000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	
                 } 	
				 	
					
						 	 	 else 	
				 if ( $habitacionT31 == $dato and $statush31 == "ocupada")    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
					
					
					
					
					
					else  if ( $habitacionT31 == $dato )    
			  { 
			    echo "<table width='22' border='0' cellspacing='0'><tr><th width='12' bgcolor='#FFCC66' scope='col'>&nbsp;</th>
  </tr></table>"; 	
                 } 
				
				 
				 								
          else 
			  { 
			    echo "<table width='22' border='1' cellspacing='0' bordercolor='#000000'><tr><th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th></tr></table>"; 	              
				     }					 
		 ?></td>
  </tr>
</table>

<table border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">

  <tr>

</table>

</body>
</html>

