@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="col-md-3"></div>
      <div class="col-md-6 mt-5 p-5 border border-dark rounded" style="width: 100%; height: 600px; background-color: #0A2463">
        <form method="PUT" action="{{action( 'WordController@update', $word->id) }}">
  		      @csrf
          <h1>Edit Your Card</h1>
          <label for="nor_word">Edit Norwegian word:</label>
          <input class="form-control" v-model="nor_word" id="word" name="nor_word" type="text" value="{{ $word -> nor_word}}">
          <label for="nor_sentence">Edit Norwegian sentence:</label>
          <input class="form-control" v-model="nor_sentence" id="sentence" name="nor_sentence" type="text" value="{{ $word -> nor_sentence}}">
          <label for="eng_word">Edit English word:</label>
          <input class="form-control" v-model="eng_word" id="word" name="eng_word" type="text" value="{{ $word -> eng_word}}">
          <label for="eng_sentence">Edit English sentence:</label>
          <input class="form-control" v-model="eng_sentence" id="sentence" name="eng_sentence" type="text" value="{{ $word -> eng_sentence}}">
          <button type="submit" class="btn btn-primary btn-lg ml-0 mr-2 mt-4">Submit change</button>
          <a href='/word' class="btn btn-dark btn-lg ml-0 mt-4">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
