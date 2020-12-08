<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.app')

@include('inc._navbar')

@section('content')

    <card></card>

@endsection
