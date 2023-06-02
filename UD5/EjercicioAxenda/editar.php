<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h2>Editar Contacto</h2>
    <div class="menu">
        <a href="./altas.html">Altas</a>
        <a href="./editar.php">Editar</a>
    </div>
    <form action="./php/funciones.php" method="post">
        <label for="id">Identificador:</label><br>
        <input type="text" id="id" name="id"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>
        <label for="orden">Ordenar por:</label><br>
        <select id="orden" name="orden">
            <option value="id">ID</option>
            <option value="nome">Nome</option>
            <option value="telefono">Teléfono</option>
        </select>
        <br>
        <input type="radio" id="asc" name="tipo_orden" value="asc" checked>
        <label for="asc">Ascendente</label>
        <input type="radio" id="desc" name="tipo_orden" value="desc">
        <label for="desc">Descendente</label>
        <br>
        <input type="submit" value="Buscar">
    </form>
</body>

</html>