@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body pt-5">
                    
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                placeholder="Type any state name and click enter key"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>

                    <div class="container">
                        @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">District</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dun</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Parliament</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table"> 
                                <thead>
                                    <tr>
                                        <th>District</th>
                                        <th>SubDistrict</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $state)
                                        @foreach($state->districts as $district)
                                        <tr>
                                            <td>{{$district->name}}</td>
                                            <td>
                                                @foreach($district->subdistricts()->select('name')->get() as $subdistrict)
                                                    {{$subdistrict->name}},
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            @foreach($details as $state)
                                @foreach($state->duns as $dun)
                                <br>
                                <p>{{$dun->name}}</p>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            @foreach($details as $state)
                                @foreach($state->parliaments as $parliament)
                                <br>
                                <p>{{$parliament->name}}</p>
                                @endforeach
                            @endforeach
                        </div>
                        </div>
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
