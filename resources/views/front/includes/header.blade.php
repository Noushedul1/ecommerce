<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('front_title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/urdan/index.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Urdan - Minimal eCommerce HTML Template" />
    <meta property="og:url" content="https://htmldemo.hasthemes.com/urdan/index.html" />
    <meta property="og:site_name" content="Urdan - Minimal eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Urdan Minimal eCommerce Bootstrap 5 Template is a stunning eCommerce website template that is the best choice for any online store." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Add site Favicon -->
    <link rel="icon" href="{{ asset('/front') }}/assets/images/favicon/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="{{ asset('/front') }}/assets/images/favicon/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('/front') }}/assets/images/favicon/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="{{ asset('/front') }}/assets/images/favicon/cropped-favicon-270x270.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/vendor/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/select2.min.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/plugins/slinky.css" />
    <link rel="stylesheet" href="{{ asset('/front') }}/assets/css/style.css" />
    <style>
        .toast-success{
            color: green;
        }
    </style>
    @stack('front_link')
</head>
