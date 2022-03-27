<?php

namespace App\Http\Controllers;

use App\Song;
use App\Model\Songs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chunk = 1000;
        Songs::select('id_song', 'song_name')->where('song_slug', '=', '')->orderBy('id_song')->chunk($chunk, function($songs) {
             foreach($songs as $song){
                 if($song->song_slug == ""){
                     Songs::where('id_song', $song->id_song)->update(['song_slug' => Str::slug($song->song_name)]);
                 }
             }
         });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function show(Musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function edit(Musica $musica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musica $musica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Musica  $musica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musica $musica)
    {
        //
    }

    /**
     * This function only redirects to type and set the type as the default: 'chords'
     *
     * @return \Illuminate\Http\Response
     */
    public function showSong($letter, $artistSlug, $songSlug)
    {
        showSongWithType($letter, $artistSlug, $songSlug, 'chords');
    }

    /**
     * Display artists with the selected letter and shows its type
     *
     * @return \Illuminate\Http\Response
     */
    public function showSongWithType($letter, $artistSlug, $songSlug, $dataType)
    {
        // Select data and display the song info
        return;
    }
}