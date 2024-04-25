document.addEventListener("DOMContentLoaded", function () {
    // Selecciona los botones por su id
    var btnRegistrar = document.getElementById("btnRegistrar");
    var btnIniciarSesion = document.getElementById("btnIniciarSesion");
    var btnPuntosDonacion = document.getElementById("btnPuntosDonacion");

    btnRegistrar.addEventListener("click", function(){
        window.location.href = "ini.html";
    });
    
    btnIniciarSesion.addEventListener("click", function () {

        window.location.href = "login.html";
    });

    btnPuntosDonacion.addEventListener("click", function () {
        window.location.href = "mapa.html";
    });

});
