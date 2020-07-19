<?php
class postulante{

    public $CNX;
    public $rut;
    public $nombre;
    public $apellidoP;
    public $apellidoM;

    public function __construct(){
        try{
            $this->CNX =  conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){
        
       try{ 
        $query = "SELECT (nombre,apellidoP,apellidoM,edad,comuna,telefono) FROM postulante ";
        $po = $this->CNX->prepare($query);
        $po->execute();
        $resultado = $po->fetchAll(PDO::FETCH_OBJ);

        return $resultado;
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(postulante $data){
        try{
            $query = "INSERT INTO postulante(rut,nombre,apellidoP,apellidoM) VALUES (?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->rut,$data->nombre,$data->apellidoP,$data->apellidoM));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>