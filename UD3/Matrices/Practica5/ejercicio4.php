<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style type="text/css">
    .error {
        color: red
    }
    </style>
</head>

<body>

    <h1>Convertidor de decimal a binario</h1>

    <form action="ejercicio4.php" method="post">
        <p>Entero positivo: <input type="text" name="entero" /></p>
        <p><input type="submit" value="Enviar" /></p>
    </form>

    <?php

    //Programa que transforme un número enteiro a binario utilizando a función decbin(), a función base_convert() e creando unha función definida polo programador que utiliza arrays para almacenar os restos e o último cociente.


    function conversorBinario($num)
    {
        $restos = array();
        do {
            $restos[] = $num % 2;
            $num = floor($num / 2);
        } while ($num > 0);
        return implode("", array_reverse($restos));
    }

    if (isset($_REQUEST['entero'])) {
        $entero = $_REQUEST['entero'];
        if (ctype_digit($entero)) {
            //OPCION 1: Convertimos con decbin()
            echo "<p>$entero convertido a binario con decbin(): ";
            echo "<strong>" . decbin($entero) . "</strong>";
            echo "</p>\n";

            //OPCION 2: Convertimos con base_convert(). 
            echo "<p>$entero convertido a binario con base_convert(): ";
            echo "<strong>" . base_convert($entero, 10, 2) . "</strong>";
            echo "</p>\n";

            //OPCION 3: Convertimos con función definida por programador(). 
            echo "<p>$entero convertido a binario con función definida por programador: ";
            echo "<strong>" . conversorBinario($entero) . "</strong>";
            echo "</p>\n";
        } else {
            echo "<p class=\"error\">Debes introducir un entero mayor o igual que 0</p>\n";
        }
        echo "<p><button><a href=\"ejercicio4.php\">Volver a formulario</a></button></p>\n";
    }


    ?>


</body>

</html>