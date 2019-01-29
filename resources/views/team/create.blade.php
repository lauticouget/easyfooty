@extends('layouts.app')

@section('content')
 <div class="container"  >
    <div class="jumbotron">
        <h1>Create Your Team</h1>
        <form action="{{ route('team.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label >Set up your Team</label>

                <div class="form-group">
                    <label class="sr-only" for="captain">You are set up to be the Captain!</label>
                <input type="hidden" class="form-control" name="captain" id="captain" value="{{ $thisPlayer->id }}">
                </div>

                <div class="input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Team's Name:</span>
                    </div>
                    <input type="text"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Player 1:</label>
                    </div>
                    <select name='player1' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled>Select</option>
                        @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{$player->first_name}} {{$player->last_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Player 2:</label>
                    </div>
                    <select name='player2' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled>Select</option>
                        @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{$player->first_name}} {{$player->last_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Player 3:</label>
                    </div>
                    <select name='player3' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled>Select</option>
                        @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{$player->first_name}} {{$player->last_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Player 4:</label>
                    </div>
                    <select name='player4' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled>Select</option>
                        @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{$player->first_name}} {{$player->last_name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

                @include('errors')

            </div>
        </form>
    </div>
 </div>
@endsection
