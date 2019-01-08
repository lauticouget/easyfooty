@extends('layouts.app')

@section('content')
<div class="offset-1">




    <h2>{{ $field->name }}</h2>
    <h4>Ubicación: {{ $field->location }}</h4>
    <h4>Dirección: {{ $field->adress }}</h4>
    <h4>Cantidad de partidos: " Hay que agregar la relación con los partidos"</h4>
    
    {{-- {{dd($field->matches['id'])}} --}}
    <a href="/canchas/{{$field->id}}/editar">Editar Cancha</a>
    <br>
    <br>
    {{-- <form action="/fields/{{ $field->id }}" method="post" value="DELETE">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Eliminar Pelicula</button>
    </form> --}}
    
    <br>
    <a href="{{ route('index-field') }}">Volver a Index de canchas</a>
</div>


@endsection
