@extends('frontend.master')
@section('title')
    Manufacture
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
                                <h2 class="title">Manufacture</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Manufacture</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end -->


        <!--site-main start-->
        <div class="site-main">

            
            <div class="ttm-row sidebar ttm-sidebar-left clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-4 widget-area sidebar-left">
                            <aside class="widget widget-nav-menu">
                                <ul>
                                    <li><a href="fabric-printing.html"> Fabric Printing </a></li>
                                    <li><a href="fabric-dyeing.html"> Fabric Dyeing </a></li>
                                    <li><a href="engineering.html"> Engineering </a></li>
                                    <li class="active"><a href="manufacture.html"> Manufacture </a></li>
                                    <li><a href="we-design-fabric-2.html"> Stich Fabric </a></li>
                                    <li><a href="we-design-fabric.html"> We Design Fabric </a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget-download with-title">
                                <div class="d-flex download_block">
                                    <div class="download_img_icon">
                                        <img class="img-fluid auto_size" width="46" height="53" src="{{asset('/')}}frontend-asset/images/download-pdf.png" alt="download-pdf-img" />
                                    </div>
                                    <div class="padding_left20">
                                        <p class="ttm-textcolor-skincolor margin_bottom0">Case Studies</p>
                                        <h2 class="fs-18">Audit &amp; Assuarance</h2>
                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-btn-color-dark ttm-icon-btn-left" href="#"><i class="ti ti-arrow-right"></i> Download (3.5 MB)</a>
                                    </div>
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
                            <aside class="widget contact-widget with-title">
                                <h3 class="widget-title">Get in touch</h3>      
                                <ul class="contact-widget-wrapper">
                                    <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>Honey Business Center 24 Fifth st., Los Angeles, USA</li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>(+01) 123 456 7890</li>
                                    <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)</li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-8 content-area">
                            <div class="ttm-service-single-content-area">
                                <div class="ttm-featured-wrapper margin_bottom40">
                                    <img class="img-fluid" src="{{asset('/')}}frontend-asset/images/services/services-04-1200x800.jpg" alt="services-04">
                                </div>
                                <div class="ttm-service-description">
                                    <h3>About Manufacture Services</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, <u>when an unknown printer took a galley</u> of type and scrambled it to make a type specimen book.</p>
                                    <p>There re many variaions of passags of Lorem Ipsum available, but majority have suffeed alteration in some ,by injectd humour, or randomised ws which ly believable.</p>
                                    <div class="ttm-horizontal_sep width-100 margin_top35 margin_bottom35"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-fluid auto_size" width="494" height="560" src="{{asset('/')}}frontend-asset/images/single-img-14.jpg" alt="image"> 
                                        </div>
                                        <div class="col-md-8">
                                            <div class="res-767-margin_top30">
                                                <h3>Quality Maintain Every Time</h3>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuswqo doloremque laudantium.</p>
                                                <p>et quasi architecto beatae vitae dicta sunt explicabo. loream inventore veritatis et quasi architecto beatae vitae dicta sunt sed ut the perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top15" href="services-2.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 margin_top35 margin_bottom35"></div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3>Fully Trained Employees</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuswqo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo et inventore veritatis et quasi architecto beatae vitae <u>dicta sunt explicabo.</u> loream inventore veritatis et quasi architecto beatae vitae dicta sunt sed ut the perspiciatis unde omnis quae ab illo et inventore veritatis et quasi architecto beatae <span class="ttm-textcolor-skincolor"><a href="#">vitae dicta</a></span> sunt explicabo. loream inventore veritatis</p>
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top15" href="services-1.html">read more</a>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="res-767-margin_top30">
                                                <img class="img-fluid auto_size" width="238" height="294" src="{{asset('/')}}frontend-asset/images/single-img-12.jpg" alt="image"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </div>


        </div><!--site-main end-->
@endsection
