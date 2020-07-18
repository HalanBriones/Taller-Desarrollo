<?php

class fecha{

    public $CNX;
    public $idFecha;
    public $fechaInicio;
    public $fechaFin;

 

    public function __construct(){
        try{
            $this->CNX = conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){

        try{
            $query="SELECT * FROM fecha ORDER BY IdFecha DESC";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchAll(PDO::FETCH_OBJ);

            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarEstilo(){

        try{
            $query="SELECT * FROM dboestilo";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchAll(PDO::FETCH_OBJ);

            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }

        
    } 

    public function cargarID($id){

        try{
            $query="SELECT * FROM fecha WHERE idFecha=?";
            $smt=$this->CNX->prepare($query);
            $smt->execute(array($id));
            $result = $smt->fetch(PDO::FETCH_OBJ);
            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

   /* public function cargarTalla(){

        try{
            $query="SELECT * FROM dbotalla";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchAll(PDO::FETCH_OBJ);

            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function cargarGenero(){

        try{
            $query="SELECT * FROM dbogenero";
            $smt=$this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchAll(PDO::FETCH_OBJ);

            return $result;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }*/

    public function registrar(fecha $data){
        try {
            $query = "INSERT INTO fecha (fechaInicio, fechaFin) values (?,?)";
            $this->CNX->prepare($query)->execute(array($data->fechaInicio,$data->fechaFin));
            $this->CNX = conexion::conectar()->lastInsertId();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(fecha $data){
        try {
            $query = "UPDATE fecha SET fechaInicio=?,fechaFin=? WHERE idFecha=?";
            $this->CNX->prepare($query)->execute(array($data->fechaInicio,$data->fechaFin,$data->idFecha));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($id){
        try {
            $query= "DELETE FROM dbozapato WHERE id_zapato=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function masGrande(){

        try {
            $query="SELECT MAX(idFecha)
            FROM fecha";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchColumn();
            return $result;
        } catch (Exception $e) {
            die($e->getMessage);
        }
    }


    public function fechaMasGrande(){
        try {
            $id=$this->masGrande();
            //echo $id;
            $query="SELECT fechaFin FROM fecha WHERE idFecha='$id'";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            $result = $smt->fetchColumn();
            return $result;
            
        } catch (Exception $e) {
            die($e->getMessage);
        }
    }

    public function getAño(){
        $año=getdate("Y");
        return $año;
    }

    public function getFecha(){
        $fecha=getdate("Y-m-d");
        return $fecha;
    }
}   
?>