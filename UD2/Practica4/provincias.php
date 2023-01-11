<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
    <style type="text/css">
    body {
        background-color: #CCCCFE;
        text-align: center;
    }

    .titulo {
        border-top: 1px solid #aaa;
        border-bottom: 1px solid #aaa;
        padding: 1em 0em 1em 0em;
        margin: 2em 0em 2em 0em;
    }

    #ca {
        border-bottom: 1px solid #aaa;
        padding-bottom: 1em;

    }

    table {
        margin: 2em auto;
        background-color: #9BCD9A;
        border: 1px solid #000;
        border-collapse: collapse;
    }

    td {
        border: 5px ridge #aaa;
        text-align: left
    }

    .error {
        font-weight: bold;
        color: #c00
    }
    </style>
</head>


<body>
    <h1 class='titulo'>PROVINCIAS DE LA COMUNIDAD AUTONOMA</h1>
    <?php 
    $comunidad = (isset($_REQUEST['comunidad'])) ? $_REQUEST['comunidad'] : '';

    switch ($comunidad) {
        case '1':
            echo "<div id=\"ca\"><h2>GALICIA</h2></div>\n";
            echo "
            <table>
              <tr><td>A CORUÑA</td></tr>
              <tr><td>LUGO</td></tr>
              <tr><td>OURENSE</td></tr>
              <tr><td>PONTEVEDRA</td></tr>
            </table>";
            break;
        case '2':
            echo "<div id=\"ca\"><h2>PRINCIPADO DE ASTURIAS</h2></div>\n";
            echo "
            <table>
              <tr><td>ASTURIAS</td></tr>
            </table>";
            break;
        case '3':
            echo "<div id=\"ca\"><h2>CANTABRIA</h2></div>\n";
            echo "
            <table>
              <tr><td>CANTABRIA</td></tr>
            </table>";
            break;
        case '4':
            echo "<div id=\"ca\"><h2>PAÍS VASCO</h2></div>\n";
            echo "
            <table>
              <tr><td>ÁLAVA</td></tr>
              <tr><td>GUIPÚZCOA</td></tr>
              <tr><td>VIZCAYA</td></tr>
            </table>";
            break;
        case '5':
            echo "<div id=\"ca\"><h2>NAVARRA</h2></div>\n";
            echo "
            <table>
              <tr><td>NAVARRA</td></tr>
            </table>";
            break;
        case '6':
            echo "<div id=\"ca\"><h2>LA RIOJA</h2></div>\n";
            echo "
            <table>
              <tr><td>LA RIOJA</td></tr>
            </table>";
            break;
        case '7':
            echo "<div id=\"ca\"><h2>ARAGÓN</h2></div>\n";
            echo "
            <table>
              <tr><td>HUESCA</td></tr>
              <tr><td>TERUEL</td></tr>
              <tr><td>ZARAGOZA</td></tr>
            </table>";
            break;
        case '8':
            echo "<div id=\"ca\"><h2>CATALUÑA</h2></div>\n";
            echo "
            <table>
              <tr><td>BARCELONA</td></tr>
              <tr><td>GIRONA</td></tr>
              <tr><td>LLEIDA</td></tr>
              <tr><td>TARRAGONA</td></tr>
            </table>";
            break;
        case '9':
            echo "<div id=\"ca\"><h2>CASTILLA Y LEÓN</h2></div>\n";
            echo "
            <table>
              <tr><td>ÁVILA</td></tr>
              <tr><td>BURGOS</td></tr>
              <tr><td>LEÓN</td></tr>
              <tr><td>PALENCIA</td></tr>
              <tr><td>SALAMANCA</td></tr>
              <tr><td>SEGOVIA</td></tr>
              <tr><td>SORIA</td></tr>
              <tr><td>VALLADONLIND</td></tr>
              <tr><td>ZAMORA</td></tr>
            </table>";
            break;
        case '10':
            echo "<div id=\"ca\"><h2>COMUNIDAD DE MADRID</h2></div>\n";
            echo "
            <table>
              <tr><td>MADRID</td></tr>
            </table>";
            break;
        case '11':
            echo "<div id=\"ca\"><h2>CASTILLA-LA MANCHA</h2></div>\n";
            echo "
            <table>
              <tr><td>ALBACETE</td></tr>
              <tr><td>CIUDAD REAL</td></tr>
              <tr><td>CUENCA</td></tr>
              <tr><td>GUADALAJARA</td></tr>
              <tr><td>TOLEDO</td></tr>
            </table>";
            break;
        case '12':
            echo "<div id=\"ca\"><h2>COMUNIDAD VALENCIANA</h2></div>\n";
            echo "
            <table>
              <tr><td>ALICANTE</td></tr>
              <tr><td>CASTELLÓN</td></tr>
              <tr><td>VALENCIA</td></tr>
            </table>";
            break; 
        case '13':
            echo "<div id=\"ca\"><h2>EXTREMADURA</h2></div>\n";
            echo "
            <table>
              <tr><td>BADAJOZ</td></tr>
              <tr><td>CÁCERES</td></tr>
            </table>";
            break;
        case '14':
            echo "<div id=\"ca\"><h2>REGIÓN DE MURCIA</h2></div>\n";
            echo "
            <table>
              <tr><td>MURCIA</td></tr>
            </table>";
            break;  
        case '15':
            echo "<div id=\"ca\"><h2>ANDALUCÍA</h2></div>\n";
            echo "
            <table>
              <tr><td>JAÉN</td></tr>
              <tr><td>CÓRDOBA</td></tr>
              <tr><td>SEVILLA</td></tr>
              <tr><td>HUELVA</td></tr>
              <tr><td>CÁDIZ</td></tr>
              <tr><td>MÁLAGA</td></tr>
              <tr><td>GRANADA</td></tr>
              <tr><td>ALMERÍA</td></tr>
            </table>";
            break;  
        case '16':
            echo "<div id=\"ca\"><h2>ISLAS BALEARES</h2></div>\n";
            echo "
            <table>
              <tr><td>BALEARES</td></tr>
            </table>";
            break;  
         case '17':
            echo "<div id=\"ca\"><h2>ISLAS CANARIAS</h2></div>\n";
            echo "
            <table>
              <tr><td>LAS PALMAS</td></tr>
              <tr><td>SANTA CRUZ DE TENERIFE</td></tr>
            </table>";
            break;                                                     
        default:
        echo "<div id=\"ca\"><h2 class=\"error\">" 
        . "COMUNIDAD NO VÁLIDA</h2></div>\n";
            break;
    }
    ?>
</body>

</html>