<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genres;
use App\movies;
use App\episodes;

class HomeController extends Controller
{
    public function page1(){
        $movie = movies::get();
        $genre = genres::get();
        return view('welcome', ['movie' => $movie, 'genre' => $genre]);
        
    }

    public function page2($id){
        $movie = movies::find($id);
        $genre = genres::find($movie->genre_id);
        $episode = episodes::where('movie_id',$movie->id)->paginate(3);        

        return view('halaman2', ['movie' => $movie, 'genre' => $genre, 'episode'=> $episode]);
    }

    public function page3($name){
        $genre = genres::where('name', $name)->first();
        $movie = movies::where('genre_id', $genre->id)->get();
        // dd($movie);
        
        return view('viewall', ['movie'=> $movie, 'genre'=>$genre]);
    }
}
