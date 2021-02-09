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

                      <label for="firsthobbie"> First Hobbie </label>
                      &nbsp &nbsp &nbsp<input type="text" id="firsthobbie" name="firsthobbie">
                      <br>
                      <label for="secondhobbie"> Second Hobbie </label>
                      <input type="text" id="sechobbie" name="sechobbie">
                      <br>
                      <label for="thirdhobbie"> Third Hobbie </label>
                      &nbsp&nbsp&nbsp<input type="text" id="thirdhobbie" name="thirdhobbie">
                      <br>
                      <label for="fourthhobbie"> Fourth Hobbie </label>
                      &nbsp&nbsp<input type="text" id="fourthhobbie" name="fourthhobbie">
                      <br>
                      <input type="submit" value="Submit">

                      
                    
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
