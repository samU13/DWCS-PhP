<?php
session_start();

class Producto
{

    private $productoID;

    private $productoNombre;

    private $precio;

    public function __construct($productoID, $productoNombre, $precio)

    {
        $this->productoID
            = $productoID;
        $this->productoNombre
            = $productoNombre;
        $this->precio = $precio;
    }
    public function getID()
    {
        return $this->productoID;
    }
    public function getNombre()
    {
        return $this->productoNombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
}
$productos = array(
    1 => new Producto(1, "SuperCacharro", 19.99),
    2 => new Producto(2, "MegaCacharro", 29.99),
    3 => new Producto(3, "UltraCacharro", 39.99)
);

if (!isset($_SESSION["carta"]))
    $_SESSION["carta"] = array();
if (isset($_GET["accion"]) and $_GET["accion"] == "addItem") {
    addItem();
} elseif (isset($_GET["accion"]) and $_GET["accion"] == "removeItem") {
    removeItem();
} else {
    displayCart();
}

function addItem()
{
    global $productos;
    if (isset($_GET["productoID"]) and $_GET["productoID"] >= 1 and $_GET["productoID"] <= 3) {
        $productoID = (int) $_GET["productoID"];
        if (!isset($_SESSION["carta"][$productoID])) {
            $_SESSION["carta"][$productoID] = $productos[$productoID];
        }
    }
    session_write_close();
    header("Location: ejercicio1.php");
}

function removeItem()
{
    global $productos;
    if (isset($_GET["productoID"]) and $_GET["productoID"] >= 1 and $_GET["productoID"] <= 3) {
        $productoID = (int) $_GET["productoID"];
        if (isset($_SESSION["carta"][$productoID])) {
            unset($_SESSION["carta"][$productoID]);
        }
    }
    session_write_close();
    header("Location: ejercicio1.php");
}

function displayCart()
{
    global $productos;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> CARRITO DE LA COMPRA CON SESSIONS </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="shopping_cart">
        <h1> Tu carrito</h1>
        <dl>
            <?php
                $precioTotal = 0;
                foreach ($_SESSION["carta"] as $producto) {
                    $precioTotal += $producto->getPrecio();
                ?>
            <dt><?php echo $producto->getNombre() ?></dt>
            <dd>€<?php echo number_format($producto->getPrecio(), 2) ?>
                <a href="ejercicio1.php?accion=removeItem&productoID=<?php echo $producto->getID() ?>">Quitar</a>
            </dd>
            <?php } ?>
            <dt>Total Carta:</dt>
            <dd><strong>€<?php echo number_format($precioTotal, 2) ?></strong></dd>
        </dl>
        <h1>Lista Productos</h1>
        <dl>
            <?php foreach ($productos as $producto) { ?>
            <dt><?php echo $producto->getNombre() ?></dt>
            <dd>€<?php echo number_format($producto->getPrecio(), 2) ?>
                <a href="ejercicio1.php?accion=addItem&productoID=<?php echo $producto->getID() ?>">Añadir Item</a>
            </dd>
            <?php } ?>
        </dl>
        <?php } ?>
    </div>
</body>

</html>