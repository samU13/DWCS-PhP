<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
    //Programa no que a data actual, se visualice en formato día, mes en letras e ano e nos idiomas Inglés, Español e Galego. Para os dous primeiros idiomas podes usar funcións predefinidas, pero para o último, utiliza un array no que se almacenarán os 12 meses en Galego.

    // Fecha en inglés
    echo "<p>Fecha en Inglés</p>\n";
    echo date('j F Y');

    // Fecha en español
    echo "\n<p>Fecha en Español</p>\n";
    setlocale(LC_TIME, "");
    echo strftime('%d %B %Y');

    // Fecha en gallego
    echo "\n<p>Fecha en Galego</p>\n";

    $mesesGalego = array(
        "Xaneiro", "Febreiro", "Marzo", "Abril", "Maio", "Xuño",
        "Xullo", "Agosto", "Setembro", "Outubro", "Novembro", "Decembro"
    );

    echo date('j') . " " . $mesesGalego[date('n') - 1] . " " . date('Y');
    echo "\n";
    ?>


</body>

</html>