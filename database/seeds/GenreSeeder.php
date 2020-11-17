<?php

use Illuminate\Database\Seeder;
use App\genres;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreNames = ["Drama", "Kids", "Tv Show"];
        
        for ($i=0; $i < 3; $i++) { 
            $genre = new genres;
            $genre->fill(["name"=>$genreNames[$i]]);
            $genre-> save();
        }
        

    }
}
