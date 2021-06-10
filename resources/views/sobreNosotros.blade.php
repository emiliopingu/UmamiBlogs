<!DOCTYPE html>
<html>

<head>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="es"></html>
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/estiloFooter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estiloSobreNosotros.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial/scale=1.0">
    <title>Sobre Nosotros</title>
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

            <div class="item-0">
                <img alt="Logo Index" src="img/sobreNosotros.png">
            </div>

            <div class="item-1">

                <h1>Sobre Nosotros</h1>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit congue vitae,
                    vehicula facilisi praesent dapibus dui molestie metus.
                    Mi mauris egestas augue imperdiet sociis porttitor, placerat urna
                    facilisis bibendum orci nisl penatibus, euismod ad parturient fermentum tellus.
                     Leo eros imperdiet turpis phasellus fermentum nec aenean</p>

                     <div class="item-2">
                        <a title="Yotube" href="http://www.youtube.com">
                            <img src="img\imgYoutube.png" alt="Youtube" />
                        </a>
                        <a title="twitter" href="http://www.twitter.com">
                            <img src="img\imgTwitter.png" alt="twitter" />
                        </a>
                        <a title="Instragram" href="http://www.instagram.com">
                            <img src="img\imgInstagram.png" alt="instagram" />
                        </a>
                        <a title="Facebook" href="http://www.facebook.com">
                            <img src="img\imgFacebook.png" alt="facebook" />
                        </a>
                    </div>
            </div>


          </div>



    <footer>
        <h3>Todo los derechos reservados</h3>
        <p>Emilio Hidalgo Belmonte</p>
    </footer>

    <script src="{{ asset('js/funciones.js')}}"></script>
</body>

</html>
