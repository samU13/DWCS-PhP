<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title>
    <style type="text/css">
    body {
        background-color: #99CCCD;
        text-align: center;
    }

    .titulo {
        border-top: 1px solid #aaa;
        border-bottom: 1px solid #aaa;
        padding: 1em 0em 1em 0em;
        margin: 2em 0em 2em 0em;

    }
    </style>
</head>

<body>
    <h1 class="titulo">COMUNIDADES AUTONOMAS</h1>
    <form action='provincias.php' method='post'>
        <p><strong> Selecciona tu comunidad autonoma</strong></p>
        <select name="comunidad" id="comunidad">
            <option value="1">Galicia</option>
            <option value="2">Asturias</option>
            <option value="3">Cantabria</option>
            <option value="4">Pais Vasco</option>
            <option value="5">Navarra</option>
            <option value="6">La Rioja</option>
            <option value="7">Aragon</option>
            <option value="8">Catalunha</option>
            <option value="9">Castilla y Leon</option>
            <option value="10">Madrid</option>
            <option value="11">Castilla La Mancha</option>
            <option value="12">Valencia</option>
            <option value="13">Extremadura</option>
            <option value="14">Murcia</option>
            <option value="15">Andalucia</option>
            <option value="16">Islas Baleares</option>
            <option value="17">Islas Canarias</option>
        </select>
        <input type="submit" value="Mostrar provincias">

    </form>

</body>

</html>