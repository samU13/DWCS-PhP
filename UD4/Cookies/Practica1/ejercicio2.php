<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores de fondo</title>
    <style>
    <?php if (isset($_POST['color'])) {
        echo "body { background-color: ". $_POST['color'] . "; }";
        setcookie("color", $_POST['color'], time() + 5 * 60);
    }

    elseif (isset($_COOKIE['color'])) {
        echo "body { background-color: ". $_COOKIE['color'] . "; }";
    }

    else {
        echo "body { background-color: white; }";
    }

    ?>
    </style>
</head>

<body style="text-align:center ;">
    <form method="post">
        <input type="radio" name="color" value="white">Blanco<br />
        <input type="radio" name="color" value="red">Rojo<br />
        <input type="radio" name="color" value="green">Verde<br />
        <input type="radio" name="color" value="cyan">Azul
        </p>
        <p><input type="submit" value="Enviar datos"></p>
    </form>

</body>

</html>