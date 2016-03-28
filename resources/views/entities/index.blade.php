@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Registered entities</div>
                <div class="panel-body">
                @include('alerts.success')
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Entity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($entities as $entity)
                        <tr>
                            <td>{{ $entity->title }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection