<div class="m-auto" id="cv">
    <div class="{{ $template['heading_class'] }} p-3">
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