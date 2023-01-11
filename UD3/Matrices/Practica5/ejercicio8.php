<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>

    <?php

    //Programa que xere un valor aleatorio entre un e dez e o escriba en Galego

    $valor = rand(1, 10);

    //$numerosGalego = array(1 => "un", "dous", "tres", "catro", "cinco", "seis","sete", "oito", "nove", "dez");

    $numerosGalego = array("UN", "DOUS", "TRES", "CATRO", "CINCO", "SEIS", "SETE", "OITO", "NOVE", "DEZ");
    echo "<p>El numero " . $valor . " en gallego es " . $numerosGalego[$valor - 1] . "</p>";

    ?>

</body>

</html>