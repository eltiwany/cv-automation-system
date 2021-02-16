@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
        <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-suitcase"></i>
                    Add Work Experience
                </div>
                <div class="card-body bg-custom-light">
                    <form action="/work-experiences" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Job Title</label>
                                <input type="text" name="name"  id="name" placeholder="Job Title" class="form-control"/>
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="second_name">Time Started </label>
                                <input type="text" name="time_started"  id="time_started" placeholder="Time Started" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="phone_number">Time Ended </label>
                                <input type="text" name="time_ended"  id="time_ended" placeholder="Time Ended" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="email">Company Name and Description</label>
                                <input type="text" name="description"  id="description" placeholder="Company Name and Deescription" class="form-control"/>
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