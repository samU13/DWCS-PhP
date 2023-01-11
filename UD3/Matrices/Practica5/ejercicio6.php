<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>

    <?php

    //Crear un array coas temperaturas do mes de Xaneiro. Xerar aleatoriamente un número, (como máximo 50), e visualizar a ou as temperaturas máis próximas a ese número e o día ao que corresponden. Suponse que a primeira temperatura do array é a do día 1, a segunda do día 2, etc..

    $temperaturas = array();
    for ($i = 1; $i <= 31; $i++) {
        $temperaturas[$i] = rand(-5, 12);
    }

    $temperatura = rand(-20, 50);

    $masCercana = $temperaturas[1];
    foreach ($temperaturas as $valor) {
        if (abs(($valor - $temperatura)) < abs(($masCercana - $temperatura))) {
            $masCercana = $valor;
        }
    }

    $masCercana2 = false;
    foreach ($temperaturas as $valor) {
        if (abs(($valor - $temperatura)) === abs(($masCercana - $temperatura)) && $valor != $masCercana) {
            $masCercana2 = $valor;
            break;
        }
    }

    echo "<p>Array de temperaturas</p>\n";
    var_dump($temperaturas);
    echo "<p>Temperatura generada aleatoriamente: $temperatura</p>\n";
    echo "<p><strong>Días cuyas temperaturas están más próximas a $temperatura: </strong></p>";
    echo "<p>Días cuya temperatura es $masCercana: ";
    foreach (array_keys($temperaturas, $masCercana) as $dia) {
        echo "$dia ";
    }
    echo "</p>\n";

    if ($masCercana2 !== false) {
        echo "<p>Días cuya temperatura es $masCercana2: ";
        foreach (array_keys($temperaturas, $masCercana2) as $dia) {
            echo "$dia ";
        }
        echo "</p>\n";
    }
    ?>

</body>

</html>