@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
                <div class="card-header h4 alert-default">
                    Update Information for Project and Researches: {{ $pandr->First_Name . " "  . $pandr->Second_Name}}
                </div>
                <div class="card-body">
                    <form action="/project-researches/{{ $pandr->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name"> Name</label>
                                <input type="text" name="name" value="{{ $pandr->name }}" id="name" placeholder="name" class="form-control"/>
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="TimeSta">Other Names</label>
                                <input type="text" name="time_started" value="{{ $pandr->time_started }}" id="time_started" placeholder="time_started" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="time_ended" value="{{ $pandr->time_ended}}" id="time_ended" placeholder="time_ended" class="form-control"/>
                            </div> 

                            

                            <div class="form-group col-md-12 mb-0">
                               <button type="submit" class="btn btn-primary mb-0 pull-right">
                                   <i class="fa fa-check-circle"></i> Update
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