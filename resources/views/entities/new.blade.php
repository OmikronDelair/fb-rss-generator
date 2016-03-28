@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Facebook entity</div>

                <div class="panel-body">
                    @include('alerts.errors')
                    
                    {!! Form::open(['route' => 'entity.store', 'method' => 'POST']) !!}
        
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null, ['class' => 'form-control']) !!}
                    {!! Form::label('slug','Slug:') !!}
                    {!! Form::text('slug',null, ['class' => 'form-control']) !!}
                    {!! Form::label('facebook_id','Facebook ID:') !!}
                    {!! Form::text('facebook_id',null, ['class' => 'form-control']) !!}
                    <br/>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection