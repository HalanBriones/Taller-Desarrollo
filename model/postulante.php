<?php
    class Postulante extends entidadBase{

        private $RUT ;
        private $nombre1 ;
        private $nombre2;
        private $apellido_paterno;
        private $apellido_materno;
        private $correo ;
        private $fecha_nac ;
        private $sexo ;
        private $estado ;
        private $nivel_estu ;
        private $telefono ;
        private $telefono_emergencia ;     
        private $enfermedades ;

        public function __construct(){
            $tabla = "postulante";
        }
        //GETTERS
        public function getRut(){
            return $this->$RUT;
        }
        public function getNombre1(){
            return $this->$nombre1;
        }
        public function getNombre2(){
            return $this->$nombre2;
        }
        public function getApellidoM(){
            return $this->$apellido_materno;
        }
        public function getApellidoP(){
            return $this->$apellido_paterno;
        }
        public function getCorreo(){
            return $this->$correo;
        }
        public function getFechaNac(){
            return $this->$fecha_nac;
        }
        public function getSexo(){
            return $this->$sexo;
        }
        public function getEstado(){
            return $this->$estado;
        }
        public function getEstudio(){
            return $this->$nivel_estu;
        }
        public function getTelefono(){
            return $this->$telefono;
        }
        public function getTelEmer(){
            return $this->$telefono_emergencia;
        }
        public function getEnfermedades(){
            return $this->$enfermedades;
        }
        //SETTERS
        public function settRut($RUT){
            $this->RUT = $RUT;
        }
        public function settNombre1($nombre1){
            $this->nombre1 = $nombre1;
        }
        public function settNombre2($nombre2){
            $this->nombre2 = $nombre2;
        }
        public function settApellidoM($apellido_materno){
            $this->apellido_materno = $apellido_materno;
        }
        public function settApellidoP($apellido_paterno){
            $this->apellido_paterno = $apellido_paterno;
        }
        public function settCorreo($correo){
            $this->correo = $correo;
        }
        public function settFechaNac($fecha_nac){
            $this->fecha_nac = $fecha_nac;
        }
        public function settSexo($sexo){
            $this->sexo = $sexo;
        }
        public function settEstado($estado){
            $this->estado = $estado;
        }
        public function settEstudio($nivel_estu){
            $this->nivel_estu = $nivel_estu;
        }
        public function settTelefono($telefono){
            $this->telefono = $telefono;
        }
        public function settTelEmer($telefono_emergencia){
            $this->telefono_emergencia = $telefono_emergencia;
        }
        public function settEnfermedades($enfermedades){
            $this->enfermedades = $enfermedades;
        }

        //otros

        public function guardar(){
            $query = "INSERT INTO $tabla (rut,nombre1,apellidoP,nombre2,apellidoM,fechaNac,sexo,estado,nivelE,telefono,telefonoEme,correo,enfermedades)"." VALUES (". "'".$this->RUT."',"  
                                                         ."'".$this->nombre1."',"
                                                         ."'".$this->apellido_paterno."',"
                                                         ."'".$this->nombre2."',"
                                                         ."'".$this->apellido_materno."',"
                                                         ."'".$this->fecha_nac."',"
                                                         ."'".$this->sexo."',"
                                                         ."'".$this->estado."',"
                                                         ."'".$this->nivel_estu."',"
                                                         ."'".$this->telefono."',"
                                                         ."'".$this->telefono_emergencia."',"
                                                         ."'".$this->enfermedades."',"
                                                         .")";
            $save = $this->db()->query($query);
            return $save;
        }

        
    }
?>