@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="pull-left">
                <h2>List of SubDistrict</h2>
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
                    <form action="{{ route('subdistrict-store') }}" method="POST">
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
                                    <strong>District:</strong>
                                    <select name="district" id="district" required>
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}">{{$district->name}}</option>
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
                    <th>ID</th>
                    <th>District</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($subdistricts as $key => $subdistrict)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $subdistrict->name }}</td>
                    <td>{{ $subdistrict->id }}</td>
                    <td>{{ $subdistrict->district->name }}</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$subdistrict->id}}">
                            Edit
                        </button>

                        <div class="modal fade" id="edit{{$subdistrict->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <form action="{{ route('subdistrict-update',$subdistrict) }}" method="POST">
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
                                            <input type="text" name="name" value="{{ $subdistrict->name }}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <strong>District:</strong>
                                            <select name="district" id="district">
                                                @foreach($districts as $district)
                                                    @if($district->id == $subdistrict->district->id)
                                                        <option value="{{$district->id}}" selected>{{$district->name}}</option>
                                                    @else
                                                    <option value="{{$district->id}}">{{$district->name}}</option>
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

                        <a class="btn btn-danger" href="{{ route('subdistrict-delete',$subdistrict) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
   
    
@endsection
