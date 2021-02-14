@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Personal Information</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('personal-information') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Phone_Number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="Phone_Number" type="number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="Phone_Number" value="{{ old('phone_number') }}" required>

                                @if ($errors->has('phone number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DateOf_Birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">   
                               <input type="date" id="DateOf_Birth" name="DateOf_Birth" class="form-control">  
                               <span class="invalid-feedback" role="alert">
                                        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for ="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>                    
                            <div class="col-md-6">
                                <select name="Address" id="Address" class="form-control">
                               <option value="Dar-es-salaam">Dar-es-salaam</option> 
                               <option value="Dodoma">Dodoma</option> 
                               <option value="Tanga">Tanga</option> 
                               </select>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for ="Martial_Status" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>                    
                            <div class="col-md-6">
                            <select name="Martial_Status" id="Martial_Status" class="form-control">
                               <option value="single">Single</option> 
                               <option value="married">Married</option> 
                               <option value="divorced">Divorced</option> 
                               </select>
                             </div>
                        </div>

                        <div class ="form-group row">
                           <label for ="Gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>                    
                            <div class="col-md-6">
                            <input type="radio" name="Gender" value="male"> 
                               <label for="male" class="form-check-inline">Male</label> 
                                 <input type="radio" name="Gender" value="female"> 
                                    <label for="female" class="form-check-inline">Female</label> 
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