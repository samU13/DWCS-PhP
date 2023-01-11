<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body
    style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:1%; font-size:1.5rem ; background-color: coral; color:white">

    <?php
    function factorial($num) {
       $producto=1;
       for($i = 1;$i <= $num;$i++){
        $producto*=$i;
       }
       return $producto;
        }
        echo "<p>Números con factorial menor que 100:<p>\n";
        
        $numero = 1;
        while (($f = factorial($numero)) < 100) {
            echo "$numero ( factorial = $f ) <br />\n";
            $numero++;
        }
        
        echo "</p>\n";
        ?>



</body>

</html>