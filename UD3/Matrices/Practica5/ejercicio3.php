<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    //Programa que, a partir do array do exercicio anterior, visualice os nomes e notas dos alumnos con nota superior á media.


    $notas = array("Carlos", 5.6, "María", 7.8, "Juan", 7.9, "Ana", 4.6);


    $suma = 0;
    for ($i = 1; $i < count($notas); $i += 2) {
        $suma += $notas[$i];
    }


    $media = $suma / (count($notas) / 2);
    echo "<p>Nota media: $media </p>\n";


    echo "<p>\n";
    echo "Alumnos con notas superiores a la media:<br />\n";
    for ($i = 1; $i < count($notas); $i += 2) {
        if ($notas[$i] > $media) {
            echo $notas[$i - 1] . ": " . $notas[$i] . "<br />\n";
        }
    }
    echo "<p>\n";

    ?>

</body>

</html>