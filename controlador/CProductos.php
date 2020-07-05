<?php
session_start();
/**
 * Description of Productos
 *
 * @author vreye
 */
class CProductos extends Connection
{
    function __construct() 
    {
        parent::__construct();
    }
    
    public function insertar($producto)
    {
        $smt = $this->con->prepare("INSERT INTO Producto(nombre,precio,cantidad) VALUES(?,?,?)");
        //ASIGNAMOS VARIABLES A SUS METODOS
        $nombre = $producto->getNombre();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        
        //INSERTAR VARIABLES A SMT
        $smt->bind_param("sdi",$nombre,$precio,$cantidad);
        $smt->execute();
        $smt->close();
        
    }
    
    public function actualizar($id)
    {
        
    }

    public function eliminar($id)
    {
        
    }
    
    public function consultar($id)
    {
        $smt = $this->con->prepare("SELECT * FROM Producto WHERE id = ?;");
        //ASIGNAMOS VARIABLES A SUS METODOS
        $idProducto = $id->getId();
        $nombre = "";
        $precio = 0;
        $cantidad = 0;
        
        //INSERTAR VARIABLES A SMT
        $smt->bind_param("i",$idProducto);
        $smt->bind_result($idProducto,$nombre,$precio,$cantidad);
        while($smt == true)
        {
            echo 'Id: '.$idProducto.'<br>';
            echo 'Nombre: '.$nombre.'<br>';
            echo 'Precio: '.$precio.'<br>';
            echo 'Cantidad: '.$cantidad.'<br>';
            break;
        }
        $smt->execute();
        $smt->close();

        
    }

    public function consultarTodo()
    {
        
    }
}
