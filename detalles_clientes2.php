   <?php require_once('conector/conector.php');?> 
<?
if (!isset($codigo))
 
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 



//Ejecutamos la sentencia SQL
$result1 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result2 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result3 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result4 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result5 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result6 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result7 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result8 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result9 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result10 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result11 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");
$result12 = mysql_query("SELECT * FROM clientes WHERE doc2  LIKE '$codigo'");



?>










<?php 	require_once('css.php');?>
<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />


<table width=610 height=18 align="center" cellpadding=2 cellspacing=2 class="estilotabla">
<tr>
  <td width="600" class="estilocelda">Datos del Cliente</td>
</tr>
<tr><td><table width="600" border="0" align="center" cellspacing="0">
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><strong><span >Nombre:</span></strong></td>
    <td colspan="2" bgcolor="#FFFFFF" class="small"><div align="left" >
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result1))
      {
echo "".$row["nombre"].""; 
}
mysql_free_result($result1)
?>
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result5))
      {
echo "".$row["apellidos"].""; 
}
mysql_free_result($result5)
?>
    </div></td>
    <td width="114" bgcolor="#E3E9F1" class="small"><div align="right" >
      <div align="right"><strong><span >Tipo de Cliente:</span></strong></div>
    </div></td>
    <td width="162" bgcolor="#FFFFFF" class="small"><div align="left" >
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result11))
      {
echo "".$row["cliente"].""; 
}
mysql_free_result($result11)
?>
    </div></td>
  </tr>
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><div align="left" ><strong><span >Nacionalidad:</span></strong></div></td>
    <td colspan="4" valign="top" class="small"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="252" height="18" bgcolor="#FFFFFF" ><div align="left">
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result2))
      {
echo "".$row["nac"].""; 
}
mysql_free_result($result2)
?>
          <span class="small">Documento          </span>
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result3))
      {
echo "".$row["doc"].""; 
}
mysql_free_result($result3)
?>
          <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result4))
      {
echo "".$row["doc2"].""; 
}
mysql_free_result($result4)
?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><div align="left" ><strong>Pais: </strong></div></td>
    <td width="85" bgcolor="#FFFFFF" class="small"><div align="left" >
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result6))
      {
echo "".$row["pais"].""; 
}
mysql_free_result($result6)
?>
    </div></td>
    <td colspan="2" bgcolor="#E3E9F1" class="small"><div align="right" >
      <div align="right"><strong><span >Ciudad:</span></strong></div>
    </div></td>
    <td bgcolor="#FFFFFF" class="small"><div align="left" >
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result7))
      {
echo "".$row["ciudad"].""; 
}
mysql_free_result($result7)
?>
    </div></td>
  </tr>
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><div align="left" ><strong><span >Direccion:</span></strong></div></td>
    <td colspan="4" bgcolor="#FFFFFF" class="small"><div align="left" class="Estilo26">
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result8))
      {
echo "".$row["direccion"].""; 
}
mysql_free_result($result8)
?>
    </div></td>
  </tr>
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><div align="left" ><strong><span >Telefono:</span> </strong></div></td>
    <td colspan="2" bgcolor="#FFFFFF" class="small"><div align="left" class="Estilo26">
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result9))
      {
echo "".$row["telefono"].""; 
}
mysql_free_result($result9)
?>
    </div></td>
    <td bgcolor="#E3E9F1" class="small"><div align="right" ><strong>Correo:</span></strong></div></td>
    <td bgcolor="#FFFFFF" class="small"><div align="left" class="Estilo26">
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result10))
      {
echo "".$row["correo"].""; 
}
mysql_free_result($result10)
?>
    </div></td>
  </tr>
  <tr>
    <td width="100" bgcolor="#E3E9F1" class="small"><span ><strong>Placa de Vehiculo: </strong></span></td>
    <td colspan="4" bgcolor="#FFFFFF" class="small"><div align="left" >
      <?
	 //Mostramos los registros<br>
      while ($row=mysql_fetch_array($result12))
      {
echo "".$row["vehiculo"].""; 
}
mysql_free_result($result12)
?>
    </div></td>
  </tr>
</table></td>
</tr>
</table> 
