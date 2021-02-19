@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-dashboard header-icon"></i> 
                    Hi {{ auth()->user()->first_name }}, here is your progress!
                </div>
                <div class="card-body bg-custom-light">
                    <div class="row m-0 p-0">
                    <?php $i = 0; ?>
                    @foreach ($stats as $stat)
                        <?php ++$i; ?>
                        <div class="p-2 col @if ($i == count($stats)) col-md-12 @else col-md-6 @endif m-0">
                            <a href="{{ $stat['url'] }}" class="m-0 p-0 no-decoration">
                                <div class="alert m-0 @if($stat['percent'] >= 75) alert-success @elseif ($stat['percent'] >= 50) alert-primary @else alert-danger @endif">
                                    <h5 class="card-title">
                                        <i class="{{ $stat['icon-classes'] }}"></i> 
                                        {{ $stat['name'] }}
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $stat['description'] }}</h6>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated  text-dark
                                        @if($stat['percent'] >= 75) bg-success @elseif ($stat['percent'] >= 50) bg-primary @else bg-danger @endif" 
                                        role="progressbar" aria-valuenow="{{ $stat['percent'] }}" aria-valuemin="1" aria-valuemax="3" style="width: {{ $stat['percent'] }}%">
                                            {{ $stat['percent'] }}%
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
