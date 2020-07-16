<?php
    try{
     $conexion = new PDO('mysql:host=localhost;dbname=prueba','root','');
    }catch(PDOException $e){
        echo $e->getMessage();
    }   
?>