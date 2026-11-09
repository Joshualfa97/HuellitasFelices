<?php include("header.php"); ?>

<section class="info">

<?php
$nombre = $_GET["nombre"];
?>

<h1>Solicitud enviada correctamente</h1>

<p>

Gracias por contactarnos
<strong><?php echo $nombre; ?></strong>.

Pronto nos comunicaremos contigo.

</p>

<a href="index.php" class="btn">
Volver al inicio
</a>

</section>

<?php include("footer.php"); ?>