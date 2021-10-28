@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 pt-5">
            <br><br><br><br><br><br><br><br><br>
            <h1>JAJAHAN API</h1>
            <h5>Get an alternatives list of states, districts, subdistricts, <br>duns, parliaments in Malaysia.</h5>
            <br>
            <button type="button" onclick="window.location='{{ route('register') }}'" class="btn" style="background-color:#55B39A">Try Now</button>
        </div>
        <div class="col-12 col-sm-6 pt-5">
            <img src="{{asset('/images/developer_activity.svg')}}" height="100%" width="100%">
        </div>
    </div>
</div>
@endsection