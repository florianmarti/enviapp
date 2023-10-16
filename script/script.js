document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    // Ocultar el loader y el logo
    document.querySelector(".loader-container").classList.add("hidden");
    document.querySelector(".logo-container").classList.add("hidden");

    // Mostrar el contenido principal
    document.querySelector(".content").style.display = "block";
  }, 3000);
});

//redirecciona a login.html

// Obtén el botón por su ID
let loginButton = document.getElementById("login-button");

// Agrega un manejador de eventos al botón
loginButton.addEventListener("click", function () {
  // Redirige a "login.html"
  window.location.href = "pages/login.html";
});
