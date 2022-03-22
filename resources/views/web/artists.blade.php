@extends('layouts.app')
@section('content')

@if(isset($artists))
<section class="about-us-slider swiper-container p-relative" style="margin-top: 25px; margin-bottom: 25px;">
    <div class="g-1 g-fix g-sb">
        <h1 class="t1 g-mb">Artists starting with {{ $firstLetter }}</h1>
    </div>
</section>

@include('layouts.artistLetterBar')

<section class="about-us-slider swiper-container p-relative" style="margin-top: 25px; margin-bottom: 25px;">
    <div class="g-1 g-fix g-sb">
        <ul class="top top__big thumb_big top_art topArtist top--alfabethic">
            @foreach($artists as $artist)
            <li>
                <a href="{{ route('artistSongs', ['letter' => $firstLetter, 'artist_slug' => $artist->artist_slug]) }}">
                    <span class="align-top top-number">
                        <span class="thumb"><img src="https://studiosol-a.akamaihd.net/letras/200x200/fotos/c/5/7/0/c570bc6a39ef159ca86eab7868fe1d55-tb_200.jpg" alt="{{ $artist->artist_name }}'s photo."></span>
                    </span>
                    <span>
                        <strong class="top-txt_primary">{{ $artist->artist_name }}</strong>
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@else
<section class="about-us-slider swiper-container p-relative" style="margin-top: 25px; margin-bottom: 25px;">
    <h1 class="t1 g-mb">Artists</h1>
</section>
@endif

@include('layouts.artistLetterBar')

@endsection