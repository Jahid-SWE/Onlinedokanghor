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
                            <h2 class="title">Blog Single View</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html">Home</a>
                            </span>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">

        
        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <!-- post --><article class="post ttm-blog-single clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/blog-01-1200x800.jpg" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2021-03-18T04:16:25+00:00">18<span class="entry-month entry-year">Mar</span></time>
                                    </span>
                                </div>
                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-single-content">
                                <div class="ttm-post-entry-header">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line category"><i class="ti ti-folder"></i>Textile World</span>
                                        <span class="ttm-meta-line byline"><i class="ti ti-user"></i>John Doe</span>
                                        <span class="ttm-meta-line tags-links"><i class="fa fa-comments-o"></i>0 Comments</span>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="ttm-box-desc-text">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice when nothing prevents our being able towe like best when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <h3>Individual Approach</h3>
                                        <p>inting and typesetting industry. Lorem Ipsum hasbeen the industry’s standard dummy text Ever since the 1500s, when an unknown printer too</p>
                                        <p>Inting and <u><a class="ttm-textcolor-skincolor" href="blog.html">typesetting industry</a></u>. Lorem Ipsum hasbeen the industry’s standard dummy text Ever since the 1500s, when an unknown printer too</p>
                                        <blockquote class="ttm-bgcolor-grey"><div class="qoute-text"><p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry.  has been the industry’s standard dummy text ever since the 1500s, when an unknown eas disease eyecare dolore.</p><p><cite class="ttm-textcolor-darkgrey">Alex Sam Martin</cite></p></div></blockquote>
                                        <h3>Making Every Step Easy</h3>
                                        <p>inting and typesetting industry. Lorem Ipsum hasbeen the industry’s standard dummy text Ever since the 1500s, when an unknown printer too</p>
                                        <div class="margin_top15">
                                            <img class="img-fluid alignleft" width="300" height="284" src="{{asset('/')}}frontend-asset/images/single-img-15.jpg" alt="single-15">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                                <li><i class="ti ti-check"></i><div class="font-weight-normal ttm-list-li-content">Quisque aliquet nibh sit amet lectus auctor.</div></li>
                                                <li><i class="ti ti-check"></i><div class="font-weight-normal ttm-list-li-content">Nulla at metus ultricies, placerat augue sed.</div></li>
                                                <li><i class="ti ti-check"></i><div class="font-weight-normal ttm-list-li-content">Curabitur mollis ex vestibulum, ullamcorper.</div></li>
                                                <li><i class="ti ti-check"></i><div class="font-weight-normal ttm-list-li-content">Quisque aliquet nibh sit amet lectus auctor.</div></li>
                                                <li><i class="ti ti-check"></i><div class="font-weight-normal ttm-list-li-content">Nulla at metus ultricies, placerat augue sed.</div></li>
                                            </ul>
                                        </div>
                                        <div class="social-media-block">
                                            <div class="d-sm-flex justify-content-between">
                                                <div class="ttm_tag_lists margin_top15">
                                                    <span class="ttm-tags-links-title"><i class="fa fa-tags"></i>Tags:</span>
                                                    <span class="ttm-tags-links"><a href="#">Fabric</a>,<a href="#">Textile</a></span>
                                                </div>
                                                <div class="ttm-social-share-wrapper margin_top15">
                                                    <h6 class="fs-16 m-0 padding_right10">Share : </h6>
                                                    <ul class="social-icons">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                            <div class="ttm-blog-classic-box-comment clearfix">
                                <div id="comments" class="comments-area">
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a Reply</h3>
                                        <p class="comment-notes">Your email address will not be published. </p>
                                        <form action="#" method="post" id="commentform" class="comment-form">
                                            <p class="comment-form-comment">
                                                <textarea id="comment" placeholder="Comment" name="comment" cols="45" rows="4" aria-required="true"></textarea>
                                            </p>
                                            <p class="comment-form-author">
                                                <input id="author" placeholder="Name (required)" name="author" type="text" value="" size="30" aria-required="true">
                                            </p>
                                            <p class="comment-form-email">
                                                <input id="email" placeholder="Email (required)" name="email" type="text" value="" size="30" aria-required="true">
                                            </p>
                                            <p class="comment-form-url">
                                                <input id="url" placeholder="Website" name="url" type="text" value="" size="30">
                                            </p>
                                            <p class="comment-cookies">
                                                <input id="comment-cookies-consent" name="comment-cookies-consent" type="checkbox" value="yes">
                                                <label for="comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </p>
                                            <p class="form-submit margin_top30 margin_bottom0">
                                                <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Post Comment</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-search with-title">
                            <h3 class="widget-title">Search</h3>
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <button class="btn" type="submit"><i class="fa fa-search"></i> </button>
                            </form>
                        </aside>
                        <aside class="widget widget-Categories with-title">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Fashion & Retail</a><span>1</span></li>
                                <li><a href="#">Industry Insight</a><span>1</span></li>
                                <li><a href="#">News & Analysis</a><span>1</span></li>
                                <li><a href="#">Textile World</a><span>1</span></li>
                                <li><a href="#">Trade & Business</a><span>1</span></li>
                                <li><a href="#">Traditional</a><span>1</span></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/b_thumbb-01.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <a href="blog-single.html">Can textiles lead the way during the pandemic?</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>March 18, 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/b_thumbb-02.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <a href="blog-single.html">One stop solution for textiles fabrics</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>February 28, 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="blog-single.html"><img class="img-fluid" src="{{asset('/')}}frontend-asset/images/blog/b_thumbb-03.jpg" alt="post-img"></a>
                                    <div class="post-detail">
                                        <a href="blog-single.html">Textilegence Magazine & Digital Platform</a>
                                        <span class="post-date"><i class="fa fa-calendar"></i>February 15, 2021</span>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Clothing</a>
                                <a href="#" class="tag-cloud-link">Cotton</a>
                                <a href="#" class="tag-cloud-link">Designer</a>
                                <a href="#" class="tag-cloud-link">Embroidery</a>
                                <a href="#" class="tag-cloud-link">Fabric</a>
                                <a href="#" class="tag-cloud-link">Fashion</a>
                                <a href="#" class="tag-cloud-link">Rayon</a>
                                <a href="#" class="tag-cloud-link">Silk</a>
                                <a href="#" class="tag-cloud-link">Textile</a>
                            </div>
                        </aside>
                        <aside class="widget widget-banner">
                        <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-seven ttm-col-bgimage-yes ttm-bg">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="widget-banner-inner">
                                        <h3 class="ttm-textcolor-skincolor">Have Questions?</h3>
                                        <p>Our Client Care Managers Are On Call 24/7 To Answer Your Question.</p>
                                        <ul>
                                            <li><i class="flaticon flaticon-phone-call"></i>+1800 200 4567</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>


    </div><!--site-main end-->
@endsection