<?php

//Los hago de tipo entero para poder crear
// con facilidad recursos aleatoriamente: ver función crearRecursos()
enum Tema: int {
    case PHP = 1;
    case CSS = 2;
    case HTML = 3;
    case SQL = 4;
    case Laravel = 5;
}

enum Fuente: int {
    case Fichero = 1;
    case ArticuloWeb = 2;
    case Video = 3;
}


class RecursoDidactico {

    //Atributos
    private string $nombre;
    private Tema $tema;
    private $url;
    private Fuente $fuente;

    public function __construct(string $nombre, Tema $tema, string $url, Fuente $fuente) {
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->fuente = $fuente;
    }

    public function toString():string {
        return "Datos del curso:<br>" . $this->nombre . 
                " -- Tema: " . $this->tema->name . 
                " -- URL: " . $this->url . 
                " -- Recurso: " . $this->fuente->name . 
                "<br><br>";   
    }

}

$num_recursos = 10;
$recursos = [];

$recursos = crearRecursos($num_recursos);
mostrarRecursos($recursos);

function crearRecursos(int $num_recursos) {
    $recursos = [];
    for ($i = 0; $i < $num_recursos; $i++) {
        $nombre = "Recurso_Didáctico_" . ($i + 1);
        $tema = rand(1,5);
        $url = "$nombre@mysite.net";
        $fuente = rand(1,3);
        $recursos [] = new RecursoDidactico($nombre, Tema::from($tema), $url, Fuente::from($fuente));
    }
    return $recursos;
}

function mostrarRecursos(array $recursos): void {
    for ($i = 0; $i < count($recursos); $i++) {
        echo $recursos[$i]->toString();
    }
}

