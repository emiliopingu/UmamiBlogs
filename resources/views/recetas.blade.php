<!DOCTYPE html>
<html>

<head>
  <html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estiloFooter.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estilosRecetas.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial/scale=1.0">
    <title>Recetas</title>
</head>

<body>
    <header>
        <nav class="mi-navegacion">
            <div id="toggle" class="mi-toggle">
                <div></div>
            </div>
            <div class="mi-navegacion-logo">
                <a href="index">
                    <img alt="Logo de la empresa" src="img/logo.png" class="img1">
                    <img alt="Logo de la empresa RESPONSIVO" src="img/logoletra.png" class="img2">
                </a>
            </div>
            <ul class="mi-navegacion-items">
                <li>
                    <a href="index">Index</a>
                </li>
                <li>
                    <a href="recetas">Recetas</a>
                </li>
                <li>
                    <a href="sobreNosotros">Sobre nosotros</a>
                </li>
            </ul>
        </nav>
    </header>


        <div class="container">
            <h1 class="comidaTitulo">Elige las recetas que quieras</h1>
            <section class="listaComida row center middle wrap">

              <article class="comida">
              <a href="recetas_chinas">
                <figure class="comida--logo">
                  <img class="comida--logo--img" src="img/comidaChina.png" alt="">
                </figure>
                <h3 class="nombreComida">Recetas Chinas</h3>
                </a>
              </article>


              <article class="comida">
                <a href="recetas_coreanas">
                <figure class="comida--logo">
                  <img class="comida--logo--img" src="img/comidaCoreana.png" alt="">
                </figure>
                <h3 class="nombreComida">Recetas Coreanas</h3>
                </a>
              </article>


              <article class="comida">
              <a href="recetas_japonesas">
                <figure class="comida--logo">
                  <img class="comida--logo--img" src="img/comidaJaponesa.png" alt="">
                </figure>
                <h3 class="nombreComida">Recetas Japonesas</h3>
              </a>
              </article>


              <article class="comida">
              <a href="recetas_tailandesas">
                <figure class="comida--logo">
                  <img class="comida--logo--img" src="img/comidaTailandesa.png" alt="">
                </figure>
                <h3 class="nombreComida">Recetas Tailandesas</h3>
              </a>
              </article>
          </div>
          <img  class=cerezo src="img/cerezo.png" width="100" height="100" alt="rama de cerezo">
          <br>
        <footer>
            <h3>Todo los derechos reservados</h3>
            <p>Emilio Hidalgo Belmonte</p>
        </footer>

        <script src="{{ asset('js/funciones.js') }}"></script>
    </body>
</html>
