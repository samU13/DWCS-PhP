<?php include_once "conexion.php"; ?>
<?php
//Recoger los datos del formulario
$id = $_POST['id'];
$nome = $_POST['nome'];
$telefono = $_POST['telefono'];

////Preparar y ejecutar consulta SQL
$stmt = $conn->prepare("UPDATE axenda SET nome = ?, telefono = ? WHERE id = ?");
$stmt->bind_param("ssi", $nome, $telefono, $id);

if ($stmt->execute()) {
    echo "Contacto modificado";
} else {
    echo "Error al modificar el contacto";
}

//Cerrar conexión
$stmt->close();
$conn->close();

//Redirigir a la página principal
header("Location: ../editar.php");
exit();
?>