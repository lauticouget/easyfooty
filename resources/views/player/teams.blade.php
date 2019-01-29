@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <a href="{{ route('team.create') }}"><h1 class="h1"> Create team! </h1></a>
    </div>

    <div class="jumbotron">
        <h1 class="h1">Your Teams</h1>
        <hr>
        <table class="table">
            <thead>
              <tr>

                <th scope="col">Name</th>

                <th scope="col">Captain</th>

              </tr>
            </thead>

            <tbody>

                @foreach ($teams as $team)

                <tr>

                    <td><a href="{{ route('team.show', [$team->id]) }}">  {{ $team->name}} </a></td>

                    <td><a href="{{ route('player.show', [$team->captain->id]) }}">  {{ $team->captain->first_name}}  {{ $team->captain->last_name}} </a></td>

                </tr>

                @endforeach

            </tbody>

        </table>

          {!! $teams->links() !!}

    </div>

</div>

@endsection
