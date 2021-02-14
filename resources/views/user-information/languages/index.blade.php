@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 m-0 p-0">
            <div class="card shadow-custom">
                <div class="card-header h4 bg-custom-medium">
                    <i class="fa fa-bloge header-icon"></i>
                     Languages
                    <a href="/languages/create" class="btn btn-primary btn-sm float-right">
                        <i class="fa fa-plus-square"></i> Add Languages
                    </a>
                </div>
                <div class="card-body bg-custom-light">
                    
                    @if (count($languages) > 0)
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                
                            </tr>
                            @foreach ($languages as $languages)
                                <tr>
                                    <td>{{ $languages->name }}</td>
                                    
                                    <td class="text-center">
                                        <label class="m-0 p-0">
                                            <a href="/languages/{{ $languages->id }}/edit" class="form-button">
                                                <button class="btn btn-link text-primary m-0 p-0 pr-3">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>
                                        </label>
                                        
                                        
                                        <label class="m-0 p-0">
                                            <form id="form{{ $languages->id }}" action="/languages/{{ $languages->id }}" method="POST" class="form-button">
                                                @method('DELETE')
                                                {{ csrf_field() }}

                                                <button type="button" onclick="confirmDeletion('form{{ $languages->id }}', 'Are you sure you delete language? ({{ $languages->name }})?')" class="btn btn-link text-danger m-0 p-0">
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
                            No Languages found, start adding by clicking "Add New" at top left! 
                        </p>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection