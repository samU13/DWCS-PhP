<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>

<body>
    <?php
    session_start();

    $usuarios = array(
        array("usuario" => "pedro", "clave" => "abc123"),
        array("usuario" => "maria", "clave" => "abc123"),
        array("usuario" => "juan", "clave" => "abc123")
    );

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        unset($_SESSION['validado']);
    }

    function validar_usuario($usuario, $clave)
    {
        global $usuarios;
        foreach ($usuarios as $u) {
            if ($u['usuario'] == $usuario && $u['clave'] == $clave) {
                return true;
            }
        }
        return false;
    }

    if (isset($_POST['usuario'])) {
        $_SESSION["validado"] = validar_usuario($_POST['usuario'], $_POST['clave']);
    }

    if (isset($_SESSION['validado']) && $_SESSION['validado'] == true) {
    ?>
    <a href="noticias.php">Noticias</a>
    <a href="login.php?logout=1">Logout</a>

    <?php
    } else {
    ?>
    <form action="login.php" method="post">
        <label for="usuario">Nombre : </label>
        <input type="text" name="usuario" /><br><br>
        <label for="clave">Password :</label>
        <input type="password" name="clave" /><br><br>
        <input type="submit" value="Validar" /><br>
    </form>
    <?php
    }

    ?>

</body>

</html>