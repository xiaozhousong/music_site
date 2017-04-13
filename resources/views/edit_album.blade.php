@extends('layouts.after_login')

@section('title', '- DetailsPage')

@section('content')

<div class="col-md-8 col-md-offset-2">
<h1>Edit Album</h1>
<p>You are logged in as admin</p>
<hr>

{!! Form::model($album, ['route'=>['album.update', $album->id, 'method'=>'PUT']]) !!}
        
        {{Form::label('logo','Logo:')}}
        {{Form::text('logo', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '1000'))}}


        {{Form::label('title','Title:')}}
        {{Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '100'))}}

        {{Form::label('year','Relase Year:')}}
        {{Form::text('year', null, array('class' => 'form-control', 'required' => ''))}}

        {{Form::label('artist','Artist:')}}
        {{Form::text('artist', null, array('class' => 'form-control', 'required' => ''))}}

        <br>

        {{Form::submit('Save Changes',array('class' => 'btn btn-success btn-lg btn-block'))}}

       

        {!! Html::linkRoute('admin.dashboard', 'Back', array($album->id), array('class' => 'btn btn-success btn-lg btn-block')) !!}


    
  {!! Form::close() !!}

</div>



@endsection