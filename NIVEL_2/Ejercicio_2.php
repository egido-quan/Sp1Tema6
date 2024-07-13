<?php

include "Turbo.php";

class Car {

    use Turbo;

    //Atributos
    private string $marca;
    private string $matricula;
    private string $combustible;
    private string $velocidad_max;

    function __construct(string $marca, string $matricula, string $combustible, string $velocidad_max) {    
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustible = $combustible;
        $this->velocidad_max = $velocidad_max;
    }

    public function __toString(): string {
        return "Marca: " . $this->marca . "<br> Matrícula: " . $this->matricula . "<br>Combustible: " . $this->combustible . "<br>Velocidad máxima: " . $this->velocidad_max . "<br>";
    }

}

$num_coches = 5;
$array_coches = crearCoches($num_coches);
activarBoostAleatorio($array_coches);


function crearCoches(int $num_coches): array {
    $marca = ["Seat", "Fiat", "Toyota", "Hyundai", "MG"];
    $combustible = ["Gasolina", "Diésel", "Eléctrico", "Híbrido"];
    $matricula = ["0000AAA", "1111BBB", "2222CCC", "3333DDD", "4444FFF"];
    $array_coches = [];
    for ($i = 0; $i < $num_coches; $i++) {
        $array_coches[] = new Car ($marca[rand(0,4)], $combustible[rand(0,3)], $matricula[rand(0,4)], rand(140,240));
    }
    return $array_coches;
}


function activarBoostAleatorio(array $coches):void {
    for ($i = 0; $i < count($coches); $i++) {
        echo "Coche_" . ($i + 1) . ": ";
        if (rand(0,1)) { $coches[$i]->boost();}
        echo "<br><br>" . $coches[$i] . "<br>";
    }
}


?>