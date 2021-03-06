<?php

namespace App\Http\Controllers;

use Session;
use App\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.words.words')->with('words', Word::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'kanji' => 'required',
            'hiragana' => 'required',
            'note' => 'required'
        ]);

        $word = Word::create([
            'title' => $request->title,
            'kanji' => $request->kanji,
            'hiragana' => $request->hiragana,
            'note' => $request->note,
            'slug' => str_slug($request->title)
        ]);

        Session::flash('success', 'Word Added');

        return redirect()->route('words');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        return view('admin.words.edit')->with('word', $word);
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
        $this->validate($request, [
            'title' => 'required',
            'kanji' => 'required',
            'hiragana' => 'required',
            'note' => 'required'
        ]);

        $word = Word::find($id);

        $word->title = $request->title;
        $word->kanji = $request->kanji;
        $word->hiragana = $request->hiragana;
        $word->note = $request->note;
        
        $word->save();

        Session::flash('success', 'Successfully Updated');

        return redirect()->route('words');
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

        $word->delete();

        Session::flash('success', 'Successfully trashed');

        return redirect()->back();
    }

    public function trashed()
    {
        $words = Word::onlyTrashed()->get();

        return view('admin.words.trashed')->with('words', $words);
    }

    public function kill($id)
    {
        $word = Word::withTrashed()->where('id', $id)->first();

        $word->forceDelete();

        Session::flash('success', 'Successfully deleted');

        return redirect()->back();
    }

    public function restore($id)
    {
        $word = Word::withTrashed()->where('id', $id)->first();

        $word->restore();

        Session::flash('success', 'Restore successful');

        return redirect()->back();
    }
}
