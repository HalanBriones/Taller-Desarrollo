<?php
//include_once 'Controller/control.php';
include_once 'Controller/controllerPostulante.php';
include_once 'Config/conexion.php';
 

//$Controller = new control();
$controllerPostulante = new postulante();
//postulacion
if(!isset($_REQUEST['a'])){
    $controllerPostulante->index();
}else {
    $action=$_REQUEST['a'];
    call_user_func(array($controllerPostulante,$action));

}

//fecha
/*if(!isset($_REQUEST['c'])){
    $Controller->index();
}else{
    $action=$_REQUEST['c'];
    call_user_func(array($Controller,$action));

}
*/
?> 