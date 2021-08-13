@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <passport-token></passport-token>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data') }}</div>
                <div class="card-body">
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
                                <td>{{$district->name}}</td>
                                <td>{{$district->state->name}}</td>
                                <td>{{$district->subdistricts}}</td>
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
