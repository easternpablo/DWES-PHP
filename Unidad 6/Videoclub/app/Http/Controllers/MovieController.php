<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function showMovies(){
        $movies = Movie::all();
        return view('Movie.catalog',['movies'=>$movies]);
    }

    public function showMovieId($id){
        $movie = Movie::findOrFail($id);
        return view('Movie.show',['movie'=>$movie]);
    }

    public function changeRentedTrue($id){
        $movie = Movie::findOrFail($id);
        $movie->rented = 1;
        $movie->save();
        return view('Movie.show',['movie'=>$movie]);
    }

    public function changeRentedFalse($id){
        $movie = Movie::findOrFail($id);
        $movie->rented = 0;
        $movie->save();
        return view('Movie.show',['movie'=>$movie]);
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

    public function edit($id){
        $movie = Movie::findOrFail($id);
        return view('Movie.update',["movie"=>$movie]);
    }

    public function update(Request $request,$id){
        $movie = Movie::find($id);
        $movie->title = $request->input('titulo');
        $movie->year = $request->input('annio');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('imagen');
        $movie->synopsis = $request->input('sinopsis');
        $movie->save();
        return redirect()->action("MovieController@showMovies")->with('status','Película actualizada correctamente');
    }

    public function remove($id){
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->action("MovieController@showMovies")->with('status','Película eliminada correctamente');
    }
}
