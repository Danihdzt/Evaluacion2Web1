<?php

include('baseDatos.php');


if(isset($_POST["btnBuscar"])){

    $nombre=$_POST["nombreBuscar"];
    
     // RUTINA PARA CONECTARNOS Y EJECTAR LA ESCRITURA EN LA BD
    
    
    //1. Creemos una consulta para buscar datos
    $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

     //2. crear un objeto del tipo BaseDatos (debemos cerar una variable)
      $operacionEnBaseDeDatos= new BaseDatos();

      //3. utilizar el metodo buscar BaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $resultado = $operacionEnBaseDeDatos->consultarEnBaseDatos($consulta);
   
    //4. imprimir el resultado
   
    print_r(json_encode($resultado));


}else{
    echo("pilas no ha presioando el boton, no deberia estar aca");
}


?>