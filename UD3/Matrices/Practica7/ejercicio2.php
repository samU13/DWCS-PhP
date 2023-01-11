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
        float: left;
        margin: 0.5em;
        width: 5%;
    }

    div {
        clear: both;

    }

    p {

        padding: 5px;
    }

    td {
        border: 1px solid #000;
        padding: 0.4em;
        text-align: right;
        background-color: #CEF6F5
    }
    </style>
</head>

<body>
    <?php
    //Programa que inicie dous arrays de tres filas e dúas columnas cada un e cree outros dous a partir de eles: Un conterá a suma dos dous arrays e outro a resta. Utiliza unha función que permita ver un array con formato de táboa. Fai o mesmo exercicio pero poñendo estilo á táboa: fondo, cor e borde para os datos da táboa, aliñar á dereita os datos numéricos, os dous arrays orixinais que se vexan un ao lado do outro e os dous arrays de resultados que se vexan un debaixo do outro.


    function visualizar($datos, $titulo1, $titulo2 = "")
    {
        echo "<table>\n";
        echo "<caption>$titulo1</caption>\n";
        foreach ($datos as $fila) {
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>$valor</td>";
            }
            echo "<tr>\n";
        }
        echo "</table>\n";
    }

    $datosA = array(
        array(3, 5),
        array(2, 8),
        array(10, 6)
    );

    $datosB = array(
        array(4, 1),
        array(1, 8),
        array(1, 1)
    );

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $suma[$i][$j] = $datosA[$i][$j] + $datosB[$i][$j];
            $resta[$i][$j]  = $datosA[$i][$j] - $datosB[$i][$j];
        }
    }

    echo "<div id=\"originales\">\n";
    echo "<p><strong>Arrays originales:</strong></p>\n";
    visualizar($datosA, "Array 1");
    visualizar($datosB, "Array 2");
    echo "</div>\n";


    echo "<div id=\"resultados\">\n";
    echo "<p><strong>Resultados:</strong></p>\n";
    visualizar($suma, "Array suma");
    visualizar($resta, "Array resta");
    echo "</div>\n";
    ?>




</body>

</html>