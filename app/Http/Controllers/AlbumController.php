<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Song;
use App\Comment;


use Session;

class AlbumController extends Controller
{
    public function albums()
    {
        $albums = Album::all();
       
        return view('albums',['albums' => $albums]);
    }

    public function details($albumId){

        $album = Album::find($albumId);
        $songs = $album->songs;
        
        return view('details',['album' => $album], ['songs' => $songs]);
    }
}
