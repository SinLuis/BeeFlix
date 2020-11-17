@extends('template')

@section('header')

    
        @foreach ($genre as $g)
          <h5 class="text-uppercase">{{ $g->name }}</h5>
          <div class="card-group mb-4">
          @foreach ($movie as $m)
            @if ($g->id == $m->genre_id)
            <div class="card">
              <img src="{{$m->photo}}" class="card-img-top " alt="...">
                <div class="card-body">
                <h6 class="card-title text-center">{{$m->title}}</h6>
                  <a class="btn btn-dark btn-lg btn-block" href="/DetailMovie/{{$m->id}}">LIHAT FILM</a>    
                </div>
              </div>
            @endif
            
          @endforeach
          </div>
        @endforeach
          
        
             
                    

           
                

        
      
    @endsection        
          
         

