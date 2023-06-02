<?php require_once 'includes/redireccion.php'; ?>
<?php include_once 'includes/cabecera.php'; ?>
<?php include_once 'includes/lateral.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear categorias</h1>
    <p>Mete nuevas categoras al blog para quye los usuarios puedan crear articulos</p><br>
    <form action="guardar-categoria.php" method="POST">
        <label for="nombre">Nombre de la categoria : </label>
        <input type="text" name="nombre">
        <input type="submit" name="guardar_categoria" value="Guardar">
</div>
<!--FIN PRINCIPAL-->

<?php include_once 'includes/pie.php'; ?>