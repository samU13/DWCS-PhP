<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federacion</title>
</head>

<body>
    <?php
    // Conecta con la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "triatlon");
    // Comprueba la conexion
    if ($conexion->connect_errno) {
        throw new Exception("Error $conexion->connect_errno al conectar a la base de datos");
    }

    //Prepara la consulta
    $stmt = $conexion->prepare("SELECT dni, nome, apelidos, ingreso FROM federacion");
    //Ejecuta la consulta
    $stmt->execute();
    //Guarda el resultado en variables
    $result = $stmt->bind_result($dni, $nombre, $apelidos, $ingreso);
    //Cierra la consulta
    $stmt->close();

    // Fetch todos los resultados en un array
    $resultados = [];
    while ($stmt->fetch()) {
        $resultados[] = [
            "dni" => $dni,
            "nombre" => $nombre,
            "apelidos" => $apelidos,
            "ingreso" => $ingreso
        ];
    }

    // Cierra la conexion
    $stmt->close();
    $conexion->close();


    ?>

    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Ingreso</th>
        </tr>
        <?php foreach ($resultados as $resultado) : ?>
        <tr>
            <td><?= $resultado["dni"] ?></td>
            <td><?= $resultado["nombre"] ?></td>
            <td><?= $resultado["apelidos"] ?></td>
            <td><?= $resultado["ingreso"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>