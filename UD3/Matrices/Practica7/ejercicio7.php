<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
    // Visualiza o número de veces que se repite cada idade no array do exercicio anterior utilizando unha función predefinida


    $nombresEdades = array(
        "Juan" => 24,
        "Carmen" => 23,
        "Antonio" => 12,
        "Marta" => 48,
        "Pepe" => 12
    );

    // Visualizamos el número de veces que se repite cada edad en el array
    // anterior
    var_dump(array_count_values($nombresEdades));
    ?>



</body>

</html>