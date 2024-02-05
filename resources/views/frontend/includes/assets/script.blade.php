<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/TweenMax.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/slick.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/main.min.js"></script>
<script type="text/javascript">

    function changeLang(lang){
        // window.location = "https://faito.co.id/changelang/" + lang ;
        window.location = BASEURL + 'change-language/' + lang;
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P8DTNYZ7MJ"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P8DTNYZ7MJ');</script>

@stack('script')
@yield('script')
