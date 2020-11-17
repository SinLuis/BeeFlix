@extends('template')

@section('header')
  
        

    <div class="container">
        {{-- PICT PAGE 2 --}}
        <div class="row">
            {{-- COL 1 --}}
            

            <div class="col-sm mt-4 mb-4">
              
            <img src="{{asset($movie->photo)}}" class="card-img-top" alt="...">
            </div>
            {{-- COL 2 --}}
            <div class="col-sm mt-4">
                <h3>{{$movie->title}}</h3>
                
                @for ($i = 0; $i < $movie->rating; $i++)
                   <i class='fas fa-star' style='font-size:24px;color: rgb(235, 235, 0)'></i>
                @endfor

              
                <h6>{{$movie->description}}</h6>
                <br>
                <h6>Kategori: <a href="/Playlist/{{$genre->name}}">{{$genre->name}}</a></h6>   
            </div>
             {{-- COL 3 --}}
            <div class="col-sm mt-4">
                <h5>EPISODE</h5>
                
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">episode</th>
                        <th scope="col">judul</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($episode as $e)
                        <th scope="row">{{$e->episode}}</th>
                        <td>{{$e->title}}</td>
                      </tr>
                        @endforeach
                     
                        
                        
                      
                     
                    </tbody>
                    
                  </table>
                  {{$episode->links()}}


                
            </div>      
        </div>
    </div>
    
   


    
@endsection