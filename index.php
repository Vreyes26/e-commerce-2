<?php
include_once 'carroCompras.php';
?>
<!DOCTYPE html>

<html id="index">
    <head>
        <meta charset="UTF-8">
        <title>E-commerce</title>
        <link href="img/icon.ico" rel="icon" type="icon/ico"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <nav>
            <?php
                if(isset($_SESSION["nombre"])){
                ?>
                <div class="usuario">
                    <a id="label_username"><?php echo($_SESSION["nombre"]);?></a>
                    <div class="cerrar_sesion">
                        <a href="logout.php" id="sesion-close">Cerrar sesion</a>
                    </div>
                </div>
                <?php
                }
                else
                {
                ?>
                <a class="in-sesion" href="login.php">Iniciar sesion</a>
                <?php
                }
            ?>
                <h1 class="indx">Tienda online</h1>
        </nav>
        <div class="dv-productos">
            <div class="producto">
                <form action="comprasUser.php" method="POST">
                    <img src="img/producto.jpg" alt="producto 1"/><br>
                    <label>Nombre</label>
                    <input type="text"  name="nombre" value="PSP"/><br>
                    <label>Precio:</label>
                    <input value="12000" name="precio" /><br>
                    <label>Cantidad</label>
                    <input type="number" value="1" name="cantidad"/><br>
                    <input class="bt_in" type="submit" value="Agregar" name="buttonSesion">
                </form>
            </div>
            <div class="producto">
                <form action="comprasUser.php" method="POST">
                    <img src="img/producto.jpg" alt="producto 1"/><br>
                    <label>Nombre</label>
                    <input type="text"  name="nombre" value="Notebook"/><br>
                    <label>Precio:</label>
                    <input value="300000" name="precio" /><br>
                    <label>Cantidad</label>
                    <input type="number" value="1" name="cantidad"/><br>
                    <input class="bt_in" type="submit" value="Agregar" name="buttonSesion">
                </form>
            </div>
            <div class="producto">
                <form action="comprasUser.php" method="POST">
                    <img src="img/producto.jpg" alt="producto 1"/><br>
                    <label>Nombre</label>
                    <input type="text"  name="nombre" value="Audifonos"/><br>
                    <label>Precio:</label>
                    <input value="10000" name="precio" /><br>
                    <label>Cantidad</label>
                    <input type="number" value="1" name="cantidad"/><br>
                    <input class="bt_in" type="submit" value="Agregar" name="buttonSesion">
                </form>
            </div>
        </div>
        <div class="dv-productos">
            <div class="producto">
                <form action="comprasUser.php" method="POST">
                    <img src="img/producto.jpg" alt="producto 1"/><br>
                    <label>Nombre</label>
                    <input type="text"  name="nombre" value="Mouse"/><br>
                    <label>Precio:</label>
                    <input value="9000" name="precio" /><br>
                    <label>Cantidad</label>
                    <input type="number" value="1" name="cantidad"/><br>
                    <input class="bt_in" type="submit" value="Agregar" name="buttonSesion">
                </form>
            </div>
        </div>
        
    </body>
</html>
