<?php 	require_once('conector/conector.php');?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
$usuario= $_SESSION['usuario_login']; 
$maxRows_Recordset2 = 200000;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database, $connFlashblog);
$query_Recordset2 = "SELECT * FROM habitacion_reservas_web where  banco like '1' and opc like '0' ORDER BY fecha DESC";
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

<title>lista de clientes</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">






<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo4 {color: #FFFFFF}
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
<span class="xbig">Reservaciones Web</span><br>
<br> 
<br>
<table width="200" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td><table width="616" border="0" align="center" cellspacing="1" bordercolor="#CCCCCC">
      <!--DWLayoutTable-->
      <tr>
        <td height="20" colspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">Informacion de  Reservaciones </div>
        </div></td>
        <td colspan="2" bgcolor="#000000" class="small" ><div align="left" class="small Estilo4">
            <div align="center">Informaci&oacute;n de Pago </div>
        </div></td>
        <td width="168" bgcolor="#000000" class="Estilo4"><!--DWLayoutEmptyCell-->&nbsp;</td>
      </tr>
      
      <?php do { ?>
      <tr>
        <td width="110" height="26" bgcolor="#B1C3D9" class="small" >Fecha desde: </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha1']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Fecha Deposito:</td>
        <td width="138" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha_depo']; ?></td>
        <td rowspan="6" valign="top""><form name="form1" method="post" action="actualizar_reservaciones_web.php?codigo=<?php echo $row_Recordset2['id']; ?>">
   
            <table width="132" border="0" cellspacing="0">
              <tr>
                <td width="62"><label>
                  <select name="opc" class="small" id="opc">
                    <option value="0">Selecionar</option>
                    <option value="1">Aprobada</option>
                    <option value="2">Rechazar</option>
                  </select>
                </label></td>
                <td width="66"><input type="submit" name="Submit" value="Procesar"></td>
              </tr>
            </table>
            <label>
            <input name="doc2" type="hidden" id="doc2" value="<?php echo $row_Recordset2['doc2']; ?>" />
            <input name="nota" type="hidden" id="nota" value="<?php echo $row_Recordset2['monto_dep']; ?>" />
            <input name="obsev" type="hidden" id="obsev" value="<?php echo $row_Recordset2['obsev']; ?>" />
            <input name="tipo" type="hidden" id="tipo" value="<?php echo $row_Recordset2['tipo']; ?>" />
            <input name="status" type="hidden" id="status" value="<?php echo $row_Recordset2['status']; ?>" />
           
            <input name="fecha" type="hidden" id="fecha" value="<?php echo $row_Recordset2['fecha']; ?>" />
            <input name="fecha1" type="hidden" id="fecha1" value="<?php echo $row_Recordset2['fecha1']; ?>" />
            <input name="fecha2" type="hidden" id="fecha2" value="<?php echo $row_Recordset2['fecha2']; ?>" />
            <font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><font face="Verdana" size="2"><span class="Estilo3">
            <input name="multi" type="hidden" id="multi" value="<?php echo $row_Recordset2['multi']; ?>" />
            </span></font></font></font></font></font></font></font></font></font>
            <input name="cant_dia" type="hidden" id="cant_dia" value="<?php echo $row_Recordset2['cant_dia']; ?>" />
            <input name=" subtotal1" type="hidden" id=" subtotal1" value="<?php echo $row_Recordset2['subtotal1']; ?>" />
            <input name="nombre" type="hidden" id="nombre" value="<?php echo $row_Recordset2['nombre']; ?>" />
            </span></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font></font>
            <input name="apellido" type="hidden" id="apellido" value="<?php echo $row_Recordset2['apellido']; ?>" />
            <input name="usuario" type="hidden" id="usuario" value="online" />
            <input name="personas" type="hidden" id="personas" value="<?php echo $row_Recordset2['personas']; ?>" />
            <input name="precio" type="hidden" id="precio" value="<?php echo $row_Recordset2['precio']; ?>" />
        </form>
          <form name="form2" method="post" action="formulario_email_clientes.php">
            <label>
            <input type="submit" name="Submit2" value="   Enviar  Email  a Cliente   ">
            <input name="codigo" type="hidden" id="codigo" value="<?php echo $row_Recordset2['doc2']; ?>" />
            </label>
                              </form>          </td>
        </tr>
      <tr>
        <td height="17" bgcolor="#B1C3D9" class="small" >Fecha Hasta: </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['fecha2']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Banco:</td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['banco_dep']; ?></td>
        </tr>
      <tr>
        <td height="14" bgcolor="#B1C3D9" class="small" >Cliente:</td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['doc2']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >N&ordm; Deposito: </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['numero_dep']; ?></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#B1C3D9" class="small" >Cant de Personas </td>
        <td width="119" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['personas']; ?></td>
        <td width="65" bgcolor="#B1C3D9" class="small" >Depositado: </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['monto_dep']; ?></td>
        </tr>
      <tr>
        <td height="20" bgcolor="#B1C3D9" class="small" >Dias:</td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['cant_dia']; ?></td>
        <td bgcolor="#B1C3D9" class="small" >N&ordm; Ticket </td>
        <td bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['num_web']; ?></td>
      </tr>
      <tr>
        <td height="19" bgcolor="#B1C3D9" class="small" >Monto a Cancelar: </td>
        <td colspan="3" bgcolor="#E3E9F1" class="small" ><?php echo $row_Recordset2['subtotal1']; ?></td>
        </tr>
      <tr>
        <td height="20" colspan="5" bgcolor="#FFFFFF" class="small" ><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset2);
?>
