<?php require_once 'includes/redireccion.php'; ?>
<?php include_once 'includes/cabecera.php'; ?>
<?php include_once 'includes/lateral.php'; ?>
<?php include_once 'includes/helpers.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear entradas</h1>
    <p>Mete nuevas entradas al blog para que los usuarios puedan leerlas y disfrutar del contenido</p><br>
    <form action="guardar-entrada.php" method="POST">

        <label for="titulo">Titulo : </label>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
        <input type="text" name="titulo">

        <label for="descripcion">Descripcion: </label>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
        <input type="textarea" name="descripcion">

        <label for="categoria">Categoria : </label>
        <select name="categoria">
            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)) :
                while ($categoria = mysqli_fetch_assoc($categorias)) :
            ?>
                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                    </option>
            <?php
                endwhile;
            endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" name="guardar_entrada" value="Guardar">
    </form>
    <?php borrarErrores(); ?>
</div>
<!--FIN PRINCIPAL-->

<?php include_once 'includes/pie.php'; ?>