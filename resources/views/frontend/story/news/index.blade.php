@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/FFAgeh1hrx.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story.news.news') }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.html" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.html" alt=""></span>
    </section>

    <section class="content-landing detail">
        <div class="wrapper">
            <div class="wrap-box-news news-detail">
                <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/images/material/dots-square-small.html" alt=""></span>
                <a href="{{ route('frontend.blog-details') }}" class="big-img">
                    <img src="{{ asset('/') }}frontend/assets/contents/enbXNhcBFb.png" alt="">
                </a>
                <a href="{{ route('frontend.blog-details') }}" class="right-list">
                    <h3>NEW ITEM ARRIVAL! STEERING CONE MX-SERIES</h3>
                    <p>For CRF150, NMAX, Ninja 150, Ninja 250, Satria F150</p>
                    <div class="caption-small">
                        <span>News</span>
                        <span class="date">01 November 2021</span>
                    </div>
                </a>
            </div>
            <div class="listing-wrap news">
                <a href="news/detail/this-is-different-from-the-two-types-of-faito-motor-bearings-that-are-sold-in-the-market.html" class="list">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/uyynP93oEV.jpg" alt="">
                    </figure>
                    <div class="text">
                        <h5>This is different from the two types of Faito motor bearings that are sold in the market</h5>
                        <div class="caption-small">
                            <span>Media Coverage</span>
                            <span class="date">11 May 2021</span>
                        </div>
                    </div>
                </a>
                <a href="news/detail/petrol-pipe-nbr-pro.html" class="list">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/lycGDvZIrx.jpg" alt="">
                    </figure>
                    <div class="text">
                        <h5>Petrol Pipe NBR Pro</h5>
                        <div class="caption-small">
                            <span>Product Review</span>
                            <span class="date">01 September 2022</span>
                        </div>
                    </div>
                </a>
                <a href="news/detail/new-arrival-pro-stroker-racing-camshaft-for-suzuki-satria-f150.html" class="list">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/ZmQ6VlAYNi.png" alt="">
                    </figure>
                    <div class="text">
                        <h5>New Arrival: Pro Stroker Racing Crankshaft for Suzuki Satria F150</h5>
                        <div class="caption-small">
                            <span>Product Review</span>
                            <span class="date">03 June 2021</span>
                        </div>
                    </div>
                </a>
                <a href="news/detail/liputan-media-brembo-brake-pad-di-channel-motor-plus.html" class="list">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/Ap9LMC56uh.png" alt="">
                    </figure>
                    <div class="text">
                        <h5>Brembo brake pads product review  with Om Gun and MOTOR Plus</h5>
                        <div class="caption-small">
                            <span>Media Coverage</span>
                            <span class="date">30 April 2021</span>
                        </div>
                    </div>
                </a>
                <a href="news/detail/brembo-kini-hadir-di-indonesia.html" class="list">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/rLYtctjpfS.png" alt="">
                    </figure>
                    <div class="text">
                        <h5>Brembo is now available in Indonesia</h5>
                        <div class="caption-small">
                            <span>News</span>
                            <span class="date">24 April 2021</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>
@endsection
