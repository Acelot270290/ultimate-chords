@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="bandHeader">
                <h1 class="artHeader">
                    <img class="artThumb" src="{{ url('assets/img/unknown_artist.svg') }}" width="54">
                    <span class="t2">{{ $song->song_name }}</span>
                </h1>
                <h2>
                    <a href="{{ route('artistSongs', ['letter' => $letter, 'artist_slug' => $artist->artist_slug]) }}"><span
                            class="t2">{{ $artist->artist_name }}</span></a>
                </h2>
                <div class="containerExhibitions">
                    <span class="exib"><b>{{ $song->song_views }}</b> exhibitions.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="songBox">
                        <span style="white-space: pre-line">
                            {{ $data }}
                        </span>
                    </div>
                </div>
                <div class="col-5">
                    <div class="metaBox">
                        <div class="videoBox">
                            @if ($song->song_id_videoclass != null)
                                <iframe class="videoReplacement" src="{{ $song->videoclass_url }}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            @else
                                <img class="videoReplacement" src="{{ url('assets/img/unknown_artist.svg') }}"
                                    width="54">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
            </div>
    </section>
@endsection
