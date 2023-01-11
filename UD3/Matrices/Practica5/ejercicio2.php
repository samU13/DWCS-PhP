<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php
    //Programa que cree o array {“Carlos”, 5.6, “María”, 7.8, “Juan”, 7.9, “Ana”,4.6} cos nomes e notas dun conxunto de alumnos e calcule a nota media (6.475)

    $notas = array("Carlos", 5.6, "María", 7.8, "Juan", 7.9, "Ana", 4.6);
    $total =  0;
    for ($i = 1; $i < count($notas); $i += 2) {
        $total += $notas[$i];
    }

    $media = $total / (count($notas) / 2);

    echo "<p>Nota media : $media </p>\n";


    ?>

</body>

</html>