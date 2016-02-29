<p><?php 

	require_once('conector/conector.php');
	$codigo = $_GET['codigo'];

	if (isset($codigo)){

		mysql_connect($hostname,$username,$password);
		 
		mysql_select_db($database); 

		$sSQL="Delete From botones Where id like '$codigo'";
		mysql_query($sSQL);
	}
	require('lista_botones.php'); 
  
?>
</p>
