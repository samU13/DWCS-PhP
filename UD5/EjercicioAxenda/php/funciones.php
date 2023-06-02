<?php include_once "conexion.php"; ?>

<?php

//Recoger datos del formulario para la busqueda

$id = (isset($_POST['id']) ? $_POST['id'] : "");
$nome = (isset($_POST['nome']) ? $_POST['nome'] : "");
$telefono = (isset($_POST['telefono']) ? $_POST['telefono'] : "");
$orden = $_POST['orden'];
$tipo_orden = $_POST['tipo_orden'];

//Preparar y ejecutar consulta SQL
$stmt = $conn->prepare("SELECT * FROM axenda WHERE id LIKE ? AND nome LIKE ? AND telefono LIKE ? ORDER BY $orden $tipo_orden");
$likeNome = "%" . $nome . "%";
$likeId = "%" . $id . "%";
$likeTelefono = "%" . $telefono . "%";
$stmt->bind_param("sss", $likeId, $likeNome, $likeTelefono);
$stmt->execute();
$result = $stmt->get_result();

//Mostrar resultados
if ($result->num_rows > 0) {
    echo "<form action='eliminar.php' method='post'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><input type='checkbox' name='ids[]' value='" . $row["id"] . "' /></td>" . " ";
        echo "<td>" . $row["id"] . "</td>" . " ";
        echo "<td>" . $row["nome"] . "</td>" . " ";
        echo "<td>" . $row["telefono"] . "</td>" . " ";
        echo "<td><a href='modificar.php?id=" . $row["id"] . "'>Modificar</a></td><br>";
        echo "</tr>";
    }
    echo "<input type='submit' value='Eliminar'>";
    echo "</form>";
} else {
    echo "No hay resultados";
}

//Cerrar conexión
$stmt->close();
$conn->close();
