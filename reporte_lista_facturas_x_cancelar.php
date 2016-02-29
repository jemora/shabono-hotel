<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 100;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion2 WHERE opc like '0' and opc2 like '1' and  status LIKE 'ocupada' ORDER BY fecha DESC";
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
.Estilo1 {font-size: 12px}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: 12px; color: #FFFFFF; }
.Estilo5 {
	color: #FFCC00;
	font-weight: bold;
}
.Estilo14 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo15 {font-size: 10px}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
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
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include('imprimir2.php'); ?>
<br>
<table width="749" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#000000">
  <tr>
    <td height="8" colspan="9" bgcolor="#000000" ><div align="left" class="Estilo1 Estilo5">Facturas Pendientes </div>      <div align="left" class="Estilo4"></div></td>
  </tr>
  <tr>
     
	
	
  <?php 
  if ( $C1 == 'ON' )
			  { 
  
  echo   '<td width="67" height="22" bgcolor="#000000" ><div align="center" class="Estilo15"><span class="Estilo3">N&ordm; Ref </span></div></td>'
  ;   }
  
  ?>
  
    <?php 
  if ( $C2 == 'ON' )
 {   echo   '
    <td width="67" height="22" bgcolor="#000000" ><div align="center"><span class="small Estilo3">Habitaci&oacute;n</span></div></td>' ;   }  ?>
	
   <?php 
  if ( $C3 == 'ON' )
 {   echo   '
    <td width="128" height="22" bgcolor="#000000" ><div align="left" class="Estilo15"><span class="Estilo3">Cliente</span></div></td>' ;   }  ?>
	
   <?php 
  if ( $C4 == 'ON' )
 {   echo   ' 
	<td width="74" height="22" bgcolor="#000000" ><div align="center"><span class="small Estilo3">Monto</span></div></td>
	' ;   }  ?>
	
<?php 
  if ( $C5 == 'ON' )
 {   echo   '
    <td width="71" height="22" bgcolor="#000000" ><div align="center"><span class="small Estilo3">Habitaci&oacute;n</span></div></td>' ;   }  ?>
	
	<?php 
  if ( $C6 == 'ON' )
 {   echo   '
    <td width="55" height="22" bgcolor="#000000" ><div align="center"><span class="small Estilo3">Cant dias </span></div></td>' ;   }  ?>
	
		<?php 
  if ( $C7 == 'ON' )
 {   echo   '
    <td height="22" bgcolor="#000000" ><div align="left" class="Estilo15"><span class="Estilo3">Fechas</span></div></td>' ;   }  ?>
    
		<?php 
  if ( $C8 == 'ON' )
 {   echo   '
	<td height="22" bgcolor="#000000" ><div align="center"><span class="small Estilo3">Usuario </span></div></td>
  </tr>' ;   }  ?>
  
  
  <?php do { 
   if ($totalRows_Recordset2==0){
       $color= "#DEDEBE";
       $colorfila=1;
    }else{
       $color="#F0F0F0";
       $totalRows_Recordset2=0;
    }
 ?>

	
   <?php 
    if ( $C1 == 'ON' )
 {  echo  '<tr><td width="67" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo15">'; echo $row_Recordset2['id']; echo '</span></div></td>';  } ?>
	
        <?php 
    if ( $C2 == 'ON' )
 {  echo  '<td width="67" bgcolor="#E3E9F1" ><div align="center"><span class="Estilo15">'; echo $row_Recordset2['habitacion']; echo '</span></div></td>';  } ?>
	  
      
	     <?php 
    if ( $C3 == 'ON' )
 {  echo  '<td width="128" bgcolor="#E3E9F1" ><div align="left" class="Estilo15"><strong>'; echo $row_Recordset2['doc2']; echo '</strong>';  echo $row_Recordset2['nombre'];  echo $row_Recordset2['apellido']; echo '</div></td>';  } ?>
	  
	  
	  <?php 
    if ( $C4 == 'ON' )
 {  echo  ' 
    <td width="74" bgcolor="#E3E9F1" ><span class="Estilo15">'; echo $row_Recordset2['subtotal1']; echo '</span></td>';  } ?>
	
	
 <?php 
    if ( $C5 == 'ON' )
 {  echo  ' 
    <td width="71" bgcolor="#E3E9F1" ><span class="Estilo15">';  echo $row_Recordset2['nom_hab']; echo '</span></td>';  } ?> 
	
 <?php 
    if ( $C6 == 'ON' )
 {  echo  '
    <td width="55" bgcolor="#E3E9F1" ><span class="Estilo15">'; echo $row_Recordset2['cant_dia']; echo '</span></td>';  } ?> 
	
 <?php 
    if ( $C7 == 'ON' )
 {  echo  '
    <td width="155" bgcolor="#E3E9F1" ><span class="Estilo14"><strong>Desde:</strong>'; echo $row_Recordset2['fecha1']; echo '<br>
      <strong>Hasta:</strong>'; echo $row_Recordset2['fecha2']; echo '</span></td>';  } ?> 
	  
<?php 
    if ( $C8 == 'ON' )
 {  echo  '
    <td width="114" bgcolor="#E3E9F1" ><span class="Estilo15">'; echo $row_Recordset2['usuario']; echo '</span></td>
    </tr>';  } ?> 
  

  
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
</body>
</html>