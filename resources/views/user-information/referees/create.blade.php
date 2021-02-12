@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
                <div class="card-header h4 alert-default">
                    Add Referee
                </div>
                <div class="card-body">
                    <form action="/referees" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control"/>
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="second_name">Other Names</label>
                                <input type="text" name="second_name" id="second_name" placeholder="Other Names" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control"/>
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