  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

@extends('layouts.app')
@include('inc._navbar')
@section('content')
<div id="cards">
<card-display cardsdata="{{ $words->toJson() }}"></card-display>

</div>
@endsection
