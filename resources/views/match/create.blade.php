@extends('layouts.app')

@section('content')
 <div class="container"  >
    <div class="jumbotron">
        <h1>Create Your Match</h1>
        <form action="{{ route('match.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label >Set up your Match options:</label>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Field</label>
                    </div>
                    <select name='field' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled>Select</option>
                        @foreach ($fields as $field)
                        <option value="{{ $field->id }}">{{$field->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Date</label>
                    </div>
                    <select name='date' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled >Select</option>
                        @foreach ($dates as $date)
                        <option value="{{ $date }}">{{ Carbon\Carbon::parse($date)->format('l jS \\of F Y') }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Time</label>
                    </div>
                    <select name='time' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled >Select</option>
                        @foreach ($hours as $hour)
                        <option value="{{ $hour->format('H:i:s') }}">{{ $hour->format('H') }}Hrs</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pick one team to play with</label>
                    </div>
                    <select name='team1' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled >Select</option>
                        @foreach ($userTeams as $userTeam)
                        <option value="{{ $userTeam->id }}">{{ $userTeam->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Adversary Team ( optional )</label>
                    </div>
                    <select name='team2' class="custom-select" id="inputGroupSelect01">
                        <option selected disabled >Select</option>
                        @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{$team->name}}</option>
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
