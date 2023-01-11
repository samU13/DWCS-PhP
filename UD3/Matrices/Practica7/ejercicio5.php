<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>

    <?php
    //Modifica o programa anterior de forma que se utilice un só array bidimensional para tódolos datos. Os índices de cada fila serán os nomes dos alumnos. O índice de cada nota será o nome do módulo correspondente. (Exemplo: “fol”=>5, “prol”=>6,......). Visualiza os arrays e engade ao final das notas de cada alumno a media correspondente

    $alumnosNotas = array(
        "Juan" => array("fol" => 5, "prol" => 6, "ande" => 7, "sist" => 8),
        "Carmen" => array("fol" => 4, "prol" => 5, "ande" => 6, "sist" => 3),
        "Antonio" => array("fol" => 4, "prol" => 5, "ande" => 4, "sist" => 3),
        "Marta" => array("fol" => 4, "prol" => 2, "ande" => 3, "sist" => 4),
        "Pepe" => array("fol" => 8, "prol" => 9)
    );



    foreach ($alumnosNotas as $alumno => $modulosNota) {
        echo "<p>$alumno</p>\n";
        $total = 0;
        foreach ($modulosNota as $modulo => $nota) {
            echo $modulo . " => " . $nota . " ";
            $total += $nota;
        };
        $media = $total / count($modulosNota);
        echo "( media = $media )";
        echo "<br>";
    }



    ?>

</body>

</html>