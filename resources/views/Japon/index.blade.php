@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas japonesas</h2>
            </div>

        </div>
    </div>

    <table class="table table-bordered">
        @foreach ($recetas_japonesas as $receta )
        <td>
            <img src="{{ $receta->imagen}}" class="imagenReceta">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
        <a class="btn btn-info" href=" ">Ver receta</a>
        </td>
        @endforeach
    </table>

    {!! $recetas_japonesas->links() !!}


@endsection
