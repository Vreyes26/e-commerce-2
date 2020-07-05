<?php
session_start();
function productoLn($nombre, $cantidad, $precio)
{
  echo "<tr>
          <td>$nombre</td>
          <td>$cantidad</td>
          <td>$precio</td>
        </tr>";
}

