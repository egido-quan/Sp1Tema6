<?php

class Peli {
        //Atributos
        private $nombre = "";
        private $duracion = 0;
        private $director = "";

        //Constructor
        public function __construct(string $nombre, int $duracion, string $director) {
            $this->nombre = $nombre;
            $this->duracion = $duracion;
            $this->director = $director;
        }

        //Getters
        public function getNom(): string {
            return $this->nombre;
        }
        public function getDuracion(): int {
            return $this->duracion;
        }
        public function getDirector(): string {
            return $this->director;
        }

        //Setters
        public function setNom(string $nombre) {
            $this->nombre = $nombre;
        }
        public function setDuracion(int $duracion) {
            $this->duracion = $duracion;
        }
        public function setDirector(string $director) {
            $this->director = $director;
        }

        //Métodos propios
        public function __toString(): string {
            return "Nombre: " . $this->nombre . " - Duración: " . $this->duracion . 
            " - Director: " . $this->director;
        }
    }