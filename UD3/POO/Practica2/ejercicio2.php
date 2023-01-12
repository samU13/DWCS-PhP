<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php require_once("Persona.php"); ?>
</head>

<body>
    <?php
    $p = new Persona('Pedro', '2008-10-30', 'B');
    echo $p->getNombre() . ' ten ' . $p->diasVivo();
    echo '<br />O seu sexo é: ' . $p->getSexo();


    ?>

</body>

</html>