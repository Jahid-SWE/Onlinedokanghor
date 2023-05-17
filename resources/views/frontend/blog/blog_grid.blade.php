@extends('frontend.master')
@section('title')
    Blog CLassic
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
                            <h2 class="title">blog grid view</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>blog</span>
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
            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h2 class="title"><b>Blog View</b> 01</h2>
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


            <!--grid-section-->
            <section class="ttm-row grid-section ttm-bgcolor-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h2 class="title"><b>Blog View</b> 02</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row slick_slider mb_15" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-01-600x430.jpg" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-03-18T04:16:25+00:00">March 18, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Textile World</span>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Can textiles lead the way during the pandemic?</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our po...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-02-600x430.jpg" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-28T04:15:42+00:00">February 28, 2021</time>
                                    </div>
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Fashion & Retail</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">One stop solution for textiles fabrics</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Purus non enim praesent elementum facilisis. Eget mi proin sed libero enim sed faucib...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-03-600x430.jpg" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-15T04:15:25+00:00">February 15, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>Industry Insight</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Textilegence Magazine & Digital Platform</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Enim nunc faucibus a pellentesque sit amet porttitor eget. Morbi blandit cursus risus...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                        <div class="col-lg-4">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post style2">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-04-600x430.jpg" alt="blog-img">
                                </div>
                                <div class="featured-content">
                                    <!-- ttm-box-post-date -->
                                    <div class="ttm-box-post-date">
                                        <i class="fa fa-calendar"></i>
                                        <time class="entry-date published" datetime="2021-02-11T04:12:56+00:00">February 11, 2021</time>
                                    </div><!-- ttm-box-post-date end -->
                                    <div class="post-meta">
                                        <span class="ttm-meta-line comments-link"><i class="fa fa-comments-o"></i>0 Comments</span>
                                        <span class="ttm-meta-line tag"><i class="ti ti-folder"></i>News & Analysis</span>
                                    </div><!-- post-meta end -->
                                    <div class="featured-title">
                                        <h3><a href="blog-single.html">Contactless Payments Time Has Come</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Viverra accumsan in nisl nisi. Et leo duis ut diam quam nulla porttitor massa. Pellen...</p>
                                    </div>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-color-dark btn-inline ttm-icon-btn-right" href="blog-single.html">read more<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--blog-section end-->


    </div><!--site-main end-->
@endsection