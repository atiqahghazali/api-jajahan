@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body pt-5">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>District</th>
                                <th>SubDistrict</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($districts as $district)
                            <tr>
                                <td>{{$district->state->name}}</td>
                                <td>{{$district->name}}</td>
                                <td>
                                    @foreach($district->subdistricts()->select('name')->get() as $subdistrict)
                                        {{$subdistrict->name}},
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        {{ $districts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
