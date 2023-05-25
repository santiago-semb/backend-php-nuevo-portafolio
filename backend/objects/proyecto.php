<?php 

    class Proyecto {

        private $id;
        private $nombre;
        private $descripcion;
        private $lenguajes;
        private $link;

        public function __construct($nombre,$descripcion,$lenguajes,$link){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->lenguajes = $lenguajes;
            $this->link = $link;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" .
                   "Nombre: " . $this->nombre . "<br>" . 
                   "Descripcion: " . $this->descripcion . "<br>" . 
                   "Lenguajes: " . $this->lenguajes . "<br>" . 
                   "Link: " . $this->link . "<br>";
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getLenguajes(){
            return $this->lenguajes;
        }

        public function getLink(){
            return $this->link;
        }

        // SETTERS
        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        public function setLenguajes($lenguajes){
            $this->lenguajes = $lenguajes;
        }

        public function setLink($link){
            $this->link = $link;
        }

    }

?>