<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vuivui.com</title>
    <link rel="stylesheet" type="text/css" href="/css/reponsive.css" />
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
    <div id="header">
    {{-- menu header --}}
        @include('sites.layouts.menu')
    </div>
    <div class="clear"></div>
    <div id="content">
        <div id="mainContainer">
            <div id="leftColumn">
                {{-- login --}}
                @include('sites.layouts.login')
                {{-- content-left --}}
                <div class="mainBox">
                    @yield('content')

                    {{-- footer --}}
                    <div class="d_footer">
                        @include('sites.layouts.footer') 
                    </div>
                </div>
            </div>
            {{-- conten-right --}}
            @include('sites.layouts.profile')
            
            <div class="clear"></div>
            <div class="fmobile">
                @include('sites.layouts.footer')
            </div>
        </div>
    </div>
    </div>
    {{-- js --}}
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1357793294285862";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/loadcate.js"></script>
    <script src="/js/script.js"></script>
    {{-- <script src="/js/app.js"></script> --}}
</body>

</html>