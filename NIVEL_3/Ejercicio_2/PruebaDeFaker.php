<?php

require_once "vendor/autoload.php";

$faker = Faker\Factory::create();

$nombre = $faker->firstNameFemale();
$telefono = $faker->phoneNumber();
$direccion = $faker->address();
$mama = $faker->numberBetween(87, 94);
$cintura = $faker->numberBetween(58,65);
$cadera = $faker->numberBetween(85, 92);
$dia = $faker->dayOfMonth ();
$hora = $faker->time('H');


echo "Una de las pocas ventajas de ser usuario de Rodalies Renfe es que la mayor parte" . PHP_EOL .
"del tiempo estás esperando el tren y puedes dedicarte a la observación. Así conocí a " . PHP_EOL .
$nombre  . ". Y es que gracias a la negligencia de los mandos superiores (les enviaba yo " . PHP_EOL .
"a Japón una temporadita a aprender cómo gestionan allí la Yamanote line) Renfe ". PHP_EOL .
"se está convirtiendo en un serio competidor de Tinder. $nombre está aquí de " . PHP_EOL .
"vacaciones. Hasta me dio su número de teléfono ($telefono) y su dirección: " . PHP_EOL .
 $direccion . PHP_EOL. 
 "Y desde luego pienso llamarla. Llamadme materialista, pero es que además de simpática yo le adivino " . PHP_EOL . 
 "unas medidas de  $mama  -  $cintura  -  $cadera que me quitan el sueño. Voy a proponerle que nos veamos el día " . $dia . " a las " . PHP_EOL.
$hora . ":00 a ver si suena la flauta..." . PHP_EOL;



