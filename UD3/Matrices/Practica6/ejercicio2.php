<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #000;
        padding: 0.5em;

    }

    td {
        background-color: #CEF6F5
    }

    th {
        background-color: #FAAC58
    }

    .derecha {
        text-align: right;
    }
    </style>
</head>

<body>
    <?php

    //Calcula a nota media do array do exercicio anterior e visualiza os nomes e as notas dos alumnos que teñen nota inferior á media.

    $notas = array(
        "Carlos Alonso" => 7,
        "Fernando González" => 6,
        "Julio Méndez" => 8,
        "Fernando Rodríguez" => 4
    );

    echo "<table>\n";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>\n";
    foreach ($notas as $nombre => $nota) {
        echo "<tr><td>$nombre</td><td class=\"derecha\">$nota</td></tr>\n";
    }
    echo "</table>\n";

    $total = 0;
    $cantidadNotas = 0;
    foreach ($notas as $nombre => $nota) {
        $total += $nota;
        $cantidadNotas++;
    }
    $media = $total / $cantidadNotas;

    echo "<p><strong>Alumnos con nota inferior a la media:</strong></p>\n";
    echo "<table>\n";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>\n";
    foreach ($notas as $nombre => $nota) {
        if ($nota < $media) {
            echo "<tr><td>$nombre</td><td class=\"derecha\">$nota</td></tr>\n";
        }
    }
    echo "</table>\n";
    ?>


</body>

</html>