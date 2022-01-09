@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get List of State') }}</div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/states</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/getallstate.PNG')}}">
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
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/districts</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/getalldistrict.PNG')}}">
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
                    <u><b>LIST OF ALL SUBDISTRICTS</b></u><br><br>
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/subdistricts</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/getallsubdistrict.PNG')}}">
                    <br><br>
                    <u><b>NAME OF SUBDISTRICT BY ID</b></u><br><br>
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/subdistrict-name-by-id</td>
                        </tr>
                        <tr>
                            <td>Params</td>
                            <td>: 'id'=>'subdistrict_id'</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/subdistrictname.PNG')}}">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Get Full Address') }}</div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/address</td>
                        </tr>
                        <tr>
                            <td>Params</td>
                            <td>: 'search'=>'subdistrict_id'</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/address.PNG')}}">
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
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/duns</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/dun.PNG')}}">
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
                    <table>
                        <tr>
                            <td>Method</td>
                            <td>: GET</td>
                        </tr>
                        <tr>
                            <td>Authorization</td>
                            <td>: Bearer < token ></td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>: http://jajahan.atiqahghazali.site/api/v1/parliaments</td>
                        </tr>
                    </table>
                    <mark>Return Example</mark>
                    <br>
                    <img src="{{asset('/images/parliament.PNG')}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
