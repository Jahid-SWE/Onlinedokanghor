<header id="masthead" class="header ttm-header-style-03">
    <!-- topbar -->
    <div class="top_bar ttm-bgcolor-darkgrey clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-12 d-flex flex-row align-items-center">
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="ti ti-email"></i></div><a href="mailto:info@example.com">info@example.com</a>
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="top_bar_icon"><i class="ti ti-location-pin"></i></div>Jos Mnheles Hutyio, 1430 Marasil
                    </div>
                    <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                        <ul class="social-icons list-inline">
                            <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="tooltip-top" href="#" rel="noopener" aria-label="flickr" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a></li>
                            <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="top_bar_contact_item">
                        <div class="header_search">
                            <a href="#" class="btn-default search_btn"><i class="fa fa-search"></i></a>
                            <div class="header_search_content">
                                <div class="header_search_content_inner">
                                    <a href="#" class="close_btn"><i class="ti ti-close"></i></a>
                                    <form id="searchbox" method="get" action="#">
                                        <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                        <button type="submit" class="btn close-search"><i class="ti ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="index.html" title="Fablio" rel="home">
                                    <img id="logo-img" height="37" width="138" class="img-fluid auto_size" src="{{asset('/')}}frontend-asset/images/logo-img.svg" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="d-flex flex-row m-auto">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Home</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{route('home')}}">Homepage</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item active">
                                            <a href="#" class="mega-menu-link">Pages</a>
                                            <ul class="mega-submenu">
                                                <li class="active"><a href="{{route('about')}}">About</a></li>
                                                <li><a href="{{route('services')}}">Services</a></li>
                                                <li><a href="{{route('our_team')}}">Our Team</a></li>
                                                <li><a href="{{route('team_details')}}">Team Details</a></li>
                                                <li><a href="{{route('error')}}">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Services</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{route('fabric_printing')}}">Fabric Printing</a></li>
                                                <li><a href="{{route('fabric_dyeing')}}">Fabric Dyeing</a></li>
                                                <li><a href="{{route('engineering')}}">Engineering</a></li>
                                                <li><a href="{{route('manufacture')}}">Manufacture</a></li>
                                                <li><a href="{{route('stich_fabric')}}">Stich Fabric</a></li>
                                                <li><a href="{{route('design_fabric')}}">We Design Fabric</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Projects</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{route('project_one')}}">Project One</a></li>
                                                <li><a href="{{route('project_two')}}">Project Two</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Blog</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{route('blog_classic')}}">Blog Classic</a></li>
                                                <li><a href="{{route('blog_grid')}}">Blog Grid View</a></li>
                                                <li><a href="{{route('blog_single')}}">Blog Single View</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="{{route('contact')}}">Contact us</a>
                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
                            </div>
                            <div class="widget_info d-flex flex-row align-items-center">
                                <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon-chat"></i></div>
                                <div class="widget_content">
                                    <h3 class="widget_title"><a href="tel:0123888555">+0 123 888 555</a></h3>
                                    <p class="widget_desc">Have any Questions?</p>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>