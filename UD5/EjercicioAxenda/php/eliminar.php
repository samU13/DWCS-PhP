<?php include_once "conexion.php"; ?>
<?php

//Recoger los ids de los checkboxes seleccionados
if (isset($_POST['ids'])) {
    $ids = $_POST['ids'];

    //Recorrer cada id
    foreach ($ids as $id) {
        //Preparar y ejecutar consulta SQL
        $stmt = $conn->prepare("DELETE FROM axenda WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
    echo "Contactos eliminados";

    //cerrar conexión
    $stmt->close();
}
$conn->close();

//Redirigir a la página principal
header("Location: ../editar.php");
exit();
?>