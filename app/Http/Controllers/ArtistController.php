<?php

namespace App\Http\Controllers;

use App\Model\Artists;
use App\Model\Songs;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view("web.artists");
        //$artistas = Artists::select('id_artist', 'artist_name')->get();
        
        /*foreach($artistas as $artista){
            if($artista->artist_slug == ""){
                Artists::where('id_artist', $artista->id_artist)->update(['artist_slug' => Str::slug($artista->artist_name)]);
            }
        }
        
        print_r($artistas);*/

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

    /**
     * Display artists with the selected letter
     *
     * @return \Illuminate\Http\Response
     */
    public function artistLetter($letter)
    {
        $artists = Artists::select('id_artist', 'artist_name', 'artist_image', 'artist_start_year', 'artist_id_country', 'artist_id_style', 'artist_slug')->where('artist_name', 'like', $letter . '%')->get();
        return view("web.artists",[
            'firstLetter' => $letter,
            'artists' => $artists
        ]);
    }

    /**
     * Display artists with the selected letter
     *
     * @return \Illuminate\Http\Response
     */
    public function artistSongs($letter, $artist_slug)
    {
        // Seleciona o artista usando a slug (que é única)
        $artist = Artists::select('id_artist', 'artist_name', 'artist_image', 'artist_start_year', 'artist_id_country', 'artist_id_style', 'artist_slug', 'artist_views')
            ->where('artist_slug', '=', $artist_slug)
            ->first();

        ########################################################################################################
        # atualizar o artist_views aqui incrementando, mas fazer uma checagem para evitar que haja abuso de ip #
        ########################################################################################################

        // Definição das buscas a serem realizadas
        $searchLetters = ['0-9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

        // Declaração de dicionário de músicas separadas pela primeira letra
        $songs = [];

        // Seleciona as músicas do artista para cada letra (com o id que descobriu na query passada)
        foreach($searchLetters as $searchLetter){
            // Se for numérico usa o regex
            if($searchLetter == '0-9'){
                $songs[$searchLetter] = Songs::select('id_song', 'song_id_artist', 'song_user_insertion_id', 'song_name', 'song_year', 'song_author', 'song_id_style', 'song_id_tone', 'song_id_videoclass', 'chord', 'keyboard', 'tabs', 'bass', 'drums', 'song_slug')
                    ->where('song_id_artist', '=', $artist->id_artist)
                    ->where('song_name', 'REGEXP', '^[0-9]')
                    ->orderby('song_name')
                    ->get();
            }else{
                $songs[$searchLetter] = Songs::select('id_song', 'song_id_artist', 'song_user_insertion_id', 'song_name', 'song_year', 'song_author', 'song_id_style', 'song_id_tone', 'song_id_videoclass', 'chord', 'keyboard', 'tabs', 'bass', 'drums', 'song_slug')
                    ->where('song_id_artist', '=', $artist->id_artist)
                    ->where('song_name', 'like', $searchLetter . '%')
                    ->orderby('song_name')
                    ->get();
            }
        }
        
        return view("web.artistSongs",[
            'letter' => $letter,
            'artist' => $artist,
            'songs' => $songs
        ]);
    }
}
