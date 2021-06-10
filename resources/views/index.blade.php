<!DOCTYPE html>
<html>

<head>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="es"></html>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloFooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloIndex.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial/scale=1.0">
    <script type="text/javascript" src="lib/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <title>Index</title>
</head>

<body>
    <header>
        <nav class="mi-navegacion">
            <div id="toggle" class="mi-toggle">
                <div></div>
            </div>
            <div class="mi-navegacion-logo">
                <a href="index">
                    <img alt="Logo de la empresa" src="{{asset('img/logo.png')}}" class="img1">
                    <img alt="Logo de la empresa RESPONSIVO" src="{{asset('img/logoletra.png')}}" class="img2">
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

            <div class="imagen">
                <img alt="Logo Index" src="{{asset('img/imagenPrincipal1.png')}}">
            </div>

            <div class="texto">
                <h1>Bienvenido</h1>
                <input type="button" id="boton" value="Mostrar Info">
                <div id="parrafos"></div>

            </div>
          </div>
        </div>




        <footer>
            <h3>Todo los derechos reservados</h3>
            <p>Emilio Hidalgo Belmonte</p>
        </footer>

        <script src="{{ asset('js/funciones.js') }}">


    </script>
    </body>
</html>
