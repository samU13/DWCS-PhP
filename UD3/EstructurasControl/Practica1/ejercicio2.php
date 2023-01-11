<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body
    style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php

$total = 0;
for( $i = 1; $i <= 50; $i++){
    $total = $total + $i;
};

echo " La suma total de los numeros de 1 hasta 50 es : $total";

    
?>

</body>

</html>