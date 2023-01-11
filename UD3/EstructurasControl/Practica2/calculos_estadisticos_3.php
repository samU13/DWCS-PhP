<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>UD3 Práctica 2 (3/3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Calculos estadísticos - Resultado</h1>

    <?php
    define('FORM_METHOD','get');
    define('NUM_MIN',  1);
    define('NUM_MAX',  20);

    $suma = (isset($_REQUEST['suma'])) ? $_REQUEST['suma'] : "";
    $media = (isset($_REQUEST['media'])) ? $_REQUEST['media'] : "";
    $maximo = (isset($_REQUEST['maximo'])) ? $_REQUEST['maximo'] : "";
    $minimo = (isset($_REQUEST['minimo'])) ? $_REQUEST['minimo'] : "";

    if (isset($_REQUEST['n']) && is_array($_REQUEST['n'])) {
        $numeros = $_REQUEST['n'];
    } else {
        $numeros = array();
    }

    $validarNumeros = true;

    $numRecibidos = count($numeros);
    $numRecibidos = count($numeros);
    if ($numRecibidos == 0) {
        echo "<p class=\"error\">No se han recibido datos</p>";
        $validarNumeros = false;
    } elseif ($numRecibidos < NUM_MIN || $numRecibidos > NUM_MAX) {
        echo "<p class=\"error\">El número de valores debe estar entre " . NUM_MIN." y "
                . NUM_MAX . "</p>";
        $validarNumeros = false;
    } else {

        foreach ($numeros as $numero) {
            if (!is_numeric($numero)) {
                $validarNumeros = false;
            }
        }
        if (!$validarNumeros) {
            echo "<p class=\"error\">Hay datos no numéricos</p>";
        }
    }

    if ($validarNumeros) {
        $sumaTotal = 0;
        print "<p>Los valores que has introducido son ";
        foreach ($numeros as $numero) {
            print "$numero ";
            $sumaTotal += $numero;
        }
        print "</p>\n";
        if ($suma == "on") {
            print "<p>La suma de los valores es $sumaTotal.</p>\n";
        }
        if ($media == "on") {
            print "<p>La media de los valores es "
                 .round($sumaTotal/$numRecibidos, 2)."</p>\n";
        }
        if ($maximo == "on") {
            print "<p>El valor más grande es ".max($numeros)."</p>\n";
        }
        if ($minimo == "on") {
            print "<p>El valor más pequeño es ".min($numeros)."</p>\n";
        }
    }



?>

</body>

</html>