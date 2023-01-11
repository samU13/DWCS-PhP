<?php
define('RUTA_IMAGENES',__DIR__.'/imagenes/');

if(!!empty($_GET['nombre'])){
    $archivo = RUTA_IMAGENES.$_GET['nombre'];
    if(file_exists($archivo)) {
        $imagen = file_get_contents($archivo);
        header("Content-type: image/jpeg");
        echo $imagen;
    }
    else header('Location : imagenes/non_atopada.jpeg');
}
else exit('Nombre de la imagen no indicado!');
?>