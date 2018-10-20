<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Word;
use Session;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::all();
        return view('word')->with('words', $words);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words/create'); //shows a form page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
      $validatedData = $request ->validate([
          'nor_word' => 'required|unique:words',
          'nor_sentence' => 'required|max:100',
          'eng_word' => 'required',
          'eng_sentence' => 'required|max:100'
        ]);

        // store in database
        $word = new Word;
        $word -> nor_word = $request -> input('nor_word');
        $word -> nor_sentence = $request -> input('nor_sentence');
        $word -> eng_word = $request -> input('eng_word');
        $word -> eng_sentence = $request -> input('eng_sentence');
        $word -> save();

        Session::flash('success', 'The new word was saved successfully!');
        // redirect to another
        return redirect()->route('word.store', $word -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = Word::find($id);
        return view('word') ->with('word', $word);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::find($id);
        return view('words/edit') ->with ('word', $word);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the data
        $validatedData = $request ->validate([
          'nor_word' => 'required|unique:words',
          'nor_sentence' => 'required|max:100',
          'eng_word' => 'required',
          'eng_sentence' => 'required|max:100'
        ]);
        $word = Word::find($id);
        $word -> nor_word = $request -> input('nor_word');
        $word -> nor_sentence = $request -> input('nor_sentence');
        $word -> eng_word = $request -> input('eng_word');
        $word -> eng_sentence = $request -> input('eng_sentence');
        $word -> save();
        Session::flash('success', 'This card was saved successfully!');

        return redirect() -> route('word', $word -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $word = Word::find($id);
        $word -> delete();
        Session::flash('success', 'Card was deleted succesfully!');
        return redirect() -> route ('word');
    }
}
