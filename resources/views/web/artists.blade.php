@extends('layouts.app')
@section('content')

@if(isset($artists))
<section class="about-us-slider swiper-container p-relative" style="margin-top: 25px; margin-bottom: 25px;">
    <div class="g-1 g-fix g-sb">
        <h1 class="t1 g-mb">Artists starting with {{ $firstLetter }}</h1>
    </div>
</section>

@include('layouts.artistLetterBar')

<section class="about-us-slider swiper-container p-relative" style="margin-top: 25px; margin-bottom: 25px; margin-left: 7%; margin-right: 7%;">
    <div class="g-1 g-fix g-sb">
        <ul class="top top__big thumb_big top_art topArtist top--alfabethic"style="
        display: flex;
        flex-wrap: wrap;">
            @foreach($artists as $artist)
            <li class="artistli">
                <a style="display: inline-table; text-decoration: none; line-height: 1.2; position: relative; height: 87px;" href="{{ route('artistSongs', ['letter' => $firstLetter, 'artist_slug' => $artist->artist_slug]) }}">
                    <span class="align-top top-number">
                        <span ><img style="width: 57px; height: 57px; border-radius: 28px 28px 28px 28px"
                                src="https://studiosol-a.akamaihd.net/letras/200x200/fotos/c/5/7/0/c570bc6a39ef159ca86eab7868fe1d55-tb_200.jpg"
                                alt="{{ $artist->artist_name }}'s photo."></span>
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