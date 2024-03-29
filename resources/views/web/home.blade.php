@extends('layouts.app')
@section('content')

<!-- slider -->
<section class="about-us-slider swiper-container p-relative">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide-item">
            <img src="{{url('assets/img/about/blog/1920x700/slide-01.jpg')}}" class="img-fluid full-width" alt="Banner">
            <div class="transform-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-7 align-self-center">
                            <div class="right-side-content">
                                <h1 class="text-custom-white fw-600">Ultimate Chords</h1>
                               <!-- <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and
                                    Canada</h3>-->
                                <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
        </div>
        <div class="swiper-slide slide-item">
            <img src="{{url('assets/img/about/blog/1920x700/slide-02.jpg')}}" class="img-fluid full-width" alt="Banner">
            <div class="transform-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 align-self-center">
                            <div class="right-side-content text-center">
                                <h1 class="text-custom-white fw-600">Guitar Lessons</h1>
                               <!-- <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and
                                    Canada</h3>-->
                                <a href="restaurant.html" class="btn-second btn-submit">Learn More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-bg"></div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- slider -->
@include('layouts.artistLetterBar')
<!-- Browse by category -->
<section class="browse-cat u-line section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Top Artists <span class="fs-14"></h3>
                </div>
            </div>
            <div class="col-12">
                <div class="category-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src={{url('assets/img/top-tabs/adele.jpg')}} class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Adele </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src={{url('assets/img/top-tabs/justin.jpg')}} class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Justin Bieber </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src={{url('assets/img/top-tabs/ed.jpg')}}  class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Ed Sheeran </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src={{url('assets/img/top-tabs/kane.jpg')}}  class="rounded-circle"
                                        alt="categories">
                                        
                                </div> <span class="text-light-black cat-name">Kane Brown </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/metallica.jpg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Metallica </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/glass-animals.jpg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Glass Animals</span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/doja-cats.jpeg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Doja Cats </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/Chris-Stapleton.jpg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Chris Stapleton </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/imagem-dragons.jpg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">Imagem Dragons </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="categories">
                                <div class="icon text-custom-white bg-light-green ">
                                    <img src="{{url('assets/img/top-tabs/one-republic.jpg')}}" class="rounded-circle"
                                        alt="categories">
                                </div> <span class="text-light-black cat-name">One Republic </span>
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Browse by category -->

<!-- your previous order -->
<!-- Explore collection -->
<section class="ex-collection section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-header-left">
                    <h3 class="text-light-black header-title title">Top Songs</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ex-collection-box mb-xl-20">
                    <img src="{{url('assets/img/top-music/adele.jpg')}}" class="img-fluid full-width" alt="image">
                    <div class="category-type overlay padding-15"> <a href="{{url('/artist/H/adele/hello')}}" class="category-btn">Adele - Hello</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ex-collection-box mb-xl-20">
                    <img src="{{url('assets/img/top-music/the-kid-laroi.jpg')}}" class="img-fluid full-width" alt="image">
                    <div class="category-type overlay padding-15"> <a href="{{url('artist/D/justin-bieber/deja-vu-feat-post-malone')}}" class="category-btn">Justin Bieber - Deja Vu</a>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="large-product-box mb-xl-20 p-relative">
                    <img src="assets/img/restaurants/255x587/Banner-12.jpg" class="img-fluid full-width" alt="image">
                    <div class="category-type overlay padding-15">
                        <button class="category-btn">Glass Animals - Heat Waves</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-23.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <div class="custom-tag"> <span
                                                class="text-custom-white rectangle-tag bg-gradient-red">
                                                10%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Great
                                            Burger</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
                                            3.1
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">American, Fast Food</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-2.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">
                                            Flavor Town</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                                            2.1
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/007-chili-1.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-3.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="type-tag bg-gradient-green text-custom-white">
                                            Trending
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Big
                                            Bites</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Pizzas, Fast Food</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-4.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="type-tag bg-gradient-green text-custom-white">
                                            Trending
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Smile
                                            N’ Delight</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Desserts, Beverages</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-5.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <div class="custom-tag"> <span
                                                class="text-custom-white rectangle-tag bg-gradient-red">
                                                20%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black "> Lil
                                            Johnny’s</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
                                            2.1
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Continental & Mexican</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-xl-20">
                            <div class="product-img">
                                <a href="restaurant.html">
                                    <img src="assets/img/restaurants/255x150/shop-6.jpg" class="img-fluid full-width"
                                        alt="product-img">
                                </a>
                                <div class="overlay">
                                    <div class="product-tags padding-10"> <span class="circle-tag">
                                            <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                        </span>
                                        <span class="text-custom-white type-tag bg-gradient-orange">
                                            NEW
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-caption">
                                <div class="title-box">
                                    <h6 class="product-title"><a href="restaurant.html" class="text-light-black ">
                                            Choice Foods</a></h6>
                                    <div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
                                            4.5
                                        </span>
                                    </div>
                                </div>
                                <p class="text-light-white">Indian, Chinese, Tandoor</p>
                                <div class="product-details">
                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                        <span class="text-light-white price">$10 min</span>
                                    </div>
                                    <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                        </span>
                                        <span class="text-light-white text-right">4225 ratings</span>
                                    </div>
                                </div>
                                <div class="product-footer"> <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                                    </span>
                                    <span class="text-custom-white square-tag">
                                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

</section>
@endsection
