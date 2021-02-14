@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-check-circle header-icon"></i>
                    Update Education Background
                </div>

                <div class="card-body bg-custom-light">
                    <form method="POST" action="/education-backgrounds/{{ $education_background->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $education_background->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                             <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                              <div class="col-md-6">
                                <input id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ $education_background->type }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="TimeStarted" class="col-md-4 col-form-label text-md-right">{{ __('Time Started') }}</label>

                            <div class="col-md-6">
                                <input id="TimeStarted" type="number" class="form-control{{ $errors->has('TimeStarted') ? ' is-invalid' : '' }}" name="TimeStarted" value="{{ $education_background->TimeStarted }}" required autofocus>

                                @if ($errors->has('TimeStarted'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TimeStarted') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="TimeEnded" class="col-md-4 col-form-label text-md-right">{{ __('Time Ended') }}</label>

                            <div class="col-md-6">
                                <input id="TimeEnded" type="number" class="form-control{{ $errors->has('TimeEnded') ? ' is-invalid' : '' }}" name="TimeEnded" value="{{ $education_background->TimeEnded }}" required>

                                @if ($errors->has('TimeEnded'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TimeEnded') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div classs="form-group row">
                            <input type="submit" value="save" class="btn btn-outline-dark" >
                            <br>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                
@endsection
