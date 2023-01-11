<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body
    style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php
for($i=1;$i<=1000; $i++){
    if(($i % 3 === 0 ) && ($i % 5 === 0 )){
        echo "<p>$i</p>";
    }
}

?>

</body>

</html>