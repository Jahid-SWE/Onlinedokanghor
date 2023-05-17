
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Fablio - HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>@yield('title') </title>

<link rel="shortcut icon" href="{{asset('/')}}frontend-asset/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/animate.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/themify-icons.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/shortcodes.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/main.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/megamenu.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-asset/css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">
       
        <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div>

        <!--header start-->
       @include('frontend.includes.header')
       <!--header end-->


       @yield('body')


        <!--footer start-->
       @include('frontend.includes.footer')
        <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->
    <script src="{{asset('/')}}frontend-asset/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/bootstrap.min.js"></script> 
    <script src="{{asset('/')}}frontend-asset/js/jquery.easing.js"></script> 
    <script src="{{asset('/')}}frontend-asset/js/jquery-waypoints.js"></script>    
    <script src="{{asset('/')}}frontend-asset/js/jquery-validate.js"></script> 
    <script src="{{asset('/')}}frontend-asset/js/jquery.prettyPhoto.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/slick.min.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/numinate.min.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/imagesloaded.min.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/jquery-isotope.js"></script>
    <script src="{{asset('/')}}frontend-asset/js/main.js"></script>
    <!-- Javascript end-->

</body>
</html>