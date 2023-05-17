@extends('frontend.master')
@section('title')
    Project One
@endsection
@section('body')
     <!-- page-title -->
     <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="ttm-page-title-row-inner">
                        <div class="page-title-heading">
                            <h2 class="title">Project style 1</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Project style 1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">
            <!--grid-section-->
            <div class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row ttm-boxes-spacing-10px">
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-01-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Silk Fabric" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-01-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="silk-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="silk-fabric.html">Silk Fabric</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-02-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Linen Fabric" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-02-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="linen-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="linen-fabric.html">Linen Fabric</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-03-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Wool Fabric" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-03-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="wool-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="wool-fabric.html">Wool Fabric</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-04-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Georgette Fabric" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-04-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="georgette-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="georgette-fabric.html">Georgette Fabric</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-05-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Leather Material" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-05-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="leather-material.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="leather-material.html">Leather Material</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 ttm-box-col-wrapper">
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/portfolio/portfolio-06-600x700.jpg" alt="image">
                                    </div><!-- featured-thumbnail end-->
                                    <div class="ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Cotton Fabric" data-rel="prettyPhoto" href="{{asset('/')}}frontend-asset/images/portfolio/portfolio-06-1200x800.jpg">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="cotton-fabric.html" class="ttm_link"><i class="fa fa-random"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="cotton-fabric.html">Cotton Fabric</a></h3>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
            <!--grid-section end-->
    </div><!--site-main end-->
@endsection