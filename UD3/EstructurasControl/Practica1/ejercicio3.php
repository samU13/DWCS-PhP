<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body
    style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php

    for($i = 1; $i<=10; $i++){
       
        echo '//////// TABLA DEL '.$i.' /////////';
        echo '<br>';
        for($x = 1; $x<=10; $x++){
            echo $i .' x '. $x .'='. ($i*$x);
            echo '<br>';
        }
        echo "</p>\n";
        
        
    }

    ?>


</body>

</html>