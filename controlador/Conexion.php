<?php
include_once 'Iconexion.php';
abstract class Connection implements Iconexion
{
    protected $con;

    function __construct()
    {
        $this->con = new mysqli("localhost","root","","comercio_db");
    }
}