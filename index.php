
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo1 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo2 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo3 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo4 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo5 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
$resultinfo6 = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>

<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
}
a:link {
	color: #999999;
}
a:visited {
	color: #000099;
}
a:hover {
	color: #000000;
}
a:active {
	color: #990000;
}
-->
</style>


<style type="text/css">
<!--
body {
	background-image: url(bg_grad.jpg);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<table width="874" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="10"><img src="spacer.gif" width="10" height="1" border="0" alt="" /></td>
    <td width="851"><img src="spacer.gif" width="851" height="1" border="0" alt="" /></td>
    <td width="12"><img src="spacer.gif" width="12" height="1" border="0" alt="" /></td>
    <td width="10"><img src="spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
    <td bgcolor="#003300">&nbsp;</td>
    <td bgcolor="#FFFFFF"><table width="770" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="19" colspan="3" valign="top"><?php include("banner1.php");?></td>
      </tr>


      <tr>
        <td width="46" height="25" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="709" valign="top" bgcolor="#FFFFFF"><div align="center">
          <p><br />  
            <br />
          </p>
          <p>&nbsp;</p>
          <p>
            <?php include("acceso.php");?>
          </p>
          <p>                <br />  
                <br />
            </p>
        </div>          </td>
        <td width="15" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="18" colspan="3" valign="top" bgcolor="#FFFFFF"><?php include("banner2.php");?></td>
      </tr>
    </table></td>
    <td bgcolor="#003300">&nbsp;</td>
    <td><img src="spacer.gif" width="1" height="41" border="0" alt="" /></td>
  </tr>
</table>
</body>
</html>
