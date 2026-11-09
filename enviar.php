<?php

if(
    empty($_POST["nombre"]) ||
    empty($_POST["correo"]) ||
    empty($_POST["telefono"]) ||
    empty($_POST["mensaje"])
){
    die("Todos los campos son obligatorios.");
}

$nombre = trim($_POST["nombre"]);
$correo = trim($_POST["correo"]);
$telefono = trim($_POST["telefono"]);
$mensaje = trim($_POST["mensaje"]);

if(strlen($nombre) < 3){
    die("El nombre es demasiado corto.");
}

if(strlen($telefono) < 8){
    die("El teléfono no es válido.");
}

header("Location: gracias.php?nombre=" . urlencode($nombre));

exit();

?>
