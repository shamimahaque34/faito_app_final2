<div class="popup-search" id="burgermenu">
    <div class="close-popup-search">
        <span></span><span></span>
    </div>

    <div class="box-inner-search burgermenuinner normal-search active">
        <div class="navigasi">
            <div class="box head-burger">
                <h5><a href="{{ route('frontend.home') }}">Home</a></h5>
                <div class="box-lang">
                    <span onclick="changeLang('en','1')" class="active">EN</span>
                    <span onclick="changeLang('bn','1')" class="">BN</span>
                </div>
            </div>
            <div class="box wrap-drop">
                <ul>
                    <li class="have-child">
                        <a href="index.html#">Story</a>
                        <ul>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.faitology') }}">
                                    Faitology
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.faitotech') }}">
                                    Faitotech
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.brembology') }}">
                                    Brembology
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.testimonial') }}">
                                    TESTIMONIAL
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.blog') }}">
                                    News
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="have-child">
                        <a href="product.html">Product</a>
                        <ul>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.product') }}">
                                    Faito Products
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.product') }}">
                                    Brembo Products
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box wrap-flex">
                <ul>
                    <li>
                        <a class="" href="{{ route('frontend.contact') }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('frontend.faq') }}">
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <form action="https://faito.co.id/en/search">
                    <input type="text" name="title" placeholder="Search Our Product">
                    <a class="link-yellow btn-adv-search">Advance Search</a>
                </form>
            </div>
        </div>
    </div>
    @include('frontend.includes.advance-search')
</div>
