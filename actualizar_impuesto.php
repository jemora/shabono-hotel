   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM iva WHERE cod  LIKE '0'  ");

?>




<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>

<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
<style type="text/css">
<!--
.Estilo1 {font-weight: bold}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo2 {
	font-size: 12px;
	font-weight: bold;
}
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body onLoad="MM_preloadImages('ver.php?titulo=<?php echo $row_rsArticulo['titulo']; ?>')">
</div>
<?php 
	$id = $_GET["id"];
	if ( $id == 'actualizar' )
	{ 
		$iva = $_POST["iva"];
		require_once('conector/conector.php');
		if (isset($iva))
		{
			//Conexion con la base
			mysql_connect($hostname,$username,$password);

			//Creamos la sentencia SQL y la ejecutamos
			$sSQL="Update iva Set  
			iva='$iva'
			  
			Where cod='0'";

			mysql_db_query($database,$sSQL);	
		}
	} 
		
?>
<?php include("impuesto.php");?>

</body>
</html>
