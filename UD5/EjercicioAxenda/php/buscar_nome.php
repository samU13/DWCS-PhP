<?php require_once "conexion.php"; ?>
<?php
//Recoger  del formulario
$nome_busqueda = $_POST['nome'];

//Preparar y ejecutar consulta SQL
$stmt = $conn->prepare("SELECT * FROM axenda WHERE nome = ?");
$stmt->bind_param("s", $nome_busqueda);
$stmt->execute();
$result = $stmt->get_result();


//Mostrar resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID:" . $row['id'] . " Nome: " . $row['nome'] . " - Teléfono: " . $row['telefono'] . "<br>";
    }
} else {
    echo "No hay resultados";
}


//Cerrar conexión
$stmt->close();
$conn->close();