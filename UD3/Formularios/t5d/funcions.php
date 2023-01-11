<?php
function check_imaxe() {
  try {
    // Comprobamos que o código de erro sexa UPLOAD_ERR_OK
    switch ($_FILES['imaxe']['error']) {
      case UPLOAD_ERR_OK:  // Todo correcto
          break;
      case UPLOAD_ERR_NO_FILE:
          throw new RuntimeException('Non se recibiu a imaxe.');
      case UPLOAD_ERR_INI_SIZE:
      case UPLOAD_ERR_FORM_SIZE:
          throw new RuntimeException('Tamaño da imaxe demasiado grande.');
      default:
          throw new RuntimeException('Erro descoñecido.');
    }

    // Comprobamos o tamaño da imaxe
    if ($_FILES['imaxe']['size'] > 200000)
      throw new RuntimeException('Tamaño da imaxe demasiado grande.');

    // Empregamos a extensión Fileinfo para comprobar que o tipo MIME
    //  sexa correcto (que sexa unha imaxe JPEG ou PNG)
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $ext = array_search(
      finfo_file($finfo, $_FILES['imaxe']['tmp_name']),
      array('jpg' => 'image/jpeg', 'png' => 'image/png')
      );

    // Se non é unha imaxe, rematamos
    if ($ext === false) throw new RuntimeException('Imaxe non recoñecida.');

    // Obtemos un nome único para a imaxe
    do {
      $fich = 'imaxes/'.uniqid('imx_', true).'.'.$ext;
    } while(file_exists($fich));

    // Renomeamos e movemos a imaxe recibida á súa localización definitiva    
    $res = move_uploaded_file($_FILES['imaxe']['tmp_name'], $fich);
    if (!$res) throw new RuntimeException('A imaxe non puido ser movida.');
    
    return $fich;
  }

  catch (RuntimeException $e) {
    echo $e->getMessage();
    exit();
  }
}

function comproba_obrigatorios() {
  try {
    if (empty($_POST['nome']))
      throw new RuntimeException('Non existe o nome do usuario.');

    if (empty($_POST['apelido1']) || empty($_POST['apelido2']))
      throw new RuntimeException('Non existe algún dos apelidos do usuario.'); 

    if (empty($_POST['estudos']))
      throw new RuntimeException('Non figuran os estudos previos do usuario.');

    if (empty($_POST['telefonoF']) && empty($_POST['telefonoM']))
      throw new RuntimeException('Debe figurar o teléfono fixo ou o móbil.');

    if (empty($_POST['lingua']) || count($_POST['lingua'])<1)
      throw new RuntimeException('Non figuran as linguas que coñece o usuario.');
  }
  catch (RuntimeException $e) {
      echo $e->getMessage();
      exit();
  }
}

function valida() {
  try {
    $regex = '/^[a-zA-ZáéíóúñÑ\'\-]*$/';
    if (!preg_match($regex, $_POST['nome'])) 
      throw new RuntimeException('O nome contén caracteres non válidos.');

    if (!preg_match($regex, $_POST['apelido1']) || !preg_match($regex, $_POST['apelido2']))
      throw new RuntimeException('Os apelidos conteñen caracteres non válidos.'); 
    
    $data = explode('/', $_POST['datanac'], 3);
    if ((count($data) !== 3) || (checkdate($data[1], $data[0], $data[2]) !== true))
      throw new RuntimeException('A data de nacemento non é válida.');

    $regex = '/^[0-9]*$/';
    if (!preg_match($regex, $_POST['telefonoF']) || !preg_match($regex, $_POST['telefonoM']))
      throw new RuntimeException('Os números de teléfono conteñen caracteres non válidos.');

    $regex = '/^https?:\/\/.*$/';
    if (!preg_match($regex, $_POST['blog']) || !filter_var($_POST['blog'], FILTER_VALIDATE_URL))
      throw new RuntimeException('A URL do blog non é válida.');
  }
  catch (RuntimeException $e) {
      echo $e->getMessage();
      exit();
  }
}
?>