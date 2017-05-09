@extends('layouts.after_login')

@section('content')

<h1>Admin Dashboard</h1>
<p>You are logged in as admin</p>




  <div class="row">
        <div class="bhoechie-tab-container">
            <div class="col-md-3 bhoechie-tab-menu">

              <div class="list-group">
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-picture"></h4><br/>Reports
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cd"></h4><br/>Albums
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-music"></h4><br/>Songs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-comment"></h4><br/>Comments
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-user"></h4><br/>Users
                </a>
              </div>

            </div>
            
            <div class="col-md-9 bhoechie-tab">
                
                <div class="bhoechie-tab-content">
                    <h2>Reports</h2>
                    
                    
                </div>
               
                <div class="bhoechie-tab-content active">
                    
                    <h2>All albums</h2>
                    <h3>Please click <a href = "{{ route('admin.addAlbum')  }}" class="" role="button">here</a> 
                    if you want to add a album
                    </h3>

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
                              

                              <td><a href = "{{url('admin/edit_album/'.$album->id)}}" class="btn btn-default" role="button">Edit</a>
                              </td>
                              
                              

                            </tr>
                            
                            @endforeach
                          </tbody>
                        </table>
                </div>
    
                <div class="bhoechie-tab-content">
                    <h1>this is all songs
                </div>

                <div class="bhoechie-tab-content">
                    <h1>this is all comments
                </div>

                <div class="bhoechie-tab-content">
                    <h1>this is user information 
                </div>

                
            </div>
        </div>
  </div>





@endsection