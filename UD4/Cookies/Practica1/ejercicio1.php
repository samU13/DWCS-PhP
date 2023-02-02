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

    $total_contador = 0;

    if (isset($_COOKIE['contador'])) {
        $total_contador = $_COOKIE['contador'];
        $total_contador++;
    }



    setcookie('contador', $total_contador);

    if ($total_contador === 0) {
        echo "Benvido, é a primeira vez que nós
        visitas";
    } else {
        echo "Esta é a túa visita número: " . $total_contador;
    }

    ?>


</body>

</html>