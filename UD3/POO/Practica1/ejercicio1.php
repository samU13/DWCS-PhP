<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php require_once("Data.php"); ?>
</head>

<body>
    <?php
    echo "Usamos o calendario: <strong>" . Data::getCalendario() . "</strong><br /><br>";
    echo Data::getDataHora();
    ?>

</body>

</html>