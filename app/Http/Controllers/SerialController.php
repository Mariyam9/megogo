<?php

namespace App\Http\Controllers;

use App\Serial;
use Illuminate\Http\Request;

class SerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $serials = Serial::all();
        return view('serials.index', compact('serials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $film = new Serial([
            'name' => $request->get('name'),
            'duration' => $request->get('duration'),
            'description' => $request->get('description'),
            'genre' => $request->get('genre'),
            'country' => $request->get('country'),
            'rating' => $request->get('rating'),
            'year' => $request->get('year'),
            'likes' => $request->get('likes'),
            'dislikes' => $request->get('dislikes'),
            'thriller' => $request->get('thriller'),
            'seasons' => $request->get('seasons'),
        ]);
        $film->save();
        return redirect('/serials')->with('success', 'Serial saved!');
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
        $serial = Serial::find($id);
        return view('serials.edit', compact('serial'));
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
        $request->validate([
            'name'=>'required',
        ]);

        $serial = Serial::find($id);
        $serial->name = $request->get('name');
        $serial->duration = $request->get('duration');
        $serial->description = $request->get('description');
        $serial->genre = $request->get('genre');
        $serial->country = $request->get('country');
        $serial->rating = $request->get('rating');
        $serial->year = $request->get('year');
        $serial->likes = $request->get('likes');
        $serial->dislikes = $request->get('dislikes');
        $serial->thriller = $request->get('thriller');
        $serial->seasons = $request->get('seasons');

        $serial->save();
        return redirect('/serials')->with('success', 'Serial saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serial = Serial::find($id);
        $serial->delete();

        return redirect('/serials')->with('success', 'Serial deleted!');
    }
}
