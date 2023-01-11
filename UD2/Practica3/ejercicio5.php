<html>

<head>
    <title>Calcular Grados de radians</title>
    <style>


    </style>
</head>

<body style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php
    // COMPROBACION DE RECIBIR VALORES
    if (isset($_REQUEST['grados'], $_REQUEST['conversion'])) {
        $grados = $_REQUEST['grados'];
        $conversion = $_REQUEST['conversion'];

        $error = false;

        // ERROR SI NO ES ENTERO
        if (!is_numeric($grados)) {
            echo "<p class=\"error\">El valor introducido no es un número.";
            echo "</p>\n";
            $error = true;
        }

        // COMPROBACION DEL CHECKBOX
        if ($conversion !== "cf" && $conversion !== "fc") {
            echo "<p class=\"error\">Conversión no permitida.";
            echo "</p>\n";
            $error = true;
        }

        // OPERACIONES UNA VEZ ESTA TODO CORRECTO
        if (!$error) {
            if ($conversion === "cf") {
                $f = $grados * 9 / 5 + 32;

                echo "<p><strong>";
                print "$grados ºC son $f ºF.";
                echo "</strong></p>\n";
            }

            if ($conversion === "fc") {
                $c = ($grados - 32) / 9 * 5;

                echo "<p><strong>";
                print "$grados ºF son $c ºC.";
                echo "</strong></p>\n";
            }
        }
    }

    ?>

    <form action='ejercicio5.php' method='get'>
        <p><label>Grados: <input type='text' name='grados' /></label></p>
        <p>
            <label>
                <input type="radio" name='conversion' value='cf' checked="checked" />
                Convertir C a F
            </label>
            <label>
                <input type="radio" name='conversion' value='fc' />
                Convertir F a C
            </label>
        </p>
        <p><input type="submit" value='Convertir' /></p>
    </form>
</body>

</html>