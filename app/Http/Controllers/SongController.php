<?php

namespace App\Http\Controllers;

use App\Song;
use App\Model\Songs;
use App\Model\Artists;
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
     * This function only redirects to type and set the type as the default: chords -> tabature -> bass -> keyboard -> drums
     *
     * @return \Illuminate\Http\Response
     */
    public function showSong($letter, $artist_slug, $song_slug)
    {
        // Seleciona o artista usando a slug (que é única)
        $song = Songs::select('chord', 'keyboard', 'tabs', 'bass', 'drums')
            ->where('song_slug', '=', $song_slug)
            ->first();
        
        // Define qual é o tipo de cifra que vai ser utilizada.
        // O padrão é chords -> tabature -> bass -> keyboard -> drums
        if($song['chord']){
        }elseif($song['tabature']){
            $dataType = 'tabature';
        }elseif($song['bass']){
            $dataType = 'bass';
        }elseif($song['keyboard']){
            $dataType = 'keyboard';
        }elseif($song['drums']){
            $dataType = 'drums';
        }else{
            // Retorna erro de página não pode ser mostrada porque não existe dados da música. Na teoria isso nunca deverá aparecer.
            return view("web.oops", []);
        }
        return $this->showSongWithType($letter, $artist_slug, $song_slug, $dataType);
    }

    /**
     * Display artists with the selected letter and shows its type
     *
     * @return \Illuminate\Http\Response
     */
    public function showSongWithType($letter, $artist_slug, $song_slug, $dataType)
    {
        // Seleciona o artista usando a slug (que é única)
        $artist = Artists::select('id_artist', 'artist_name', 'artist_image', 'artist_start_year', 'artist_id_country', 'artist_id_style', 'artist_slug', 'artist_views')
            ->where('artist_slug', '=', $artist_slug)
            ->first();
            
        // Seleciona a música e seus dados usando a slug (que é única)
        $song = Songs::select('id_song', 'song_id_artist', 'song_name', 'song_year', 'song_author', 'song_id_style', 'song_id_tone', 'song_id_videoclass', 'chord', 'keyboard', 'tabs', 'tabs', 'song_views')
            ->where('song_slug', '=', $song_slug)
            ->leftjoin('styles', 'styles.id_style', '=', 'songs.song_id_style')
            ->leftjoin('tones', 'tones.id_tone', '=', 'songs.song_id_tone')
            ->leftjoin('videoclasses', 'videoclasses.id_videoclass', '=', 'songs.song_id_videoclass')
            ->first();

        ######################################################################################################
        # atualizar o song_views aqui incrementando, mas fazer uma checagem para evitar que haja abuso de ip #
        ######################################################################################################

        // Le o arquivo json com os dados da música
        $json = file_get_contents(public_path() . '/assets/db-all/' . $artist['id_artist'] . '/' . $song['id_song'] . '.json');

        // Muda o arquivo json para um array
        $json = json_decode($json, true);

        // Acessa o array e pega o tipo de cifra que vai ser utilizada
        $data = $json[$dataType];

        // Select data and display the song info
        return view("web.song", [
            'letter' => $letter,
            'artist' => $artist,
            'song' => $song, 
            'data' => $data,
        ]);
    }
}