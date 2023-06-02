<?php include_once "conexion.php"; ?>

<?php

//Recoge el id de la URL
$id = $_GET['id'];

//Preparar y ejecutar consulta SQL para obtener los datos de la fila
$stmt = $conn->prepare("SELECT * FROM axenda WHERE id = ?");
$stmt->bind_param("i", $id);

$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

//Cerrar conexión
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>

    <form action="modificar_datos.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br>
        Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
        <input type="submit" value="Modificar">
    </form>

</body>

</html>