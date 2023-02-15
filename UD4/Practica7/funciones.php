<?php

function validarUsuario($u, $c)
{
    global $usuarios;
    foreach ($usuarios as $us) {
        if ($us["usuario"] == $u) {
            if ($us["clave"] == sha1($c)) {
                return $us;
            } else {
                return false;
            }
        }
    }
    return false;
}

function mostrarMovimientos($usuario){
    echo "<br/>Movimientos ".$usuario["nome"];
    foreach($usuario["movementos"] as $mov){
        echo "<br/>".$mov["tipo"]." ".$mov["importe"];
    }
}
