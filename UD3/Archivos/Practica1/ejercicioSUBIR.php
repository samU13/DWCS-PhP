<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio SUBIR</title>
    <style>
    .center {
        text-align: center;
    }

    body {
        background-color: #ffcc66;
    }
    </style>
</head>

<body>


    <?php
    if (isset($_POST['enviar'])) {
        if (!is_uploaded_file($_FILES['archivo']['tmp_name'])) {
            echo "Error, archivo no subido";
        } else {
            $resultado = move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
            if ($resultado)
                echo "<h3>El archivo " . $_FILES['archivo']['name'] . " fue envidado correctamente</h3>";
            else
                echo "<h3>Error, el archivo " . $_FILES['archivo']['name'] . " no se movio correctamente</h3>";
        }
    } else {
    ?>
    <div class="center">
        <h1>SUBIR ARCHIVOS A UN SERVIDOR</h1>
        <h3> Para subir carpetas, debes comprimilas primero </h3>
        <form action="ejercicioSUBIR.php" method="post" enctype="multipart/form-data">

            <label>Archivo:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="10240000" />

            <input type="FILE" size="30" name="archivo" />
            <br /><br />
            <input type="submit" name="enviar" value="Subir archivo" />

        </form>
        <h3> Escoge los archivos presionando el boton examinar ...</h3>
    </div>
    <?PHP
    }
    ?>





</body>

</html>