@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Get List of State') }}</div>
                <div class="card-body">
                    <mark>API Call: </mark>
                    <p>$url = 'http://jajahan.atiqahghazali.site/api/v1/states';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "id": "1",
                            "name": "JOHOR",
                            "name_long": "JOHOR DARUL TAKZIM",
                            "code2": "JH",
                            "code3": "JHR",
                            "capital": "JOHOR BAHRU"
                        },
                        {
                            "id": "2",
                            "name": "KEDAH",
                            "name_long": "KEDAH DARUL AMAN",
                            "code2": "KD",
                            "code3": "KDH",
                            "capital": "ALOR SETAR"
                        }...
                    ]
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get List of District') }}</div>
                <div class="card-body">
                    <mark>API Call: </mark>
                    <p>$url = 'http://jajahan.atiqahghazali.site/api/v1/districts';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "id": "101",
                            "state_id": "1",
                            "name": "BATU PAHAT",
                            "code_3": "BPA"
                        },
                        {
                            "id": "0102",
                            "state_id": "1",
                            "name": "JOHOR BAHRU",
                            "code_3": "JBA"
                        }...
                    ]
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get List of SubDistrict') }}</div>

                <div class="card-body">
                    <mark>API Call: </mark>
                    <p>$url = 'http://jajahan.atiqahghazali.site/api/v1/subdistricts';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "id": "10101",
                            "name": "BAGAN",
                            "district_id": "101"
                        },
                        {
                            "id": "010102",
                            "name": "CHAAH BAHRU",
                            "district_id": "0101"
                        }...
                    ]
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
                    $url = 'http://jajahan.atiqahghazali.site/api/v1/address';<br>
                    $response = Http::withHeaders([<br>
                        'Accept' => 'application/json',<br>
                        'Authorization' => 'Bearer [token]'<br>
                    ])->get($url,[<br>
                        'search' => $request->subdistrict<br>
                    ]);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "success": "true",
                            "message": "Successsfully fetch all users",
                            "data": "LUBOK, BATU PAHAT, JOHOR"
                        }
                    ]
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get List of DUN') }}</div>
                <div class="card-body">
                    <mark>API Call: </mark>
                    <p>$url = 'http://jajahan.atiqahghazali.site/api/v1/duns';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "id": "00101",
                            "parliament_id": "00100",
                            "kerusi_id": "N.01",
                            "state_id": "09",
                            "name": "TITI TINGGI"
                        },
                        {
                            "id": "00102",
                            "parliament_id": "00100",
                            "kerusi_id": "N.02",
                            "state_id": "09",
                            "name": "BESERI"
                        }...
                    ]
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get List of Parliament') }}</div>
                <div class="card-body">
                    <mark>API Call: </mark>
                    <p>$url = 'http://jajahan.atiqahghazali.site/api/v1/parliaments';<br>
                        $response = Http::withHeaders([<br>
                            'Accept' => 'application/json',<br>
                            'Authorization' => 'Bearer [token]'<br>
                        ])->get($url);
                    </p>
                    <mark>Sample Result</mark>
                    <p>
                    [
                        {
                            "id": "00100",
                            "parliament_id": "00100",
                            "chair_id": "P.001",
                            "state_id": "09",
                            "name": "PADANG BESAR"
                        },
                        {
                            "id": "00200",
                            "parliament_id": "00100",
                            "chair_id": "P.002",
                            "state_id": "09",
                            "name": "KANGAR"
                        }...
                    ]
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
