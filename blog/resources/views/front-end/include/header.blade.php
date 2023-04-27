<header>
    <!-- Top header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class=" social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search-wrapper">
                        <div class="search-icon">
                            <button class="open-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="sidebar-icon">
                            <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top header end -->

    <!-- Bottom header -->
    <div class="bottom-header">
        <div class="container">
            <div class="brand-name">
                <a href="{{route('/')}}">
                    <h1>Kavya</h1>
                    <span>Enter your tagline here</span>
                </a>
            </div>
        </div>

        <!-- Navbar -->
        <div class="kavya-navbar" id="sticky-top">
            <div class="container">
                <nav class="nav-menu-wrapper">
              <span class="navbar-toggle" id="navbar-toggle">
                <i class="fas fa-bars"></i>
              </span>
                    <div class="sticky-logo">
                        <a href="{{route('/')}}">
                            <p>Kavya</p>
                        </a>
                    </div>
                    <ul class="nav-menu ml-auto mr-auto" id="nav-menu-toggle">
                        <li class="nav-item"><a href="{{route('/')}}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Categories <span class="arrow-icon"> <span
                                        class="left-bar"></span>
                      <span class="right-bar"></span></span>
                            </a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Food</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Technology</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Fashion</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Women</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Lifestyle</a></li>
                            </ul>
                        </li>
                        <li class="nav-item drop-arrow"><a href="#" class="nav-link">Pages <span class="arrow-icon"> <span
                                        class="left-bar"></span>
                   <span class="right-bar"></span></span></a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="index.html">Home Page One</a></li>
                                <li class="drop-menu-item"><a href="index2.html">Home Page Two</a></li>
                                <li class="drop-menu-item"><a href="index3.html">Home Page Three</a></li>
                                <li class="drop-menu-item"><a href="index4.html">Home Page Dark</a></li>
                                <li class="drop-menu-item"><a href="index5.html">Home Page RTL</a></li>
                                <li class="drop-menu-item"><a href="404.html">404 Error Page One</a></li>
                                <li class="drop-menu-item"><a href="404-text.html">404 Error Page Two</a></li>
                                <li class="drop-menu-item"><a href="search.html">Search Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item drop-arrow"><a href="#" class="nav-link">Layout <span class="arrow-icon"> <span
                                        class="left-bar"></span>
                    <span class="right-bar"></span></span></a>
                            <ul class="drop-menu">
                                <li class="drop-menu-item"><a href="archive-layout-one.html">Archive Layout One</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-two.html">Archive Layout Two</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-three.html">Archive Layout Three</a></li>
                                <li class="drop-menu-item"><a href="archive-layout-four.html">Archive Layout Four</a></li>
                                <li class="drop-menu-item"><a href="single-layout-one.html">Single Layout One</a></li>
                                <li class="drop-menu-item"><a href="single-layout-two.html">Single Layout Two</a></li>
                                <li class="drop-menu-item"><a href="single-layout-three.html">Single Layout Three</a></li>
                                <li class="drop-menu-item"><a href="single-layout-four.html">Single Layout Four</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="sticky-search">
                        <div class="search-wrapper">
                            <div class="search-icon">
                                <button class="open-search-btn"><i class="fa fa-search"></i></button>
                            </div>
                            <div class="sidebar-icon">
                                <button class="sidebar-btn"> <i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar end -->
    </div>
    <!-- Bottom header end -->

    <!-- Search overlay -->
    <div id="search-overlay" class="search-section">
        <span class="closebtn"><i class="fas fa-times"></i></span>
        <div class="overlay-content">
            <form>
                <input type="text" placeholder="Search here" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Search overlay end -->

    <!-- Sticky sidebar -->
    @include('front-end.include.side-bar')
    <!-- sticky sidebar end -->

    <div class="body-overlay"></div>
</header>
