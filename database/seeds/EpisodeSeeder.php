<?php

use Illuminate\Database\Seeder;
use App\episodes;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eps  = [
            "Pertandingan Pertarungan Bebas yang Didedikasikan untuk Anda",
            "Bodoh",
            "Kafein yang Sepi",
            "Masa Muda Tanpa Kamu",
            "Seeing You in the Crowd",
            "Tahun-Tahun Itu",
            "Raja Bertelinga Keledai",
            "Penggembala dan Biri-biri",
            "Romeo dan Juliet",

           
            "Anak Lelaki yang Penuh Ketakutan",
            "Gadis Bersepatu Merah",
            "Penyihir Tidur",
            "Kisah Hidup Zombi",
            "Rapunzel: Kastel Terkutuk",
            "Rahasia Janggut Biru",
            "Anjing Musim Semi",
            "Si Cantik dan Si Buruk Rupa",
            "Mencari Jati Diri Sesungguhnya",

          
            "Titik Biru di Seragam",
            "Never Turning Back",
            "Menyentak",
            "Sindrom Cinta",
            "Ekor Kuda Gadis Itu", 
            "Semprotan Terakhir",
            "Sayap Semua Orang",
            "Kekanak-kanakan",
            "Kenangan",

          
            "Lonely Night",
            "Introduce Me a Good Person",
            "Aloha",
            "Confession Is Not Flashy",
            "Beautiful My Love",
            "In Front of City Hall at the Subway Station",
            "You Always",
            "With My Tears",
            "Me to You, You to Me",




           
            "Revival of the Classics Club and Its History",
            "Activities of the Esteemed Classics Club",
            "Inheritors of the Classics Club and Its Circumstances",
            "Past Days of the Classics Club and Its Glory",
            "The Truth of the Classics Club and Its Past",
            "To Commit a Grave Sin",
            "When the Fog Lifts",
            "To the Preview!",
            "Murder in the Ghost Town of Furuoka",

           
            "Set up/Stand up",
            "Renewal/Soul",
            "Wisdom/Kingdom",
            "Marriage/Bonds",
            "Ronde/Hound",
            "Fear/SIX",
            "Anima/Force",
            "Close/Friend",
            "Curse/Cornered",

           
            "Ryomen Sukuna",
            "Fearsomne Womb",
            "Young Fish and Reverse Punishment",
            "I'm Gonna Kill You!",
            "Kyoto Sister School Goodwill Event",
            "Black Flash",
            "The Origin of Obedience",
            "Hidden Inventory",
            "Premature Death",

           
            "The Shield Hero",
            "The Slave Girl",
            "Wave of Catastrophe",
            "Lullaby at Dawn",
            "Filo",
            "A New Comrade",
            "The Savior of the Heavenly Fowl",
            "Curse Shield",
            "The Rising of the Shield Hero",

            
            "Siluman Ular",
            "Amalia Tambunan",
            "Ilmu Kebal",
            "Santet oleh Partisipan",
            "Adu Ilmu!",
            "Sang Kuntilanak",
            "Cantik Sesaat, Cantik sesat",
            "Penyembah Setan Dajjal",
            "Pembawa Petaka",

            
            "Sugesti Massal",
            "Azis Gagap Bingung",
            "Uchiha Roy Ngeprank OVJ",
            "Vicky Punya 623 Mantan Pacar",
            "Anak Metal Main Tebak Kata",
            "Bily Marah",
            "Makin Tua Makin Lucu",
            "Toko Kenangan Mantan",
            "Sayembara Suara Emas",

            
            "Halo",
            "Mama Knows Best",
            "Damai Bersamamu",
            "Titanium",
            "Heaven",
            "Karena Ku Sanggup",
            "Yang Terlupakan",
            "Farewell!",
            "We Are The World",

           
            "Ga Masuk Akal Tapi Nyata",
            "Manusia Kanibal", 
            "Misteri Dalam Air", 
            "Pantai Berbahaya", 
            "Orang Dari Masa Depan", 
            "Kota Kuno", 
            "Pasar Teraneh", 
            "Makhluk Tuhan Paling Cantik", 
            "Jenazah Bangkit Dari Kubur"

        ];
        $count = 0;
        for($i=0; $i<12; $i++){
            for ($j=0; $j<9; $j++) { 
                $episode = new episodes;
                $episode->fill(["movie_id"=>$i+1,"episode"=>$j+1 ,"title"=>$eps[$count]]);
                $count = $count+1;
                $episode->save(); 
                
            }
            
        }   


    }
}
