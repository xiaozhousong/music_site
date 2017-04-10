@extends('layouts.app')

@section('title', '- DetailsPage')

@section('content')

<div class="row">
  
  <div class="col-md-4">
    
    <div class="thumbnail">
      <img src = "{{$album->logo}}">
      <div class="caption">
        <h3>{{$album->title}}</h3> 
        <h3 class ="textcolor">
          {{$album->artist}}
        </h3>      
        <p>{{$album->year}}</p>
       
        
        <br>

        <dl>
          <dt>Creat At:</dt>
          <dd>{{ $album->created_at }}</dd>
        </dl>
        
        <dl>
          <dt>Last Updated:</dt>
          <dd>{{ $album->updated_at }}</dd>
        </dl>
        
          
       
      </div>
    </div>

  </div>
@endsection