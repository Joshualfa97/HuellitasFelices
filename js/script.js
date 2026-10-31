/* ==========================
    MENU HAMBURGUESA
========================== */
const hamburguesa = document.getElementById("hamburguesa");
const menu = document.getElementById("menu");

hamburguesa.addEventListener("click", () => {
    menu.classList.toggle("activo");
});

const botones = document.querySelectorAll(".faq-btn");

botones.forEach(boton => {
    boton.addEventListener("click", () => {
        const respuesta = boton.nextElementSibling;
        respuesta.classList.toggle("activo");
    });
});