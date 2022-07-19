@extends('layouts.app')
@section('content')

@php
    $first = True;
    $numSongs = 0;
    foreach($songs as $song){
        $numSongs += count($song);
    }
@endphp

<section>
    <div class="bandHeader">
        <h1 class="artHeader">
            <img class="artThumb" src="{{ url('assets/img/unknown_artist.svg') }}" width="54">
            <span class="t1">{{ $artist->artist_name }}</span>
            </button>
        </h1>
        <div class="containerExhibitions">
            <span class="exib"><b>{{ $artist->artist_views }}</b> exhibitions.</span>
        </div>
    </div>
    <div id="js-a-s-box">
        <h2>{{ $numSongs }} Songs</h2>
        <div class="list-alf g-sb contentVisibility" data-spy="scroll">
            <ul class="list-index" id="js-a-alphabet">
                @foreach($songs as $key => $searchLetter)
                <li>
                    @if(count($searchLetter) > 0)
                        @if($key == '0-9')
                            @if($first)
                                <a class="on songIndex" href="#letter-1" data-nofollow="true" rel="nofollow">#</a>
                                @php
                                    $first = false;
                                @endphp
                            @else
                                <a class="songIndex" href="#letter-1" data-nofollow="true" rel="nofollow">#</a>
                            @endif
                        @else
                            @if($first)
                                <a class="on songIndex" href="#letter-{{ $key }}" data-nofollow="true" rel="nofollow">{{ $key }}</a>
                                @php
                                    $first = false;
                                @endphp
                            @else
                                <a class="songIndex" href="#letter-{{ $key }}" data-nofollow="true" rel="nofollow">{{ $key }}</a>
                            @endif
                        @endif
                    @else
                        @if($key == '0-9')
                            <b class="songIndexB">#</b>
                        @else
                            <b class="songIndexB">{{ $key }}</b>
                        @endif
                    @endif
                </li>
                @endforeach
            </ul>
            <ul class="list-links art_musics alf all" id="js-a-songs">
            @foreach($songs as $key => $searchLetter)
                @if(count($searchLetter) > 0)
                    @php
                        $first = True;
                    @endphp
                    @if($key == '0-9')
                        <div class="anchor" id="letter-1"></div>
                        <li>0-9</li>
                    @else
                        <div class="anchor" id="letter-{{ $key }}"></div>
                        <li>{{ $key }}</li>
                    @endif
                    @foreach($searchLetter as $song)
                        <li data-name="{{ $song->song_name }}">
                            @if($key == '0-9')
                                <a href="{{ route('song', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug]) }}" class="art_music-link" title="{{ $song->song_name }}">{{ $song->song_name }}</a>
                            @else
                                <a href="{{ route('song', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug]) }}" class="art_music-link" title="{{ $song->song_name }}">{{ $song->song_name }}</a>
                            @endif
                            <span>
                                @if($song->chord == 1)
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'chord']) }}"  data-title="{{ $song->song_name }} chords"><img width="19px" src="{{url('assets/img/icons/acoustic-guitar.png')}}"></a>
                                @else
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'chord']) }}" class="tooltip " data-title="{{ $song->song_name }} chords"><i class="fa-solid fa-guitar"></i>
                                @endif
                                @if($song->keyboard == 1)
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'keyboard']) }}"  data-title="{{ $song->song_name }} keyboard"><img width="19px" src="{{url('assets/img/icons/keyboard.png')}}"></a>
                                @else
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'keyboard']) }}" class="tooltip off" data-title="{{ $song->song_name }} keyboard"><i class="ico ico_violao">Keyboard</i></a>
                                @endif
                                @if($song->tabs == 1)
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'tabature']) }}" data-title="{{ $song->song_name }} tabature"><img width="19px" src="{{url('assets/img/icons/guitar.png')}}"></a>
                                @else
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'tabature']) }}" class="tooltip off" data-title="{{ $song->song_name }} tabature"><i class="ico ico_violao">Tabature</i></a>
                                @endif
                                @if($song->bass == 1)
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'bass']) }}"  data-title="{{ $song->song_name }} bass"><img width="19px" src="{{url('assets/img/icons/bass.png')}}"></a>
                                @else
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'bass']) }}" class="tooltip off" data-title="{{ $song->song_name }} bass"><i class="ico ico_violao">Bass</i></a>
                                @endif
                                @if($song->drums == 1)
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'drums']) }}"  data-title="{{ $song->song_name }} drums"><img width="19px" src="{{url('assets/img/icons/druns.png')}}"></a>
                                @else
                                    <a href="{{ route('songWtihType', ['letter' => $key, 'artist_slug' => $artist->artist_slug, 'song_slug' => $song->song_slug, 'data_type' => 'drums']) }}" class="tooltip off" data-title="{{ $song->song_name }} drums"><i class="ico ico_violao">Drums</i></a>
                                @endif
                            </span>
                        </li>
                    @endforeach
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</section>

@endsection