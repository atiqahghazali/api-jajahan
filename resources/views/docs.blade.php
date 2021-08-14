@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Get SubDistrict List') }}</div>

                <div class="card-body">
                    <p>Example: </p>
                    <p>$url = 'http://api-jajahan.vigx5njyjw-ewl6nz91o652.p.runcloud.link/api/v1/subdistricts';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Get Full Address') }}</div>
                <div class="card-body">
                    <p>Example: </p>
                    <p>
                    $url = 'http://api-jajahan.vigx5njyjw-ewl6nz91o652.p.runcloud.link/api/v1/address';<br>
                    $response = Http::withHeaders([<br>
                        'Accept' => 'application/json',<br>
                        'Authorization' => 'Bearer [token]'<br>
                    ])->get($url,[<br>
                        'search' => $request->subdistrict<br>
                    ]);
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
