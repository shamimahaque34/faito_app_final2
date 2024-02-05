@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/lxx0CHAACE.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>FAQ</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.html" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.html" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>FAQ</small>
                        <h3>FAQ</h3>
                    </div>
                </div>
                <div class="accordion">
                    <div class="list-acc act">
                        <div class="grid-acc">
                            <h5>Apakah itu Faito?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Faito adalah brand suku cadang sepeda motor after market dengan kualitas tinggi yang berasal dari Malaysia</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Apa yang Faito tawarkan kepada pelanggan?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Faito menawarkan pengalaman berkendara lebih baik melalui suku cadang berkualitas&nbsp; tinggi dengan harga yang kompetitif. Produk Faito mulai dari bearing, kruk as, kampas kopling, brakepad, dan lain-lain.</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Bagaimana cara mendapatkan produk Faito?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Faito dapat ditemukan di gerai-gerai suku cadang atau bengkel rekanan Faito</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Apakah produk Faito bisa dibeli secara online/daring?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Ya, saat ini Faito sudah melayani pemesanan melalui online/daring.</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Bagaimana cara membeli produk Faito secara online/daring?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Anda dapat menemukan kami di marketplace kesayangan Anda melalui link dibawah ini:</p>
                            <p><a href="https://www.tokopedia.com/faitoofficial" target="_blank" rel="noopener">Tokopedia</a></p>
                            <p><a href="https://shopee.co.id/faitostore" target="_blank" rel="noopener">Shoppe</a></p>
                            <p><a title="Bukalapak" href="https://www.bukalapak.com/u/faito_official_store" target="_blank" rel="noopener">Bukalapak</a></p>
                            <p><a href="https://www.blibli.com/merchant/faito-official-store/FAR-60030" target="_blank" rel="noopener">Blibli</a></p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Apakah saya bisa menjadi reseller?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Ya</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Bagaimana cara menjadi reseller produk Faito?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Silakan mengisi dan melengkapi syarat pada halaman <a href="contact.html">kontak</a></p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Dimana alamat Faito Indonesia?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Kantor pusat Faito Indonesia beralamat di The Boulevard No. 53 Jakarta Garden City Jakarta Timur, DKI Jakarta, 13910</p>
                        </div>
                    </div>
                    <div class="list-acc ">
                        <div class="grid-acc">
                            <h5>Bagaimana cara menghubungi customer service Faito?</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>Anda dapat menghubungi kami melalu telepon 0811 1616 466 atau melalui email customercare@faito.co.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
