<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Pee & Poo</title>
</head>

<body>
    <?php
    session_start();
    include "datos.php";
    include "funciones.php";

    if (isset($_GET['logout'])) {
        unset($_SESSION["usuario"]);
    }

    if (isset($_POST['usuario'])) {
        if (!$_SESSION['usuario'] = validarUsuario($_POST['usuario'], $_POST['clave'])) {
            echo "Usuario ou clave incorrecto";
            unset($_SESSION["usuario"]);
        }
    }

    if (!isset($_SESSION["usuario"])) {
    ?>
        <h3>Login Banco</h3>
        <form action="login.php" method="post">

            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" />
            <br />
            <label for="clave">Clave</label>
            <input type="password" name="clave" />
            <br /><br />
            <input class="btn" type="submit" value="Login" />

        </form>
    <?php
    } else {
        echo '<a href="login.php?logout">logout</a><br><br>';
        if ($_SESSION['usuario']['tipo'] == 1) {
            mostrarMovimientos($_SESSION['usuario']);
        } else {
            if (isset($_GET['usuario'])) {
                foreach ($usuarios as $us) {
                    if ($us['usuario'] == $_GET['usuario']) {
                        mostrarMovimientos(($us));
                    }
                }
                echo '<br><br><a href="login.php">Volver</a>';
            } else {
                foreach ($usuarios as $us) {
                    if ($us['tipo'] == 1)
                        echo '<a href="login.php?usuario=' . $us["usuario"] . '">' . $us['nome'] . '</a><br>';
                }
            }
        }
    }

    ?>



</body>

</html>