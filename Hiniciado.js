document.addEventListener("DOMContentLoaded", function () {
    // Selecciona los botones por su clase
    var puntosButton = document.querySelector('.nav-button:nth-child(1)');
    var donacionesButton = document.querySelector('.nav-button:nth-child(2)');
    var miCuentaButton = document.querySelector('.nav-button:nth-child(3)');
    var solicitarSangreButton = document.querySelector('.nav-button:nth-child(4)');

    // Agrega eventos de clic a los botones
    puntosButton.addEventListener("click", function () {
        window.location.href = "mapa.html";
    });

    // Agrega eventos de clic a los demás botones
    // Repite la estructura anterior para los otros botones
    // ...

});
    