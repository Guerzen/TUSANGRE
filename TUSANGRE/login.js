document.addEventListener("DOMContentLoaded", function () {
    // Selecciona el botón por su id
    var Bingresar = document.getElementById("Bingresar");
    var btncrearCuenta = document.getElementById("btncrearCuenta");

    // Agrega un evento de clic al botón
    Bingresar.addEventListener("click", function () {
        
        window.location.href = "Hiniciado.html";
    });

    btncrearCuenta.addEventListener("click", function(){
        window.location.href = "ini.html";
    })
});