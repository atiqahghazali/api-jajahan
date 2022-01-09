@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pull-left">
                <h2>List of District</h2>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="pull-right pb-2">
                <button class="btn btn-success" data-toggle="modal" data-target="#add">
                    Add New
                </button>

                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ route('district-store') }}" method="POST">
                        @csrf    
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <strong>ID:</strong>
                                    <input type="number" name="id" value="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <strong>Code:</strong>
                                    <input type="text" name="code" value="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <strong>State:</strong>
                                    <select name="state" id="state" required>
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>State</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($districts as $key => $district)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $district->name }}</td>
                    <td>{{ $district->code_3 }}</td>
                    <td>{{ $district->state->name }}</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$district->id}}">
                            Edit
                        </button>

                        <div class="modal fade" id="edit{{$district->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="{{ route('district-update',$district) }}" method="POST">
                                @csrf    
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            <input type="text" name="name" value="{{ $district->name }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <strong>Code:</strong>
                                            <input type="text" name="code" value="{{ $district->code_3 }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <strong>State:</strong>
                                            <select name="state" id="state">
                                                @foreach($states as $state)
                                                    @if($state->id == $district->state->id)
                                                        <option value="{{$state->id}}" selected>{{$state->name}}</option>
                                                    @else
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <a class="btn btn-danger" href="{{ route('district-delete',$district) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
   
    
@endsection
