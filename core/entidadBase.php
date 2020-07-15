<?php

class entidadBase{

    private $tabla, $db , $conectar;

    public function __construct(){

        $this->tabla = (string) $tabla;

        require_once "conexion.php";

        $this->conectar = new Conexion();
        $this->db = $this->conectar->connect();
    }


    public function getConectar(){
        return $this->conectar;
    }

    public function db(){

        return $this->db;
    }
    public function getAll(){
        $query = $this->db->$query("SELEC * FROM $this->tabla ORDER BY id DESC");

        while($row = $query->fecth_object()){

            $resultSet[] = $row;  
        }
        return $resultSet;
    }
    public function getById($id){

        $query = $this->db->$query("SELECT * FROM $this->table WHERE id=$id");

        if($row = $query->fetch_object()){
            $resultSet = $row;
        }
        return $resultSet; 
    }
    public function getBy($columna,$valor){

        $query = $this->db->$query("SELECT * FROM $this->table WHERE $columna='$valor'");

        while($row = $query->fetch_object()){
            $resultSet[] = $row;
        }
        return $resultSet; 
    }

    public function deleteById($id){
        $query = $this->db->$query("DELETE  FROM $this->table WHERE id=$id");

        return $query;
    }







}
?>
