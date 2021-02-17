@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-heart header-icon"></i>
                    My Templates
                    <div class="alert alert-warning p-1 m-0 w-content font-weight-bold p float-right">
                        <i class="fa fa-lightbulb-o"></i>
                        Click and Scroll to Preview
                    </div>
                </div>
                <div class="card-body bg-custom-light row mb-5">
                    <div class="alert alert-info p-2 mb-2 w-content font-weight-bold p col-md-12">
                        <i class="fa fa-exclamation-circle"></i>
                        Default template can be directly printed/downloaded from side navigation
                    </div>
                    @if (count($user_templates) > 0)
                        @foreach ($user_templates as $user_template)
                            <div class="col-md-6">
                                <div class="shadow-custom-lg">
                                    <div class="bg-custom-medium p-2 text-center h4">
                                        {{ $user_template->name }}
                                    </div>
                                    <div class="template-enclosure" id="enclosure-{{ $user_template->id }}" onclick="enableScroll('enclosure-{{ $user_template->id }}')">
                                        @include('user-templates.sample-user-cv')
                                    </div>
                                    @if ($user_template->is_selected)
                                        <button class="btn btn-default border-radius-0"><i class="fa fa-star"></i> Default</button>
                                    @else
                                        <form action="/templates" method="POST" class="m-0 p-0 float-left">
                                            @csrf
                                            <input type="hidden" name="name" value="{{ $user_template->name }}">
                                            <input type="hidden" name="heading_class" value="{{ $user_template->selected_heading_class }}">
                                            <input type="hidden" name="body_class" value="{{ $user_template->selected_body_class }}">
                                            <button class="btn btn-primary border-radius-0"><i class="fa fa-star-o"></i> Set As Default</button>
                                        </form>
                                    @endif

                                    <button class="btn btn-warning border-radius-0"><i class="fa fa-print"></i> Print</button>
                                    <button class="btn btn-success border-radius-0"><i class="fa fa-download"></i> Download as PDF</button>
                                    <form id="form{{ $user_template->id }}" action="/user-templates/{{ $user_template->id }}" method="POST" class="form-button">
                                        @method('DELETE')
                                        {{ csrf_field() }}

                                        <button type="button" onclick="confirmDeletion('form{{ $user_template->id }}', 'Are you sure you want to template ({{ $user_template->name }})?')" class="btn btn-danger border-radius-0">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger col-md-6 m-auto">
                            <i class="fa fa-exclamation-triangle"></i>
                            No templates found, please choose from selection or create new template.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection