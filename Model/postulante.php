<?php
class postulante{

    public $CNX;
    public $RUT;
    public $nombre;
    public $segundo_nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $fecha_nacimiento;
    public $sexo;
    public $estado;
    public $nivel_estudio;
    public $telefono;
    public $telefono_emergencia;
    public $correo;
    public $enfermedades;
    public $talla_superior;
    public $talla_inferior;
    public $talla_calzado;
    public $Comuna_idComuna;
    public $Estado_Civil_idEstado_Civil;

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

    public function registrar(postulante $data){
        try{
            $query = "INSERT INTO postulante values (?,?,?,?)";
            $this->CNX->prepare($query)->execute(array($data->RUT,$data->nombre,$data->apellido_paterno,$data->apellido_materno,$data->fecha_nacimiento,$data->sexo,$data->estado,$data->nivel_estudio,$data->telefono,$data->telefono_emergencia,$data->correo,$data->enfermedades,$data->talla_superior,$data->talla_inferior,$data->talla_calzado,$data->Comuna_idComuna,$data->Estado_Civil_idEstado_Civil));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}
?>