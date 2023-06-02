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
    session_start();
    // Crea una session
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    //Funcion para conseguir la IP
    function getRealIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        return $_SERVER['REMOTE_ADDR'];
    }

    //Funcion para coger los datos si los hay, y si no ponerlos en blanco
    $campos = ["dni", "nome", "apelidos", "enderezo", "poboacion", "provincia", "cp", "telefono", "email", "data", "sexo", "ip"];
    $data = [];
    foreach ($campos as $campo) {
        $data[$campo] = isset($_POST[$campo]) ? $_POST[$campo] : "";
    }

    //Validar datos
    $data["telefono"] = filter_var($data["telefono"], FILTER_VALIDATE_INT);
    $data["email"] = filter_var($data["email"], FILTER_VALIDATE_EMAIL);

    //Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "triatlon");

    //Comprobar conexion
    if ($conexion->connect_errno) {
        throw new Exception("Error $conexion->connect_errno al conectar a la base de datos");
    }

    //Comprobar token
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
            die("Error de token");
        }
        if ($data['dni'] != "") {
            $stmt = $conexion->prepare("INSERT INTO participantes (dni, nome, apelidos, enderezo, poboacion, provincia, cp, telefono, email, data, sexo, ip) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssssssss", $data['dni'], $data['nome'], $data['apelidos'], $data['enderezo'], $data['poboacion'], $data['provincia'], $data['cp'], $data['telefono'], $data['email'], $data['data'], $data['sexo'], $data['ip']);
            $stmt->execute();
            $stmt->close();
        }
    }
    $conexion->close();



    ?>
    <h1>Formulario de inscricion</h1>
    <form action="ejercicio1.php" method="post">
        <p>Carrera: I Triatlon de Menores de Sada</p>
        <p>A sua direccion IP quedara gardada na base de datos </p>
        <table>
            <tr>
                <td>DNI:</td>
                <td><input type="text" name="dni" id="dni"></td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" id="nome"></td>
            </tr>
            <tr>
                <td>Apelidos:</td>
                <td><input type="text" name="apelidos" id="apelidos"></td>
            </tr>
            <tr>
                <td>Enderezo:</td>
                <td><input type="text" name="enderezo" id="enderezo"></td>
            </tr>
            <tr>
                <td>Poboacion:</td>
                <td><input type="text" name="poboacion" id="poboacion"></td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td><input type="text" name="provincia" id="provincia"></td>
            </tr>
            <tr>
                <td>Codigo Postal:</td>
                <td><input type="text" name="cp" id="cp"></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="tel" name="telefono" id="telefono" pattern="[0-9]{9}"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Data de nacemento:</td>
                <td><input type="date" name="data" id="data"></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td>
                    <input type="radio" name="sexo" id="sexo" value="M">Home
                    <input type="radio" name="sexo" id="sexo" value="F">Muller
                </td>
            </tr>
            <tr>
                <td><input type="hidden" id="ip" name="ip" value="<?php echo getRealIP(); ?>"></td>
                <td><input type="submit" id="guardar" value="Gardar Datos"></td>
            </tr>
        </table>
    </form>

</body>

</html>