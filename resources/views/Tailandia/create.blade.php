@extends('layoutCreate')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Insertar receta</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('recetas_tailandesas.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('recetas_tailandesas.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre" value={{ old("nombre") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>
                <input type="text" name="descripcion" class="form-control" placeholder="descripcion" value={{ old("descripcion") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>descripcion:</strong>
                <input type="text" name="ingredientes" class="form-control" placeholder="ingredientes" value={{ old("ingredientes") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>valoracion_text:</strong>
                <input type="text" name="valoracion_text" class="form-control" placeholder="valoracion_text" value={{ old("valoracion_text") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>valoracion_int:</strong>
                <input type="text" name="valoracion_int" class="form-control" placeholder="valoracion_int" value={{ old("valoracion_int") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="text" name="imagen" class="form-control" placeholder="imagen" value={{ old("imagen") }}>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
