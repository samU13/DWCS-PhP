<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <?php require_once("Academia.php"); ?>
</head>

<body>
    <?php


    $academia = new Academia();
    $profe = $academia->addProfesor("Laura", "Varela Ferreiro", '696999999', '12345678A');
    $profe->addBaile("SAMBA");
    $profe->addBaile("HIP HOP");
    $profe->addBaile("AFRO", 12);
    $profe->addBaile("AFRO", 12);
    echo '<br />PROFESOR: ' . $profe->verInformacion();
    echo '<br />SOLDO: ' . $profe->calcularSueldo(10);
    echo '<br />IMPARTE CLASE DE: ' . $profe->getBailes();

    $alu1 = $academia->addAlumno("Uxia", "Loureiro Agra", "699666999");
    echo '<br />ALUMNO: ' . $alu1->verInformacion();
    $alu1->setNumClases(2);
    echo '<br />A PAGAR: ' . $alu1->aPagar();

    $alu2 = $academia->addAlumno("Manuel", "Abel Prado", "699666999");
    echo '<br />ALUMNO: ' . $alu2->verInformacion();
    echo '<br />A PAGAR: ' . $alu2->aPagar();


    echo '<br />PROFESOR: ' . $profe->verInformacion();
    echo '<br />SOLDO: ' . $profe->calcularSueldo(10);
    $profe->eliminarBaile("AFRO");
    echo '<br />IMPARTE CLASE DE: ' . $profe->getBailes();

    ?>

</body>

</html>