@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/x4ZsrY20hD.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Faito Products</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>


    <section class="content-landing testi">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>Faito Products</small>
                        <h3>Faito Products</h3>
                    </div>
                    <div class="text-right">
                        <p><h2>Motorcycle Spare Parts</h2>
                        <p style="text-align: justify;">Faito is a leading brand in the world of <strong>motorcycle spare parts</strong>, was established in 2006 and is managed by a team with more than 40 years of experience in the motorcycle industry. Faito is committed to providing quality and high-performance motorcycle spare parts in Indonesia. Supported by an experienced research and development (R&amp;D) team to produce reliable and suitable products for various types or types of daily motorbikes as well as for racing needs.</p></p>
                    </div>
                </div>
            </div>
            <div class="box-grid">


                <a href="{{ route('frontend.sub-cat') }}" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/rsQC1C7Fkq.png" alt="">
                        <figcaption>
                            <h5>BEARING SYSTEM</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/braking-system.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/BJGxkvEy1d.png" alt="BRAKING SYSTEM">
                        <figcaption>
                            <h5>BRAKING SYSTEM</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/clutch-system.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/qgDQqg2ifQ.png" alt="CLUTCH SYSTEM">
                        <figcaption>
                            <h5>CLUTCH SYSTEM</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/electronic-and-ignition.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/49KqL79Iq3.png" alt="ELECTRONIC AND IGNITION">
                        <figcaption>
                            <h5>ELECTRONIC AND IGNITION</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/roller-chain.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/yKz0i2TVUq.png" alt="DRIVE SYSTEM">
                        <figcaption>
                            <h5>DRIVE SYSTEM</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/lubricant.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/4lTBDDtCog.png" alt="LUBRICANT">
                        <figcaption>
                            <h5>LUBRICANT</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/engine-component.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/cWtimIiIan.png" alt="ENGINE COMPONENT">
                        <figcaption>
                            <h5>ENGINE COMPONENT</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/lighting.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/F9AFKXtTAG.png" alt="LIGHTING">
                        <figcaption>
                            <h5>LIGHTING</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/carburation.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/8g6lMCXQqZ.png" alt="CARBURATION">
                        <figcaption>
                            <h5>CARBURATION</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="product-faito/detail/exhaust-system-1.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/JW2RXlLTgG.png" alt="Exhaust System">
                        <figcaption>
                            <h5>Exhaust System</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>


            </div>
        </div>
    </section>
@endsection
