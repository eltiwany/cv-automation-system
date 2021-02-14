@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-0 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-graduation-cap header-icon"></i>
                    Education Backgrounds
                    <a href="/education-backgrounds/create" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-plus-square"></i> Add Education Background
                    </a>
                </div>
                <div class="card-body bg-custom-light">
                    
                    @if (count($education_backgrounds) > 0)
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Time Started</th>
                                <th>Time Ended</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($education_backgrounds as $education_background)
                                <tr>
                                    <td>{{ $education_background->name }}</td>
                                    <td>{{ $education_background->type }}</td>
                                    <td>{{ $education_background->TimeStarted }}</td>
                                    <td>{{ $education_background->TimeEnded }}</td>
                                    <td class="text-center">
                                        <label class="m-0 p-0">
                                            <a href="/education-backgrounds/{{ $education_background->id }}/edit" class="form-button">
                                                <button class="btn btn-link text-primary m-0 p-0 pr-3">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                        </label>
                                        
                                        
                                        <label class="m-0 p-0">
                                            <form id="form{{ $education_background->id }}" action="/education-backgrounds/{{ $education_background->id }}" method="POST" class="form-button">
                                                @method('DELETE')
                                                {{ csrf_field() }}

                                                <button type="button" onclick="confirmDeletion('form{{ $education_background->id }}', 'Are you sure you want to education background ({{ $education_background->name }})?')" class="btn btn-link text-danger m-0 p-0">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </form>
                                        </label>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="font-weight-bold text-center p-3">
                            No Education Backgrounds found, start adding by clicking "Add New" at top left! 
                        </p>
                    @endif
                    {{ $education_backgrounds->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection