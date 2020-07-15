<?php

class Conexion{
    private $driver , $host , $user , $password , $database, $charset;



    public function __construct(){
        $data_conf = require_once "./config/database.php";
        $this->driver = $data_conf["driver"];
        $this->host = $data_conf["host"];
        $this->user = $data_conf["user"];
        $this->password = $data_conf["password"];
        $this->database = $data_conf["database"];
        $this->charset = $data_conf["charset"];
    }

    public function connect(){
        
        if($this->driver == "mysql" || $this->driver == null){

            $conexion = new mysqli($this->host,$this->user,$this->password,$this->database);
            $conexion->query("SET NAMES '".$this->charset."'");

            
        }
        
        
        return $conexion; 
    }   
}

?>