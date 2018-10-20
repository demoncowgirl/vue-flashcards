@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
  <div class="col-md-8">
    <h1>All Cards</h1>
  </div>
  <div class="col-md-4">

  </div>
</div>
  <div class="col-md-12">
  <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <th>Norwegian Word</th>
        <th>Norwegian Sentence</th>
        <th>English Word</th>
        <th>English Sentence</th>
        <th>Pile Id #</th>
        <th>Created At</th>
        <th></th>
      </thead>
      <tbody>
        @foreach($words as $word)
        <tr>
          <th>{{ $word -> nor_word }}</th>
          <td>{{ $word -> nor_sentence }}</td>
          <td>{{ $word -> eng_word }}</td>
          <td>{{ $word -> eng_sentence }}</td>
          <td>{{ $word -> pile_id }}</td>
          <td>{{ $word -> created_at }}</td>
          <td><a href="{{ route('word.index', $word -> id)}}" class="btn btn-sm btn-light m-1">View</a> <a href="{{ route('word.edit', $word -> id)}}" class="btn btn-sm btn-light m-1">Edit</a></td>
          <a href="{{ route('word.create') }}" class="btn btn-sm btn-light m-1">Create New Card</a>
          <a href="{{ route('word.edit') }}" class="btn btn-sm btn-light m-1">Edit Card</a>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
