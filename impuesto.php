<?php require_once('conector/conector.php');?> 
<?
	
	$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
	mysql_select_db ($database); 

	//Ejecutamos la sentencia SQL
	$result1 = mysql_query("SELECT * FROM iva WHERE id  LIKE '1'  ");

?>





<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<?php 	require_once('css.php');?>
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
<div align="center"><img src="imagenes/banne6.gif" width="607" height="30" />
</div>
</div>
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="619" height="28" valign="top"><br />
      <table width="601" border="1" align="center" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
        <tr>
          <td width="560" height="26" valign="top"><table width="560" border="0" align="center" cellspacing="0">
            <tr>
              <td width="364" bgcolor="#F4F4F4"><table width="560" border="0" align="center" cellspacing="0">
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
      </table></td>
  </tr>
  <tr>
    <td height="12" valign="top">&nbsp;</td>
  </tr>
</table>
<table width=280 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td class="estilocelda">% IVA</td>
</tr>
<tr><td><table width="597" height="15" border="0" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FF9900">
  <tr>
    <td width="591" height="28" bgcolor="#FFFFFF"><form action="actualizar_impuesto.php?&id=actualizar" method="post">
      <div align="left">
        <table width="562" border="0" cellspacing="0">
          <tr>
            <th scope="col"><table width="601" border="0" align="center" cellspacing="0" bgcolor="#F4F4F4">
              <tr>
                <td width="587" height="48" valign="top"><table width="601" border="0" align="center" cellspacing="0" bordercolor="#E3E9F1" class="Estilo1">
                          <tr>
                            <td width="151" bgcolor="#E3E9F1"><div align="left" ><strong>Iva</strong> Actual:</div></td>
                            <td bgcolor="#FFFFFF"><font face="Verdana">
                              <? while ($row=mysql_fetch_array($result1)){ echo "".$row["iva"].""; }?>
                            </font></td>
                          </tr>
                          <tr>
                            <td bgcolor="#E3E3E3"><strong>Actualizar Iva</strong></td>
                            <td bgcolor="#FFFFFF"><input name="iva" type="text" id="iva" size="22" maxlength="150" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" />
                                <input name="submit2" type="submit" value="Actualizar" /></td>
                      
                      </table></td>
              </tr>
            </table></th>
          </tr>
        </table>
      </div>
    </form>
    </tr>
</table></td></tr>
</table> 
<p><br>
</p>
<p align="center">&nbsp;</p>
</body>
</html>
