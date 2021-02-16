@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-0 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-suitcase"></i>
                    Work Experiences
                    <a href="/work-experiences/create" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-plus-square"></i> Add Work Experience
                    </a>
                </div>
                <div class="card-body bg-custom-light">
                    
                    @if (count($work_experiences) > 0)
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Worked At</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($work_experiences as $work_experience)
                                <tr>
                                    <td>{{ $work_experience->name }}</td>
                                    <td>{{ $work_experience->TimeStarted }}</td>
                                    <td>{{ $work_experience->TimeEnded }}</td>
                                    <td>{{ $work_experience->Description }}</td>
                                    <td class="text-center">
                                        <label class="m-0 p-0">
                                            <a href="/work-experiences/{{ $work_experience->id }}/edit" class="form-button">
                                                <button class="btn btn-link text-primary m-0 p-0 pr-3">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                        </label>
                                        
                                        
                                        <label class="m-0 p-0">
                                            <form id="form{{ $work_experience->id }}" action="/work-experiences/{{ $work_experience->id }}" method="POST" class="form-button">
                                                @method('DELETE')
                                                {{ csrf_field() }}

                                                <button type="button" onclick="confirmDeletion('form{{ $work_experience->id }}', 'Are you sure you want to work experience ({{ $work_experience->name }})?')" class="btn btn-link text-danger m-0 p-0">
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
                            No work experiences found, star adding by clicking "Add New" at top left! 
                        </p>
                    @endif
                    {{ $work_experiences->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection