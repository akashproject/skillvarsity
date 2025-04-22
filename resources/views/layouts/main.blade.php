<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Eduversity' }}" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
    <meta name="google-site-verification" content="" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'Eduversity' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Eduversity' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="https://www.facebook.com" />
    <meta property="og:image:secure_url" content="https://www.facebook.com" />
    <meta property="og:video" content="https://www.youtube.com" />
    <meta property="og:video:secure_url" content="https://www.youtube.com" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@Eduversity" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'Eduversity' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Eduversity' }}" />
    <meta name="twitter:creator" content="@Eduversity" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="ica-admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" />
    <!-- Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/style.css') }}">
    
    @yield('style')

    <script>
        let popUp = 1
	</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M8R75D58');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8R75D58"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <div id="lead-generate-popup" class="white-popup mfp-hide">
        @include('common.leadCaptureForm')
    </div>
    
    <script>
        let globalUrl = "{{ env("APP_URL") }}"
        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
    </script>
    <script src="{{ url('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/gh/HichemTab-tech/OTP-designer-jquery@2.0.1/dist/otpdesigner.min.js"></script>
    <script src="{{ url('assets/frontend/js/jquery.slick.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/odometer.js') }}"></script>
    <script src="{{ url('assets/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ url('assets/frontend/js/main.js') }}"></script>

</body>
</html>