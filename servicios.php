<?php include("header.php"); ?>

<?php

$servicios = [

[
    "imagen" => "consulta.jpg.jpg",
    "titulo" => "🩺 Consulta General",
    "descripcion" => "Evaluación médica completa para detectar y prevenir enfermedades."
],

[
    "imagen" => "vacunacion.jpg.jpg",
    "titulo" => "💉 Vacunación",
    "descripcion" => "Programas de vacunación adaptados a perros y gatos."
],

[
    "imagen" => "cirugia.jpg.jpg",
    "titulo" => "🏥 Cirugías",
    "descripcion" => "Procedimientos quirúrgicos realizados por profesionales."
],

[
    "imagen" => "emergencia.jpg.jpg",
    "titulo" => "🚑 Emergencias",
    "descripcion" => "Atención rápida para situaciones de urgencia veterinaria."
],

[
    "imagen" => "laboratorio.jpg.jpg",
    "titulo" => "🔬 Laboratorio",
    "descripcion" => "Exámenes y diagnósticos clínicos con equipos modernos."
],

[
    "imagen" => "peluqueria.jpg.jpg",
    "titulo" => "✂️ Peluquería",
    "descripcion" => "Servicios de higiene y estética para perros y gatos."
]

];

?>

<!-- TITULO -->

<section class="info">

    <div class="tarjeta-info">

        <h1>🐾 Nuestros Servicios</h1>

        <p>
            En Huellitas Felices ofrecemos atención veterinaria integral
            para mantener la salud, bienestar y felicidad de tus mascotas.
        </p>

    </div>

</section>

<!-- LISTA PHP -->

<section class="info">

    <div class="tarjeta-info">

        <h2>🏥 Servicios Disponibles</h2>

        <ul class="lista-servicios">

            <?php
            foreach($servicios as $servicio)
            {
                echo "<li>" . $servicio['titulo'] . "</li>";
            }
            ?>

        </ul>

    </div>

</section>

<!-- SERVICIOS PRINCIPALES -->

<section class="servicios">

    <h2>Servicios Veterinarios</h2>

    <div class="contenedor-servicios">

        <?php foreach($servicios as $servicio){ ?>

            <article class="card">

                <img
                    src="img/<?php echo $servicio['imagen']; ?>"
                    alt="<?php echo $servicio['titulo']; ?>">

                <h3>
                    <?php echo $servicio['titulo']; ?>
                </h3>

                <p>
                    <?php echo $servicio['descripcion']; ?>
                </p>

            </article>

        <?php } ?>

    </div>

</section>

<!-- ATENCION ESPECIALIZADA -->

<section class="info">

    <div class="tarjeta-info">

        <h2>🐾 Atención Especializada</h2>

        <p>
            Contamos con servicios específicos para diferentes tipos de mascotas,
            garantizando una atención personalizada y segura.
        </p>

    </div>

</section>

<!-- MASCOTAS -->

<section class="galeria">

    <div class="galeria-item">

        <img src="img/perro.jpg.jpg" alt="Atención Canina">

        <h3 style="text-align:center; margin-top:15px;">
            🐶 Atención Canina
        </h3>

    </div>

    <div class="galeria-item">

        <img src="img/gato.jpg.jpg" alt="Atención Felina">

        <h3 style="text-align:center; margin-top:15px;">
            🐱 Atención Felina
        </h3>

    </div>

</section>

<!-- BENEFICIOS -->

<section class="estadisticas">

    <div class="dato">
        <h3>24/7</h3>
        <p>Atención de Emergencias</p>
    </div>

    <div class="dato">
        <h3>500+</h3>
        <p>Mascotas Atendidas</p>
    </div>

    <div class="dato">
        <h3>10+</h3>
        <p>Años de Experiencia</p>
    </div>

</section>

<?php include("footer.php"); ?>