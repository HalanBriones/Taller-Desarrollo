<?php
    require_once "./model/postulante.php";
    
    class PostulanteController{

        public $modelo;
        public function __construct(){
            $this->modelo = new Postulante();   
        }


        
        public function almacenar(){
            
            $postulante = new Postulante();

            $postulante->rut = $_POST['rut'];
            $postulante->nombre1 = $_POST['nombre1'];
            $postulante->apellidoP = $_POST['apellidoP'];
            $postulante->apellidoM = $_POST['apellidoM'];
            $postulante->fechaNac = $_POST['fechaNac'];
            $postulante->sexo = $_POST['exampleRadios'];
            $postulante->estado = $_POST['estado'];
            $postulante->nivelE = $_POST['nivelEstudio'];
            $postulante->telefono = $_POST['telefono'];
            $postulante->correo = $_POST['correo'];
            $postulante->telefonoEme = $_POST['telefonoEmer'];
            $postulante->enfermedades = $_POST['enfermedades'];

            $this->modelo->guardar_postulante($postulante);
            header("Location: postulacionFinal.html");
        }
    }
?>