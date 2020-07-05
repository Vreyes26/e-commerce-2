<?php
    session_start();
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
    
    if($nombre == "admin" && $contraseña == "abc123")
    {
        $_SESSION["nombre"] = $nombre;
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../login.php");
    }

        
