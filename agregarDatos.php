<?php

include('baseDatos.php');

if(isset($_POST["btnEnviar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["nombreUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];
   

    // RUTINA PARA CONECTARNOS Y EJECTAR LA ESCRITURA EN LA BD
    

    //1. Creemos una consulta para agregar datos
    
    $consulta="INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
    

    //2. crear un objeto del tipo BaseDatos (debemos cerar una variable)
       $operacionEnBaseDeDatos= new BaseDatos();


    //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
    $operacionEnBaseDeDatos->alterarBaseDatos($consulta);

    //4. verificar que si se escribieron los datos
   
}
else{
     echo("no se preciono el botón");   
}



?>