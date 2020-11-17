@extends('template')

@section('header')
<h5 class="text-uppercase">{{$genre->name}}</h5>
<div class="card-group mb-4">
    
    @foreach ($movie as $m)
    <div class="card">
      <img src="{{asset($m->photo)}}" class="card-img-top " alt="...">
      <div class="card-body">
        <h6 class="card-title text-center">{{$m->title}}</h6>
      <a class="btn btn-dark btn-lg btn-block" href="/DetailMovie/{{$m->id}}">LIHAT FILM</a>              
      </div>
    </div>

        
    @endforeach
      
      
    

    
    
    
   
  
    
@endsection