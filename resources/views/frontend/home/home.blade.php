@extends('frontend.home.master')
@section('title')
    Home
@endsection
@section('body')
   <!-- Banner -->
   <div class="banner_slider_wrapper">
    <div class="slider-textarea"><h4>Enquiry Call: 123 456 789123</h4></div>
    <div class="slider-social-links-wrapper">
        <ul class="social-icons">
            <li class="tm-social-facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="tm-social-twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="tm-social-flickr"><a target="_blank" href="#"><i class="fa fa-flickr"></i></a></li>
            <li class="tm-social-linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="banner_slider banner_slider_wide">
        <div class="slide">
            <div class="slide_img" style="background-image: url({{asset('/')}}frontend-asset/images/slides/slider-mainbg-001.jpg);"></div>
            <div class="slide__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide__content--headings ttm-textcolor-white text-center">
                                <h3  data-animation="fadeInDown">YOU CAN TRUST US</h3>
                                <h2  data-animation="fadeInDown">Wear <strong>Your</strong> Best <strong>Moments</strong></h2>
                                <p  data-animation="fadeInDown">Since more than 40 years, FABLIO is operating in the textile market manufacture <br>and trader. As years go by, the range of produced.</p>
                                <div class="d-inline-block margin_top30 res-767-margin_top20" data-animation="fadeInUp" data-delay="1.4">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right15" href="about-us-2.html">more details</a>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="contact-us.html">get a quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide_img" style="background-image: url({{asset('/')}}frontend-asset/images/slides/slider-mainbg-002.jpg);"></div>
            <div class="slide__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide__content--headings ttm-textcolor-white text-center">
                                <h3  data-animation="fadeInDown">WELCOME TO FABLIO</h3>
                                <h2  data-animation="fadeInDown">The <strong> Possibilities</strong> Are Endless</h2>
                                <p  data-animation="fadeInDown">Since more than 40 years, FABLIO is operating in the textile market manufacture <br>and trader. As years go by, the range of produced.</p>
                                <div class="d-inline-block margin_top30 res-767-margin_top25" data-animation="fadeInUp" data-delay="1.4">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="about-us-2.html">more detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end-->


<!--site-main start-->
<div class="site-main">


    <!--services-section-->
    <section class="ttm-row services-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="margin_right30 res-991-margin_right0">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg spacing-1">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="title">Ultimate Quality <b>Textiles</b></h2>
                                </div>
                                <div class="title-desc">
                                    <p>We are your reliable and experienced textile partner around the world.</p>
                                </div>
                            </div><!-- section title end -->
                            <div class="ttm_single_image-wrapper ttm_single_image_hover ml_70 mr_70">
                                <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/single-img-01.jpg" alt="single-01">
                                <div class="ttm-play-icon-btn text-center">
                                    <div class="ttm-play-icon-animation ttm-play-icon-animation-skincolor">
                                        <a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                <i class="fa fa-play ttm-textcolor-skincolor"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center padding_top30">The Largest Exporter of <a href="services1.html"><u class="ttm-textcolor-skincolor">Textile</u></a></p>
                        </div>
                    </div></div>
                </div>
                <div class="col-lg-7">
                    <div class="row ttm-vertical_sep">
                        <div class="col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-factory"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Fablio Overview</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We Bringing a revolutionary change in the Textile industry through products!</p>
                                    </div>
                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor" href="fabric-printing.html">read more</a>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-suit"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Production Capability</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We’re try to be not just legally compliant but more than that.</p>
                                    </div>
                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor" href="fabric-printing.html">read more</a>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                    <div class="ttm-horizontal_sep width-100 md-hide"></div>
                    <div class="row ttm-vertical_sep">
                        <div class="col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon padding_top15">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-warehouse-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Company History</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>One of the largest & most reputed textile groups in India & globe.</p>
                                    </div>
                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor" href="fabric-printing.html">read more</a>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style1">
                                <div class="featured-icon padding_top15">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-fabric"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Fabric Designs</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Gold trophy 5 years in a row for being the largest exporter</p>
                                    </div>
                                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-skincolor" href="fabric-printing.html">read more</a>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--services-section end-->


    <!--padding_top_zero-section end-->
    <section class="ttm-row padding_top_zero-section margin_top90 res-991-margin_top0 bg-layer-equal-height ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="padding_top90 res-991-padding_top60">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>ABOUT FABLIO</h3>
                                <h2 class="title">The Leading Textile Brand in <b>Market Since 1970</b></h2>
                            </div>
                            <div class="title-desc">
                                <p>Since more than 40 years, FABLIO is operating in the textile market manufacture and trader. As years go by, the range of produced textiles has been increased, besides the regular production became the largest exporter.</p>
                            </div>
                        </div><!-- section title end -->
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="ttm-list ttm-bordered-lists ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Trends the Current Market</span></li>
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The rayon fabrics wholesaler</span></li>
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The Global fabrics distributor</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="ttm-list ttm-bordered-lists ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Biological tested fabrics</span></li>
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Awarded For Best Exporter</span></li>
                                    <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Stable partner global textile</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin_top20">
                            <div class="d-inline-block">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor margin_right20 margin_top15" href="about-us-2.html">view more</a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="contact-us.html">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="mt_160 text-md-right res-991-margin_top40">
                        <div class="ttm_single_image-wrapper ttm_single_image_hover imagestyle-one res-991-margin_right0">
                            <img class="img-fluid auto_size" src="{{asset('/')}}frontend-asset/images/single-img-02.jpg" alt="single-02" height="663" width="504">
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--padding_top_zero-section end-->


    <!--fid-section-->
    <section class="ttm-row fid-section ttm-bgimage-yes bg-img1 ttm-bg ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">The Textile,Product, And Apparel <b class="ttm-textcolor-skincolor">Manufacturing </b>Industries.</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- ttm-fid -->
                    <div class="ttm-fid inside ttm-fid-with-icon style1">
                        <div class="ttm-fid-icon-wrapper">
                            <i class="flaticon flaticon-suit"></i>
                        </div>
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="350" 
                                        data-interval="15" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after=""
                                        data-after-style="sub" 
                                        class="numinate">350</span>
                            </h4>
                            <h3 class="ttm-fid-title">Trusted Clients</h3>
                        </div>
                    </div><!-- ttm-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- ttm-fid -->
                    <div class="ttm-fid inside ttm-fid-with-icon style1">
                        <div class="ttm-fid-icon-wrapper">
                            <i class="flaticon flaticon-fabric"></i>
                        </div>
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="215" 
                                        data-interval="15" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="" 
                                        data-after-style="span" 
                                        class="numinate">215
                                </span>
                            </h4>
                            <h3 class="ttm-fid-title">Finished Projects</h3>
                        </div>
                    </div><!-- ttm-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- ttm-fid -->
                    <div class="ttm-fid inside ttm-fid-with-icon style1">
                        <div class="ttm-fid-icon-wrapper">
                            <i class="flaticon flaticon-factory"></i>
                        </div>
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="25" 
                                        data-interval="15" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="" 
                                        data-after-style="span" 
                                        class="numinate">25                                              
                                </span>
                            </h4>
                            <h3 class="ttm-fid-title">Years Of Experience</h3>
                        </div>
                    </div><!-- ttm-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- ttm-fid -->
                    <div class="ttm-fid inside ttm-fid-with-icon style1">
                        <div class="ttm-fid-icon-wrapper">
                            <i class="flaticon flaticon-placeholder"></i>
                        </div>
                        <div class="ttm-fid-contents">
                            <h4 class="ttm-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="45" 
                                        data-interval="15" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="" 
                                        data-after-style="span" 
                                        class="numinate">45                                              
                                </span>
                            </h4>
                            <h3 class="ttm-fid-title">Visited Conference</h3>
                        </div>
                    </div><!-- ttm-fid end -->
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="margin_top35 mb_15 text-center">
                        <p>Don’t hesitate, contact us for better help and services.&nbsp;<a href="services-2.html" class="ttm-textcolor-skincolor font-weight-500"><u>View More!</u></a></p>
                    </div>
                    <div class="padding_bottom90 res-991-padding_bottom0"></div>
                </div>
            </div>
        </div>
    </section>
    <!--fid-section end-->


    <!--padding_zero-section-->
    <section class="ttm-row padding_zero-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-left-span spacing-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title style2">
                                <div class="title-header">
                                    <h3>INDUSTRIES & PRODUCTION</h3>
                                    <h2 class="title">We Give Top Production From <b>Every Angle</b></h2>
                                </div>
                                <div class="title-desc"><p>Fablio is the largest peer-to-peer comparison initiative in the textile industry. It tracks the apparel material and home textile sector’s progress.</p></div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!--padding_zero-section end-->


    <!--padding_top_zero-section-->
    <section class="ttm-row padding_top_zero-section mt_210 res-991-margin_top_30 position-relative z-index-2 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-md-4 col-sm-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/services/services-01-768x512.jpg" alt="image">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="fabric-printing.html">Fabric Printing</a></h3>
                                <div class="ttm-details-link">
                                    <a href="fabric-printing.html"><i class="themifyicon ti-arrow-top-right"></i></a>
                                </div>
                            </div>
                            <div class="featured-desc">
                                <p>Have been engaged with modern units for all requirements of continuous bleach.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/services/services-02-768x512.jpg" alt="image">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="fabric-dyeing.html">Fabric Dyeing</a></h3>
                                <div class="ttm-details-link">
                                    <a href="fabric-dyeing.html"><i class="themifyicon ti-arrow-top-right"></i></a>
                                </div>
                            </div>
                            <div class="featured-desc">
                                <p>It is the process of transfer dyes from the aqueous solution to the fiber surface</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/services/services-03-768x512.jpg" alt="image">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="engineering.html">Engineering</a></h3>
                                <div class="ttm-details-link">
                                    <a href="engineering.html"><i class="themifyicon ti-arrow-top-right"></i></a>
                                </div>
                            </div>
                            <div class="featured-desc">
                                <p>Choose from many fabrics and design your. Create and print only the fabric you need.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox featured-imagebox-services style1">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/services/services-04-768x512.jpg" alt="image">
                        </div><!-- featured-thumbnail end-->
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3><a href="manufacture.html">Manufacture</a></h3>
                                <div class="ttm-details-link">
                                    <a href="manufacture.html"><i class="themifyicon ti-arrow-top-right"></i></a>
                                </div>
                            </div>
                            <div class="featured-desc">
                                <p>Choose from many fabrics and design your. Create and print only the fabric you need.</p>
                            </div>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top30" href="services-2.html">View More Services!</a>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!--padding_top_zero-section end -->


    <!--padding_zero-section-->
    <section class="ttm-row padding_zero-section ttm-bgcolor-skincolor bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <!-- col-img-img-two -->
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two ttm-left-span z-index-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                </div>
                            </div><!-- col-img-bg-img-two end-->
                            <img class="img-fluid ttm-equal-height-image w-100" src="{{asset('/')}}frontend-asset/images/bg-image/col-bgimage-2.jpg" alt="bg-image">
                        </div>
                        <div class="col-lg-5">
                            <div class="padding_top30 padding_bottom30 text-lg-right res-1199-padding_right15 res-991-padding_left15">
                                <div class="fs-26">Fablio is Operating In The Textile</div>
                                <div class="fs-26"><b>Market Manufacture</b></div>
                            </div>
                            <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg ttm-right-span spacing-3 z-index-2 h-auto res-1199-padding_right15">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title">
                                        <div class="title-header">
                                            <h3>MEASUREMENTS</h3>
                                            <h2 class="title">We Take Occupational Health & <b>Safety Measurements </b></h2>
                                        </div>
                                        <div class="title-desc">
                                            <p>Our health experts initiate health promotion solutions that are tailored to working conditions and based on participation.</p>
                                        </div>
                                    </div><!-- section title end -->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <!--featured-icon-box-->
                                            <div class="featured-icon-box icon-align-before-title style2 padding_right10">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                                        <div class="fa fa-check"></div>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <h3>Safety At Work</h3>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-desc">
                                                        <p>We make workplace safe any aspects for employees</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end-->
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <!--featured-icon-box-->
                                            <div class="featured-icon-box icon-align-before-title style2 padding_left15 res-767-padding_left0">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-rounded ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                                        <div class="fa fa-check"></div>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <h3>Healthy Place</h3>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-desc">
                                                        <p>Activities are perform by experts at enterprise level</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end-->
                                        </div>                             
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                                    <div class="padding_top15">
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar" data-percent="90%">
                                            <div class="progressbar-title">Textile</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="90">90%</div>
                                                </div>
                                            </div>
                                        </div><!-- ttm-progress-bar end -->
                                        <!-- ttm-progress-bar -->
                                        <div class="ttm-progress-bar clearfix" data-percent="80%">
                                            <div class="progressbar-title">Manufacture</div>
                                            <div class="progress-bar-inner">
                                                <div class="progress-bar progress-bar-color-bar_skincolor">
                                                    <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="80">80%</div>
                                                </div>
                                            </div>
                                        </div><!-- ttm-progress-bar end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!--padding_bottom_zero-section end-->


    <!--testimonial-section-->
    <section class="ttm-row testimonial-section bg-img2 ttm-bg ttm-bgimage-yes clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="padding_top70 res-991-padding_top0"></div>
                    <!-- section-title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>TESTIMONIALS</h3>
                            <h2 class="title">Our Customers <b>Are Saying?</b></h2>
                        </div>
                    </div><!-- section-title end -->
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-xl-9 col-lg-10 m-auto">
                    <div class="slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style1">
                            <div class="testimonial-avatar">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/testimonial/01.jpg" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Fablio's customer service is great. I was searching &amp; found exactly what I wanted, was delivered quickly. Very good transaction. Fast shipping. Great blankets fabric and I am planning to buy it in bulk order.</blockquote>
                                <div class="testimonial-bottom">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h5>Michal Wincent</h5>
                                        <label>Customer</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style1"> 
                            <div class="testimonial-avatar">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/testimonial/02.jpg" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">The culture is the best at Fablio. You can tell that they truly care about the happiness of their employees. It's a really relaxed and calm environment and their quality of product is always best. I refer them for the future.</blockquote>
                                <div class="testimonial-bottom">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h5>Elic Semules</h5>
                                        <label>Manager</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                        <!-- testimonials -->
                        <div class="testimonials ttm-testimonial-box-view-style1"> 
                            <div class="testimonial-avatar">
                                <div class="testimonial-img">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/testimonial/03.jpg" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">I realized after I sent in my order that I had ordered a larger quantity than I needed. I emailed and received a quick response, adjustment to my order and a refund. Product was shipped out  in a timely manner. FABLIO is great!</blockquote>
                                <div class="testimonial-bottom">
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                            <li class="active"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="testimonial-caption">
                                        <h5>Alex Albert Belle</h5>
                                        <label>CEO-Textile</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- testimonials end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-section end-->

    
    <!--blog-section-->
    <section class="ttm-row blog-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title style2">
                        <div class="title-header">
                            <h3>NEW BLOGS</h3>
                            <h2 class="title">Latest <b>News And Articles!</b></h2>
                        </div>
                        <div class="title-desc">
                            <p>Since more than 40 years, FABLIO is operating in the textile market manufacture and trader. As years go by, the range of produced textiles has been increased.</p>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-01-600x430.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2021-03-18T04:16:25+00:00">18<span class="entry-month entry-year">Mar</span></time>
                                </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line byline">John Doe</span>
                                <span class="ttm-meta-line comments-link">0 Comments</span>
                            </div>
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Can textiles lead the way during the pandemic?</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our po...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="blog-single.html" tabindex="-1">read more</a>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-02-600x430.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2021-02-28T04:15:42+00:00">28<span class="entry-month entry-year">Feb</span></time>
                                </span>
                            </div>
                            <div class="post-meta">
                                <span class="ttm-meta-line byline">John Doe</span>
                                <span class="ttm-meta-line comments-link">0 Comments</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">One stop solution for textiles fabrics</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Purus non enim praesent elementum facilisis. Eget mi proin sed libero enim sed faucib...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="blog-single.html">read more</a>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-03-600x430.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2021-02-15T04:15:25+00:00">15<span class="entry-month entry-year">Feb</span></time>
                                </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line byline">John Doe</span>
                                <span class="ttm-meta-line comments-link">0 Comments</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Textilegence Magazine & Digital Platform</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Enim nunc faucibus a pellentesque sit amet porttitor eget. Morbi blandit cursus risus...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="blog-single.html" tabindex="-1">read more</a>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
                <div class="col-lg-4">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-04-600x430.jpg" alt="">
                        </div>
                        <div class="featured-content">
                            <!-- ttm-box-post-date -->
                            <div class="ttm-box-post-date">
                                <span class="ttm-entry-date">
                                    <time class="entry-date" datetime="2021-02-11T04:12:56+00:00">11<span class="entry-month entry-year">Feb</span></time>
                                </span>
                            </div><!-- ttm-box-post-date end -->
                            <div class="post-meta">
                                <span class="ttm-meta-line byline">John Doe</span>
                                <span class="ttm-meta-line comments-link">0 Comments</span>
                            </div><!-- post-meta end -->
                            <div class="featured-title">
                                <h3><a href="blog-single.html">Contactless Payments Time Has Come</a></h3>
                            </div>
                            <div class="featured-desc">
                                <p>Viverra accumsan in nisl nisi. Et leo duis ut diam quam nulla porttitor massa. Pellen...</p>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline" href="blog-single.html">read more</a>
                        </div>
                    </div><!-- featured-imagebox-post end -->
                </div>
            </div>
        </div>
    </section>
    <!--blog-section end-->


    <!--client-section-->
    <section class="ttm-row client-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!--row -->
            <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-03.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-04">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-04.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-01.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-02.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="client-box">
                        <div class="ttm-client-logo-tooltip" data-tooltip="client-04">
                            <div class="client-thumbnail">
                                <img class="img-fluid auto_size" width="160" height="98" src="{{asset('/')}}frontend-asset/images/client/client-04.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--client-section end-->


</div><!--site-main end-->
@endsection