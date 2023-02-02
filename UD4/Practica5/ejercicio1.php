<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5 -1 </title>
    <style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    th,
    td {
        padding: 0.4em;
        background-color: #FF5733;
    }

    th {
        text-align: left;
        background-color: #900C3F;
        color: whitesmoke;
    }

    tr.alt td {
        background: #C70039;
        color: whitesmoke;
    }
    </style>
</head>

<body>
    <?php
    define("TAM_PAGINA", 10);
    $inicio = 0;
    if (isset($_GET["inicio"]) and $_GET["inicio"] >= 0 and $_GET["inicio"] <= 10000) {
        $inicio = (int) $_GET["inicio"];
    }
    $fin = $inicio + TAM_PAGINA - 1;
    ?>
    <div class="resultado">
        <h2>Numeros al cuadrado</h2>
        <p>Mostrando numeros al cuadrado de <?php echo $inicio ?> a <?php echo $fin ?> : </p>
        <table cellspacing="0" border="0" style="width: 20em; border: 10px solid #581845 ;">
            <tr>
                <th>n</th>
                <th>n <sup>2</sup></th>
            </tr>
            <?php
            for ($i = $inicio; $i <= $fin && $i <= 100000; $i++) {
            ?>
            <tr <?php if ($i % 2 != 0) echo 'class="alt"' ?>>
                <td><?php echo $i ?></td>
                <td><?php echo pow($i, 2) ?></td>
            </tr>
            <?php

            }
            ?>
        </table>
        <p>
            <?php if ($inicio > 0) { ?>
            <a href="ejercicio1.php?inicio=<?php echo $inicio - TAM_PAGINA ?>">&lt;Pagina anterior</a> |
            <?php } ?>
            <?php if ($fin < 10000) { ?>
            <a href="ejercicio1.php?inicio=<?php echo $inicio + TAM_PAGINA ?>">Pagina siguiente &gt;</a>
            <?php } ?>
        </p>
    </div>

</body>

</html>