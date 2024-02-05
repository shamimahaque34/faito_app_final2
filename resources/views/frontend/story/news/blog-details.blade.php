@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/FFAgeh1hrx.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>News</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.html" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.html" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle detail">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>News</small>
                        <h3>NEW ITEM ARRIVAL! STEERING CONE MX-SERIES</h3>
                        <span class="date-detail">01 November 2021</span>
                    </div>
                </div>

                <div class="sharethis-inline-share-buttons"></div>

                <div class="images-detail">
                    <img src="{{ asset('/') }}frontend/assets/contents/enbXNhcBFb.png" alt="">
                </div>
                <div class="text-content">
                    <p>For CRF150, NMAX, Ninja 150, Ninja 250, Satria F150</p>
                    <p>The MX Series is a komstir bearing with tapered roll bearing technology or better known as a bamboo bearing which has better performance and durability than conventional komstir bearings. The MX series ensures that your control of the motor is truly balanced. Remains stable in all road conditions, and longer service life.</p>
                    <p>&nbsp;</p>
                    <p><strong>NEW ITEM! </strong></p>
                    <p><strong>Now Available for motorcycles CRF150, NMAX, Ninja 150, Ninja 250, Satria F150</strong></p>
                    <p>&nbsp;</p>
                    <p><strong>Advantages of Faito Steering Cone MX-Series :</strong></p>
                    <p>&nbsp;</p>
                    <p>🏍️ Longer bearing life saves maintenance costs.</p>
                    <p>🏍️ It is suitable for motorcycles that cross uneven or bumpy roads.</p>
                    <p>🏍️ The dust seal protection feature protects the inside from dust so that it is resistant to wear.</p>
                    <p>&nbsp;</p>
                    <p><strong>FEATURE :</strong></p>
                    <p>&nbsp;</p>
                    <p>🏍️ Using a tapered roller bearing type. (bamboo bearings)</p>
                    <p>🏍️ The size of the roller is bigger.</p>
                    <p>🏍️ There is a &ldquo;dust seal protection&rdquo;</p>
                    <p>&nbsp;</p>
                    <p>To find out more or order, please chat Faito Careline on <strong>LIVE CHAT</strong>.</p>
                    <p>Steering cone MX-series are also available in <strong><a title="Tokopedia" href="https://www.tokopedia.com/faitoofficial/product?q=mx-series&amp;srp_page_id=7898490&amp;srp_page_title=Faito%20Official&amp;navsource=shop" target="_blank" rel="noopener">Tokopedia</a>, <a title="Shopee" href="https://shopee.co.id/mall/search?keyword=mx-series&amp;shop=349510887" target="_blank" rel="noopener">Shopee</a>, <a title="Bukalapak" href="https://www.bukalapak.com/faito-official?keywords=mx-series&amp;from=omnisearch&amp;from_keyword_history=false&amp;search_source=omnisearch_brand&amp;source=navbar" target="_blank" rel="noopener">Bukalapak</a>, <a title="Blibli" href="https://www.blibli.com/p/faito-racing-steering-cones-laher-komstir-bambu-kones-for-kawasaki-klx-150-type-mx-series/ps--FAR-60030-00740?ds=FAR-60030-00740-00001&amp;source=MERCHANT_PAGE&amp;sid=b7d02a8cdf5aac9c&amp;cnc=false&amp;pickupPointCode=PP-3088963&amp;pid=FAR-60030-00740" target="_blank" rel="noopener">Blibli </a>marketplaces</strong>.</p>
                    <p>Read more : <a title="Faito Product Steering Cone MX-Series" href="https://www.faito.co.id/en/product-faito/detail/bearing-system/bearing-steering-cone/bearing-steering-cone-mx-series" target="_blank" rel="noopener">Faito product Steering Cone MX-Series&nbsp;&nbsp;</a></p>
                </div>
                <div class="related-news">
                    <div class="wrap-flex">
                        <span class="sub">Related News</span>
                        <a href="{{ route('frontend.blog') }}" class="btn-arr back">Back to News List</a>
                    </div>
                    <div class="listing-wrap related">

                        <a href="produk-faito-racing-mulai-dicari-penggemar-balap-di-sumatera.html" class="list">
                            <figure>
                                <img src="{{ asset('/') }}frontend/assets/contents/ooLZTrU9bo.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h6>Produk Faito Racing Mulai Dicari Penggemar Balap di Sumatera</h6>
                                <div class="caption-small">
                                    <span>News</span>
                                    <span class="date">10 November 2020</span>
                                </div>
                            </div>
                        </a>


                        <a href="racing-part-malaysia-serbu-indonesia.html" class="list">
                            <figure>
                                <img src="{{ asset('/') }}frontend/assets/contents/w9YCm1COJG.jpg" alt="">
                            </figure>
                            <div class="text">
                                <h6>Racing Part Malaysia Serbu Indonesia</h6>
                                <div class="caption-small">
                                    <span>News</span>
                                    <span class="date">01 May 2020</span>
                                </div>
                            </div>
                        </a>


                        <a href="brembo-kini-hadir-di-indonesia.html" class="list">
                            <figure>
                                <img src="{{ asset('/') }}frontend/assets/contents/rLYtctjpfS.png" alt="">
                            </figure>
                            <div class="text">
                                <h6>Brembo is now available in Indonesia</h6>
                                <div class="caption-small">
                                    <span>News</span>
                                    <span class="date">24 April 2021</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
