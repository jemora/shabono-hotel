 <?php						 
          	
           if ( $id3  == 'agregar' )
			  { 
			  
require_once('conector/conector.php');
 

mysql_connect($hostname,$username,$password);
mysql_select_db($database);

$sSQL="Update servicios01 Set  

nombre='$nombre',precio='$precio'
  
Where id='$dato'";

mysql_db_query($database,$sSQL);



 {
echo ' <table width="590" border="0">
  <tr>
    <td><table width="590" border="1" align="left" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="560" height="24" valign="top"><table width="400" border="0" align="left" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="lista_articulos_consumos.php"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
        <p></p></td>
  </tr>
  <tr>
    <td><p align="center"><strong><br>
      Se Actualizo Correctamente </strong><br />
            <br />
      </td>
  </tr>
</table>

';
exit;
}





                 } 
							
		 ?>
<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Recordset2 = 20000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM servicios01 WHERE id LIKE '$dato'";
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








<?php 	require_once('css.php');?>
<style type="text/css">
<!--
.Estilo14 {color: #666666; font-size: 12px; }
.Estilo16 {color: #666666; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>


<link href="Level2_Verdana_Text.css" rel="stylesheet" type="text/css" />
<table width="581" border="0">
  <tr>
    <td width="575"><table width="574" border="1" align="left" cellspacing="0" bordercolor="#999999" bgcolor="#F4F4F4">
      <!--DWLayoutTable-->
      <tr>
        <td width="568" height="24" valign="top"><table width="400" border="0" align="left" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="19" bgcolor="#F4F4F4"><span class="Estilo14"><a href="javascript:history.back(1)"><img src="imagenes/ico_3.gif" alt="Regresar" width="18" height="18" border="0" /></a></span></td>
            <td width="136" bgcolor="#F4F4F4"><span class="Estilo16">Regresar</span></td>
            <td width="364" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="23" bgcolor="#F4F4F4"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
        <p></p></td>
  </tr>
  <tr>
    <td><table width="575" height="121" align="left" cellpadding="2" cellspacing="2" class="estilotabla">
      <tr>
        <td width="565" class="estilocelda">Actualizar Tipo de Articulo de Consumo</td>
      </tr>
      <tr>
        <td height="91"><form action="?id3=agregar&dato=<?  echo  $dato; ?>" method="post">
        <div align="left">
              <table width="471" border="0" cellspacing="0">
                <tr>
                  <th width="144" class="Estilo7" scope="col"><div align="left">Nombre del Articulo:</div></th>
                  <th width="318" scope="col"><div align="left"><input name="nombre" type="text" id="nombre" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" value="<?php echo $row_Recordset2['nombre']; ?>" >
                      </div>
                  </label></th>
                </tr>
                <tr>
                  <th class="Estilo7" scope="col"><div align="left">Precio:</div></th>
                  <th scope="col"><div align="left"><input name="precio" type="text" id="precio" value="<?php echo $row_Recordset2['precio']; ?>" / style="background-color:e3e3e3; border: 1px solid #666666; font-size:8pt; color: #000099" >
                      </div>
                  </label></th>
                </tr>
              </table>
    <input name="submit2" type="submit" value="   Actualizar   " />
        </div>
    </form></td>
      </tr>
    </table>
        <p><br />
            <br />
      </p></td>
  </tr>
</table>


