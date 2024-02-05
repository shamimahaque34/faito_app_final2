@extends('frontend.master')

@section('title', 'Contact')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/z0B20V6Gkz.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Contact</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>Contact</small>
                        <h3>Contact</h3>
                    </div>
                </div>
                <div class="wrap-box-news contact">
                    <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/contents/images/material/dots-square-small.html" alt=""></span>
                    <figure class="big-img">
                        <img src="{{ asset('/') }}frontend/assets/contents/cjsVDlpkMf.jpg" alt="">
                    </figure>
                    <div class="right-list">
                        <figure><img src="{{ asset('/') }}frontend/assets/contents/4dVXEf6gSg.png" alt=""></figure>
                        <h6>PT FAITO RACING DEVELOPMENT INDONESIA</h6>
                        <p><b>Head Office :</b>The Boulevard No. 53
                            Jakarta Garden City
                            Jakarta Timur 13910</p>
                        <a href="tel:0811 1616 466">T.0811 1616 466</a>
                        <a href="mailto:customercare@faito.co.id">E. customercare@faito.co.id</a>
                    </div>
                </div>
                <div class="wrap-tab">
                    <span class="sub">Available For</span>
                    <div class="wrap-overflow">
                        <div class="box-tabing contact">
                            <span class="repeat-dots"></span>
                            <div class="head-tab">
                                <ul>
                                    <li><a href="#tab1">Say Hello!</a></li>
                                    <li><a href="#tab2">Join Reseller</a></li>
                                </ul>
                            </div>
                            <div class="content-tab text-content" id="tab1">
                                <h4>Send Us a Message</h4>
                                <p>Send Us a Message Description</p>
                                <div class="form">
                                    <form method="POST" action="https://faito.co.id/en/contact" accept-charset="UTF-8" id="formContact" enctype="multipart/form-data"><input name="_token" type="hidden" value="p49Kc0X40mBZyyiVX75579WaPVSDHERVKs7BD5Du">
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">Name</label>
                                                <input class="anim-label" required="required" name="name" type="text" value="">
                                            </div>
                                            <div class="col half">
                                                <label for="">Email</label>
                                                <input class="anim-label" required="required" name="email" type="email" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">Phone</label>
                                                <input class="numberonly anim-label" required="required" name="phone" type="number" value="">
                                            </div>
                                            <div class="col half">
                                                <label for="">Motor Type</label>
                                                <select class="anim-label" required="required" name="motor_type_id"><option value="" selected="selected"></option><option value="5">Bebek</option><option value="6">Matic</option><option value="7">Sport</option><option value="8">Cross</option><option value="10">Matic Premium</option><option value="11">-</option></select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Message</label>
                                                <textarea class="anim-label" required="required" name="message" cols="50" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div data-sitekey="6LcIDvEUAAAAANYihBtgfip5JKc1rEI2pFgq8UVu" class="g-recaptcha"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="content-tab" id="tab2">
                                <h4>Become Reseller</h4>
                                <p>Become Reseller Description</p>
                                <div class="form">
                                    <form method="POST" action="https://faito.co.id/en/contact/reseller" accept-charset="UTF-8" id="formReseller" enctype="multipart/form-data"><input name="_token" type="hidden" value="p49Kc0X40mBZyyiVX75579WaPVSDHERVKs7BD5Du">
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">Name</label>
                                                <input class="anim-label" required="required" name="name" type="text" value="">
                                            </div>
                                            <div class="col half">
                                                <label for="">Email</label>
                                                <input class="anim-label" required="required" name="email" type="email" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">Phone</label>
                                                <input class="number-only anim-label" required="required" name="phone" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>Workshop Information</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Address</label>
                                                <input class="anim-label" required="required" name="address" type="text" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col fileupload">
                                                <label for="">Photo Outside Workshop</label>
                                                <input class="anim-label" placeholder-text="Upload Here" required="required" name="image_inside" type="file">
                                            </div>
                                            <div class="col fileupload">
                                                <label for="">Photo Inside Workshop</label>
                                                <input class="anim-label" placeholder-text="Upload Here" required="required" name="image_outside" type="file">
                                            </div>
                                            <div class="col fileupload">
                                                <label for="">Photo Selfie Workshop</label>
                                                <input class="anim-label" placeholder-text="Upload Here" required="required" name="image_selfie" type="file">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div data-sitekey="6LcIDvEUAAAAANYihBtgfip5JKc1rEI2pFgq8UVu" class="g-recaptcha"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
