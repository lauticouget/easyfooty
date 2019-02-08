
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="jumbotron">
        <a class="btn btn-light main-page-btn" href="{{ route('match.create') }}"><h1 class="h1"> Create Match </h1></a>
    </div>

    <div class="jumbotron">

        <h1 class="h1 main-page-title">Matches</h1>

        <hr>

        <div class="table-responsive ">

          <table class="table table-striped " >


            <thead class="thead-dark" >

              <tr>

                <th scope="col">Match</th>

                <th scope="col">Team 1</th>

                <th scope="col">Score</th>

                <th scope="col">Team 2</th>

                <th scope="col">Field</th>

                <th scope="col">Date</th>

              </tr>

            </thead>

            <tbody >

                <tr>
                    <td colspan="100" class="text-center"><i class="fas fa-angle-double-left"></i><i class="fas fa-angle-double-right"></i>
                    </td>
                </tr>
            @foreach ($matches as $match)

                <tr>

                    <td> <a href="{{ route('match.show', [$match->id]) }}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>

                    <td><a href="{{ route('team.show', [$match->team1->id]) }}">{{ $match->team1->name }}</a></td>

                    <td>{{ $match->score1->goals }} - {{ $match->score2->goals }}</td>

                    <td><a href="{{ route('team.show', [$match->team2->id]) }}">{{ $match->team2->name }}</a></td>

                    <td>{{ $match->field->name }}</td>

                    <td>{{ $match->date }}</td>
                </tr>

            @endforeach

            </tbody>

          </table>

        </div>

          {!! $matches->links() !!}
    </div>

</div>

@endsection
