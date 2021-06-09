@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas Chinas</h2>
            </div>

        </div>
    </div>
    <div class="col-8">
        <div class="input-group mb-3">
         <input type="text" class="form-control" id="texto" placeholder="Ingrese la receta" >
        <div class="input-group-append">
  </div>
  </div>
        <div id="resultados" class="bg-light border">
</div>
    <table class="table table-bordered">
        @foreach ($recetas_china as $receta)
        <td>
            <img src="{{ $receta->imagen}}" class="imagenReceta">
           <h5>{{ $receta->nombre }}</h5>
        <p><strong> * Valoracion: {{ $receta->valoracion_int}} /10</strong></p>
            <form action="{{ route($receta->id) }}" method="POST">
        <a class="btn btn-info" href="{{route('China.show',$receta->id) }}">Ver receta</a>
        </form>
        <?php
            /*{{ route('china.show') }}
            //Se le da un valor a las variables
        $a = "{{ $receta->nombre }}";
        $b = "{{ $receta->valoracion_int}}";
        echo "<a href='pagina1.blade.php?a=$a&b=$b'>Enviar variables</a>";*/
           ?>
        </td>
        @endforeach
    </table>
    </div>



    {!! $recetas_china->links() !!}

@endsection


