<html>

<head>
    <title>Prueba de PHP</title>
    <style>
    .mayor{
        margin: 3rem;
    }
</style>
</head>

<body style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php


    if (isset($_REQUEST['entero1'], $_REQUEST['entero2'])) {
        $num1 = $_REQUEST['entero1'];
        $num2 = $_REQUEST['entero2'];
        $error = false;

        if (filter_var($num1, FILTER_VALIDATE_INT) === false) {
            echo "<p class=\"error\">El primer valor no es un número "
            . "entero.</p>\n";
            $error = true;
        }

        if (filter_var($num2, FILTER_VALIDATE_INT) === false) {
            echo "<p class=\"error\">El segundo valor no es un número "
            . "entero.</p>\n";
            $error = true;
        }

        if (!$error) {
            if ($num1 > $num2) {
                echo "<p class=\"mayor\"><strong>";
                echo "El mayor de $num1 y $num2 es: $num1";
                echo "</strong></p>\n";
            } else {
                echo "<p class=\"mayor\"><strong>";
                echo "El mayor de $num1 y $num2 es: $num2";
                echo "</strong></p>\n";
            }
        }

    }
  


    ?>

    <form action='ejercicio3.php' method='post'>
        <p><label>Entero 1: <input type='text' name='entero1' /></label></p>
        <p><label>Entero 2: <input type='text' name='entero2' /></label></p>
        <input type="submit" value='Calcular mayor' />
    </form>
</body>

</html>