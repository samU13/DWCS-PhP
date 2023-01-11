<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    </style>
</head>

<body>
    <?php
    //Modifica o programa anterior de forma que se utilice un array para os nomes dos módulos e outro bidimensional para nomes e notas. Neste último caso o índice para cada grupo de notas será o nome de cada alumno. Podes extraer deste último array , mediante unha función predefinida, un array cos nomes dos alumnos para a visualización.

    $modulos = array("fol", "prol", "ande", "sist");
    $alumnosNotas = array("Juan" => array(5, 6, 7, 8), "Carmen" => array(4, 5, 6, 3), "Antonio" => array(4, 5, 4, 3), "Marta" => array(4, 2, 3, 4), "Pepe" => array(8, 9));


    $alumnos = array_keys($alumnosNotas);

    foreach ($alumnos as $alumno) {
        echo "<p>$alumno</p>\n";
        $numNotas = count($alumnosNotas[$alumno]);
        for ($j = 0; $j < $numNotas; $j++) {
            echo $modulos[$j] . " => " . $alumnosNotas[$alumno][$j] . " ";
        }
        echo "<br>\n";
    }


    ?>

</body>

</html>