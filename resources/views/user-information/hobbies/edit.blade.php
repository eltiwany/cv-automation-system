@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card m-0">
                <div class="card-header h4 alert-default">
                    Update Information for Hobbies: {{ $hobby->name }}
                </div>
                <div class="card-body">
                    <form action="/hobbies/{{ $hobby->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" name="name" value="{{ $hobby->name }}" id="name" placeholder="First Name" class="form-control"/>
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