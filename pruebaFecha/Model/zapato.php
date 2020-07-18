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
            $query="SELECT * FROM fecha";
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
            $query="SELECT * FROM dbozapato WHERE id_zapato=?";
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
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(zapato $data){
        try {
            $query = "UPDATE dbozapato SET precio=?,color=?,id_estilo=?,id_talla=?,id_genero=?,cantidad=? WHERE id_zapato=?";
            $this->CNX->prepare($query)->execute(array($data->precio,$data->color,$data->id_estilo,$data->id_talla,$data->id_genero,$data->cantidad,$data->id_zapato));
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
}   
?>