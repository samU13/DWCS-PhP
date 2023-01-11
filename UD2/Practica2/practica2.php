<html>

<head>
    <title>Calculo de medias - Practica 2</title>
    <style type="text/css">
        body {
            background-color: #FFFDCA;
            text-align: center;
        }

        #titulo {
            border-top: 1px solid #aaa;
            border-bottom: 1px solid #aaa;
        }

        table {
            margin: 3em auto;
            background-color: hsl(96, 71%, 63%);
            border: 1px solid #000;
            border-collapse: collapse;
        }

        td {
            border: 5px ridge #aaa;
            font-weight: bold;
        }

        .error {
            font-weight: bold;
            color: #c00
        }

        .mediatotal{
            font-weight: bold;
            color: #cf55cf;
        }
    </style>
</head>

<body>

<div id="titulo"><h1>BOLETIN DE NOTAS</h1></div>

    <?php
    // RECOGIDA DE DATOS, SI NO ES UN NUMERO PONE UNA CADENA VACIA

    $programacion1 = (isset($_REQUEST['programacion1'])) ? $_REQUEST['programacion1'] : "";
    $programacion2 = (isset($_REQUEST['programacion2'])) ? $_REQUEST['programacion2'] : "";
    $programacion3 = (isset($_REQUEST['programacion3'])) ? $_REQUEST['programacion3'] : "";
    $analisis1 = (isset($_REQUEST['analisis1'])) ? $_REQUEST['analisis1'] : "";
    $analisis2 = (isset($_REQUEST['analisis2'])) ? $_REQUEST['analisis2'] : "";
    $analisis3 = (isset($_REQUEST['analisis3'])) ? $_REQUEST['analisis3'] : "";
    $sistemas1 = (isset($_REQUEST['sistemas1'])) ? $_REQUEST['sistemas1'] : "";
    $sistemas2 = (isset($_REQUEST['sistemas2'])) ? $_REQUEST['sistemas2'] : "";
    $sistemas3 = (isset($_REQUEST['sistemas3'])) ? $_REQUEST['sistemas3'] : "";
    $fol1 = (isset($_REQUEST['fol1'])) ? $_REQUEST['fol1'] : "";
    $fol2 = (isset($_REQUEST['fol2'])) ? $_REQUEST['fol2'] : "";
    $fol3 = (isset($_REQUEST['fol3'])) ? $_REQUEST['fol3'] : "";
    $ret1 = (isset($_REQUEST['ret1'])) ? $_REQUEST['ret1'] : "";
    $ret2 = (isset($_REQUEST['ret2'])) ? $_REQUEST['ret2'] : "";
    $ret3 = (isset($_REQUEST['ret3'])) ? $_REQUEST['ret3'] : "";

    //COMPROBACION DE DATOS,  NUMEROS ENTRE 0 Y 10, NOTIFICACION INDIVIDUAL DE CADA ERROR

    $error = false;

    if (!is_numeric($programacion1) || $programacion1 < 0 || $programacion1 > 10) {
        echo "<p class=\"error\">";
        echo "Programación-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($programacion2) || $programacion2 < 0 || $programacion2 > 10) {
        echo "<p class=\"error\">";
        echo "Programación-Trimestre 2: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($programacion3) || $programacion3 < 0 || $programacion3 > 10) {
        echo "<p class=\"error\">";
        echo "Programación-Trimestre 3: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($analisis1) || $analisis1 < 0 || $analisis1 > 10) {
        echo "<p class=\"error\">";
        echo "Analisis-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($analisis2) || $analisis2 < 0 || $analisis2 > 10) {
        echo "<p class=\"error\">";
        echo "Analisis-Trimestre 2: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($analisis3) || $analisis3 < 0 || $analisis3 > 10) {
        echo "<p class=\"error\">";
        echo "Analisis-Trimestre 3: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($sistemas1) || $sistemas1 < 0 || $sistemas1 > 10) {
        echo "<p class=\"error\">";
        echo "Sistemas-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($sistemas2) || $sistemas2 < 0 || $sistemas2 > 10) {
        echo "<p class=\"error\">";
        echo "Sistemas-Trimestre 2: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($sistemas3) || $sistemas3 < 0 || $sistemas3 > 10) {
        echo "<p class=\"error\">";
        echo "Sistemas-Trimestre 3: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($fol1) || $fol1 < 0 || $fol1 > 10) {
        echo "<p class=\"error\">";
        echo "FOL-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($fol2) || $fol2 < 0 || $fol2 > 10) {
        echo "<p class=\"error\">";
        echo "FOL-Trimestre 2: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($fol3) || $fol3 < 0 || $fol3 > 10) {
        echo "<p class=\"error\">";
        echo "FOL-Trimestre 3: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($ret1) || $ret1 < 0 || $ret1 > 10) {
        echo "<p class=\"error\">";
        echo "RET-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($ret2) || $ret2 < 0 || $ret2 > 10) {
        echo "<p class=\"error\">";
        echo "RET-Trimestre 2: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    if (!is_numeric($ret2) || $ret2 < 0 || $ret2 > 10) {
        echo "<p class=\"error\">";
        echo "RET-Trimestre 1: La nota debe estar entre 0 y 10";
        echo "</p>\n";
        $error = true;
    }

    // CALCULOS SI NO HAY ERROR


    if (!$error) {
        $programacion = ($programacion1 + $programacion2 + $programacion3) / 3;
        $programacionFormat = number_format($programacion, 2);

        $analisis = ($analisis1 + $analisis2 + $analisis3) / 3;
        $analisisFormat = number_format($analisis, 2);

        $sistemas = ($sistemas1 + $sistemas2 + $sistemas3) / 3;
        $sistemasFormat = number_format($sistemas, 2);

        $fol = ($fol1 + $fol2 + $fol3) / 3;
        $folFormat = number_format($fol, 2);

        $ret = ($ret1 + $ret2 + $ret3) / 3;
        $retFormat = number_format($ret, 2);

        $media = ($programacion + $analisis + $sistemas + $fol1 + $ret) / 5;
        $mediaFormat = number_format($media);

        echo <<<SALIDA
            
            <table>
                <tr>
                    <td></td>
                    <td>Trimestre 1</td>
                    <td>Trimestre 2</td>
                    <td>Trimestre 3</td>
                    <td>Media</td>
                </tr>
                <tr>
                    <td>PROGRAMACIÓN</td>
                    <td>$programacion1</td>
                    <td>$programacion2</td>
                    <td>$programacion3</td>
                    <td>$programacionFormat</td>
                </tr>
                <tr>
                    <td>ANÁLISIS</td>
                    <td>$analisis1</td>
                    <td>$analisis2</td>
                    <td>$analisis3</td>
                    <td>$analisisFormat</td>
                </tr>
                <tr>
                    <td>SISTEMAS</td>
                    <td>$sistemas1</td>
                    <td>$sistemas2</td>
                    <td>$sistemas3</td>
                    <td>$sistemasFormat</td>
                </tr>
                <tr>
                    <td>FOL</td>
                    <td>$fol1</td>
                    <td>$fol2</td>
                    <td>$fol3</td>
                    <td>$folFormat</td>
                </tr>
                <tr>
                    <td>RET</td>
                    <td>$ret1</td>
                    <td>$ret2</td>
                    <td>$ret3</td>
                    <td>$retFormat</td>
                </tr>
            </table>

            <p class="mediatotal">La media total es: $mediaFormat</p>
SALIDA;
    }
    ?>


</body>

</html>