<?php

    class Persona {

        private $id;
        private $nombre;
        private $apellido;
        private $edad;
        private $fecha_de_nacimiento;
        private $telefono;
        private $email;
        private $direccion;
        private $descripcion;
        private $img;

        public function __construct($nombre,$apellido,$edad,$fecha_de_nacimiento,$telefono,$email,$direccion,$descripcion,$img){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->fecha_de_nacimiento = $fecha_de_nacimiento;
            $this->telefono = $telefono;
            $this->email = $email;
            $this->direccion = $direccion;
            $this->descripcion = $descripcion;
            $this->img = $img;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" .
                   "Nombre: " . $this->nombre . "<br>" . 
                   "Apellido: " . $this->apellido . "<br>" . 
                   "Edad: " . $this->edad . "<br>" . 
                   "Fecha De Nacimiento: " . $this->fecha_de_nacimiento . "<br>" . 
                   "Telefono: " . $this->telefono . "<br>" . 
                   "Email: " . $this->email . "<br>" . 
                   "Direccion: " . $this->direccion . "<br>" . 
                   "Descripcion: " . $this->descripcion . "<br>" . 
                   "Imagen: " . $this->img . "<br>";
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }
        
        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getFechaDeNacimiento(){
            return $this->fecha_de_nacimiento;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getImg(){
            return $this->img;
        }

        // SETTERS
        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setFechaDeNacimiento($fecha_de_nacimiento){
            $this->fecha_de_nacimiento = $fecha_de_nacimiento;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setImg($img){
            $this->img = $img;
        }

    }

?>