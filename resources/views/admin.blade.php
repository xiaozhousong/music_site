@extends('layouts.app')

@section('content')


<h1>Admin Dashboard</h1>
<p>You are logged in as admin</p>

 

<table class="table">

  <thead>
    <tr>
      <th></th>
      <th>Album Name</th>
      <th>Artist Name</th>
      <th>Year Release</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($albums as $album)
    <tr>
      <th scope="row">{{$album->id}}</th>
      <td>{{$album->title}}</td>
      <td>{{$album->artist}}</td>
      <td>{{$album->year}}</td>
      <td>{{$album->created_at}}</td>
      <td>{{$album->updated_at}}</td>
      <td><a href = "{{url('details/'.$album->id)}}" class="btn btn-default" role="button">Details</a>
      </td>
      <td><a href = "{{url('details/'.$album->id)}}" class="btn btn-default" role="button">Edited</a>
      </td>
      <td><a href = "{{url('details/'.$album->id)}}" class="btn btn-default" role="button">Delete</a>
      </td>

      

      
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection