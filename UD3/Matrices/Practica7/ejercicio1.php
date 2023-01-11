<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>

    <?php

    //Programa que inicie un array de 2 filas e 3 columnas con elementos numéricos e calcule a suma de todos eles

    $arr = array(
        array(3, 5, 7),
        array(2, 8, 10)
    );

    $suma = 0;
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 3; $j++) {
            for ($j = 0; $j < 3; $j++) {
                $suma += $a[$i][$j];
            }
        }

        echo "<p>Array:</p>\n";
        var_dump($a);
        echo "<p><strong>Suma de los elementos: $suma</strong></p>\n";
    }

    ?>

</body>

</html>