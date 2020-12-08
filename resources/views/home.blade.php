@extends('layouts.app')

@include('inc._navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
              <div class="col-md-8 text-center">
                <button class = 'btn btn-secondary' onclick="location.href='{{ route('word')}}'">Start</button>
              </div>
        </div>
    </div>
</div>
@endsections
