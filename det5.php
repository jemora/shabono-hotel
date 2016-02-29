<?php 
require_once('conector/conector.php');
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultdet1 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");
$resultdet2 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");
$resultdet3 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");
$resultdet4 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");
$resultdet5 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");
$resultdet6 = mysql_query("SELECT * FROM habitacion2  WHERE id  LIKE '$datox'");

?>
<?php  while ($row=mysql_fetch_array($resultdet1))  { $datoX1= "".$row["obsev"].""; } mysql_free_result($resultdet1) ?>
<?php  while ($row=mysql_fetch_array($resultdet2))  { $datoX2= "".$row["apellido"].""; } mysql_free_result($resultdet2) ?>
<?php  while ($row=mysql_fetch_array($resultdet3))  { $datoX3= "".$row["doc2"].""; } mysql_free_result($resultdet3) ?>
<?php  while ($row=mysql_fetch_array($resultdet4))  { $datoX4= "".$row["status"].""; } mysql_free_result($resultdet4) ?>
<?php  while ($row=mysql_fetch_array($resultdet5))  { $datoX5= "".$row["nom_hab"].""; } mysql_free_result($resultdet5) ?>
<?php  while ($row=mysql_fetch_array($resultdet6))  { $datoX6= "".$row["habitacion"].""; } mysql_free_result($resultdet6) ?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script type="text/javascript" src="stmenu.js"></script></head>

<body>
<script type="text/javascript">
<!--
stm_bm(["menu640f",840,"","blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0,0,1,2,"default","hand",""],this);
stm_bp("p0",[0,4,0,0,2,3,0,7,100,"",-2,"",-2,50,0,0,"#999999","#FF8080","",3,1,1,"#FF8080"]);
stm_ai("p0i0",[0,"","","",-1,-1,0,"","_self","","","","",0,0,0,"arrow_r.gif","arrow_r.gif",7,7,0,0,1,"#FF8080",0,"#FF8080",0,"","",3,3,0,0,"#FFCC00","#000000","#000000","#000000","8pt Verdana","8pt Verdana",0,0]);
stm_bpx("p1","p0",[1,4,0,0,2,3,0,0,100,"",-2,"",-2,50,0,0,"#999999","#E6EFF9","",3,0,0]);
stm_aix("p1i0","p0i0",[0,"Habitación:<?php echo  $datoX5; ?>\r\nNº Habitación:<?php echo  $datoX6; ?>\r\nEstatus:<?php echo  $datoX4; ?>\r\nObservaciones:<?php echo  $datoX1; ?>","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0],100,0);
stm_ep();
stm_ep();
stm_em();
//-->
</script>

</body>
</html>
