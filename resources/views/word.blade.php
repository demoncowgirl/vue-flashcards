<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('inc._navbar')
@extends('layouts.app')
        <div id="card-display" class="text-center align-content-center" v-for="word in cardData" v-if="index==currentIndex">
            <div class="container text-center align-content-center" style="background-color: #0A2463;">
                <div class="row">
                  @foreach($words as $word)
                    <div class="col-lg-3">
                        <div class="card">
                          <h3 class="card-title">Norwegian</h3>
                            <div class="card-img-top">
                                <img id="flagImage" src="assets/images/flag.png" class="img-responsive" alt="Norwegian Flag"/>
                                <div class="card-img-overlay"></div>
                                <div id="display">

                                    <h1 class="card-text" id="nor_word" name="nor_word">{{$word -> nor_word}}</h1>
                                    <div class="card-body" id="nor_sentence" name ="nor_sentence">{{$word -> nor_sentence}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                          <h3 class="card-title">English</h3>
                            <div class="card-img-top mt-3">
                                <img id="flagImage" src="assets/images/us_flag2.jpeg" class="img-responsive" alt="American Flag"/>
                                <div class="card-img-over:lay"></div>

                                <h1 class="card-text" id="eng_word" name="eng_word">{{$word -> eng_word}}</h1>
                                <div class="card-body" id="eng_sentence" name='eng_sentence'>{{$word -> eng_sentence}}</div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div id="footer" class="col-md-12 m-0 p-2">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="footer well col-md-9 m-4">
                            <!-- <button class="btn btn-dark btn-lg"><a :href="">Next Card</a></button>
                            <button class="btn btn-dark btn-lg"><a :href="'/words/' + word.id + '/create'">Create New Card</a></button>
                            <button class="btn btn-dark btn-lg"><a :href="'/words/' + word.id + '/edit'">Edit Card</a></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
