<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio NAVEGADOR</title>
    <style>
    .center {
        text-align: center;
        margin-right: auto;
        margin-left: auto;

    }

    body {
        background-color: #FFDEAD;


    }

    a {
        text-decoration: none;
    }

    img {
        border: none;
    }

    tr {
        height: 40px;
    }

    .cabecera {
        font-family: Arial, Helvetica, sans-serif;
        color: #A52A2A;
        font-size: 20px;
        border-width: thin;
        border-style: solid;
        border-color: #A0522D;
    }

    .tipo {
        font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size: 18px;
        color: #006400;
    }

    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }

    td {
        width: 20%;
        padding-right: 10px;
        padding-left: 10px;

    }

    table {
        font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
    </style>
</head>

<body>
    <div class="center">
        <table summary="cabecera" width="60%" class="center">
            <tr>
                <td colspan="4" class="cabecera">Visualizador de ficheros</td>
            </tr>
            <?php

            class navegar
            {
                public $dir;
                function __construct($dir)
                {
                    $this->dir = $dir;
                }

                function leer()
                {
                    $descriptor = @opendir($this->dir);
                    if (!$descriptor) {
                        echo "Error, el directorio no existe o no se puede leer <br/>";
                    } else {
                        while ($campo = readdir($descriptor)) {
                            if (is_dir($campo)) {
                                if ($this->dir == "/") {
                                    echo "<tr><td><a href=\"navega2.php?dir=/$campo\"><img src=\"carpeta.ico\"  alt=\"carpeta\" /></a>";
                                } else {
                                    echo "<tr><td><a href=\"navega2.php?dir=$this->dir/$campo\"><img src=\"carpeta.ico\"  alt=\"carpeta\" /></a>";
                                }
                            } else
                                echo "<tr><td><img src=\"fichero.ico\" alt=\"fichero\">";
                            echo "<td class=\"left\">$campo </td><td class=\"right\">" . filesize($campo) . " bytes</td>";
                            echo "<td>" . date("d/m/Y H:i", filemtime($campo)) . "</td></tr>";
                        }
                    }
                }
            }
            if (isset($_GET['dir'])) {
                $dir = $_GET['dir'];
                @chdir($dir); //acceso al directorio pasado como cadea no hipervínculo ou procedente do formulario
            }
            $dir = getcwd(); //ruta -> en windows aparece con \
            $dir = str_replace("\\", "/", $dir); //cambia \ por /
            $dir = strstr($dir, "/"); //busca a partir da primeira /, eliminando a letra da unidade
            if (isset($_GET['enviar'])) {
                $enviar = $_GET['enviar'];
                $crear = $_GET['crear'];
                if (!file_exists($crear))
                    mkdir($crear);
            }
            //cabeceiras listado
            echo "<tr><td colspan=\"4\" class=\"cabecera\" >$dir</td></tr> ";
            echo "<tr class=\"tipo\"><td>Tipo</td><td>Nombre</td><td>Tama&ntilde;o</td><td>Modificado</td></tr>";
            $nave = new navegar($dir);
            $nave->leer();
            echo "</table>";
            echo "<br />";
            echo "<form action=\"ejercicioNAVEGADOR.php\" name=\"creardir\" />";
            echo "<input type =\"text\" name=\"crear\"  />&nbsp;";
            echo "<input type=\"hidden\" name=\"dir\" value=\"$dir\" />";
            echo "<input type =\"submit\" name=\"enviar\" value=\"Crear directorio\" />";
            echo "</form>";
            ?>
        </table>






</body>

</html>