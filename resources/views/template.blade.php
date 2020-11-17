<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('/css/beeflixcss.css')}}">   
</head>
<body>


    <div class="container">
        
        <div class="mb-4">
            <h3>BeeFlix</h3>
            
        <a class="btn btn-dark"  href="{{url()->previous()}}"><i class='fas fa-arrow-left' ></i> KEMBALI</a>
            <a class="btn btn-light" href="/">LIHAT SEMUA</a>
        </div>
    </div>

    <div class="container pagebg p-4">

        <div class="container pt-4 mb-4 bgcolor">
            @yield('header')    
        </div>

    </div>


    
</body>
</html>