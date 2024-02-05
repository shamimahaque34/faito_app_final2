@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/z57opEbSvz.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Faitology</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>Who We Are</small>
                        <h3>WHERE RIDING EXPERIENCE COUNT</h3>
                    </div>
                    <div class="text-right">
                        <p><p style="text-align: justify;">Faito presents quality and innovative motorcycle spare parts products, each product is made with detailed accuracy standards, starting from the composition of materials and dimensional accuracy so that quality products are present.</p>
                        <p style="text-align: justify;">Faito focus creates innovative products by considering performance, durability and comfort to provide a better riding experience.</p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-visimisi">
            <div class="box" style="background-color: #2957A4;">
                <small>VISION</small>
                <p>Making Faito a leader in the worldwide spare parts market</p>
            </div>
            <div class="box" style="background-color: #4C4C4E;">
                <small>MISSION</small>
                <p style="text-align: justify;">Providing high-performance parts combined with high-quality materials at very competitive prices.</p>
                <p style="text-align: justify;">We have established a strong and reliable network throughout the world, spreading our influence in this highly competitive industry.</p>
            </div>
        </div>

        <div class="wrapper">
            <section class="milestone">
                <small class="with-line">milestones</small>
                <div class="wrap-box-miles">
                    <div class="left-box">
                        <div class="slider-miles">
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/2gU0Uve8lX.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2006</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/61bTcjkPNI.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2012</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/8QN5u8sDRQ.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2013</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/pzQYmlDsCi.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="slider-text">
                            <div class="list">
                                <p>Faito was established, the company is managed by a board of directors who have been involved in the motorcycle industry for more than 30 years.</p>
                            </div>
                            <div class="list">
                                <p>Faito supports the local Petronas AAM Malaysian Cub Prix Championship, and participate in the race as the main sponsor for Faito YSP racing team and AAP Maz Oil HRC Faito racing team</p>
                                <p>Faito opening branch in Indonesia</p>
                                <p>Faito partner with Air-Asia-SIC -Ajo Team in MotoGP - Moto3</p>
                                <p>FAITO co-sponsored Racing GIATMARA Garage Northern Team</p>
                            </div>
                            <div class="list">
                                <p>Faito partner with Tsukigi Racing in Asia Road Racing Championship</p>
                                <p>Roadshow to Japan</p>
                            </div>
                            <div class="list">
                                <p>Faito opening of its first showroom in Caloocan, Philippines</p>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </section>
@endsection
