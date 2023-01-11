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
    //Facer unha páxina Web que lle permita ao usuario introducir un numero.
    //Facer tamén un programa en php, que:
    //• Invoque a unha función para que imprima todos os números pares (múltiplos de 2) menores que o número ingresado.
    //• Invoque á mesma función, para que esta vez imprima os múltiplos de 3 menores que o número ingresado.
    //• Invoque unha vez máis á mesma función, esta vez para que imprima todos os múltiplos de 4 menores que o número ingresado.

    function imprimeMultiplos($num, $multiplo)
    {
        echo "<br><p>Los multiplos de " . $multiplo . " del numero " . $num . " son : </p>";
        for ($i = 0; $i < $num; $i++) {
            if ($i % $multiplo === 0) {
                echo "$i \n";
            }
        }
    }

    if (isset($_REQUEST['numero'])) {
        $numero = $_REQUEST['numero'];
        if (is_numeric($numero)) {
            imprimeMultiplos($numero, 2);
            imprimeMultiplos($numero, 3);
            imprimeMultiplos($numero, 4);
        } else {
            echo "<p>Debes introducir un valor numerico</p>\n";
        }
        echo "<br><br><button><a href=\"ejercicio1.php\">Volver al formulario</a></button>\n";
    } else {
    ?>
    <form action="" method="get">
        <p>Numero: <input type="text" name="numero" /></p>
        <p><input type="submit" value="Enviar" /></p>
    </form>
    <?php } ?>






</body>

</html>