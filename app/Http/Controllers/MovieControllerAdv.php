<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieControllerAdv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::all();
      return view("movies", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // FX MAPPATA SULLA ROTTA-------- movie.store
    {
        return view("movie-store");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // VALIDATION--------Controllo dei dati che verranno inseriti------------------
      $validateData =  $request -> validate([
        "title" => "required",
        "year" => "required|numeric",
        "overview" => "required"
      ]);

      // dd($validateData);
      // INSERT---------qui avviene l azione---------------
      $movie = Movie::create($validateData);
      // REDIRECT------quello che vede l utente dopo l inserimento---------------
      return redirect("movies");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $movie = Movie::findOrFail($id);
      return view("movies-show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $movie = Movie::findOrFail($id)
      return view("movies-edit", compact("movie"));
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
      $validateData =  $request -> validate([
        "title" => "required",
        "year" => "required|numeric",
        "overview" => "required"
      ]);

      $movie = Movie::findOrFail($id);
      $movie -> update($validateData);

      return redirect("movies");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $movie=Movie::findOrFail($id);
      $movie -> delete();
      // attento a nn confondere delete e destroy
      return redirect("movies");
    }
}
