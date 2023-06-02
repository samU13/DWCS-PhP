<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>

<body>
    <?php

/*
Ejercicio 2.
1. Una funcion
2. Validar un email con filter_var
3. Recoger una variable por get y validarla
4. Mostrar el resultado
*/

function validateEmail($email)
{
    $status = "No valido";

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "Valido";
    }

    return $status;
}

if (isset($_GET['email'])) {
    echo validateEmail($_GET['email']);
} else {
    echo "Pasa por get un email...";
}

?>

    <form action="" method="GET">
        <input type="text" name="email">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>