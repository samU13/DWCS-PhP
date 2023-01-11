<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body
    style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:1%; font-size:1.5rem ; background-color: coral; color:white">

    <?php 

 function suma30impares(){
    $total= 0;
    $count = 1;
    $num = 1;

    do{
        if($num % 2 !== 0){
            $total += $num;
            $count++;
        }
        $num++;
    }while($count<=30);
    return $total;
 }

 echo "<p>La suma de los 30 primeros impares es : ".suma30impares()."</p>\n"

?>



</body>

</html>