<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>

    <?php

    //Programa que cree o array {10, 20, 32, 21, 5} e o visualice en sentido inverso usando unha función predefinida e usando unha función definida polo programador.

    function invertir($lista)
    {
        $temporal = array();
        for ($i = count($lista) - 1; $i >= 0; $i--) {
            $temporal[] = $lista[$i];
        }
        return $temporal;
    }

    $numeros = array(10, 20, 32, 21, 5);

    echo "<p>Array invertido con array_reverse</p>\n";
    foreach (array_reverse($numeros) as $numero) {
        echo "$numero" . " ";
    }
    echo "\n";

    echo "<p>Array invertido con funcion propia</p>";
    foreach (invertir($numeros) as $numero) {
        echo "$numero" . " ";
    }
    echo "\n";

    ?>


</body>

</html>