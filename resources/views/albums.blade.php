@extends('layouts/after_login')

@section('title', '- IndexPage')

@section('content')

<div class="row">
@foreach ($albums as $album)
  <div class="col-md-4">
    <div class="thumbnail">
      <a href = ""><img src="{{$album->logo}}"></a>
      
      <div class="caption">
        <h3 class ="textcolor">  
          <a href = "{{url('details/'.$album->id)}}" class ="textcolor">{{$album->title}}</a>    
        </h3>
        <h3 class ="textcolor">
          {{$album->artist}}
        </h3>

        <h4 class ="textcolor">
          {{$album->year}}
        </h4>
        
        <p> 
        <a href = "{{url('details/'.$album->id)}}" class="btn btn-default" role="button">Details</a> 

        <!-- Auth::login($user); -->
        
        </p>
      </div>
    </div>
  </div>
@endforeach
</div>

@endsection