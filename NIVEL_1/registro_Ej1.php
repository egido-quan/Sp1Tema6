<?php
    session_start();
    if (!isset($_SESSION["username"]))  {
        $_SESSION["username"] = $_GET["username"];
    }
    if (!isset($_SESSION["name"]))  {
        $_SESSION["nombre"] = $_GET["nombre"];
    }
    if (!isset($_SESSION["apellido"]))  {
        $_SESSION["apellido"] = $_GET["apellido"];
    }
    if (!isset($_SESSION["email"]))  {
        $_SESSION["email"] = $_GET["email"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hola " . $_GET["username"] . "!<br>";
        if ($_SESSION["email"] !== $_GET["email"]) {
            echo "Veo que has cambiado tu email a " . $_GET["email"] . ", voy a actualizarlo <br>";
            $_SESSION["email"] = $_GET["email"];
        } 
        echo "<br>";
        echo "Has solicitado inscribirte en el programa de tenis de nivel intermedio. <br><br>";
        echo "Te confirmo tus datos:<br>";
        echo "- Nombre: " . $_GET["nombre"] . "<br>";
        echo "- Apellido: " . $_GET["apellido"] . "<br>";
        echo "- email: " . $_GET["email"] . "<br><br>";

        echo "Llevas jugando " . $_GET["exp"] . " años y juegas con una frecuencia " . $_GET["frec"] . "<br>";
        echo "Juegas con la mano: " . $_GET["mano"] . "<br>";
        echo "<br>";

        if ($_GET["exp"] > 10 && $_GET["frec"] == "diaria") {
            echo "Wow, no serás primo de Rafa Nadal? Puede que el nivel intermedio te parezca muy fácil.
            Te recomendamos hacer la prueba de nivel avanzado.";
        } else if ($_GET["exp"] <3 || $_GET["frec"] == "esporádica") {
            echo "McEnroe! No dudamos de tu potencial, pero deberás superar la prueba de nivel intermedio
            para unirte a este curso";
        } else {
            echo "Bienvenido al curso de nivel intermedio, te vamos a convertir en un clon de Carlitos Alcaraz!";
        }


    ?>

    
</body>
</html>