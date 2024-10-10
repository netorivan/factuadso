const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
function redirectToPage(event) {
    event.preventDefault(); // Evita que el formulario se envíe de la manera tradicional
    // Aquí puedes agregar la lógica para procesar el formulario si es necesario
    window.location.href = 'test.php'; // Cambia 'tu_pagina.html' por la URL a la que deseas redirigir
}
