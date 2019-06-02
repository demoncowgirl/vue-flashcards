@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
      <div class="col-md-6">
         <div class="container" id="addWord">
        <form method="POST" action="{{ action('WordController@store')}}">
        		@csrf
            <h1>Add a Card</h1>
            <label for="nor_word">Enter a Norwegian word:</label>
            <input class="form-control" v-model="nor_word"  id="word" type="text" name="nor_word">
            <label for="nor_sentence">Enter a sentence using this word:</label>
            <input v-model="nor_sentence" type="text" class="form-control" name="nor_sentence" id="sentence">
            <label for="eng_word">Enter the English translation for the word:</label>
            <input v-model="eng_word" type="text" class="form-control" name="eng_word" id="word">
            <label for="eng_sentence">Enter the English translation for the sentence:</label>
            <input v-model="eng_sentence" type="text" class="form-control" name="eng_sentence" id="sentence">
            <button @click="addWord" class="btn btn-primary btn-lg ml-0 mr-2 mt-4">Add</button>
            <a href='/word' class="btn btn-dark btn-lg ml-0 mt-4">Cancel</a>
          </form>
      </div>
    </div>
  </div>
</div>
@endsection
