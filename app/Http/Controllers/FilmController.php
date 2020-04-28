<?php

namespace App\Http\Controllers;

use App\Film;
use App\films;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
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

        $film = new Film([
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
        ]);
        $film->save();
        return redirect('/films')->with('success', 'Film saved!');
    }

    public function showAll(Film $film)
    {
        $films = $film::orderBy('name')->paginate('3');
        return view('films.showAll', compact('films'));
    }

    public function show($id) {
        $film = Film::where('id', $id)->first();
        return view('films.show', compact('film'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        return view('films.edit', compact('film'));
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

        $film = Film::find($id);
        $film->name = $request->get('name');
        $film->duration = $request->get('duration');
        $film->description = $request->get('description');
        $film->genre = $request->get('genre');
        $film->country = $request->get('country');
        $film->rating = $request->get('rating');
        $film->year = $request->get('year');
        $film->likes = $request->get('likes');
        $film->dislikes = $request->get('dislikes');
        $film->thriller = $request->get('thriller');

        $film->save();
        return redirect('/films')->with('success', 'Film saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $film->delete();

        return redirect('/films')->with('success', 'Film deleted!');
    }
}
