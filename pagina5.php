<?php

if ($paisant!=$pais) {
    header("location:formulario_buscar_galeria.php?codigo=$codigo&pais=$pais");
    }
else {
$habitacion=$prov;	
$tipo=$pais;

include("formulario_buscar_galeria.php");
		
		include("detalles_galerias.php");
		
    }
?>


     

