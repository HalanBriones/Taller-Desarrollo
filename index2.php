<?php
include_once 'Controller/control.php';
include_once 'Config/conexion.php';
 

$Controller = new control();

$controller2 = new controllerPostulante();
//postulacion
if(!isset($_REQUEST['a'])){
    $controller2->index2();
}else {
    $action=$_REQUEST['a'];
    call_user_func(array($controller2,$action));

}

if(!isset($_REQUEST['c'])){
    $Controller->index();
}else{
    $action=$_REQUEST['c'];
    call_user_func(array($Controller,$action));

}
?> 