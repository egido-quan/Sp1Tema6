
<?php   
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
        //Añade plomo para ajustar el peso de la raqueta, ajuste muy habitual
        public function __invoke(int $ajustePeso):void {
            $this->peso += $ajustePeso;
        }

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __toString():string  {
            return "Esta raqueta es de la marca " . $this->marca . " y se usa para jugar a " . 
            $this->deporte . ". Pesa " . $this->peso ." g<br>";
        }
    }

    $raquetaTennis = new raqueta("Head","tenis", "325");
    echo $raquetaTennis;
    $raquetaTennis(5);
    echo "Ahora el peso de la raqueta es $raquetaTennis->peso g";

?>
