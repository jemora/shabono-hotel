<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>


<script type='text/JavaScript'>
     function verocultar(cual) {
          var c=cual.nextSibling;
          if(c.style.display=='none') {
               c.style.display='block';
          } else {
               c.style.display='none';
          }
          return false;
     }
</script>
</head>

<body><?
echo  'Hora:';
echo date ( "h:i:s" );
?><td bgcolor="#ffffcc" width="4%"><div align="center"><a href="javascript:void(0);" onMouseOver="return overlib('Texto Informativo.');" onMouseOut="return nd();"><img src="borrar.gif" align="middle" border="0" /></a></div></td>
<input type="button" value="Recargar página" onClick="location.reload();"/>





<a onclick="return verocultar(this);"
     href="javascript:void(0);">ENLACE</a><div style="display: none;">
....... el contenido a ocultar .......
</div>
</body>
</html>
