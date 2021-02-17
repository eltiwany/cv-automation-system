@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-plus header-icon"></i>
                    Create Template 
                </div>
                <div class="card-body bg-custom-light mb-5">
                    <form action="/templates" method="POST" class="m-0 p-0 row">
                        @csrf
                        <div class="form-group col-md-12">
                            <label for="name">Template Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Template Name">
                        </div>
                        <div class="alert alert-info h5 col-md-12">
                            <div class="fa fa-slack"></div> 
                            Select Heading Style
                        </div>
                        @foreach ($templates as $template)
                            <div class="col-md-6">
                                <div class="shadow-custom-lg">
                                    <div class="template-enclosure-header p-3">
                                        <input type="radio" name="heading_class" value="{{ $template->heading_class }}" id="header_class{{ $template->id }}">
                                        <label for="header_class{{ $template->id }}">{{ $template->name }} </label>
                                        @include('templates.sample-header')
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="m-3"></div>
                        <div class="alert alert-info h5 col-md-12">
                            <div class="fa fa-list"></div> 
                            Select Body Style
                        </div>
                        @foreach ($templates as $template)
                            <div class="col-md-6">
                                <div class="shadow-custom-lg">
                                    <div class="template-enclosure-body p-3">
                                        <input type="radio" name="body_class" value="{{ $template->body_class }}" id="body_class{{ $template->id }}">
                                        <label for="body_class{{ $template->id }}">{{ $template->name }} </label>
                                        @include('templates.sample-body')
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <button class="btn btn-primary btn-block m-3">
                            <i class="fa fa-plus"></i> 
                            Create Template
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection