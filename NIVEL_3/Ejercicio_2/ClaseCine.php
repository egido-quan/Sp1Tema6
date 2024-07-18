<?php
    class Cine {
        //Atributos
        private $nombre = "";
        private $poblacion = "";
        private $listaPel = [];

        //Constructor
        public function __construct(string $nombre, string $poblacion, array $listaPel) {
            $this->nombre = $nombre;
            $this->poblacion = $poblacion;
            $this->listaPel = $listaPel;
        }
        //Getters
        public function getNom(): string {
            return $this->nombre;
        }
        public function getPoblacion(): string {
            return $this->poblacion;
        }
        public function getListaPel(): array {
            return $this->listaPel;
        }

        //Setters
        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }
        public function setPoblacion(string $poblacion) {
            $this->poblacion = $poblacion;
        }
        public function setListaPel(Peli $peli) {
            $this->listaPel[] = $peli;
        }

        //Métodos generales
        public function datosPelis(): void {
            echo "<h3>Películas del cine " . $this->nombre . "</h3>";
            echo "<ul>";
            for ($i = 0; $i < count($this->listaPel); $i++) {
                echo "<li>" . $this->listaPel[$i] . "</li>";
            }
            echo "</ul>";
        }
        public function mayorDuracion(): void {
            echo "<h3>La película de mayor duración del cine " . $this->nombre . " es</h3>";
            $duracion = 0;
            $pos = -1;
            for ($i = 0; $i < count($this->listaPel); $i++) {
                if ($this->listaPel[$i]->getDuracion() > $duracion) {
                    $duracion = $this->listaPel[$i]->getDuracion();
                    $pos = $i;
                }
            }
            echo $this->listaPel[$pos]->__toString();

        }

        public function pelisPorDirector(string $nombre): array {
            $listaPelisPorDirector = [];
            for ($i = 0; $i < count($this->listaPel); $i++) {   
                if ($this->listaPel[$i]->getDirector() == $nombre) {
                    $listaPelisPorDirector[] = $this->listaPel[$i];
                }
            }           
            return $listaPelisPorDirector;
        }
    }