
<?php   
    echo "En este código la declaración de la clase empieza en la línea " . (__LINE__ + 1) ."";
    class Raqueta {
        //Atributos
        private string $marca;
        private string $deporte;
        private int $peso;


        //Constructor
        function __construct(string $marca, string $deporte, int $peso) {
            $this->marca = $marca;
            $this->deporte = $deporte;
            $this->peso = $peso;
        }

        public function toString(): string {

            return "<br>El método " . __METHOD__ . " está en la clase " . __CLASS__ . " y muestra lo siguiente:
            <br>Esta raqueta es de la marca " . $this->marca . " y se usa para jugar a " . 
            $this->deporte . ". Pesa " . $this->peso ."g<br>";
        }
    }
    echo " y acaba en la línea " . (__LINE__ - 1) ."<br><br>";
    echo "El archivo está aquí: ". __DIR__ ."<br>";


    $raquetaTennis = new raqueta("Head","tenis", "325");
    echo $raquetaTennis->toString();

?>
