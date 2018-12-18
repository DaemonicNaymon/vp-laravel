@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text h1">Welkom, {{Auth::user()->getFullname()}}</p>
                                    <br />
                                    <p class="card-text">Telefoonnummer: {{Auth::user()->phone_number}}</p>
                                    <p class="card-text">Email adress: {{Auth::user()->email}}</p>
                                    <p class="card-text">Woonplaats: {{Auth::user()->postalcode}}, {{Auth::user()->city}}</p>
                                    <p class="card-text">Adress: {{Auth::user()->getFullStreet()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Voeg een advocaat toe</h5>
                    <p class="card-text">Nieuwe advocaten doen blabla.</p>
                    <a href="#" class="btn btn-primary">Voeg toe</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Maak een nieuwe zaak aan</h5>
                    <p class="card-text">Lorump ipsum en andere leuken diengen</p>
                    <a href="../../" class="btn btn-primary">Nieuwe zaak</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
