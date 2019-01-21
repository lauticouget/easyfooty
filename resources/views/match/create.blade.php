@extends('layouts.app')

@section('content')
 <div class="container"  >
    <div class="jumbotron">
        <h1>Create Your Match</h1>
        <form action="{{ route('match.store') }}">
            <div class="form-group">
                <label >Set up your Match options:</label>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01">Field</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        @foreach ($fields as $field)
                        <option value="{{ $field->id }}">{{$field->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Date</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        @foreach ($dates as $date)
                        <option value="{{ $date }}">{{$date}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        @foreach ($dates as $date)
                        <option value="{{ $date }}">{{$date}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Pick one team to play with</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Adversary Team ( optional )</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{$team->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </form>
    </div>
 </div>
@endsection
