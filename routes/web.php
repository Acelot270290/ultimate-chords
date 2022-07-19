<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

# Others
Route::get('/', 'HomeController@index')->name('homepage');

# Artists
Route::get('/artist', 'ArtistController@index')->name('artist');
Route::get('/artist/{letter}', 'ArtistController@artistLetter')->name('artistLetter');
Route::get('/artist/{letter}/{artist_slug}', 'ArtistController@artistSongs')->name('artistSongs');

# Songs
//Route::get('/song', 'SongController@index')->name('song');
//Route::get('/song/{artist_slug}', 'SongController@index')->name('song');
Route::get('/artist/{letter}/{artist_slug}/{song_slug}', 'SongController@showSong')->name('song');
Route::get('/artist/{letter}/{artist_slug}/{song_slug}/{data_type}', 'SongController@showSongWithType')->name('songWtihType');
