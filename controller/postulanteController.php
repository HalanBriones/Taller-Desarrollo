<?php
   

    class postulanteController{

        public function __construct(){
            require_once "./core/modeloBase.php";
            require_once "./model/postulante.php";
        }


      


        public function insertar(){

            if(isset($_POST["rut"])){
                $usuario = new Postulante();
                $usuario->settRut($_POST["rut"]);
                $usuario->settNombre1($_POST["nombre1"]);
                $usuario->settNombre2($_POST["nombre2"]);
                $usuario->settApellidoM($_POST["apellidoM"]);
                $usuario->settApellidoP($_POST["apellidoP"]);
                $usuario->settFechaNac($_POST["fechaNac"]);
                $usuario->settSexo($_POST["sexo"]);
                $usuario->settEstado($_POST["estados"]);
                $usuario->settEstudio($_POST["nivelEstudio"]);
                $usuario->settTelefono($_POST["telefono"]);
                $usuario->settTelEmer($_POST["telefonoEmer"]);
                $usuario->settCorreo($_POST["correo"]);
                $usuario->settEnfermedades($_POST["enfermedades"]);

                $save = $usuario->guardar();
            }
        }


    }
?>