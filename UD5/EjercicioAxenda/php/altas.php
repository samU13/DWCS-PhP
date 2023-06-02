<?php include_once "conexion.php";

//Recoger datos del formulario
$nome = $_POST['nome'];
$telefono = $_POST['telefono'];

//Preparar y ejecutar consulta SQL
$stmt = $conn->prepare("SELECT * FROM axenda WHERE nome = ? AND telefono = ?");
$stmt->bind_param("ss", $nome, $telefono);
$stmt->execute();
$result = $stmt->get_result();


//Comprobar si hay resultados
if ($result->num_rows > 0) {
    echo "El contacto ya existe";
} else {
    //Preparar y ejecutar consulta SQL
    $stmt = $conn->prepare("INSERT INTO axenda (nome, telefono) VALUES (?,?)");
    $stmt->bind_param("ss", $nome, $telefono);
    $stmt->execute();
    echo "Contacto añadido";
}

//Cerrar conexión
$stmt->close();
$conn->close();

//Redirigir a la página principal despues de 2 segundos
header("refresh:2; url=../altas.html");
exit();
