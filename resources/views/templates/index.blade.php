@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-folder header-icon"></i>
                    Template Library (Scroll to Preview)
                </div>
                <div class="card-body bg-custom-light row">
                    @foreach ($templates as $template)
                        <div class="col-md-6">
                            <div class="shadow-custom-lg">
                                <div class="bg-custom-medium p-2 text-center h4">
                                    {{ $template->name }} 
                                    @if ($template->is_recommended)
                                        <label class="bg-warning p-2">
                                            <i class="fa fa-star"></i> 
                                            Recommended
                                        </label>
                                    @endif
                                </div>
                            <div class="template-enclosure">
                                @include('templates.sample-cv')
                            </div>
                            <button class="btn btn-primary btn-block border-radius-0 mb-3"><i class="fa fa-mouse-pointer"></i> Select Template</button>
                            </div>
                            
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection