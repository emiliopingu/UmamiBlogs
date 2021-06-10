<!DOCTYPE html>
<html>

<head>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="es"></html>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilosIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloFooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloShow.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial/scale=1.0">
    <script type="text/javascript" src="lib/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>



<body>
    <header>
        <nav class="mi-navegacion">
            <div id="toggle" class="mi-toggle">
                <div></div>
            </div>
            <div class="mi-navegacion-logo">
                <a href="{{ route('recetas_coreanas.index') }}">
                    <img alt="Logo de la empresa RESPONSIVO" src="https://drive.google.com/uc?export=view&id=11I3BFF1eLU7WjNeJn-0AYZrA-Aq7l_hV" class="img1">
                    <img alt="Logo de la empresa" src="https://drive.google.com/uc?export=view&id=1en-ppZGRtkPJ-0WtDqVr4aVx4NJWL8wU" class="img2">
                </a>
            </div>
            <ul class="mi-navegacion-items">
                <li>
                <a class="btn btn-primary" href="{{ route('recetas_coreanas.index') }}"> Volver a la pagina de recetas</a>
                </li>

            </ul>
        </nav>
    </header>

    <div class="container">
    <div class="centro">
    <div>
        <img src="{{$recetas_coreana->imagen}}" class="imagenReceta">
    </div>
    <h2>{{$recetas_coreana->nombre}}</h2>
    <br>
    <p><strong>Ingredientes : </strong>{{$recetas_coreana->ingredientes}}</p>
    <br>
    <h4>Como elaborarlo</h4>
    <div class="parrafo">
        <p><strong></strong>{{$recetas_coreana->descripcion}}</p>
    </div>

    <br>
    <br>
    <div class="valoracion">
        <h4>Valoración</h4>
        <p>{{$recetas_coreana->valoracion_text}} </p>
        <br>
        <p>Valoración : {{$recetas_coreana->valoracion_int}}</p>
    </div>
    <br>

</div>
    </div>



   <!-- <footer>
            <h3>Todo los derechos reservados</h3>
            <p>Emilio Hidalgo Belmonte</p>
        </footer>-->

        <script src="js/app.js"></script>
    </body>
</html>




