@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <a href="{{ route('team.create') }}"><h1 class="h1"> Create team! </h1></a>
    </div>

    <div class="jumbotron">
        <h1 class="h1">Name</h1>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Captain</th>
                <th scope="col">Team 1</th>
                <th scope="col">Score</th>
                <th scope="col">Team 2</th>
                <th scope="col">Field</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            @foreach ($teams as $team)
            <tbody>

                <tr>
                    <td><a href="{{ route('team.show', [$team->id]) }}">  {{ $team->name}} </a></td>
                </tr>
                <tr>
                    <td><a href="{{ route('user.show', [$team->captain->id]) }}">  {{ $team->captain->first_name}}.{{ $team->captain->last_name}} </a></td>
                </tr>
            </tbody>
            @endforeach
          </table>
          {!! $teams->links() !!}
    </div>
</div>

@endsection
