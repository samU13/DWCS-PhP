<!DOCTYPE htm PUBLIC "-//W3C//DTD htm 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
  require_once('funcions.php');
?>
<html>
 <head>
  <title>Datos rexistrados</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
  <?php
    // Comprobamos a existencia dos campos obrigatorios
    comproba_obrigatorios();

    // Comprobamos a validez dos datos recibidos
    valida();
    
    // Se existe a imaxe no array $_FILES, a comprobamos e a movemos
    if (isset($_FILES['imaxe']['error'])) $imaxe = check_imaxe();
  ?>
  <h2>Datos personais:</h2>
  <form action="tarefa5.php" method="post" >
   <table>
    <tr>
     <td>Nome:</td>
     <td><?php echo $_POST['nome']; ?></td>
    </tr>
    <tr>
     <td>Apelido 1:</td>
     <td><?php echo $_POST['apelido1']; ?></td>
    </tr>
    <tr>
     <td>Apelido 2:</td>
     <td><?php echo $_POST['apelido2']; ?></td>
    </tr>
    <tr>
     <td>Data nacemento:</td>
     <td><?php echo $_POST['datanac']; ?></td>
    </tr>
    <tr>
     <td>Teléfono fixo:</td>
     <td><?php echo $_POST['telefonoF']; ?></td>
    </tr>
    <tr>
     <td>Teléfono móbil:</td>
     <td><?php echo $_POST['telefonoM']; ?></td>
    </tr>
    <tr>
     <td>Blog:</td>
     <td><?php echo $_POST['blog']; ?></td>
    </tr>
    <tr>
     <td>Sinatura:</td>
     <td><?php echo nl2br($_POST['sinatura']); ?></td>
    </tr>
    <?php if(!empty($imaxe)): ?>
    <tr>
     <td>Imaxe:</td>
     <td><img src="<?php echo $imaxe; ?>"></td>
    </tr>
    <?php endif; ?>
   </table>
   <hr>
   <h2>Estudos previos:</h2>
    <ul style="list-style: none; ">
     <?php echo $_POST['estudos']; ?>
    </ul>
   <hr>
   <table>
    <tr>
     <td>
      <h2>Linguas que coñece:</h2>
      <?php 
      foreach($_POST['lingua'] as $l) {
           echo $l.' ';
      }      
      ?>
     </td>
     <td>
      <ul style="list-style: none; ">
       <li><input type="checkbox" <?php if(isset($_POST['deporte']) && $_POST['deporte']==='deporte') echo ' checked="checked"'; ?>>Practica deporte<br>
       <li><input type="checkbox" <?php if(isset($_POST['fuma']) && $_POST['fuma']==='SI') echo ' checked="checked"'; ?>>Fuma<br>
      </ul>
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
