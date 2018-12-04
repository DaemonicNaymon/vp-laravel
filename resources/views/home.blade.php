@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">@lang('quickadmin.qa_dashboard')</div>

            <div class="panel-body">
                Welcome, {{Auth::user()->firstname}}
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
