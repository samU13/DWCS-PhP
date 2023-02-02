<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="content-language" content="es" />

    <meta name="author" content="basuradelsuelo" />
    <meta name="copyright" content="2022, Pimpinela" />

    <meta name="description" content="Practica 4 - 2" />
    <meta name="keywords" content="dwcs, php, practica" />
    <meta name="robots" content="index, follow" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4 - 2</title>
    <style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .resultado {
        padding: 2%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: orangered;
        color: whitesmoke;
    }


    label {
        display: block;
        margin: .5em 0 0 0;
    }
    </style>
</head>

<body>

    <?php

    session_start();
    if (!isset($_SESSION["paso"])) {
        $_SESSION["paso"] = 2;
    ?>
    <h2>Registro del usuario (paso 1/3)</h2>
    <form action='ejercicio2.php' method='post'>
        <input type="hidden" name="paso" value="2">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apelidos"><br>
        <label for="nif">NIF</label>
        <input type="text" name="nif" id="nif"><br><br>
        <input type="submit" value="Siguiente">
    </form>
    <?php
    } elseif ($_SESSION["paso"] == 2) {
        $_SESSION["paso"] = 3;
        $_SESSION["nombre"] = $_REQUEST["nombre"];
        $_SESSION["apellidos"] = $_REQUEST["apellidos"];
        $_SESSION["nif"] = $_REQUEST["nif"];

    ?>
    <h2>Registro del usuario (paso 2/3)</h2>
    <form action='ejercicio2.php' method='post'>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="cp">CP</label>
        <input type="text" name="cp" id="cp"><br>
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="localidad"><br><br>
        <input type="submit" value="Siguiente">
    </form>
    <?php
    } elseif ($_SESSION["paso"] == 3) {
        $_SESSION["paso"] = 4;
        $_SESSION["direccion"] = $_REQUEST["direccion"];
        $_SESSION["cp"] = $_REQUEST["cp"];
        $_SESSION["localidad"] = $_REQUEST["localidad"];

    ?>
    <h2>Registro de usuario (paso 3/3)</h2>
    <form action='ejercicio2.php' method='post'>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="observaciones">Observaciones</label>
        <textarea rows="4" cols="50" name="observaciones" id="observaciones"></textarea>
        <br><br>
        <input type="submit" value="Siguiente">
    </form>
    <?php
    } elseif ($_SESSION["paso"] == 4) {
        echo "<h2>REGISTRO DE USUARIOS (DATOS)</h2>";
        echo "<div class=\"resultado\">";
        echo "<p>Nombre: " . $_SESSION["nombre"] . "</p>";
        echo "<p>Apellidos: " . $_SESSION["apellidos"] . "</p>";
        echo "<p>NIF: " . $_SESSION["nif"] . "</p>";
        echo "<p>Direccion: " . $_SESSION["direccion"] . "</p>";
        echo "<p>CP: " . $_SESSION["cp"] . "</p>";
        echo "<p>Localidad: " . $_SESSION["localidad"] . "</p>";
        echo "<p>Telefono: " . $_REQUEST["telefono"] . "</p>";
        echo "<p>Observaciones: " . $_REQUEST["observaciones"] . "</p>";
        echo "</div>";
    }
    ?>

</body>

</html>