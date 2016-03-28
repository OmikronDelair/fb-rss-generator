@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registered entities</div>
                <div class="panel-body">
                @include('alerts.success')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection