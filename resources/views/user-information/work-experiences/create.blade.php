@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
                <div class="card-header h4 alert-default">
                    Add Work Experience
                </div>
                <div class="card-body">
                    <form action="/referees" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Job Title</label>
                                <input type="text" name="name" value="{{ old('first_name') }}" id="name" placeholder="Job Title" class="form-control"/>
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="second_name">Time Started </label>
                                <input type="text" name="TimeStarted" value="{{ old('second_name') }}" id="TimeStarted" placeholder="Time Started" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="phone_number">Time Ended </label>
                                <input type="text" name="TimeEnded" value="{{ old('phone_number') }}" id="TimeEnded" placeholder="Time Ended" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="email">Company Name and Description</label>
                                <input type="text" name="Description" value="{{ old('email') }}" id="Description" placeholder="Company Name and Deescription" class="form-control"/>
                            </div>

                            <div class="form-group col-md-12 mb-0">
                               <button type="submit" class="btn btn-primary mb-0 pull-right">
                                   <i class="fa fa-plus-square"></i> Add
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