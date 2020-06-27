<?php

include('baseDatos.php');

   if (isset($_POST["btnEliminar"])){
    $nombre = $_POST["nombreEliminar"]; 
    
        ///1. crear una consulta de sql para agregar datos
        $consulta= "DELETE FROM usuarios WHERE Nombre='$nombre'";
  
        ///2. crear un objeto de la clasebaseDatos
        $operacionesEnBaseDatos = new BaseDatos();

        ///3. usar metodo de la clase BaseDatos para poder escribir en la BD
        $operacionesEnBaseDatos-> alterarbaseDatos($consulta);  
}else{
    echo("No se preciono el botón");
}

?>