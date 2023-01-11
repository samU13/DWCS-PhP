<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 0.5em;
            text-align: left;

        }
    </style>
</head>

<body>
    <?php
    //Crea un array asociativo coas ventas dun vendedor correspondentes a cada un dos días da semana. O índice do array será o día da semana (Luns, Martes....). Visualiza o array, as ventas máximas e mínimas e o día ou días da semana ao que corresponden. Podes utilizar as funcións max(), min() e dúas funcións definidas polo programador: unha para ver o contido do array con forma de táboa e outra para ver os días da semana que teñen ventas iguais a un valor determinado (esta última función usarase para ver os días da semana con valores mínimos e os días da semana con valores máximos).

    function visualizar($datos, $titulo1, $titulo2)
    {
        echo "<table>\n";
        echo "<tr><th>$titulo1</th><th>$titulo2</th></tr>\n";
        foreach ($datos as $clave => $valor) {
            echo "<tr><td>$clave</td><td>$valor</td></tr>\n";
        }
        echo "</table>\n";
    }

    function imprimirDias($datos, $valor_a_comparar)
    {
        $dias = array_keys($datos, $valor_a_comparar);
        foreach ($dias as $dia) {
            echo "$dia ";
        }
    }

    $ventas = array(
        "Lunes" => 314,
        "Martes" => 50,
        "Miércoles" => 50,
        "Jueves" => 314,
        "Viernes" => 50
    );

    // Visualizamos array
    visualizar($ventas, "Día", "Ventas");

    // Almacenamos venta máxima y mínima
    $maxima = max($ventas);
    $minima = min($ventas);

    // Visualizamos días correspondientes a venta máxima
    echo "<p>\nVenta máxima: $maxima<br />\n";
    echo "Días de venta máxima: ";
    imprimirDias($ventas, $maxima);
    echo "\n</p>\n";

    // Visualizamos días correspondientes a venta mínima
    echo "<p>\nVenta mínima: $minima<br />\n";
    echo "Días de venta mínima: ";
    imprimirDias($ventas, $minima);
    echo "\n</p>\n";

    ?>


</body>

</html>