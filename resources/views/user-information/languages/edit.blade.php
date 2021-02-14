@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-check-circle header-icon"></i>
                    Update Languages
                </div>

                <div class="card-body bg-custom-light">
                    <form method="POST" action="/languages/{{ $languages->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $languages->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
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
