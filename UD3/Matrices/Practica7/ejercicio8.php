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

    // Comproba no array dos exercicios anteriores, utilizando una función predefinida de array, si hai algunha persoa de dez anos ou non hai ningunha

    $nombresEdades = array(
        "Juan" => 24,
        "Carmen" => 100,
        "Antonio" => 12,
        "Marta" => 48,
        "Pepe" => 100,
        "Tito Sam" => 10,
        "Tita Eva" => 10
    );

    var_dump($nombresEdades);

    $edades10 = array_keys($nombresEdades, 10);
    if (empty($edades10)) {
        echo "<p>En el array anterior no hay ninguna persona de 10 años.</p>\n";
    } else {
        echo "<p>En el array anterior hay " . count($edades10) . " persona";
        echo count($edades10) == 1 ? "" : "s";
        echo " de 10 años.</p>\n";
    }


    ?>

</body>

</html>