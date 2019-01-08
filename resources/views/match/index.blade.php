@extends('layouts.app') 

@section('content')


<div class="container">
    <div class="jumbotron">
        <a href="{{ route('match.create') }}"><h1 class="h1"> Create Match! </h1></a>
    </div>

    <div class="jumbotron">
        <h1 class="h1">Matches</h1>
        <hr>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Team 1</th>
                <th scope="col">Team 2</th>
                <th scope="col">Score</th>
                <th scope="col">Field</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            @foreach ($matches as $match)
            <tbody>
                @php
                    dd($match->field())
                @endphp
                <tr>
                    <a href="{{ route('match.show', [$match->id]) }}"><th scope="row">{{ $match->id }}</th></a>
                    <a href="{{ route('team.show', [$match->team1()->id]) }}"><td>{{ $match->team1()->name }}</td></a>
                    <a href="{{ route('team.show', [$match->team2()->id]) }}"><td>{{ $match->team2()->name }}</td></a>
                    
                    <td>{{ $match->score1()->goals }}.{{ $match->score2()->goals }}</td>
                    <td>{{ $match->field()->name }}</td>
                    <td>{{ $match->date }}</td>
                </tr>
            </tbody>
            @endforeach
          </table>
          {!! $matches->links() !!}
    </div>
</div>
@endsection