<?php

if (isset($_POST['actualizar_usuario'])) {


    //Conexion a la base de datos
    require_once 'includes/conexion.php';
    session_start();


    //Recoger los valores del formulario de actualizar datos
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre'])  : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos'])  : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email']))  : false;


    //Array errores
    $errores = array();

    //Validar los datos antes guardados en la base de datos

    //Validar nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    //Validar apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    //Validar email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    $actualizar_usuario = false;
    if (count($errores) == 0) {
        $actualizar_usuario = true;
        $usuario = $_SESSION['usuario']['id'];

        //COMPROBAR SI EL EMAIL YA EXISTE
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);


        if ($isset_user['id'] == $usuario || empty($isset_user)) {

            //ACTUALIZAR USUARIO EN LA BASE DE DATOS
            $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '$email' WHERE id = '$usuario';";
            $actualizar = mysqli_query($db, $sql);

            if ($actualizar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con exito";
            } else {
                $_SESSION['errores']['general'] = "Fallo al actualizar el usuario";
            }
        } else {
            $_SESSION['errores']['general'] = "El usuario ya existe!!";
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
}

header('Location: mis-datos.php');
