<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="Charity,Nonprofit,Crowdfunding,Donation & Fundraising" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('assets/frontend/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('assets/frontend/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/frontend/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('assets/frontend/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('assets/frontend/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <!-- <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/> -->
    <!-- CSS | Main style file -->
    <link href="{{asset('assets/frontend/css/style-main.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->

    <link href="{{asset('assets/frontend/css/colors/theme-skin-orange.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('assets/frontend/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('assets/frontend/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{asset('assets/frontend/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('assets/frontend/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('assets/frontend/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- external javascripts -->
    <script href="{{asset('assets/frontend/js/jquery-2.2.4.min.js')}}"></script>
    <script href="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
    <script href="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script href="{{asset('assets/frontend/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script href="{{asset('assets/frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script href="{{asset('assets/frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

</head>

<body> 
<div id="wrapper">
    @yield('content')

    @include('frontend.partials._footer')

    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</body>

{{-- <script src="{{asset('assets/frontend/js/calendar-events-data.js')}}"></script>  --}}
<!-- JS | Custom script for all pages --> 
{{-- <script src="{{asset('assets/frontend/js/custom.js')}}"></script> --}}

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
{{-- <script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>  --}}
{{-- <script type="text/javascript" src="{{asset('assets/frontend/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script> --}}
</body>

</html>

</html>