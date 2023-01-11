<html>

<head>
    <title>Calcular Grados de radians</title>
    <style>
        .acierto{
            color: lawngreen;
        }
        .error{
            color: red;
        }
        .lanzarDado{
            padding: 1.5rem;
            font-size: 1.25rem;
            text-transform: uppercase;
        }
        .botonLanzar{
            text-align: center;
        }

    </style>
</head>

<body style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php
    if (isset($_REQUEST['valor'])) {
        $valor = $_REQUEST['valor'];
        $error = false;

        if (!is_numeric($valor) || $valor > 6 || $valor < 1) {
            echo "<p class=\"error\">El valor introducido no es valido";
            echo "</p>\n";
            $error = true;
        }

        $lanzamiento = rand(1, 6);

        if (!$error) {
            echo "<p>Número introducido: $valor</p>\n";
            echo "<p>Resultado del lanzamiento del dado: $lanzamiento</p>\n";
            if ($valor == $lanzamiento) {
                echo "<p class=\"acierto\"><strong>Has acertado!</strong></p>\n";
            } else {
                echo "<p class=\"error\"><strong>Lo siento. Has fallado!</strong></p>\n";
            }
        }
    }


    ?>

    <form action='ejercicio7.php' method='get'>
        <p><label>Introduce valor del dado: <input type='text' name='valor' /></label></p>
        <p class="botonLanzar">
            <input class="lanzarDado" type="submit" name='lanzar' value='Lanzar Dado' />
        </p>
    </form>
</body>

</html>