<?php

    $servidor = "localhost";
    $usuario = "root";
    $contrasenia = "";
    
    try{

        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
        $conexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql= "SELECT * FROM `fotos`";
        $sentencia= $conexion->prepare($sql);//Prepara una sentencia para su ejecución y devuelve un objeto sentencia
        $sentencia->execute();

        $resultado=$sentencia->fetchAll();

        //print_r($resultado);

        foreach($resultado as $foto){
            echo $foto['nombre']."<br/>";
        }


        echo "Conexion establecida";

    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }


?>