@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-0 p-0">
            <div class="card">
                <div class="card-header h4 alert-default">
                    Project and Research
                    <a href="/project-researches/create" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-plus-square"></i> Add Project And Research
                    </a>
                </div>
                <div class="card-body">
                    
                    @if (count($pandr) > 0)
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Project/Research Name</th>
                                <th>Time Started</th>
                                <th>Time Ended</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($pandr as $pandr)
                                <tr>
                                    <td>{{ $pandr->name }}</td>
                                    <td>{{ $pandr->TimeStarted }}</td>
                                    <td>{{ $pandr->TimeEnded }}</td>
                                    
                                    <td class="text-center">
                                        <label class="m-0 p-0">
                                            <a href="/project-researches/{{ $pandr->id }}/edit" class="form-button">
                                                <button class="btn btn-link text-primary m-0 p-0 pr-3">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                        </label>
                                        
                                        
                                        <label class="m-0 p-0">
                                            <form id="form{{ $pandr->id }}" action="/project-researches/{{ $pandr->id }}" method="POST" class="form-button">
                                                @method('DELETE')
                                                {{ csrf_field() }}

                                                <button type="button" onclick="confirmDeletion('form{{ $pandr->id }}', 'Are you sure you want to referee ({{ $pandr->name }})?')" class="btn btn-link text-danger m-0 p-0">
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
                            No Projects or Research found, start adding by clicking "Add New" at top left! 
                        </p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection