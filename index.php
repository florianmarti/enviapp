<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./syles/style.css" />
    <title>Tu Título</title>
  </head>
  <body>
    <!-- Loader -->
    <div class="loader-container">
      <div class="loader">
        <img src="images/loader.gif" alt="loading" />
      </div>
    </div>

    <!-- Logo -->
    <div class="logo-container">
      <img src="images/eA.png" alt="Tu Logo" class="logo" />
    </div>

    <!-- Contenido principal oculto por defecto -->
    <div class="content" style="display: none">
      <div class="container">
        <header class="header-container">
          <div class="logo-container">
            <img src="images/eA.png" alt="Tu Logo" class="logoContainer" />
          </div>

          <div class="nav-container">
            <nav>
              <ul class="nav-links">
                <li><a href="#">Envío de Paquetes</a></li>
                <li><a href="#">Rastrear Paquete</a></li>
                <li><a href="#">Trabaja con Nosotros</a></li>
              </ul>
            </nav>
          </div>
          <div class="button-container">
            <button id="login-button">Login</button>
          </div>
        </header>
      </div>
    </div>

    <script src="./script/script.js"></script>
  </body>
</html>
