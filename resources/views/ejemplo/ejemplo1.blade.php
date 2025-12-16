@extends("_layout")
@section("contenido")
{{ $texto }} <-- normal
{!! $texto !!} <-- muestra literalmente.

@if($color=="rojo") 
El color es rojo<br/>
El color es rojo<br/>
El color es rojo<br/>
@else()
El color no es rojo
@endif()
<hr/>
<ul>
@foreach($paises as $pais)
    <li>{{ $pais }}</li>
@endforeach()
</ul>
@endsection