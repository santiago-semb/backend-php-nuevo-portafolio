<?php

    class Certificado {

        private $id;
        private $nombre;
        private $fecha;
        private $link;
        private $img;

        public function __construct($nombre,$fecha,$link,$img){
            $this->nombre = $nombre;
            $this->fecha = $fecha;
            $this->link = $link;
            $this->img = $img;
        }

        public function toString(){
            return "ID: " . $this->id . "<br>" .
                   "Nombre: " . $this->nombre . "<br>" .
                   "Fecha: " . $this->fecha . "<br>" . 
                   "Link: " . $this->link . "<br>" .
                   "Imagen: " . $this->img . "<br>";
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function getLink(){
            return $this->link;
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

        public function setFecha($fecha){
            $this->fecha = $fecha;
        }

        public function setLink($link){
            $this->link = $link;
        }

        public function setImg($img){
            $this->img = $img; 
        }

    }

?>