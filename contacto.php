<?php include("header.php"); ?>

<!-- TITULO -->

<section class="info">

    <div class="tarjeta-info">

        <h1>📞 Contáctanos</h1>

        <p>
            Estamos listos para ayudarte y atender a tu mascota.
            Puedes visitarnos, llamarnos o enviarnos un mensaje.
        </p>

    </div>

</section>
<!-- IMAGEN -->

<section class="galeria">

    <div class="galeria-item">
        <img src="img/contacto.jpg.jpg" alt="Contacto Veterinaria">
    </div>

</section>

<!-- INFORMACIÓN -->

<section class="estadisticas">

    <div class="dato">
        <h3>📍</h3>
        <p>Alajuela, Costa Rica</p>
    </div>

    <div class="dato">
        <h3>📞</h3>
        <p>8888-8888</p>
    </div>

    <div class="dato">
        <h3>✉</h3>
        <p>info@huellitasfelices.com</p>
    </div>

</section>

<!-- FORMULARIO -->

<section class="info" id="formulario-cita">

     <div class="tarjeta-info">

        <h2>🐾 Solicita una cita</h2>

    <form class="formulario" action="enviar.php" method="POST">

        <input
            type="text"
            name="nombre"
            placeholder="Nombre Completo"
            required>

        <input
            type="email"
            name="correo"
            placeholder="Correo Electrónico"
            required>

        <input
            type="tel"
            name="telefono"
            placeholder="Número Telefónico"
            required>

        <textarea
            name="mensaje"
            rows="5"
            placeholder="Escribe tu mensaje aquí..."
            required></textarea>

        <button type="submit" class="btn">
            Enviar Mensaje
        </button>

    </form>

</section>

<!-- HORARIOS -->

<section class="faq">

  <div class="tarjeta-info">

        <h2>🕒 Horarios de Atención</h2>
    <div class="faq-item">

        <button class="faq-btn">
            Lunes a Viernes
        </button>

        <div class="faq-respuesta">
            <p>8:00 a.m. a 6:00 p.m.</p>
        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">
            Sábados
        </button>

        <div class="faq-respuesta">
            <p>8:00 a.m. a 4:00 p.m.</p>
        </div>

    </div>

    <div class="faq-item">

        <button class="faq-btn">
            Emergencias
        </button>

        <div class="faq-respuesta">
            <p>Disponible según disponibilidad de guardia.</p>
        </div>

    </div>

</section>

<?php include("footer.php"); ?>