<?php 	require_once('conector/conector.php'); 


if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result1 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM usuarios WHERE ID  LIKE '$codigo'");






?>

<?php  while ($row=mysql_fetch_array($result)) { $dato= "".$row["ID"].""; }
mysql_free_result($result)?>






<head>

<title>lista de habitaciones</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--

function GP_popupConfirmMsg(msg) { //v1.0
  document.MM_returnValue = confirm(msg);
}
//-->
</script>
</head>

<body>
<p><img src="imagenes/banne15.gif" width="607" height="30" /><br>
  <span class="Estilo1">Privilegios de Usuarios:</span>
  <?php				
           if ( $id4  == 'activo' )
			  {     require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ver_cal='0';
$sSQL="Update usuarios Set  
ver_cal='$ver_cal'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);



echo "bien";
                 } 
else 	  if ( $id4  == 'inactivo' )
			  { require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ver_cal='1';
$sSQL="Update usuarios Set  
ver_cal='$ver_cal' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	
				 
		     else      if ( $id5  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$asi_hab='0';
$sSQL="Update usuarios Set  
asi_hab='$asi_hab'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id5  == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$asi_hab='1';
$sSQL="Update usuarios Set  
asi_hab='$asi_hab' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 		 
				 
				 
				 else      if ( $id6  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$eli_hab='0';
$sSQL="Update usuarios Set  
eli_hab='$eli_hab'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id6 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$eli_hab='1';
$sSQL="Update usuarios Set  
eli_hab='$eli_hab' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 		 
				 
				 
				  
				 else      if ( $id7  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ag_cli='0';
$sSQL="Update usuarios Set  
ag_cli='$ag_cli'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id7 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$ag_cli='1';
$sSQL="Update usuarios Set  
ag_cli='$ag_cli' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	 
	
				
				
				else      if ( $id8  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$bus_cli='0';
$sSQL="Update usuarios Set  
bus_cli='$bus_cli'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id8 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$bus_cli='1';
$sSQL="Update usuarios Set  
bus_cli='$bus_cli' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	  
				 
				 
				 
					else      if ( $id9  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$eli_cli='0';
$sSQL="Update usuarios Set  
eli_cli='$eli_cli'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id9 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$eli_cli='1';
$sSQL="Update usuarios Set  
eli_cli='$eli_cli' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	 
				 
				 
				 
				 
				 else      if ( $id10  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$mod_cli='0';
$sSQL="Update usuarios Set  
mod_cli='$mod_cli'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id10 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$mod_cli='1';
$sSQL="Update usuarios Set  
mod_cli='$mod_cli' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	 
				 
				 
					 else      if ( $id11  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$fact='0';
$sSQL="Update usuarios Set  
fact='$fact'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id11 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$fact='1';
$sSQL="Update usuarios Set  
fact='$fact' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 	 
				 
				 
				 
				  
					 else      if ( $id12  == 'activo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$asi_con='0';
$sSQL="Update usuarios Set  
asi_con='$asi_con'
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 } 
else 	  if ( $id12 == 'inactivo' )
			  {   require_once('conector/conector.php');
mysql_connect($hostname,$username,$password);
$asi_con='1';
$sSQL="Update usuarios Set  
asi_con='$asi_con' 
Where ID like '$codigo'";
mysql_db_query($database,$sSQL);
                 }
				 
				 
				  ?>
  <br>
  <?php require('lista_privilegios_usuarios.php'); ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
</body>
</html>

