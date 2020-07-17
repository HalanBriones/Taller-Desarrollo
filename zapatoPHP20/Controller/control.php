<?php

    include_once 'Model/zapato.php';

class control{

    public $MODEL;

    public function __construct(){
        $this->MODEL = new zapato();
    }

    public function index(){
        
        include_once 'View/home.php';

    }

    public function nuevo(){

        $nuevoZapato = new zapato();
        if(isset($_REQUEST['id'])){
            $nuevoZapato = $this->MODEL->cargarID($_REQUEST['id']);
        }

        include_once 'View/save.php';

    }

    public function guardar(){

        $nuevoZapato= new zapato();
        $nuevoZapato->id_zapato=$_POST['txtID'];
        $nuevoZapato->precio=$_POST['txtPrecio'];
        $nuevoZapato->color=$_POST['txtColor'];
        $nuevoZapato->id_estilo=$_POST['cmbEstilo'];
        $nuevoZapato->id_talla=$_POST['cmbTalla'];
        $nuevoZapato->id_genero=$_POST['cmbGenero'];
        $nuevoZapato->cantidad=$_POST['txtCantidad'];

        $nuevoZapato->id_zapato > 0 ?$this->MODEL->actualizarDatos($nuevoZapato) : $this->MODEL->registrar($nuevoZapato);
        
        header("Location:index.php");




    }


    public function eliminar(){

        $this->MODEL->delete($_REQUEST['id']);

        header("Location: index.php");

    }

}

?>