@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Scheduled Match</h1>
            <p class="lead">This are your match settings</p>
            <hr class="my-2">
            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body ">
                        <h4 class="card-title display-3">{{ $team1->name }}</h4>

                        @foreach ($team1->users as $user)

                        <p class="card-text">{{ $user->first_name }}</p>

                        @endforeach
                    </div>
                </div>
                <div class="card p-3 ">
                    <div class="card-body text-center" big>
                        <span class="card-title display-1 ">{{ $match->score1->goals }} - {{ $match->score2->goals }}</span>
                        <span class="card-text badge badge-light">Date: {{ $match->date }}</span>
                        <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">{{ $match->field->name }}</a>
                    </div >
                </div>
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body ">
                        <h4 class="card-title display-3">{{ $team2->name }}</h4>

                        @foreach ($team2->users as $user)

                        <p class="card-text">{{ $user->first_name }}</p>

                        @endforeach
                    </div>
                </div>

        </div>
    </div>
@endsection
