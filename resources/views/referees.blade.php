@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List all your Referees Here...</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <form action="" method="POST" >
                    @csrf
                    <label for="workname"> First Name </label>
                      &nbsp <input type="textbox" id=firstname  name="firstname">
                      <br>
                      <label for="timestarted"> Second Name </label>
                      &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp<input type="text" id="secondname" name="secondname">
                      <br>
                      <label for="timeended"> Email </label>
                      &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="email" id="email" name="email">
                      <br>
                      <br>
                      <label for="workdescription"> Phone Number </label>
                      &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type="text" id="phone" name="phone">
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
