@extends('layouts.after_login')

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
  <div class="col-md-8">
  <h3>{{$album->artist}}</h3>  
  <h3>Songs:</h3>

  <table class="table">

    <thead>
      <tr>
        <th></th>
        <th>Song Name</th>
        <th>Length</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($songs as $song)
        <tr>
          <th scope="row">{{$song->id}}</th>
          <td>{{$song->songname}}</td>
          <td>{{$song->length}}</td>
        </tr>
        
        @endforeach
      </tbody>
  </table>                        
  </div>
</div>

<div class="row"> 
<h2 class="comments-title"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> {{ $album->comments()->count() }} Comments</h2>


@if (Auth::guest())

    
      <a href="{{ route('login') }}">
        <button type="button" class="btn btn-secondary">Please login to leave new comments</button>
      </a>
   
    <!-- {!! Html::linkRoute('login', 'Please login to leave new comments', array('class' => 'btn btn-success btn-lg btn-block')) !!} -->

@else
    <hr>

      <div class="col-md-12"> 

      @foreach ($album->comments as $comment)

      <div class="comment">

          <div class="author-info">

          <img src="{{ "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" . md5(strtolower(trim($comment->email))) }}" class="author-image"> 

          <div class="author-name">

            <h4>{{$comment->user->name}}</h4>
            <p class="author-time">{{$comment->created_at}}</p>
            
          </div> 

                     
          </div>
          
          <div class="comment-content">
            <h4>{{$comment->title}}</h4>
            <p>{{$comment->body}}</p>
          </div>
        </div>
      

      @endforeach
      
        
        <p>Hello {{ Auth::user()->name }}</p>

          {!! Form::open(['route' => 'comment.store']) !!}


            {{Form::label('title','Title:')}}
            {{Form::text('title', null, array('class' => 'form-control'))}}

            {{Form::label('body','Comments:')}}
            {{Form::textarea('body', null, array('class' => 'form-control'))}}

           <!--  <input type = "" name = "id" value = "{{Auth::user()->id}}"> -->

           <input class="form-control hide" name="user_id" type="text" value="{{Auth::user()->id}}" id="user_id">

           <input class="form-control hide" name="album_id" type="text" value="{{$album->id}}" id="album_id">

            <br>

            {{Form::submit('Submit',array('class' => 'btn btn-success btn-lg btn-block'))}}
   
          {!! Form::close() !!}

      </div>
    </div>

@endif
        










@endsection