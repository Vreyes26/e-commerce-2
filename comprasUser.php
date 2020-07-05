<?php
include_once("controlador/CVentas.php");
include_once("modelo/Ventas.php");
include_once("controlador/CProductos.php");
include_once("modelo/Producto.php");
/*date('d\ m\ yy')*/
$cventas = new CVentas();
$ventas = new Venta();
$ventas->setFecha(100);
$ventas->setProducto(1); //ID PRODUCTO
$ventas->setCliente(123); //TELEFONO CLIENTE
$cventas->insertar($ventas);

//Productos
$cproducto = new CProductos();
$producto = new Producto();
$producto->setId(1);
$cproducto->consultar($producto);

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$productos = 0;

if($nombre == "PSP" && $precio == 12000) //PRODUCTO 1
{
    $productos++;
}
if($nombre == "Notebook" && $precio == 300000) //PRODUCTO 2
{
    $productos++;
}
if($nombre == "Audifonos" && $precio == 10000) //PRODUCTO 3
{
    $productos++;
}
if($nombre == "Mouse" && $precio == 9000) //PRODUCTO 4
{
    $productos++;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php
        if($productos == 0)
        {
            echo("Producto no se ha encontrado");
        }
        else{
        ?>
        <button><a href="index.php">Regresar</a></button>
            <table style="width:100%">
                <tr>
                </tr>
                <?php
                for($i = 1;$i <= $productos;$i++)
                {
                    echo productoLn($nombre, $cantidad, $precio);
                }
                ?>
            </table> 
        <?php
        }
        ?>
    </body>
</html>
