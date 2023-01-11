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
    //Crea un array asociativo cos nomes e idades dun grupo de persoas. Para cada caso dos seguintes visualiza o array orixinal e o array ordenado, mostrando claves e valores.
    //1. Ordena de forma ascendente utilizando sort().
    //2. Ordena de forma ascendente utilizando asort().
    //3. Ordena de forma ascendente utilizando ksort().
    //4. Ordena de forma descendente por idades mantendo a relación entre claves e valores.
    //5. Ordena de forma descendente por nome mantendo a relación entre claves e valores.

    $nombresEdades = array(
        "Juan" => 24,
        "Carmen" => 23,
        "Antonio" => 12,
        "Marta" => 48,
        "Pepe" => 12
    );

    echo "<p>Array original</p>";
    $a = $nombresEdades;
    var_dump($a);

    echo "<p>2. Array ordenado de forma ascendente con asort</p>";
    $a = $nombresEdades;
    asort($a);
    var_dump($a);

    echo "<p>3. Array ordenado de forma ascendente con ksort</p>";
    $a = $nombresEdades;
    ksort($a);
    var_dump($a);


    echo "<p>4. Array ordenado de forma descendente por edades manteniendo "
        . "la relación entre claves y valores (arsort)</p>";
    $a = $nombresEdades;
    arsort($a);
    var_dump($a);

    echo "<p>5. Array ordenado de forma descendente por nombre manteniendo "
        . "la relación entre claves y valores (krsort)</p>";
    $a = $nombresEdades;
    krsort($a);
    var_dump($a);



    ?>

</body>

</html>