<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="content-language" content="es" />

    <meta name="author" content="basuradelsuelo" />
    <meta name="copyright" content="2022, Pimpinela" />

    <meta name="description" content="Practica 4 - 1" />
    <meta name="keywords" content="dwcs, php, practica" />
    <meta name="robots" content="index, follow" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4 - 1</title>
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
    if (!isset($_REQUEST["paso"])) {
    ?>
    <h2>Registro del usuario (paso 1/3)</h2>
    <form action='ejercicio1.php' method='post'>
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
    } elseif ($_REQUEST["paso"] == 2) {
    ?>
    <h2>Registro del usuario (paso 2/3)</h2>
    <form action='ejercicio1.php' method='post'>
        <input type="hidden" name="paso" value="3">
        <input type="hidden" name="nombre" value="<?php echo $_REQUEST['nombre']; ?>">
        <input type="hidden" name="apellidos" value="<?php echo $_REQUEST['apellidos']; ?>">
        <input type="hidden" name="nif" value="<?php echo $_REQUEST['nif']; ?>">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion"><br>
        <label for="cp">CP</label>
        <input type="text" name="cp" id="cp"><br>
        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" id="localidad"><br><br>
        <input type="submit" value="Siguiente">
    </form>
    <?php
    } elseif ($_REQUEST["paso"] == 3) {
    ?>
    <h2>Registro de usuario (paso 3/3)</h2>
    <form action='ejercicio1.php' method='post'>
        <input type="hidden" name="paso" value="4">
        <input type="hidden" name="nombre" value="<?php echo $_REQUEST['nombre']; ?>">
        <input type="hidden" name="apellidos" value="<?php echo $_REQUEST['apellidos']; ?>">
        <input type="hidden" name="nif" value="<?php echo $_REQUEST['nif']; ?>">
        <input type="hidden" name="direccion" value="<?php echo $_REQUEST['direccion']; ?>">
        <input type="hidden" name="cp" value="<?php echo $_REQUEST['cp']; ?>">
        <input type="hidden" name="localidad" value="<?php echo $_REQUEST['localidad']; ?>">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono"><br>
        <label for="observaciones">Observaciones</label>
        <textarea rows="4" cols="50" name="observaciones" id="observaciones"></textarea>
        <br><br>
        <input type="submit" value="Siguiente">
    </form>
    <?php
    } elseif ($_REQUEST["paso"] == 4) {
        echo "<h2>REGISTRO DE USUARIOS (DATOS)</h2>";
        echo "<div class=\"resultado\">";
        echo "<p>Nombre: " . $_REQUEST["nombre"] . "</p>";
        echo "<p>Apellidos: " . $_REQUEST["apellidos"] . "</p>";
        echo "<p>NIF: " . $_REQUEST["nif"] . "</p>";
        echo "<p>Direccion: " . $_REQUEST["direccion"] . "</p>";
        echo "<p>CP: " . $_REQUEST["cp"] . "</p>";
        echo "<p>Localidad: " . $_REQUEST["localidad"] . "</p>";
        echo "<p>Telefono: " . $_REQUEST["telefono"] . "</p>";
        echo "<p>Observaciones: " . $_REQUEST["observaciones"] . "</p>";
        echo "</div>";
    }
    ?>

</body>

</html>