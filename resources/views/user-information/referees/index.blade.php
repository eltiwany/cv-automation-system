@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-0 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-gavel header-icon"></i>
                    Referees
                    <a href="/referees/create" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-plus-square"></i> Add Referee
                    </a>
                </div>
                <div class="card-body bg-custom-light">
                    
                    @if (count($referees) > 0)
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>First Name</th>
                                <th>Other Names</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($referees as $referee)
                                <tr>
                                    <td>{{ $referee->First_Name }}</td>
                                    <td>{{ $referee->Second_Name }}</td>
                                    <td>{{ $referee->Email }}</td>
                                    <td>{{ $referee->Phone_Number }}</td>
                                    <td class="text-center">
                                        <label class="m-0 p-0">
                                            <a href="/referees/{{ $referee->id }}/edit" class="form-button">
                                                <button class="btn btn-link text-primary m-0 p-0 pr-3">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                        </label>
                                        
                                        
                                        <label class="m-0 p-0">
                                            <form id="form{{ $referee->id }}" action="/referees/{{ $referee->id }}" method="POST" class="form-button">
                                                @method('DELETE')
                                                {{ csrf_field() }}

                                                <button type="button" onclick="confirmDeletion('form{{ $referee->id }}', 'Are you sure you want to referee ({{ $referee->First_Name }})?')" class="btn btn-link text-danger m-0 p-0">
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
                            No referees found, start adding by clicking "Add New" at top left! 
                        </p>
                    @endif
                    {{ $referees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection