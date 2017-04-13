<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('admin', ['albums' => $albums]);
    }

    public function create()
    {     
        return view('add_album');
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'logo' => 'required|max:1000',
            'title' => 'required|max:100',
            'year' => 'required|integer|max:2017|min:1900',
            'artist' => 'required'
           ]);

        $album = new Album();
        $album->logo = $request->logo;
        $album->title = $request->title;
        $album->year = $request->year;
        $album->artist = $request->artist;

        $album->save();

        Session::flash('success','The Album is successfully saved');

        return redirect('admin');
    }
    public function details($albumId){

        $album = Album::find($albumId);
        
        return view('details',['album' => $album]);
    }

    public function edit($albumId)
    {
        $album = Album::find($albumId);
        // return view('album_edit')->withAlbum($album);
        return view('edit_album')->withAlbum($album);
    }
    public function update(Request $request, $albumId){
        $this->validate($request, [
            'logo' => 'required|max:1000',
            'title' => 'required|max:100',
            'year' => 'required|integer|max:2017|min:1900',
            'artist' => 'required'
           ]);
        $album = Album::find($albumId);

        $album->logo = $request->input('logo');
        $album->title = $request->input('title');
        $album->year = $request->input('year');
        $album->artist = $request->input('artist');

        $album->save();

        Session::flash('success','The Album is successfully updated');
        return redirect('admin');
    }
    

    
}
