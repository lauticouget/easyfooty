@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row ">

        <div class="col-md-6 ">

            <figure class="text-center">

                <a href="{{route('player.edit', Auth::user()->id)}}"> <img src="{{  (Auth::user()->profileImgPath()) }}" class="figure-img img-fluid img-responsive img-thumbnail rounded-circle" alt="Responsive image"> </a>

                <figcaption class="figure-caption"><i class="" aria-hidden="true"> Click your image to edit your profile</i> <i class="fa fa-info" aria-hidden="true"></i></figcaption>

            </figure>

        </div>

        <div class="col-md-6 mx-auto text-center">

            <h1 class="display-1"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>

            <div class="mb-3">
                <i  aria-hidden="true"> Here are your player specifications</i> <i class="fa fa-info" aria-hidden="true"></i>
            </div>

            <dd class="fa-ul">

                <li class="display-5">
                    <p> <strong>Height: </strong> {{ Auth::user()->height }}  Cms.</p>
                </li>

                <li class="display-5">
                    <p> <strong>Favorite Position: </strong> {{ Auth::user()->favorite_position }}  </p>
                </li>

                <li class="display-5">
                    <p> <strong>Strong Foot: </strong> {{ Auth::user()->strong_foot }}  </p>
                </li>

                <li class="display-5">
                    <p> <strong>Location: </strong> {{ Auth::user()->location }}  </p>
                </li>

                <li class="display-5">
                    <p> <strong>Phone Number: </strong> {{ Auth::user()->phone }}  </p>
                </li>

            </dd>
        </div>

    </div>

</div>

@endsection
