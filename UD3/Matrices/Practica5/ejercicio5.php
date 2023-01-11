<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style type="text/css">
    .error {
        color: red
    }
    </style>
</head>

<body>

    <h1>Binarios de 1 a 10</h1>


    <?php

    //Modifica o último apartado do programa anterior de forma que calcule os equivalentes en binario dos números dende 1 ata 10


    function conversorBinario($num)
    {
        $restos = array();
        do {
            $restos[] = $num % 2;
            $num = floor($num / 2);
        } while ($num > 0);
        return implode("", array_reverse($restos));
    }


    //OPCION 1: Convertimos con decbin()
    echo "<p>Conversor a binario con decbin(): ";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p><strong>" . decbin($i) . "</strong>";
        echo "</p>\n";
    }

    //OPCION 2: Convertimos con base_convert(). 
    echo "<p>Conversor a binario con base_convert():</p> ";
    for ($i = 1; $i <= 10; $i++) {
        echo "<p><strong>" . base_convert($i, 10, 2) . "</strong>";
        echo "</p>\n";
    }

    //OPCION 3: Convertimos con función definida por programador(). 
    echo "<p>Conversor con función definida por programador: </p>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<strong>" . $i . " en decimal es " . conversorBinario($i) . " en binario" . "</strong><br>";
        echo "<br />\n";
    }



    ?>


</body>

</html>