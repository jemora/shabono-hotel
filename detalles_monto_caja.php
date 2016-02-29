<?php 	require_once('conector/conector.php');?>
<?php 


$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT SUM(monto) from caja_gastos WHERE ref LIKE '$dato'");
$test1c = mysql_fetch_row($test11a);

$test1c[0];


?>

<?php echo $test1c[0];; ?>


