<div class="right-header">
    <nav>
        <ul>
            <li>
                <a class="active" href="{{ route('frontend.home') }}">
                    Home
                </a>
            </li>
            <li class="have-child">
                <a class="" href="#" class="">Story</a>
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
                <a class="" href="#" class="">Product</a>
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
            <li>
                <a class="" href="{{ route('frontend.contact') }}">
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <div class="box-lang">
       
        <a href="{{ route('frontend.language-change',['name' => 'eng']) }}"><span class="active">EN</span></a>
      

        
        <a href="{{ route('frontend.language-change',['name' => 'ban']) }}"><span>BN</span>
        </a>
    </div>
    <div class="box-search">
        <span class="icon-search"><img src="{{ asset('/') }}frontend/assets{{ asset('/') }}frontend/assets/images/material/ic-search.png" alt=""></span>
        <span class="icon-search black"><img src="{{ asset('/') }}frontend/assets{{ asset('/') }}frontend/assets/images/material/ic-search-bl.png" alt=""></span>
        <div class="search-box">

        </div>
    </div>
</div>
