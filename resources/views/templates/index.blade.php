@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-folder header-icon"></i>
                    Template Library 
                    <div class="alert alert-warning p-1 m-0 w-content font-weight-bold p float-right">
                        <i class="fa fa-lightbulb-o"></i>
                        Click and Scroll to Preview
                    </div>
                </div>
                <div class="card-body bg-custom-light row">
                    @foreach ($templates as $template)
                        <div class="col-md-6">
                            <div class="shadow-custom-lg">
                                <div class="bg-custom-medium p-2 text-center h4">
                                    {{ $template->name }} 
                                    @if ($template->is_recommended)
                                        <label class="bg-warning recommended">
                                            <i class="fa fa-star"></i> 
                                            Recommended
                                        </label>
                                    @endif
                                </div>
                                <div class="template-enclosure" id="enclosure-{{ $template->id }}" onclick="enableScroll('enclosure-{{ $template->id }}')">
                                    @include('templates.sample-cv')
                                </div>
                                <form action="/templates" method="POST" class="m-0 p-0">
                                    @csrf
                                    <input type="hidden" name="name" value="{{ $template->name }}">
                                    <input type="hidden" name="heading_class" value="{{ $template->heading_class }}">
                                    <input type="hidden" name="body_class" value="{{ $template->body_class }}">
                                    <button class="btn btn-primary btn-block border-radius-0 mb-3"><i class="fa fa-mouse-pointer"></i> Select Template</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection