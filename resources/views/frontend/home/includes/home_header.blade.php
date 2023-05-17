<header id="masthead" class="header ttm-header-style-01">
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
                                    <img id="logo-img" height="35" width="130" class="img-fluid auto_size" src="{{asset('/')}}frontend-asset/images/logo-img.svg" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="site-description mr-auto">
                                <h2>For tomorrow’s people.</h2>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <li class="mega-menu-item active">
                                            <a href="{{route('home')}}" class="mega-menu-link">Home</a>
                                            <ul class="mega-submenu">
                                                <li class="active"><a href="{{route('home')}}">Homepage</a></li>
                                                {{-- <li><a href="{{route('home')}}">Homepage 2</a></li> --}}
                                                
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item">
                                            <a href="#" class="mega-menu-link">Pages</a>
                                            <ul class="mega-submenu">
                                                <li><a href="{{route('about')}}">About</a></li>
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
                                <!-- header_extra -->
                                <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                    <div class="header_search">
                                        <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
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
                                </div><!-- header_extra end -->
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header>