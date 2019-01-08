@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- {{dd($fields)}} --}}
                <div class="card-header">Esta es la lista de MIS CANCHAS</div>
                    @foreach ($fields as $field)
                        <ul><a href="canchas/{{$field->id}}/detalle">{{$field->name}}</a> </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
