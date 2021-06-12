@extends('layout')

@section('content')
   <div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas Chinas</h2>
            </div>
        </div>
    </div>

    <!-- html agregado-->
    <div class="col-8">
        <div class="input-group">
            <input type="text" class="form-control" id="texto" placeholder="Ingrese nombre">
            <div class="input-group-append"><span class="input-group-text">Buscar</span></div>
        </div>
        <div id="resultados" class="bg-light border"></div>
    </div>
<!-- fin del html agregado-->




    <div class="img1">
    <table class="table table-bordered">
        @foreach ($recetas_china as $receta)

        <td>
        <img alt="{{ $receta->nombre }}" src="{{ $receta->imagen}}" class="imagenReceta">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
        <a class="btn btn-info" href="{{route('recetas_chinas.show', $receta->id) }}">Ver receta</a>

        </td>
        @endforeach
    </table>
    </div>
    <div class="img2">
        <table class="table table-bordered">
         @foreach ($recetas_china as $receta)
            <td>
                <tr> <img alt="{{ $receta->nombre }}"   src="{{ $receta->imagen}}" class="imagenReceta"></tr>
                <tr><h5>{{ $receta->nombre }}</h5></tr>
                <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
                <a class="btn btn-info" href="{{route('recetas_chinas.show', $receta->id) }}">Ver receta</a>
                <br>
                <br>
            </td>
        @endforeach
    </table>
    </div>
    </div>
        {!! $recetas_china->links('vendor.pagination.bootstrap-4') !!}
    @endsection
    </div>

<script>
    window.addEventListener('load',function(){
        document.getElementById("texto").addEventListener("keyup", () => {
            if((document.getElementById("texto").value.length)>=1)
                fetch('/recetas_chinas/buscador?texto=${document.getElementById("texto").value}',{ method:'get' })
                .then(response  =>  response.text() )
                .then(html      =>  {   document.getElementById("resultados").innerHTML = html  })
            else
                document.getElementById("resultados").innerHTML = ""
        })
    });
    </script>




