
<?php 
require_once('conector/conector.php');
?>
<?

$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2info = 50;
$pageNum_Recordset2info = 0;
if (isset($_GET['pageNum_Recordset2info'])) {
  $pageNum_Recordset2info = $_GET['pageNum_Recordset2info'];
}
$startRow_Recordset2info = $pageNum_Recordset2info * $maxRows_Recordset2info;

mysql_select_db($database, $connFlashblog);
$query_Recordset2info = "SELECT * FROM informacion WHERE id  LIKE '1'";
$query_limit_Recordset2info = sprintf("%s LIMIT %d, %d", $query_Recordset2info, $startRow_Recordset2info, $maxRows_Recordset2info);
$Recordset2 = mysql_query($query_limit_Recordset2info, $connFlashblog) or die(mysql_error());
$row_Recordset2info = mysql_fetch_assoc($Recordset2);






?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
</head>


<?php 	require_once('css.php');?>
<body text="#000000"><div align="center">
<table width="87%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="100%" valign="top"><div align="right" >
          <div align="left"><img src="imagenes/banne16.gif" width="607" height="30"><br />
            <table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
              <!--DWLayoutTable-->
              <tr>
                <td width="560" height="26" valign="top"><table width="560" border="0" align="center" cellspacing="0">
                    <tr>
                      <td width="364" bgcolor="#F4F4F4"><table width="560" border="0" align="center" cellspacing="0">
                          <!--DWLayoutTable-->
                          <tr>
                            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
                            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
                            <td width="364" bgcolor="#F4F4F4"><div align="right"></div></td>
                            <td width="23" bgcolor="#F4F4F4"><div align="right"></div></td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
            </table>
            <div align="center"><a href="?id5=info"><br>
            </a>
              <table width="0" border="0" cellspacing="0">
              <tr>
                <th scope="col"><a href="?id5=info"><img src="imagenes/botones_r1_c1.gif" alt="Actualizar Informacion" width="158" height="40" border="0" longdesc="imagenes/actualizar.gif"></a></th>
                <th scope="col"><a href="?id5=logo"><img src="imagenes/botones_r1_c2.gif" alt="Actualizar Informacion" width="166" height="40" border="0" longdesc="imagenes/actualizar.gif"></a></th>
                <th scope="col"><a href="?id5=banner"><img src="imagenes/botones_r1_c3.gif" alt="Actualizar Informacion" width="161" height="40" border="0" longdesc="imagenes/actualizar.gif"></a></th>
                <th scope="col"><a href="?id5=membrete"><img src="imagenes/botones_r1_c4.gif" alt="Actualizar Informacion" width="127" height="41" border="0" longdesc="imagenes/actualizar.gif"></a></th>
              </tr>
            </table>
            <br />
            </div></div>
        </div>
       
          <table width="597" border="0" align="center" cellspacing="0">
        
      </table>
              <div align="center"></td>
    </tr>
    
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF"><table width=600 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr><td class="estilocelda">Título de sección</td></tr>
<tr><td><table width="600" border="0" align="center" cellpadding="4" cellspacing="2" class="Estilo14">
  <tr >
    <td width="151" bgcolor="#E3E9F1" class="small"><div align="left">Titulo de Pagina: </font></div></td>
    <td bgcolor="#E3E9F1" ><div align="left"><b></font></b><span class="small"><?php echo $row_Recordset2info['nombre']; ?></span></div></td>
  </tr>
  <tr>
    <td width="151" bgcolor="#E3E9F1" class="small"><div align="left">Telefono:</font></div></td>
    <td bgcolor="#E3E9F1"><div align="left"><b></font></b><span class="small"><?php echo $row_Recordset2info['telefono']; ?></span></div></td>
  </tr>
  <tr>
    <td width="151" bgcolor="#E3E9F1" class="small"><div align="left">Correo:</font></div></td>
    <td bgcolor="#E3E9F1"><div align="left" class="small"><b></font></b><span class="small"><?php echo $row_Recordset2info['correo']; ?></span></div></td>
  </tr>
  <tr >
    <td width="151" bgcolor="#E3E9F1" class="small"><div align="left">Rif:</font></div></td>
    <td bgcolor="#E3E9F1"><div align="left"><b></font></b><span class="small"><?php echo $row_Recordset2info['rif']; ?></span></div></td>
  </tr>
  <tr >
    <td height="13" bgcolor="#E3E9F1" class="small"><div align="left">Informacion:</font></div></td>
    <td height="13" bgcolor="#E3E9F1" ><div align="left"><b></font></b><span class="small"><?php echo $row_Recordset2info['info']; ?></span></div></td>
  </tr>
  <tr >
    <td height="7" bgcolor="#E3E9F1"><div align="left" class="small">Direcci&oacute;n</font></div></td>
    <td height="7" bgcolor="#E3E9F1" ><div align="left"><b></font></b><span class="small"><?php echo $row_Recordset2info['direccion']; ?></span></div></td>
  </tr>
  <tr >
    <td height="7" bgcolor="#E3E9F1"><div align="left" class="small">Url</div></td>
    <td height="7" bgcolor="#E3E9F1" ><span class="small"><?php echo $row_Recordset2info['url']; ?></span></td>
  </tr>
</table></td></tr>
</table> </td>
    </tr>
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF">
	  <?php	   if ( $id5  == 'info' )
			  {  include("informacion.php"); 				
                 } 
				 	else 
				 if ( $id5  == 'logo' )
			  {  include("informacion_logos.php"); 				
                 }	
				 else 
				 if ( $id5  == 'logo1' )
			  {  include("informacion_logo.php"); 				
                 }		
				 	else 
				 if ( $id5  == 'logo2' )
			  {  include("informacion_logo2.php"); 				
                 }			
				 	else 
				 if ( $id5  == 'banner' )
			  {  include("informacion_banner.php"); 				
                 }	
					 	else 
				 if ( $id5  == 'membrete' )
			  {  include("informacion_membrete.php"); 				
                 }	
		 ?></td>
    </tr>
</table>




