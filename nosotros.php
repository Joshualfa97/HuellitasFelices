<?php include("header.php"); ?>

<?php
$fundacion = 2016;
?>

<section class="info">

    <div class="tarjeta-info">

        <h1>🐾 Nuestra Historia</h1>

        <p>
            Huellitas Felices nació con el propósito de brindar atención veterinaria
            de calidad, enfocada en el bienestar y la salud de las mascotas.

            Nuestro compromiso es ofrecer un servicio profesional, humano y cercano
            para cada familia y su compañero de vida.
        </p>

    </div>

</section>

<section class="info">

    <div class="tarjeta-info">

        <h2>🐾 Años de experiencia</h2>

        <p>

            Huellitas Felices inició operaciones en el año

            <strong>
                <?php echo $fundacion; ?>
            </strong>

        </p>

    </div>

</section>
<section class="galeria">

    <div class="galeria-item">
        <img src="img/equipo.jpg.jpg" alt="Equipo Veterinario">
    </div>

    <div class="galeria-item">
        <img src="img/clinica.jpg.jpg" alt="Instalaciones">
    </div>

</section>

<section class="info">

    <h2>Misión</h2>

    <p>
        Brindar servicios veterinarios integrales que garanticen la salud,
        bienestar y calidad de vida de las mascotas mediante atención
        profesional y tecnología moderna.
    </p>

</section>

<section class="info">

    <h2>Visión</h2>

    <p>
        Ser la clínica veterinaria de referencia en Costa Rica, reconocida por
        la excelencia en la atención médica, la innovación y el amor por los
        animales.
    </p>

</section>

<section class="estadisticas">

    <div class="dato">
        <h3>10+</h3>
        <p>Años de experiencia</p>
    </div>

    <div class="dato">
        <h3>500+</h3>
        <p>Mascotas atendidas</p>
    </div>

    <div class="dato">
        <h3>100%</h3>
        <p>Compromiso y dedicación</p>
    </div>

</section>

<?php include("footer.php"); ?>