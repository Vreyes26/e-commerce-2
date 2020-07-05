<?php
class Venta
{
    private $fecha;
    private $idProducto;
    private $idCliente;

    function __construct()
    {
        $this->setFecha("");
        $this->setProducto("");
        $this->setCliente("");
    }

    function getFecha()
    {
        return $this->fecha;
    }

    function getProducto()
    {
        return $this->idProducto;
    }

    function getCliente()
    {
        return $this->idCliente;
    }

    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    function setProducto($nombre)
    {
        $this->idProducto = $nombre;
    }

    function setCliente($id)
    {
        $this->idCliente = $id;
    }
}