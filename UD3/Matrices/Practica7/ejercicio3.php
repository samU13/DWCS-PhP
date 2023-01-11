<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
    //Programa que inicie un array cos nomes dos 4 módulos de primeiro de DAI, outro cos nomes de 5 alumnos do grupo e outro de dous dimensións coas notas de cada alumno nos seus módulos. Visualiza os arrays co seguinte formato: 
    //Juan 
    //fol => 5 prol => 6 ande => 7 sist => 8
    //Carmen
    //fol => 4 prol => 5 ande => 6 sist => 3

    $modulos = array("fol", "prol", "ande", "sist");
    $alumnos = array("Juan", "Carmen", "Antonio", "Marta", "Pepe");
    $notas = array(
        array(5, 6, 7, 8),
        array(4, 5, 6, 3),
        array(4, 5, 4, 3),
        array(4, 2, 3, 4),
        array(8, 9)
    );

    for ($i = 0; $i < count($alumnos); $i++) {
        echo "<p>$alumnos[$i]</p>";
        $numeroNotas = count($notas[$i]);
        for ($j = 0; $j < $numeroNotas; $j++) {
            echo "$modulos[$j]" . " => " . $notas[$i][$j] . " ";
        }
        echo "<br>\n";
    }

    ?>

</body>

</html>