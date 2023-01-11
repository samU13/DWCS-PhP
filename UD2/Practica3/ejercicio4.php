<html>

<head>
    <title>Calcular Grados de radians</title>
    <style>
        .grados, .error {
            margin: 3rem;
        }
    </style>
</head>

<body style="display:flex ; align-items:center ; justify-content: center; flex-direction:column; padding-top:15%; font-size:1.5rem ; background-color: coral; color:white">

    <?php

    if (isset($_REQUEST['radianes'])) {

        $radianes = $_REQUEST['radianes'];

        if (is_numeric($radianes)) {

            $grados = $radianes * 180 / M_PI;

            echo "<p class=\"grados\"><strong>";
            echo "$radianes radianes son $grados grados.";
            echo "</strong></p>\n";
        } else { 
            echo "<p class=\"error\">";
            echo "Introduce un valor valido ( numerico )";
            echo "</p>\n";
        }
    }





    ?>

    <form action='ejercicio4.php' method='post'>
        <p><label>Radianes: <input type='text' name='radianes' /></label></p>
        <input type="submit" value='Calcular grados' />
    </form>
</body>

</html>