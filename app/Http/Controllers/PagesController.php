<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function getLogin(){
      return view('auth/login');
    }

    public function getRegister(){
      return view('auth/register');
    }

    public function getHome(){
      return view('welcome');
    }

    public function getLoginSuccess(){
      return view('home');
    }

    public function getWord(){

      return view('word');
    }

    public function getLogout(){
      return view('welcome');
    }

    public function store(){
      return view('word.store');
    }

    public function create(){
      return view('words.create');
    }

    public function show(){
      return view('word');
    }

    public function edit(){
      return view('word.edit');
    }

    public function update(){
      return view('word.update');
    }

    public function index(){
      return view('word.index');
    }
}
