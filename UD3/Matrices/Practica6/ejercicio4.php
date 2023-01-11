<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #000;
        padding: 0.5em;
    }
    </style>
</head>

<body>
    <?php

    $productos = array(
        "mesa" => 100,
        "silla" => 50,
        "bolígrafo" => 2.25,
        "portátil" => 400
    );
    // Visualizamos productos en formato tabla
    echo "<p><strong>Productos:</strong></p>\n";
    echo "<table>\n";
    echo "<tr><th>Producto</th><th>Precio (€)</th></tr>\n";
    foreach ($productos as $nombre => $precio) {
        echo "<tr><td>$nombre</td><td>$precio</td></tr>\n";
    }
    echo "</table>\n";

    // Mostramos productos con valor superior a 100 euros
    echo "<p><strong>Productos con valor superior a 100 euros:</strong></p>\n";
    echo "<table>\n";
    echo "<tr><th>Producto</th><th>Precio (€)</th></tr>\n";
    foreach ($productos as $nombre => $precio) {
        if ($precio > 100) {
            echo "<tr><td>$nombre</td><td>$precio</td></tr>\n";
        }
    }
    echo "</table>\n";
    ?>



</body>

</html>