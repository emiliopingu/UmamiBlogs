@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas Tailandesas</h2>
            </div>

        </div>
    </div>

    <table class="table table-bordered">
        @foreach ($recetas_tailandesa as $receta)
        <td>
            <img src="{{ $receta->imagen}}" class="imagenReceta">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
        <a class="btn btn-info" href="{{route('recetas_tailandesas.show', $receta->id) }}">Ver receta</a>

        </td>
        @endforeach
    </table>

    {!! $recetas_tailandesa->links() !!}


@endsection
