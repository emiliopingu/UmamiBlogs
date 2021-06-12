@if (count($recetas_china))
    @foreach ($recetas_china as $item)
        <p class="p-2 border-bottom">{{$item->id .' - '. $item->nombre}}</p>
    @endforeach
@endif
