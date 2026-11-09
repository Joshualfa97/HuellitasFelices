/* ==========================
   MENU HAMBURGUESA
========================== */

const hamburguesa = document.getElementById("hamburguesa");
const menu = document.getElementById("menu");

if (hamburguesa && menu) {
    hamburguesa.addEventListener("click", () => {
        menu.classList.toggle("activo");
    });
}


/* ==========================
   FAQ ACCORDION
========================== */

const botones = document.querySelectorAll(".faq-btn");

botones.forEach(boton => {

    boton.addEventListener("click", () => {

        const respuestaActual = boton.nextElementSibling;

        document.querySelectorAll(".faq-respuesta").forEach(respuesta => {

            if (respuesta !== respuestaActual) {
                respuesta.classList.remove("activo");
            }

        });

        respuestaActual.classList.toggle("activo");

    });

});
/* ==========================
   VALIDACION FORMULARIO
========================== */

const formulario = document.querySelector(".formulario");

if (formulario) {

    formulario.addEventListener("submit", function(e){

        const nombre = document.querySelector('[name="nombre"]').value.trim();
        const correo = document.querySelector('[name="correo"]').value.trim();
        const telefono = document.querySelector('[name="telefono"]').value.trim();
        const mensaje = document.querySelector('[name="mensaje"]').value.trim();

        if(nombre.length < 3){

            alert("El nombre debe tener al menos 3 caracteres.");
            e.preventDefault();
            return;
        }

        if(telefono.length < 8){

            alert("El número telefónico debe tener al menos 8 dígitos.");
            e.preventDefault();
            return;
        }

        if(mensaje.length < 10){

            alert("El mensaje es demasiado corto.");
            e.preventDefault();
            return;
        }

    });

}