<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Formulario de registro para el programa de tenis de nivel intermedio</h3>
    <form action="registro_Ej1.php" method="GET">

        <fieldset>
            <div style="background:lightgreen">
                <legend><h4>Datos personales:</h4></legend>
                <label for"nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION["nombre"]?>"><br><br>
                <label for"apellido">Apellido: </label><br>
                <input type="text" id="apellido" name="apellido" value="<?php echo $_SESSION["apellido"]?>"><br><br>
                <label for"username">Escribe un nombre de usuario para el sistema informático: </label><br>
                <input type="text" id="username" name="username" value="<?php echo $_SESSION["username"]?>"><br><br>
                <label for"email">email: </label><br>
                <input type="email" id="email" name="email" value="" size="40"><br><br>
            </div>
        </fieldset>

        <fieldset>
            <div style="background:lightblue">
                <legend><h4>Información técnica</h4></legend>
                <label for"exp">Cuántos años llevas jugando?</label><br>
                <input type="text" id="exp" name="exp" value=""><br><br>
                <label for"frec">Con qué frecuencia juegas?</label><br>
                <select id="frec" name="frec">
                    <option value="diaria">Diaria</option>
                    <option value="semanal">Semanal</option>
                    <option value="esporádica">Esporádica</option>            
                </select>
                <p> Con qué mano juegas?</p>
                <input type="radio" id="izq" name="mano" value="izquierda">
                <label for"izq">Izquierda</label><br>
                <input type="radio" id="der" name="mano" value="derecha">
                <label for"der">Derecha</label><br>
                <input type="radio" id="ambi" name="mano" value="ambidiestro">
                <label for"ambi">Ambidiestro/a</label><br>
            </div>
        </fieldset>

        <br>
        <input type="submit" value"Enviar">
        <input type="reset" value"Borrar">
    </form>

</body>
</html>