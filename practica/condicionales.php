<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales</title>
</head>
<body>
<?php
echo "<h1>CONDICIONALES EN PHP</h1><br> <h2>Conficional IF</h2>";
$edad=17;
if ($edad< 18) {
    echo"Es menor de edad";
}

echo"<h2>Condicional if.. else..</h2>";

$hora=12.5;
if ($hora<12) {
    echo"Buen dia";
} else {

    echo"Buenas tardes";
}

echo"<h2>Condicional if.. else..else..</h2>";


if ($hora<12) {
    echo"la hora es menor a 12";
} else if ($hora>=12 && $hora<=13) { 
    echo"medio dia";
}else {

    echo"La hora es mayor que 13";
}

echo"<h2>Condicional switch</h2>";

$accion="guardar";
switch ($accion) {
    case 'guardar':
    echo"El usuario eligio GUARDAR";
        break;
    case 'modificar':
        echo"El usuario eligio MODIFICAR";
        break;
    case 'eliminar':
    echo"El usuario eligio ELIMINAR";
        break;
    
    default:
    echo"El usuario no realizo ninguna accion";
        break;
}
?> 
</body>
</html>

