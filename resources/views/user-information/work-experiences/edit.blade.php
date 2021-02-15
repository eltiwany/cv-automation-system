@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
                <div class="card-header h4 alert-default">
                    Update Information for Work Experience: {{ $work_experience->name . " "  }}
                </div>
                <div class="card-body">
                    <form action="/work-experiences/{{ $work_experience->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $work_experience->name }}" id="name" placeholder="name" class="form-control"/>
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="time_started">Time Started</label>
                                <input type="text" name="time_started" value="{{ $work_experience->TimeStarted }}" id="time_started" placeholder="Time Started" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="time_ended">Time Ended</label>
                                <input type="text" name="time_ended" value="{{ $work_experience->TimeEnded }}" id="time_ended" placeholder=" Time Ended" class="form-control"/>
                            </div> 

                            <div class="form-group col-md-6">
                                <label for="Description">Description</label>
                                <input type="text" name="Description" value="{{ $work_experience->Description }}" id="Description" placeholder="Description" class="form-control"/>
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