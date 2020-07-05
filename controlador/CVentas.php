<?php
include_once 'Conexion.php';
include_once 'modelo/Ventas.php';

class CVentas extends Connection
{
    function __construct() 
    {
        parent::__construct();
    }
    
    public function insertar($ventas)
    {
        $smt = $this->con->prepare("INSERT INTO Venta(fecha,idProducto,idCliente) VALUES(?,?,?);");
        //ASIGNAMOS VARIABLES A SUS METODOS
        $fecha = $ventas->getFecha();
        $idProducto = $ventas->getProducto();
        $idCliente = $ventas->getCliente();
        
        //INSERTAR VARIABLES A SMT
        $smt->bind_param("iii",$fecha,$idProducto,$idCliente);
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
        
    }

    public function consultarTodo()
    {
        
    }
}
