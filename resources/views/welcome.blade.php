@section('title', '| Snakke Norsk')

@extends('layouts.app')

@section('content')
      <div class="row">
        <div id="welcome" class="container text-center">
          <div class="title">
              Velkommen!
          </div>
          <div>
          <img id="flag" src="{{asset('assets/images/flag.png')}}" alt="norwegian flag" width="200px">
          </div>
          <div class="title">
              Snakke Norsk
          </div>
        </div>
      </div>
@endsection
