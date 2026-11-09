<?php
$nombreSitio = "Huellitas Felices";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombreSitio; ?></title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<header class="header">

    <div class="logo">
        <img src="img/logo.png.png" alt="Logo Huellitas Felices">
        <span><?php echo $nombreSitio; ?></span>
    </div>

    <div class="hamburguesa" id="hamburguesa">
        ☰
    </div>

    <nav class="menu" id="menu">

        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>

    </nav>

</header>