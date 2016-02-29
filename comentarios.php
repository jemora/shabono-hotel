<?php 

require_once('conector/conector.php');
$link = mysql_connect($hostname, $username , $password); 
mysql_select_db($database ); 
$test11a = mysql_query("SELECT COUNT(*) from comentarios");
$test1 = mysql_fetch_row($test11a);

  if ( $test1[0] >= '1' )
{ 
	 include('lista_comentarios_web.php'); 
	   exit;
                 } 

else
  if ( $test1[0] == '0' )
{ 
	 echo '<table width=600 height=51 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
  <tr>
    <td width="165" class="xbig">Comentarios y Sugerencias </td>
  </tr>
  <tr>
    <td height="20">No hay comentarios </td>
  </tr>
</table>';
	   exit;
                 } 

?>