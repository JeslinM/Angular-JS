<?php

namespace App\Http\Controllers;

use App\Bookss;
use Illuminate\Http\Request;

class BookssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BOOKS.book');
    }
	public function sample()
    {
        return view('BOOKS.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=new Bookss([
		'title'=>$request->get('title'),
		'body'=>$request->get('body')
		]);
		$book->save();
		return redirect('/book/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookss  $bookss
     * @return \Illuminate\Http\Response
     */
    public function show(Bookss $bookss)
    {
        return view('BOOKS.book');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookss  $bookss
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookss $bookss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookss  $bookss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookss $bookss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookss  $bookss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookss $bookss)
    {
        //
    }
}
