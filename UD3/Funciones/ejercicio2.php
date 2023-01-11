<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>

    <?php

    //Programa en php que permita resolver ecuacións cuadráticas, resolver a ecuación nunha función, usa unha matriz para poder devolver os dous resultados que dá.

    // Función que resuelve una ecuación de 2º grado.
    // Devuelve las raíces en un array
    function resuelve($a, $b, $c)
    {
        $discriminante = $b * $b - 4 * $a * $c;
        if ($discriminante < 0) {
            return array();
        } else if ($discriminante == 0) {
            return array(-$b / (2 * $a));
        } else {
            return array((-$b + sqrt($discriminante)) / (2 * $a),
                (-$b - sqrt($discriminante)) / (2 * $a)
            );
        }
    }

    // Programa principal
    if (isset($_REQUEST['a'], $_REQUEST['b'], $_REQUEST['c'])) {
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $c = $_REQUEST['c'];

        $error = false;
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            echo "<p>Ha introducido datos no numéricos</p>\n";
            $error = true;
        } elseif ($a == 0) {
            echo "<p>El coeficiente 'a' no puede ser cero</p>\n";
            $error = true;
        } else {
            $solucion = resuelve($a, $b, $c);
        }

        if (!$error) {
            if (empty($solucion)) {
                echo "<h4>La ecuación no tiene soluciones reales</h4>\n";
            } else if (count($solucion) == 1) {
                echo "<h4>La ecuación tiene una única solución: $solucion[0] </h4>\n";
            } else {
                echo "<h4>La ecuación tiene dos soluciones: $solucion[0], $solucion[1]</h4>\n";
            }
        }
        echo "<button><a href=\"ejercicio2.php\">Volver al formulario</a></button>\n";
    } else {
    ?>
    <h4>Introduce los coeficientes</h4>
    <form action="" method="get">
        <p>Coeficiente a: <input type="text" name="a" /></p>
        <p>Coeficiente b: <input type="text" name="b" /></p>
        <p>Coeficiente c: <input type="text" name="c" /></p>
        <p><input type="submit" value="Enviar" /></p>
    </form>

    <?php } ?>

</body>

</html>