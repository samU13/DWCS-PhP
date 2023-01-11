<!DOCTYPE html>
<?php require_once('funciones.php')?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    comprobar_obligatorios();
    valida();
    if(isset($_FILES['imagen']['error'])) $imagen = check_imagen();
    ?>
    <h2>Datos personales:</h2>
    <form action="practica5.php" method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><?php echo $_POST['nombre'];?></td>
            </tr>
            <tr>
                <td>Apellido 1:</td>
                <td><?php echo $_POST['apellido1'];?></td>
            </tr>
            <tr>
                <td>Apellido 2:</td>
                <td><?php echo $_POST['apellido2'];?></td>
            </tr>
            <tr>
                <td>Fecha nacimiento:</td>
                <td><?php echo $_POST['fecha_nacimiento'];?></td>
            </tr>
            <tr>
                <td>Teléfono fijo:</td>
                <td><?php echo $_POST['telefonoF'];?></td>
            </tr>
            <tr>
                <td>Teléfono movil:</td>
                <td><?php echo $_POST['telefonoM'];?></td>
            </tr>
            <tr>
                <td>Blog:</td>
                <td><?php echo $_POST['blog'];?></td>
            </tr>
            <tr>
                <td>Firma:</td>
                <td><?php echo nl2br($_POST['firma']);?></textarea></td>
            </tr>
            <?php if(!empty($imagen)): ?>
            <tr>
                <td>Imagen:</td>
                <td><img src="<?php echo $imagen; ?>"></td>
            </tr>
            <?php endif; ?>
        </table>
        <hr>
        <h2>Estudios previos:</h2>
        <ul style="list-style: none; ">
            <?php echo $_POST['estudios'];?>
        </ul>
        <hr>
        <table>
            <tr>
                <td>
                    <h2>Lenguas que conoce:</h2>
                    <?php 
                    foreach($_POST['lengua'] as $l) {
                        echo $l.' ';
                    }
                    ?>
                </td>
                <td>
                    <ul style="list-style: none; ">
                        <li><input type="checkbox"
                                <?php if (isset($_POST['deporte']) && $_POST['deporte']==='deporte') echo ' checked="checked" ';?>>Practica
                            deporte<br>
                        <li><input type="checkbox"
                                <?php if(isset($_POST['fuma']) && $_POST['fuma']==='SI') echo ' checked="checked"'; ?>>Fuma<br>
                    </ul>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>