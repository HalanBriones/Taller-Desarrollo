<?php
include_once 'Controller/controllerPostulante.php';
include_once 'Config/conexion.php';
 


$controller2 = new controllerPostulante();



//postulacion
if(!isset($_REQUEST['a'])){
    $controller2->index();
}else {
    $action=$_REQUEST['a'];
    call_user_func(array($controller2,$action));

}


?> 