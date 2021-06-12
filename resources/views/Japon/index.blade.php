@extends('layout')

@section('content')
   <div class="content">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas Japonesas</h2>
            </div>
        </div>
    </div>
    <div class="img1">
    <table class="table table-bordered">
        @foreach ($recetas_japonesa as $receta)

        <td>
        <img alt="{{ $receta->nombre }}" src="{{ $receta->imagen}}" class="imagenReceta">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
        <a class="btn btn-info" href="{{route('recetas_japonesas.show', $receta->id) }}">Ver receta</a>

        </td>
        @endforeach
    </table>
    </div>
    <div class="img2">
        <table class="table table-bordered">
         @foreach ($recetas_japonesa as $receta)
            <td>
                <tr> <img alt="{{ $receta->nombre }}"   src="{{ $receta->imagen}}" class="imagenReceta"></tr>
                <tr><h5>{{ $receta->nombre }}</h5></tr>
                <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
                <a class="btn btn-info" href="{{route('recetas_japonesas.show', $receta->id) }}">Ver receta</a>
                <br>
                <br>
            </td>
        @endforeach
    </table>
    </div>
    </div>
        {!! $recetas_japonesa->links('vendor.pagination.bootstrap-4') !!}
    @endsection
    </div>
