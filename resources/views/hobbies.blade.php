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
                      <label for="firsthobbie"> List your Hobbies </label>
                      &nbsp &nbsp &nbsp<input type="textbox" id="firsthobby"  name="firsthobby">
                      <br>
                      <!--<label for="secondhobbie"> Second Hobbie </label>
                      <input type="text" id="sechobby" name="sechobby">
                      <br>
                      <label for="thirdhobbie"> Third Hobbie </label>
                      &nbsp&nbsp&nbsp<input type="text" id="thirdhobby" name="thirdhobby">
                      <br>
                      <label for="fourthhobbie"> Fourth Hobbie </label>
                      &nbsp&nbsp<input type="text" id="fourthhobby" name="fourthhobby">
                      -->
                      <br>
                      <input type="submit" style="background-color:green" value="Submit">

                      
                    
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
