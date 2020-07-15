<?php
class controladorBase{

    public function __construct(){

        require_once "entidadBase.php";
        require_once "modeloBase.php";

        foreach(glob("model/*.php") as $file){
            require_once $file;
        }
    }
}
?>