<?php 	require_once('conector/conector.php');?>
<?php







?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>



<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo3 {font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>

<table width="351" border="0" align="center" cellspacing="0">
  <tr>
    <td width="349" class="xbig">Envio de correos a Clientes </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
      <tr>
        <td><table width="610" border="1" align="center" cellspacing="0" bordercolor="#7895AF">
            <tr>
              <td bgcolor="#7895AF"><strong>Email a clientes </strong></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><form name="form1" method="post" action="formulario_email_clientes.php?&id=sugerencias">
                <table width="593" border="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr>
                    <td width="107" class="small"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="482"><!--DWLayoutEmptyCell-->&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="small"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    <td width="482"><label>
                      <?php	
				 
           if ( $id== 'sugerencias' )
			  { 
/////////////////////////////
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM clientes where doc2 like '$codigo'";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $connFlashblog) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
//////////////////////////////////////			 
$currentPage = $_SERVER["PHP_SELF"];
$maxRows_Recordset2info22 = 50;
$pageNum_Recordset2info22 = 0;
if (isset($_GET['pageNum_Recordset2info22'])) {
  $pageNum_Recordset2info22 = $_GET['pageNum_Recordset2info22'];
}
$startRow_Recordset2info22 = $pageNum_Recordset2info22 * $maxRows_Recordset2info22;
mysql_select_db($database, $connFlashblog);
$query_Recordset2info22 = "SELECT * FROM informacion WHERE cod  LIKE '0'";
$query_limit_Recordset2info22 = sprintf("%s LIMIT %d, %d", $query_Recordset2info22, $startRow_Recordset2info22, $maxRows_Recordset2info22);
$Recordset2 = mysql_query($query_limit_Recordset2info22, $connFlashblog) or die(mysql_error());
$row_Recordset2info22 = mysql_fetch_assoc($Recordset2);
$url=$row_Recordset2info22['url'];
$correo_web=$row_Recordset2info22['correo'];	  
////////////////////////////////////////////////////////////			  
			  
// para  enviar  el correo
$rcon = rand(1000000,10000000);

//headers del mail
         $headers = "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
         $headers .= "From: portal <".$correo_web.">\r\n";
         $headers .= "Reply-To: ".$correo_web."\r\n";
//enviamos el email
$correo= $row_Recordset2['correo']; 
mail($correo, $asunto1, $sms,$headers);

echo '<P align="center"><B> <I> Correo Enviado</I> </B> </P>'; 



exit;

           
                 } 
	
		
			
						 ?>
                    </label></td>
                  </tr>
                </table>
                            <table width="593" border="0" cellspacing="0">
                    <tr>
                        <td width="102" height="42" valign="top" class="small">Asuntos</td>
                        <td width="487" valign="top"><input name="asunto1" type="text" class="small" id="asunto1"></td>
                    </tr>
                    <tr>
                      <td height="42" valign="top" class="small">Mensaje:</td>
                      <td width="487" valign="top"><textarea name="sms" cols="50" rows="8" class="small" id="sms"></textarea>
                        <span class="Estilo3">
                        <input name="codigo" type="hidden" id="codigo" value="<?php echo $codigo; ?>" />
                        <input name="fecha" type="hidden" id="fecha" value="<?php echo date("Y-m-d"); ?>" />
                        </span></td>
                    </tr>
                              <tr>
                                <td>&nbsp;</td>
                      <td><label>
                        
                          <div align="left">
                            <input type="submit" name="Submit" value="   Enviar Mensaje   ">
                          </div>
                      </label></td>
                    </tr>
                                            </table>
              </form>
              </td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</center>
</body>
</html> 
