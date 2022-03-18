<?php

namespace App\Http\Controllers;

use App\Model\Artists;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $artistas = Artists::select('id_artist', 'artist_name')
       //->limit(10)
       ->get();

        foreach($artistas as $artista){
            Artists::where('id_artist', $artista->id_artist)->update([$artista->artist_slug, Str::slug($artista->artist_name)]);
        }
        
        print_r($artistas);
      /*  $post->title  = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->save();*/
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
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artists $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artists $artista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artists $artista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artists $artista)
    {
        //
    }
}
