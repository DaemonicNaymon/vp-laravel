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
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://laracasts.com/images/forum/robo-icon.svg?v=2" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>
@endsection
