<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        //return view('Movie.main');
    }

    public function showMovies(){
        $movies = Movie::all();
        return view('Movie.catalog',['movies'=>$movies]);
    }

    public function create(){
        return view('Movie.create');
    }

    public function save(Request $request){
        $movie = new Movie();
        $movie->title = $request->input('titulo');
        $movie->year = $request->input('annio');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('imagen');
        $movie->synopsis = $request->input('sinopsis');
        $movie->save();
        return redirect()->action("MovieController@showMovies")->with('status','Película insertada correctamente');
    }
}
