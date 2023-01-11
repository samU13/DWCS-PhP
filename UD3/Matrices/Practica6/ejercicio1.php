<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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

    //Programa que cree un array asociativo coas notas dun conxunto de alumnos. Como índice aparecerá o nome do alumno. Visualiza o array en forma de táboa. Na primeira columna visualizarase o nome do alumno e na segunda a nota. Fai o mesmo exercicio pero poñendo estilo á táboa: fondo, cor e borde para os títulos da táboa; fondo, cor e borde para os datos da táboa e aliñar á dereita os datos numéricos.

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
    ?>

</body>

</html>