<head>

<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<hr>
<table width="767" border="0" cellspacing="0">
  <tr>
    <th width="12" scope="col">&nbsp;</th>
    <th colspan="3" ><div align="left">
      <? while ($row=mysql_fetch_array($resultinfo1))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo1)?>
    </div>    </th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th width="326" ><div align="left">
      <? while ($row=mysql_fetch_array($resultinfo2))  { echo "".$row["info"].""; }
mysql_free_result($resultinfo2)?>
    </div></th>
    <th width="166" ><div align="left">
      Telefonos: <? while ($row=mysql_fetch_array($resultinfo4))  { echo "".$row["telefono"].""; }
mysql_free_result($resultinfo4)?>
    </div>    </th>
    <th width="255" ><div align="left">Correos 
      <? while ($row=mysql_fetch_array($resultinfo5))  { echo "".$row["correo"].""; }
mysql_free_result($resultinfo5)?>
    </div></th>
  </tr>
  <tr>
    <th scope="col">&nbsp;</th>
    <th colspan="3" ><div align="left"><? while ($row=mysql_fetch_array($resultinfo3))  { echo "".$row["direccion"].""; }
mysql_free_result($resultinfo3)?>
    </div></th>
  </tr>
</table>
<div align="left"><br>
</div>
</body>
</html>
