<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1 - UD2 </title>
</head>

<body>
    <?php

    $x= 10;
    $y= 7;

    echo $x . '+' . $y . '=' . ($x + $y) . "<br>";
    echo $x . '-' . $y . '=' . ($x - $y) . "<br>";
    echo $x . '*' . $y . '=' . ($x * $y) . "<br>";
    echo $x . '/' . $y . '=' . ($x / $y) . "<br>";
    echo $x . '%' . $y . '=' . ($x % $y) . "<br>";
    
    ?>

    <div>
        <h1>Circunferencia dada</h1>
        <h2>
            <?php
        $pi= 3.14;
        $radio = 5;
        $circunferencia = $pi * 2* $radio;
        echo $circunferencia;
        ?>
        </h2>
    </div>

    <div>


        <h1>Circunferencia preguntada</h1>
        <?php
        
    if (isset($_REQUEST['radio'])){
        echo "Resultado: ". (3.14 * 2 * $_REQUEST['radio']);
    }
    ?>
        <form action="practica1.php">
            <input type="text" name='radio'>
            <input type="submit" value="Calcular perimetro">
        </form>
    </div>


</body>

</html>