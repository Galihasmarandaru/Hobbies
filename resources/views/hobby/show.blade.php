@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby detail</div>

                <div class="card-body">
                    <b>{{$hobby->name}}</b>
                    <p>{{$hobby->description}}</p>
                </div>
            </div>
            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/hobby">
                    <i class="fas fa-plus-circle"></i> Back to Overview
                </a>
            </div>
        </div>
    </div>
</div>
@endsection