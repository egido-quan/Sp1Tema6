<?php
ob_start();
?>


<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<body>

<?php
    include "ClaseCine.php";
    include "ClasePeli.php";

    //INSTANCIAS DE PELIS

    $arrayPelis = [
        $peli1 = new Peli("Terminator", 120, "James Cameron"),
        $peli2 = new Peli("Mar adentro", 100, "Alejandro Amenábar"),
        $peli3 = new Peli("La princesa prometida", 160, "Rob Reiner"),
        $peli4 = new Peli("Coacción a un jurado",135, "Brian Gibson"),
        $peli5 = new Peli("Reservoir dogs",179, "Quentin Tarantino"),
        $peli6 = new Peli("El señor de los anillos",178, "Peter Jackson"),
        $peli7 = new Peli("Pulp Fiction",154, "Quentin Tarantino"),
        $peli8 = new Peli("La lista de Schindler",195, "Steven Spielberg"),
        $peli9 = new Peli("Poltergeist",178, "Steven Spielberg"),
        $peli10 = new Peli("Gremlins",144, "Steven Spielberg"),
    ];

    //INSTANCIAS DE CINES
    $arrayCines = [
        $cine1 = new Cine("Cinema Paradiso","Sicilia", [$peli1, $peli2, $peli3, $peli4, $peli5, $peli6, $peli7, $peli8]),
        $cine2 = new Cine("Cinesa","Barcelona", [$peli10, $peli7, $peli3, $peli4, $peli9]),
        $cine3 = new Cine("Retiro","Sitges", [$peli1, $peli2, $peli3, $peli4, $peli8, $peli9, $peli10]),
        $cine4 = new Cine("Vila Lauren","Vilanova", [$peli1, $peli3, $peli4, $peli5, $peli6, $peli9, $peli10]),
        $cine5 = new Cine("Cine Max","Tarragona", [$peli1, $peli2, $peli3, $peli4, $peli5, $peli6, $peli7, $peli8, $peli9, $peli10]),
    ];

    //DATOS DE LAS PELIS DE TODOS LOS CINE

    foreach ($arrayCines as $cine) {
        $cine->datosPelis();
    }

    //PELÍCULA MÁS LARGA DE CADA CINE
    foreach ($arrayCines as $cine) {
        $cine->mayorDuracion();
    }

    
    //PELIS DE CADA CINE POR NOMBRE DE DIRECTOR

    $director = "Quentin Tarantino";
    echo "<br><h3>Del director $director se pueden ver las siguientes películas en los siguiente cines:</h3>";
    $cinesPorDirector = buscarCinePorDirector($director, $arrayCines);
    muestraArray($cinesPorDirector);

    $director = "Brian Gibson";
    echo "<br><h3>Del director $director se pueden ver las siguientes películas en los siguiente cines:</h3>";
    $cinesPorDirector = buscarCinePorDirector($director, $arrayCines);
    muestraArray($cinesPorDirector);

    $director = "Steven Spielberg";
    echo "<br><h3>Del director $director se pueden ver las siguientes películas en los siguiente cines:</h3>";
    $cinesPorDirector = buscarCinePorDirector($director, $arrayCines);
    muestraArray($cinesPorDirector);

    function buscarCinePorDirector(string $director, array $arrayCines): array {
        $cinesPorDirector = [];
        foreach($arrayCines as $cine) {
            foreach($cine->getListaPel() as $peli) {
                if ($peli->getDirector() == $director) {
                $cinesPorDirector[] = "Cine: " . $cine->getNom() . " ==> Película: " . $peli->getNom();
                }
            }
        }
        return $cinesPorDirector;
    }

    function muestraArray(array $array): void {
            foreach($array as $item) {
            echo "$item<br>";
        }
    }       


?>   


</bodY>
</htXl>

<?php
$html = ob_get_clean();
//echo $html;

require "./libreria/dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array("isRemoteEnabled" => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper("A4", "portrait");
$dompdf->render();
$dompdf->stream("file_.pdf", array("Attachment" => false));


?>
 