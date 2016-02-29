<?
//  Autentificator
//  Gestión de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// -----------------------------------------

// Cargamos variables
require ("aut_config.inc.php");
// le damos un mobre a la sesion (por si quisieramos identificarla)
session_name($usuarios_sesion);
// iniciamos sesiones
session_start();
// destruimos la session de usuarios.
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
	background-color: #FFFFFF;
}
.Estilo4 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style></head>

<body>
<?php include("index.php");?>
</body>
</html>
