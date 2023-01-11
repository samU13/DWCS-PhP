<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <?php
    //Visualiza no array do exercicio anterior o nome ou nomes das persoas que teñen dez anos, no caso de que existan

    $nombresEdades = array(
        "Juan" => 24,
        "Carmen" => 100,
        "Antonio" => 12,
        "Marta" => 48,
        "Pepe" => 100,
        "Tito Sam" => 10
    );

    $edades10 = array_keys($nombresEdades, 10);

    var_dump($edades10);

    if (empty($edades10)) {
        echo "<p>En el array anterior no hay ninguna persona de 10 años.</p>\n";
    } else {
        echo "<p>Tiene";
        echo count($edades10) == 1 ? " " : "n ";
        echo "diez años : ";
        foreach ($edades10 as $nombre) {
            echo $nombre . " ";
        }
        echo "</p>";
    }

    ?>

</body>

</html>