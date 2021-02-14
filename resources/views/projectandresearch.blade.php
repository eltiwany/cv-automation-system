@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List your Projects here. This includes completed and ongoing</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form action="" method="POST" >
                    @csrf
                    <label for="projectname"> Project Title/Name </label>
                      &nbsp <input type="textbox" id="projectname"  name="projectname">
                      <br>
                      <label for="timestarted"> Time Started </label>
                      &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<input type="text" id="timestarted" name="timestarted">
                      <br>
                      <label for="timeended"> Time Ended </label>
                      &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="text" id="timeended" name="timeended">
                      <br>
                      
                      
                      <br>
                      <input type="submit" style="background-color:green" value="Submit">

                      
                    
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
