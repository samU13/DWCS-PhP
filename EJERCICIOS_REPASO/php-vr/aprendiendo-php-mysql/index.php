<?php
//Conectar a la base de datos
$conexion = mysqli_connect("localhost", "administrador", "administrador", "phpmysql");

//Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MySQL ha fallado: " . mysqli_connect_error();
    echo "<br>";
} else {
    echo "Conexion realizada correctamente";
    echo "<br>";
}
// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");


//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");
// $notas = mysqli_fetch_assoc($query);
// var_dump($notas);

while ($notas = mysqli_fetch_assoc($query)) {
    //var_dump($notas);
    //echo "<br>";
    echo "<h2>" . $notas['titulo'] . "</h2>";
    echo $notas['descripcion'] . "<br>";
}

//Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . mysqli_error($conexion);
}
