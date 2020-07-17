<?php
    require_once "conexion.php";

class Postulante{

    public $rut;
    public $nombre1;
    public $nombre2;
    public $apellidoP;
    public $apellidoM;
    public $fechaNac;
    public $sexo;
    public $estado;
    public $nivelE;
    public $telefono;
    public $telefonoEme;
    public $correo;
    public $enfermedades;

    public $bd;

    public function __construct(){
        try{
            $this->bd = conexion::conectar();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    //Getter
    //Setter
    


    public function mostrar(){
        try{
            $query = "SELECT (nombre1,apellidoP,apellidoM,fechaNac,region,telefono)  FROM postulante";
            $consulta = $this->bd->prepare($query);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }    
    }
    public function guardar_postulantes(Postulante $array){

            try{
            $query = "INSERT INTO postulante (rut,nombre1,apellidoP,apellidoM,fechaNac,sexo,estado,nivelE,telefono,telefonoEme,correo,enfermedades) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $this->bd->prepare($query)->execute($array->rut,$array->nombre1,$array->apellidoP,$array->apellidoM,$array->fechaNac,$array->sexo,$array->estado,$array->nivelE,$array->telefono,$array->telefonoEmer,$array->correo,$array->enfermedades);
        }catch(Exception $e){
            $e->getMessage();
        }  

    }






}
?>