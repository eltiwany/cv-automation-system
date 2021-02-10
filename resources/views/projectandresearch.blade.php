@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill in your Hobbies in here....</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form action="" method="POST" >
                    @csrf
                    <label for="projectname"> List your Hobbies </label>
                      &nbsp &nbsp &nbsp<input type="textbox" id="projectname" size="50" name="projectname">
                      <br>
                      <label for="timestarted"> Second Hobbie </label>
                      <input type="text" id="timestarted" name="timestarted">
                      <br>
                      <label for="timeended"> Third Hobbie </label>
                      &nbsp&nbsp&nbsp<input type="text" id="timeended" name="timeended">
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
