<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <?php require_once("Articulo.php"); ?>
</head>

<body>
    <?php
    $a1 = new Articulo(1, "linterna");
    $a2 = clone $a1;
    $a2->nombre = "manta";
    echo $a2->id . ' - ' . $a2->nombre;
    echo "<br />";
    $a3 = clone $a1;
    $a3->nombre = "porta";
    echo $a3->id . ' - ' . $a3->nombre;
    echo "<br />" . $a1 . "<br>";
    echo $a1->mostrarArticulo();

    ?>

</body>

</html>