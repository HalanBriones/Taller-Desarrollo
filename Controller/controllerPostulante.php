<?php 
    include_once 'Model/postulante.php';
class controllerPostulante{

    public $MODEL;

    public function __construct(){
        $this->MODEL = new postulante();
    }

    
    public function index2(){

        include_once 'View/plantilla-proyecto/production/postulacionFinal.php';
    }
    
    public function guardar(){
        $mo = new postulante();
        $mo->rut = $_POST['rut'];
        $mo->nombre = $_POST['nombre'];
        $mo->apellidoP = $_POST['apellidoP'];
        $mo->apellidoM = $_POST['apellidoM'];

        $this->MODEL->registrar($mo);
        header("Location:index2.php");

    }
}
?>