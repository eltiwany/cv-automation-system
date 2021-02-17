@extends('layouts.print-app')

@section('content')
<div class="container-print">
    <div class="custom-paper m-auto" id="cv">
        <div class="header-paper1 p-3">
            <div class="img-profile">
                @if (!empty(auth()->user()->logo_url))
                    <p>    
                        <img src="{{ asset('storage/profile_images/' . auth()->user()->logo_url) }}"> 
                    </p>
                @else
                    <p>
                        <img src="{{ asset('storage/profile_images/default.png') }}"> 
                    </p>
                @endif
            </div>
            <div class="heading">
                @if ($user_exist)
                    <h2>{{ strtoupper(auth()->user()->first_name . " " . auth()->user()->middle_name . " " . auth()->user()->last_name) }}</h2>
                    <p>{{ $personal_information->Email }} | {{ $personal_information->Phone_Number }} | {{ $personal_information->Address }}</p>
                @else
                    <h2>Full Name</h2>
                    <p>Email | Number | Address</p>
                @endif
            </div>
        </div>
    </div>

    <div class="body-paper1">

        {{-- Summary about yourself --}}
        <div class="section">
            <div class="body-heading">
                <h4>Summary</h4>
                <div class="box-hidden">Summary</div>
                <div class="border-center"></div>
            </div>
            <p class="full-width">A summary is a brief statement or restatement of main points, especially as a conclusion to a work: a summary of a chapter. A brief is a detailed outline, by heads ...</p>
        </div>
    </div>
@endsection