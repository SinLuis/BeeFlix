<?php

use Illuminate\Database\Seeder;
use App\movies;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movieNames = [
            "Descendant of the Sun", "It's Okay to Not Be Okay", "You Are the Apple of My Eye", "Backstreet Rookie",
            "Hyouka", "The God of High School", "Jujutsu Kaisen", "Tate No Yuusha",
            "Karma", "Opera Van Java", "The Voice Indonesia", "On The Spot"
        ];
        
        $moviePhotos = [
            "image/Drama_DOTS.jpg", "image/Drama_ItsOkayToNotBeOkay.jpg", "image/Drama_YouAreTheAppleOfMyEye.jpg", "image/Drama_BackStreetRookie.jpg",
            "image/Kids_Hyouka.jpg", "image/Kids_TheGodOfHighSchool.jpg", "image/Kids_JujutsuKaisen.jpg", "image/Kids_TateNoYuusha.jpg",
            "image/TvShow_Karma.jpg","image/TvShow_OperaVanJava.jpg", "image/TvShow_TheVoice.jpg", "image/TvShow_OnTheSpot.jpg"
        ];

        $movieDescription = [
            "Descendant Of The Sun bercerita tentang pria wanita beda profesi yang bertemu dalam misi kemanusiaan dan saling jatuh cinta. Kisahnya berawal ketika Yoo Shi Jin (Song Joong Ki ) dan rekannya sesama tentara, Seo Dae Young (Jin Goo) berusaha menangkap pencuri ponsel.",
            "Moon Gang-tae (Kim Soo-hyun), seorang pekerja kesehatan komunitas di bangsal psikiatri yang tidak punya waktu untuk cinta dan Ko Moon-young (Seo Ye-ji), seorang penulis buku anak-anak sukses yang menderita gangguan kepribadian antisosial dan tidak pernah mengenal cinta.",
            "Ching-teng adalah siswa yang penuh perjuangan. Ketika kepala sekolah menempatkannya di samping Chia-yi, siswi yang cerdas dan cantik, keberuntungan dan perasaannya terhadap gadis itu pun berubah.",
            "Drama Backstreet Rookie sendiri diangkat dari genre komedi romantis mengisahkan hubungan Jung Saet Byeol (Kim Yoo Jung) dan Choi Dae Hyun ( Ji Chang Wook). Kisah cinta mereka dimulai dari pertemuan saat duduk di bangku sekolah. Awalnya, Jung Saet Byeol meminta bantuan Choi Dae Hyun untuk membelikannya rokok.",
            "Hyouka – Menceritakan tentang pertemuan antara gadis yang penuh rasa penasaran akan sesuatu bernama Chitanda Eru dan laki-laki yang lebih suka sunyi dan berhemat tenaga bisa dibilang malas bernama Oreki Houtaru, pertemuan mereka membuat banyak hal baru dalam hidup Oreki Houtaru.",
            "The God of Highschool (GoH) adalah anime yang diadopsi dari webtoon. Anime ini disutradarai oleh Sungho Park dari Mappa dan dibantu oleh Kiyoko Yoshimura sebagai penyusun naskah. Anime ini menceritakan tentang seorang pemuda dari Korea Selatan bernama Jin Mori yang memiliki keahlian bela diri taekwondo semasa kecilnya.",
            "Diceritakan bahwa Yuuji Itadori yaitu seorang siswa yang masih sekolah menengah ini aktif melakukan aktivitas harian dengan mengunjungi sosok kakeknya yang terus terbaring di tempat tidur.",
            "Tate no Yuusha no Nariagari bercerita tentang seorang otaku rumahan bernama Naofumi Iwatani yang telah dipanggil ke dunia isekai dan terpilih menjadi salah satu dari empat ksatria yang harus melindungi kerajaan Melromarc. ... Rapthalia pun menjadi gerbang Naofumi untuk kembali percaya pada ketulusan seseorang.",
            "Karma adalah acara televisi realitas adikodrati yang ditayangkan oleh ANTV sejak 24 Desember 2017. Acara ini ditayangkan berdasarkan acara televisi Thailand berjudul Secret of Numbers yang diproduksi oleh Workpoint Entertainment. Karma dipandu oleh Robby Purba sebagai pembawa acara dan Roy Kiyoshi sebagai penerawang.",
            "Opera Van Java (disingkat OVJ) adalah acara komedi yang ditayangkan di Trans7. Ide acaranya adalah pertunjukan wayang orang versi modern. Dilakonkan oleh komedian ternama seperti Parto Patrio, Denny Cagur, Mpok Alpa, Rina Nose, Anwar Sanjaya Pigano, serta Ferdians Setiadi berperang tawa bersama para bintang tamu.",
            "The Voice Indonesia (sering disingkat TVI) adalah acara realitas kompetisi menyanyi dan ajang pencarian bakat Indonesia yang mulai mengudara di stasiun TV Indosiar pada tanggal 10 Februari 2013, pada musim kedua pindah ke RCTI dan sejak musim ketiga pindah ke GTV. Acara ini diadaptasi dari kompetisi menyanyi Belanda berjudul The Voice of Holland, yang ditayangkan oleh RTL 4. ",
            "On The Spot adalah sebuah acara majalah berita yang ditayangkan Trans7. Awalnya acara ini berformat seputar jalan jalan ke beberapa tempat yang dipandu oleh Omesh dan kemudian menjadi Program musik yang memainkan berbagai video klip, artis, duo, musisi Indonesia disertai berbagai informasi ringan."
        ];


       
        
        $count=0;
        for ($i=0; $i<3; $i++){
            for ($j=0; $j < 4; $j++) { 
                $movie = new movies;

                $movie->fill(["genre_id"=> $i+1, "title"=>$movieNames[$count], "photo" => $moviePhotos[$count], "description" => $movieDescription[$count], "rating" => 5]);
                $movie -> save();
                $count=$count+1;
            }
        }
        
        


    }
}
