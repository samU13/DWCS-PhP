<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD3 Práctica 2 (2/3)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Calculos estadísticos - Formulario intermedio</h1>
    <?php 
define('FORM_METHOD', 'get');
define('NUM_MINIMO', 1);
define('NUM_MAXIMO', 20);

$numero = (isset($_REQUEST['numero'])) ? $_REQUEST['numero'] : "";
$validarNumero = FALSE;

if($numero===""){
    echo "<p class=\"error\">No has escrito el numero de valores</p>\n";
}else if (!is_numeric($numero)){
    echo "<p class=\"error\">No has escrito el número de valores "
    ."como número.</p>\n";
} elseif (!ctype_digit($numero)) {
    echo "<p class=\"error\">No has escrito el número de valores "
    ."como número entero positivo.</p>\n";
} elseif (($numero<NUM_MINIMO)||($numero>NUM_MAXIMO)) {
    echo "<p class=\"error\">El número de valores debe estar entre "
    .NUM_MINIMO." y ".NUM_MAXIMO.".</p>\n";
} else {
$validarNumero = TRUE;
}

if($validarNumero){
    echo "<p>Escribe los valores y marca las casillas correspondientes "
    ."a los cálculos que quieres.</p>\n";
    echo "<form action=\"calculos_estadisticos_3.php\" method=\"".FORM_METHOD."\">\n";
    echo "  <table>\n    <tbody>\n";
for ($i=1; $i<=$numero; $i++) {
    echo "      <tr>\n        <td>Número $i:</td>
    <td><input type=\"text\" name=\"n[$i]\" size=\"6\" maxlength=\"6\" /></td>\n";
    echo "      </tr>\n";
}
    echo "    </tbody>\n  </table>
<p><input type=\"checkbox\" name=\"suma\" />Suma - <input type=\"checkbox\"
name=\"media\" />Media - <input type=\"checkbox\" name=\"maximo\" />Máximo
- <input type=\"checkbox\" name=\"minimo\" />Mínimo</p>
<input type=\"submit\" value=\"Calcular entrada\" />\n
</form>\n";


}
?>

</body>

</html>