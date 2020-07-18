<?php

    include_once 'Model/zapato.php';

class control{

    public $MODEL;

    public function __construct(){
        $this->MODEL = new fecha();
    }

    public function index(){
        
        include_once 'View/plantilla-proyecto/production/creacionPeriodo.php';
       // header("Location:View/plantilla-proyecto/production/creacionPeriodo.php");

    }

    public function nuevo(){

        $nuevaFecha = new fecha();
        if(isset($_REQUEST['id'])){
            $nuevaFecha = $this->MODEL->cargarID($_REQUEST['id']);
        }

        include_once 'View/save.php';

    }

    public function guardar(){

        $nuevaFecha= new fecha();
        $nuevaFecha->idFecha=$_POST['fechaID'];
        $nuevaFecha->fechaInicio=$_POST['fechaIni'];
        $nuevaFecha->fechaFin=$_POST['fechaFin'];

        //$nuevaFecha->idFecha > 0 ?$this->MODEL->actualizarDatos($nuevaFecha) : 
        $this->MODEL->registrar($nuevaFecha);
        
        header("Location:index.php");




    }


    public function eliminar(){

        $this->MODEL->delete($_REQUEST['id']);

        header("Location: index.php");

    }

}

?>