@extends('layouts.app')

@section('content')

<div class="container">

    <div class="jumbotron">

        <form method="POST" enctype="multipart/form-data" action="{{ route('player.update', $player) }}">
        @method('PATCH')
        @csrf


            <div class="form-group">
                <figure><img src="{{ asset(Auth::user()->profile_img_path ? : asset ( 'storage/default_profile_picture.jpg' ) )}}" class="figure-img img-fluid img-responsive img-thumbnail rounded-circle" alt="Responsive image"></figure>
            </div>

            @include('errors')

            <div class="form-group">
                <label for="profileImage">Profile image:</label>
                <input name='profileImg' type="file" class="form-control" id="profileImage" >
                <small id="emailHelp" class="form-control-file">You should keep your image updated!  </small>
            </div>

            <div class="form-group">
                <label for="firstName">First name:</label>
                <input name="first_name" type="text" class="form-control" id="firstName" placeholder="{{$player->first_name}}">
            </div>

            <div class="form-group">
                <label for="lastName">Last name:</label>
                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="{{$player->last_name}}">
            </div>

            <div class="form-group">
                <label for="phoneNumber">Phone number:</label>
                <input name="phone" type="number" size="10" class="form-control" id="phoneNumber" placeholder="{{$player->phone}}">

            </div>

            <div class="form-group">

                <label for="height">Height:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">Cm</span>
                    </div>

                    <input name="height" type="number" pattern="" class="form-control" id="height" placeholder="{{$player->height}}" aria-describedby="inputGroupPrepend" >

                </div>

                <small id="helpId" class="text-muted">Please ensure to put your real measures</small>

            </div>

            <div class="form-group">
                <label for="favoritePosition">Location:</label>

                <select name="location" class="custom-select">
                    <option selected disabled>{{ $player->location }}</option>
                    @foreach ($locations as $location)
                    <option value="{{$location}}">{{ $location }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="favoritePosition">Favorite Position:</label>

                <select name ="favorite_position" class="custom-select" >
                    <option selected disabled>{{ $player->favorite_position }}</option>
                    @foreach ($positions as $position)
                    <option value="{{$position}}">{{ $position }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="favoritePosition">Strong foot:</label>

                <select name="strong_foot" class="custom-select">
                    <option selected disabled>{{ $player->strong_foot }}</option>
                    @foreach ($feet as $foot)
                    <option value="{{$foot}}">{{ $foot }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>

@endsection


