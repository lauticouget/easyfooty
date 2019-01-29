@extends('layouts.app')

@section('content')

<div class="container offset-1 mt-5">
    <h1>^{{ $team->name }}</h1>

    <h5>Capitán del equipo: {{$team->captain->first_name}}</h5>

    @if (Auth::id() == $team->captain->id) {{--CONDICION SOLO AGREGAR SI ES CAPITAN DEL EQUIPO Y AUTENTIFICADO--}}

        @if ($team->users->count() < 5)  {{--CONDICION SOLO AGREGAR SI HAY MENOS DE 5 JUGADORES --}}

            <form action="{{route ('team.add.player')}}" method="POST" >

                @csrf

                <input type="hidden" value="{{$team->id}}" name="teamid">

                <select name="userid" id="">

                @foreach ($users as $user)

                <option value="{{$user->id}}" >{{$user->first_name}}</option>

                @endforeach

                </select>

            <button class="btn btn-primary">Agregar Jugador</button>

            </form>

        @endif

    @endif

    <div class="jumbotron">
        <h2 class="display-5 mb-5">integrantes del equipo</h2>

        @foreach ($team->users as $user)

        <a href="#"><li>{{$user->first_name}}</li></a>

        @if (Auth::id() == $team->captain->id)

        <form action="{{route ('team.remove.player')}}" method="POST" >

            @csrf
            <input type="hidden" value="{{$user->id}}" name="userid">

            <input type="hidden" value="{{$team->id}}" name="teamid">

            <button class="btn btn-danger">Eliminar</button>

        </form>

        @endif

        <hr>

        @endforeach

        <br>

        @if (Auth::id() == $team->captain->id) {{--CONDICION SOLO AGREGAR SI ES CAPITAN DEL EQUIPO Y AUTENTIFICADO--}}

            <a class="btn btn-primary" href="/team/edit/{{$team->id}}" role="button">Editar Equipo</a>

        @endif

        <br>

        <br>

        <a class="btn btn-primary" href="{{ route('player.show.teams', Auth::id() ) }}" role="button">Mis Equipos</a>

    </div>

</div>

@endsection
