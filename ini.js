// Espera a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el botón por su id
    var BRegistrar = document.getElementById("BRegistrar");
    var Bini = document.getElementById("Bini");

    // Agrega un evento de clic al botón
    BRegistrar.addEventListener("click", function () {
        // Redirecciona a la página ini.html
        window.location.href = "login.html";
    });

    Bini.addEventListener("click", function () {
        // Redirecciona a la página ini.html
        window.location.href = "login.html";
    });
});

