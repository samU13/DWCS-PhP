<html>

<head>
    <title>Calcular Grados de radians</title>
    <style>
        .botonOp{
            padding: 15px;
            background-color: lemonchiffon;
            font-size: 1.25rem;
        }

    </style>
</head>

<body style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php
    if (isset($_REQUEST['operando1'], $_REQUEST['operando2'])) {
        $operando1 = $_REQUEST['operando1'];
        $operando2 = $_REQUEST['operando2'];
        $operacion = $_REQUEST['operacion'];
        $error = false;

        if (!is_numeric($operando1)) {
            echo "<p class=\"error\">El valor introducido no es un número.";
            echo "</p>\n";
            $error = true;
        }
        if (!is_numeric($operando2)) {
            echo "<p class=\"error\">El valor introducido no es un número.";
            echo "</p>\n";
            $error = true;
        }

        if ($operacion !== '+' && $operacion !== '-' && $operacion !== '*' && $operacion !== '/') {
            echo "<p class=\"error\">Operacion no permitida.";
            echo "</p>\n";
            $error = true;
        }

        if (!$error) {
            if ($operacion === '+') {
                echo "<p><strong>";
                echo "$operando1 + $operando2 = " . ($operando1 + $operando2);
                echo "</strong></p>\n";
            } elseif ($operacion === '-') {
                echo "<p><strong>";
                echo "$operando1 - $operando2 = " . ($operando1 - $operando2);
                echo "</strong></p>\n";
            } elseif ($operacion === '*') {
                echo "<p><strong>";
                echo "$operando1 * $operando2 = " . ($operando1 * $operando2);
                echo "</strong></p>\n";
            } else {
                if ($operando2 != 0) {
                    echo "<p><strong>";
                    echo "$operando1 / $operando2 = " . ($operando1 / $operando2);
                    echo "</strong></p>\n";
                }else{
                    echo "<p><strong>";
                    echo "El $operando2 no puede ser 0";
                    echo "</strong></p>\n";
                }
            }
        }
    }


    ?>

    <form action='ejercicio6.php' method='get'>
        <p><label>Operando 1: <input type='text' name='operando1' /></label></p>
        <p><label>Operando 2: <input type='text' name='operando2' /></label></p>
        <p>
            <input class="botonOp" type="submit" name='operacion' value='+' />
            <input class="botonOp" type="submit" name='operacion' value='-' />
            <input class="botonOp" type="submit" name='operacion' value='*' />
            <input class="botonOp" type="submit" name='operacion' value='/' />
        </p>
    </form>
</body>

</html>