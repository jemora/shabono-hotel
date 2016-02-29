 <?php require_once('conector/conector.php'); ?>
  
  <?php

$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from habitacion  ");
$test1 = mysql_fetch_row($test11a);


?>

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
	font-size: 8px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo2 {font-size: 10px}
-->
</style><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<p>&nbsp;</p>
<table width="20" border="1" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <th scope="col"><table width="685" border="0" cellspacing="0">
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
              <th width="79" ><span class="Estilo2">Reservada</span></th>
              <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
                  <tr>
                    <th width='12' bgcolor='#00B1BF' scope='col'>&nbsp;</th>
                  </tr>
              </table></th>
              <th width="64" scope="col"><span class="Estilo2">Ocupada</span></th>
              <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
                  <tr>
                    <th width='12' bgcolor='#004080' scope='col'>&nbsp;</th>
                  </tr>
              </table></th>
              <th width="73" scope="col"><span class="Estilo2">Finalizada</span></th>
              <th width="24" scope="col"><table width='22' border='0' cellspacing='0'>
                  <tr>
                    <th width='12' bgcolor='#FF8080' scope='col'>&nbsp;</th>
                  </tr>
              </table></th>
              <th width="77" scope="col"><span class="Estilo2">Bloqueada</span></th>
              <th width="24" scope="col"><table width='22' border='2' cellspacing='0' bordercolor='#FF0000'>
                  <tr>
                    <th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th>
                  </tr>
              </table></th>
              <th width="97" scope="col"><span class="Estilo2">Inicio de Estadia </span></th>
              <th width="26" scope="col"><table width='22' border='1' cellspacing='0' bordercolor='#000000'>
                  <tr>
                    <th width='12' bgcolor='#FFFFFF' scope='col'>&nbsp;</th>
                  </tr>
              </table></th>
              <th width="73" scope="col"><span class="Estilo2">Disponible</span></th>
            </tr>
        </table></td>
      </tr>
    </table>
      <table border="0" align="left" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td width="20" height="22">&nbsp;</td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
          <td width="15"><div align="center"></div></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	 $dato='01'; 	 require('hab_demo1.php');	 	 ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32">
		  <?php     $dato='02';  require('hab_demo.php');  ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32">
		  <?php	  $dato='03';  require('hab_demo.php');  ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	  $dato='04';  require('hab_demo.php'); ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	   $dato='05';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	  $dato='06';  require('hab_demo.php');   ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	 $dato='07';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	 $dato='08';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	  $dato='09';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	   $dato='10';  require('hab_demo.php');  ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	   $dato='11';  require('hab_demo.php');   ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	   $dato='12';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	  $dato='13';  require('hab_demo.php');    ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	  $dato='14';  require('hab_demo.php'); ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	   $dato='15';  require('hab_demo.php');   ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32"><?php	 if ( 16 <= $test1[0]) {  $dato='16';  require('hab_demo.php');  }  ?></td>
        </tr>
        <tr>
          <td height="22" colspan="32">&nbsp;</td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p></p></th>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table border="1" align="center" cellspacing="0" bordercolor="#CCCCCC">

  <tr>

</table>

</body>
</html>

