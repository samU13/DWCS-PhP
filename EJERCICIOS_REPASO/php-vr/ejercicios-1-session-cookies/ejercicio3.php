<?php


/*
Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
1. Uno para sumar
2. Restar
3. Dividir
4. Multiplicar
*/

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['sumar'])) {
        $resultado = "El resultado es: " . ($numero1 + $numero2);
    }

    if (isset($_POST['restar'])) {
        $resultado = "El resultado es: " . ($numero1 - $numero2);
    }

    if (isset($_POST['dividir'])) {
        $resultado = "El resultado es: " . ($numero1 / $numero2);
    }

    if (isset($_POST['multiplicar'])) {
        $resultado = "El resultado es: " . ($numero1 * $numero2);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="POST">
        <label for="numero1">Numero 1</label><br>
        <input type="number" name="numero1"><br>
        <br>
        <label for="numero2">Numero 2</label><br>
        <input type="number" name="numero2"><br>
        <br>
        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Dividir" name="dividir">
        <input type="submit" value="Multiplicar" name="multiplicar">
    </form>

    <?php
    if (isset($resultado)) {
        echo "<h2>$resultado</h2>";
    }
    ?>

</body>

</html>