<?php 
 include_once 'Model/postulante.php';
class controllerPostulante{

    public $MODEL;

    public function __construct(){
        $this->MODEL = new postulante();
    }

    
    public function index(){

        include_once 'View/plantilla-proyecto/production/postulacionFinal.php';
    }
    
    public function guardar(){
        $mo = new postulante();
        $mo->rut = $_POST['rut'];
        $mo->nombre = $_POST['nombre'];
        $mo->apellido_paterno = $_POST['apellido_paterno'];
        $mo->apellido_materno = $_POST['apellido_materno'];
        $mo->nivel_estudio = $_POST['nivel_estudio'];
        $mo->fecha_nacimiento = $_POST['fecha_nacimiento'];
        $mo->talla_superior = $_POST['talla_superior'];
        $mo->talla_inferior = $_POST['talla_inferior'];
        $mo->talla_calzado= $_POST['talla_calzado'];

        //falta guardar a la region y ciudad que pertenece el postulante

        $this->MODEL->registrar($mo);
        header("Location:enrrutamientoPostulante.php");

    }
}
?>