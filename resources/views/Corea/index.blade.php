@extends('layout')

@section('content')
   <div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas Coreanas</h2>
                <br>
            </div>
        </div>
    </div>


    <div class="col-8">
        <div class="input-group">
        <label for="q" class="sr-only">Search</label>
        <input id="q" type="text" name="q" value="" class="form-control" placeholder="Ingrese nombre">
        <br>
        </div>
        <div id="resultados" class="bg-light border"></div>
    </div>






    <div class="img1">
    <table class="table table-bordered">
        @foreach ($recetas_coreana as $receta)

        <td  class="table-active">
        <img alt="{{ $receta->nombre }}" src="{{ $receta->imagen}}" class="imagenReceta" alt="{{ $receta->nombre }}">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
        <a class="btn btn-dark" href="{{route('recetas_coreanas.show', $receta->id) }}">Ver receta</a>

        </td>
</br>

        @endforeach
    </table>
    </div>
    <div class="img2">
        <table class="table table-bordered">
         @foreach ($recetas_coreana as $receta)
            <td>
                <tr> <img alt="{{ $receta->nombre }}"   src="{{ $receta->imagen}}" class="imagenReceta" alt="{{ $receta->nombre }}"></tr>
                <tr><h5>{{ $receta->nombre }}</h5></tr>
                <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
                <a class="btn btn-dark" href="{{route('recetas_coreanas.show', $receta->id) }}">Ver receta</a>
                <br>
                <br>
            </td>
        @endforeach
    </table>
    </div>
    </div>
        {!! $recetas_coreana->links('vendor.pagination.bootstrap-4') !!}
    @endsection
    </div>

<script>
   /* window.addEventListener('load',function(){
        document.getElementById("texto").addEventListener("keyup", () => {
            if((document.getElementById("texto").value.length)>=1)
                fetch('/recetas_chinas/buscador?texto=${document.getElementById("texto").value}',{ method:'get' })
                .then(response  =>  response.text() )
                .then(html      =>  {   document.getElementById("resultados").innerHTML = html  })
            else
                document.getElementById("resultados").innerHTML = ""
        })
    });*/
    </script>
