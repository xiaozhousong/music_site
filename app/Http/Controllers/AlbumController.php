<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    public function albums()
    {
        $albums = Album::all();
       
        return view('albums',['albums' => $albums]);
    }

    public function details($albumId){

        $album = Album::find($albumId);
        
        return view('details',['album' => $album]);
    }
}
