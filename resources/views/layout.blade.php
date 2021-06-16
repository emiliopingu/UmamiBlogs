<!DOCTYPE html>
<html>

<head>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="es"></html>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloFooter.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial/scale=1.0">
    <script type="text/javascript" src="lib/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <img alt="Logo de la empresa" src="https://drive.google.com/uc?export=view&id=11I3BFF1eLU7WjNeJn-0AYZrA-Aq7l_hV" class="img1">
                    <img alt="Logo de la empresa RESPONSIVO" src="https://drive.google.com/uc?export=view&id=1en-ppZGRtkPJ-0WtDqVr4aVx4NJWL8wU" class="img2">
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
        @yield('content')
    </div>





        <script src="{{ asset('js/funciones.js') }}"></script>
    </body>
</html>
