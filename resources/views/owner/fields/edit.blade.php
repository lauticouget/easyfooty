@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $field->name }} - Editar</div>

                <div class="card-body">
                    <form method="POST" action="/canchas/{{ $field->id }}/editar">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $field->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Ubicación') }}</label>

                            <div class="col-md-6">
                            <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location"  value="{{$field->location}} "  required>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Dirección y Nº') }}</label>

                            <div class="col-md-6">
                            <input id="adress" type="text" class="form-control{{ $errors->has('adress') ? ' is-invalid' : '' }}" name="adress"  value="{{$field->adress}} "  required>

                                @if ($errors->has('adress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photopath" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                                <input id="photopath" type="file" class="form-control{{ $errors->has('photopath') ? ' is-invalid' : '' }}" name="photopath" value="{{ old('photopath') }}" >

                                @if ($errors->has('photopath'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photopath') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
