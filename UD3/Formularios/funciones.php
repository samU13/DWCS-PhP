<?php
function check_imagen() {
try {
// Comprobamos que o código de erro sexa UPLOAD_ERR_OK
switch ($_FILES['imagen']['error']) {
case UPLOAD_ERR_OK: // Todo correcto
break;
case UPLOAD_ERR_NO_FILE:
throw new RuntimeException('No se recibio la imagen');
case UPLOAD_ERR_INI_SIZE:
case UPLOAD_ERR_FORM_SIZE:
throw new RuntimeException('El tamaño de la imagen es demasiado grande');
default:
throw new RuntimeException('Error esconocido');
}
// Comprobamos o tamaño da imagen
if ($_FILES['imagen']['size'] > 200000)
throw new RuntimeException('El tamaño de la imagen es demasiado grande');
// Empregamos a extensión Fileinfo para comprobar que o tipo MIME
// sexa correcto (que sexa unha imagen JPEG ou PNG)
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$ext = array_search(
finfo_file($finfo, $_FILES['imagen']['tmp_name']),
array('jpg' => 'imagenes/jpeg', 'png' => 'image/png','gif' => 'image/gif')
);
// Se non é unha imagen, rematamos
if ($ext === false) throw new RuntimeException('Imagen no reconocida');
// Obtemos un nome único para a imagen
do {
    $fich = 'imagenes/'.uniqid('img_', true).'.'.$ext;
    } while(file_exists($fich));
    // Renomeamos e movemos a imagen recibida á súa localización definitiva
    $res = move_uploaded_file($_FILES['imagen']['tmp_name'], $fich);
    if (!$res) throw new RuntimeException('La imagen no se pudo mover');
    return $fich;
    }
    catch (RuntimeException $e) {
    echo $e->getMessage();
    exit();
    }
    }
function comprobar_obligatorios() {
    try {
    if (empty($_POST['nombre']))
    throw new RuntimeException('No existe el nombre de usuario.');
    if (empty($_POST['apellido1']) || empty($_POST['apellido2']))
    throw new RuntimeException('Falta uno de los apellidos del usuario.');
    if (empty($_POST['estudios']))
    throw new RuntimeException('No figuran los estudios previos.');
    if (empty($_POST['telefonoF']) && empty($_POST['telefonoM']))
    throw new RuntimeException('Debe figurar un telefono');
    if (empty($_POST['lengua']) || count($_POST['lengua'])<1)
    throw new RuntimeException('No figuran las lenguas que conoce el usuario');
    }
    catch (RuntimeException $e) {
    echo $e->getMessage();
    exit();
    }
    }
function valida() {
    try {
    $regex = '/^[a-zA-ZáéíóúñÑ\'\-]*$/';
    if (!preg_match($regex, $_POST['nombre']))
    throw new RuntimeException('El nombre tiene caractes no validos');
    if (!preg_match($regex, $_POST['apellido1']) || !preg_match($regex, $_POST['apellido2']))
    throw new RuntimeException('Los apellidos contienen caractes no validos.');
    $fecha = explode('/', $_POST['fecha_nacimiento'], 3);
    if ((count($fecha) !== 3) || (checkdate($fecha[1], $fecha[0], $fecha[2]) !== true))
    throw new RuntimeException('La fecha de nacimiento no es valida.');
    $regex = '/^[0-9]*$/';
    if (!preg_match($regex, $_POST['telefonoF']) || !preg_match($regex,
    $_POST['telefonoM']))
    throw new RuntimeException('Telefonos no validos');
    $regex = '/^https?:\/\/.*$/';
    if (!preg_match($regex, $_POST['blog']) || !filter_var($_POST['blog'],
    FILTER_VALIDATE_URL))
    throw new RuntimeException('La URL del blog no es valida.');
    }
    catch (RuntimeException $e) {
    echo $e->getMessage();
    exit();
    }
    }
?>