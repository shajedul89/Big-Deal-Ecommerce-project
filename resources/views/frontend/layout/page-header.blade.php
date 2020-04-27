@include('frontend.layout.partials.settings') @include('frontend.layout.pop-up')
<div class="mobile-fix-option"></div>
<div class="top-header top-header-inverse">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-5 col-md-7 col-sm-6">
                <div class="top-header-left">
                    <div class="shpping-order">
                        <h6>free shipping on order over $99 </h6>
                    </div>
                    <div class="app-link">
                        <h6>
                                Download aap
                            </h6>
                        <ul>
                            <li><a><i class="fa fa-apple" ></i></a></li>
                            <li><a><i class="fa fa-android" ></i></a></li>
                            <li><a><i class="fa fa-windows" ></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-5 col-sm-6">
                <div class="top-header-right">
                    <div class="top-menu-block">
                        <ul>
                            <li><a href="#">gift cards</a></li>
                            <li><a href="#">Notifications</a></li>
                            <li><a href="#">help & contact</a></li>
                            <li><a href="#">todays deal</a></li>
                            <li><a href="#">track order</a></li>
                            <li><a href="#">shipping </a></li>
                            <li><a href="#">easy returns</a></li>
                        </ul>
                    </div>
                    <div class="language-block">
                        <div class="language-dropdown">
                            <span class="language-dropdown-click">
                                    english <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            <ul class="language-dropdown-open">
                                <li><a href="#">hindi</a></li>
                                <li><a href="#">english</a></li>
                                <li><a href="#">marathi</a></li>
                                <li><a href="#">spanish</a></li>
                            </ul>
                        </div>
                        <div class="curroncy-dropdown">
                            <span class="curroncy-dropdown-click">
                                    usd<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            <ul class="curroncy-dropdown-open">
                                <li><a href="#"><i class="fa fa-inr"></i>inr</a></li>
                                <li><a href="#"><i class="fa fa-usd"></i>usd</a></li>
                                <li><a href="#"><i class="fa fa-eur"></i>eur</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-header1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu-block">
                    <div class="menu-left">
                        <div class="sm-nav-block">
                            <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                            <ul class="nav-slide">
                                <li>
                                    <div class="nav-sm-back">
                                        back <i class="fa fa-angle-right pl-2"></i>
                                    </div>
                                </li>
                                <li> <a href="#">foodgrains</a></li>
                                <li> <a href="#">bakery</a></li>
                                <li> <a href="#">beverage</a></li>
                                <li> <a href="#">snacks</a></li>
                                <li> <a href="#">kitchen</a></li>
                                <li> <a href="#">beauty</a></li>
                                <li> <a href="#">FRESH FRUIT</a></li>
                                <li> <a href="#">banana</a></li>
                                <li> <a href="#">kiwi</a></li>
                                <li> <a href="#">mangosteen</a></li>
                                <li> <a href="#">grape</a></li>
                                <li> <a href="#">zucchini</a></li>
                                <li class="mor-slide-open">
                                    <ul>
                                        <li> <a>drangon fruits</a></li>
                                        <li> <a href="#">kiwi</a></li>
                                        <li> <a href="#">mangosteen</a></li>
                                        <li><a href="#">grape</a></li>
                                        <li> <a href="#">zucchini</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="mor-slide-click">
                                            mor category
                                            <i class="fa fa-angle-down pro-down" ></i>
                                            <i class="fa fa-angle-up pro-up" ></i>
                                        </a>
                                </li>
                            </ul>
                        </div>
                        <div class="brand-logo">
                            <a href="#">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/logo/logo.png" class="img-fluid  " alt="logo-header">
                            </a>
                        </div>
                    </div>
                    <div class="menu-right">
                        <div class="toggle-block">
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <!--HOME-->
                                    <li>
                                        <a href="#">Home</a>
                                   
                                    </li>
                                    <!--HOME-END-->

                                    <!--SHOP-->
                                    <li>
                                        <a href="#">shop</a>
                                        <ul>
                                            <li><a href="category-page(left-sidebar).html">left sidebar</a></li>
                                            <li><a href="category-page(right-sidebar).html">right sidebar</a></li>
                                            <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                            <li><a href="category-page(metro).html">metro <span class="new-tag">new</span></a></li>
                                            <li><a href="category-page(full-width).html">full width <span class="new-tag">new</span></a></li>
                                            <li><a href="category-page(infinite-scroll).html">infinite scroll</a></li>
                                            <li><a href=category-page(3-grid).html>3 grid</a></li>
                                            <li><a href="category-page(6-grid).html">6 grid</a></li>
                                            <li><a href="category-page(list-view).html">list view</a></li>
                                        </ul>
                                    </li>
                                    <!--SHOP-END-->
                                    <!--product-meu start-->
                                    <li class="mega" id="hover-cls"><a href="{{url('product')}}">product
                                        </a>
                                        
                                    </li>
                                    <!--product-meu end-->

                                    <!--mega-meu start-->
                                    <li class="mega">
                                        <a href="#">features</a>
                                        <ul class="mega-menu full-mega-menu ratio_landscape">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>portfolio</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="grid-2-col.html">portfolio grid 2</a></li>
                                                                        <li><a href="grid-3-col.html">portfolio grid 3</a></li>
                                                                        <li><a href="grid-4-col.html">portfolio grid 4</a></li>
                                                                        <li><a href="grid-6-col.html">portfolio grid 6</a></li>
                                                                        <li><a href="masonary-2-grid.html">mesonary grid 2</a></li>
                                                                        <li><a href="masonary-3-grid.html">mesonary grid 3</a></li>
                                                                        <li><a href="masonary-4-grid.html">mesonary grid 4</a></li>
                                                                        <li><a href="masonary-fullwidth.html">mesonary full width</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>add to cart</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="layout-5.html">cart modal popup</a></li>
                                                                        <li><a href="layout-6.html">qty. counter </a></li>
                                                                        <li><a href="index.html">cart top</a></li>
                                                                        <li><a href="layout-2.html">cart bottom</a></li>
                                                                        <li><a href="layout-3.html">cart left</a></li>
                                                                        <li><a href="layout-4.html">cart right</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>shortcodes</h5></div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="element-title.html">title</a></li>
                                                                        <li><a href="element-banner.html">collection banner</a></li>
                                                                        <li><a href="element-slider.html">home slider</a></li>
                                                                        <li><a href="element-category.html">category</a></li>
                                                                        <li><a href="element-service.html">service</a></li>
                                                                        <li><a href="element-image-ratio.html">image size ratio</a></li>
                                                                        <li><a href="element-tab.html">tab</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="email-order-success.html">order success</a></li>
                                                                        <li><a href="email-order-success-tow.html">order success 2</a></li>
                                                                        <li><a href="email-template.html">email template</a></li>
                                                                        <li><a href="email-template-tow.html">email template 2</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="menu-title menu-secon-title">
                                                                    <h5>Easy to use</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a href="button.html">element button</a></li>
                                                                        <li><a href="instagram.html">element instagram</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box product ">
                                                            <div class="mega-img">
                                                                <img src="{{URL::to('public/frontend')}}/images/mega-banner-2.jpg" alt="menu-banner" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--mega-meu end-->

                                    <!--pages-meu start-->
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li>
                                                <a href="#">account</a>
                                                <ul>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="forget-pwd.html">forget password</a></li>
                                                    <li><a href="profile.html">profile </a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-page.html">about us</a></li>
                                            <li><a href="search.html">search</a></li>
                                            <li><a href="typography.html">typography </a></li>
                                            <li><a href="review.html">review </a></li>
                                            <li><a href="order-success.html">order success</a></li>
                                            <li><a href="order-history.html">order history</a></li>
                                            <li>
                                                <a href="#">compare</a>
                                                <ul>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="compare-2.html">compare-2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="collection.html">collection</a></li>
                                            <li><a href="look-book.html">lookbook</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="coming-soon.html">coming soon </a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <!--product-end end-->

                                    <!--blog-meu start-->
                                    <li>
                                        <a href="#">blog</a>
                                        <ul>
                                            <li><a href="blog(left-sidebar).html">left sidebar</a></li>
                                            <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                            <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                        </ul>
                                    </li>
                                    <!--blog-meu end-->
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="mobile-user onhover-dropdown" onclick="openAccount()"><a href="#"><i class="icon-user"></i></a>
                                    </li>
                                    <li class="mobile-wishlist" onclick="openWishlist()">
                                        <a href="#">
                                            <i class="icon-heart"></i>
                                            <div class="cart-item">
                                                <div>0 item<span>wishlist</span></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                        <div class="search-overlay">
                                            <div>
                                                <span class="close-mobile-search">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-settings"></i></a>
                                    </li>
                                </ul>
                                <div class="cart-block mobile-cart cart-hover-div" onclick="openCart()">
                                    <a href="#"><span class="cart-product">0</span><i class="icon-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-header category-header-6">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <div class="navbar-menu">
                    <div class="category-left">
                        <div class=" nav-block">
                            <div class="nav-left">
                                <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent">
                                    <button class="navbar-toggler" type="button">
                                        <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                    </button>
                                    <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5>
                                </nav>
                                <div class="collapse show nav-desk" id="navbarToggleExternalContent">
                                    <ul class="nav-cat title-font mt-0">
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/01.png" alt="category-product"> <a href="#">foodgrains</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/02.png" alt="category-product"> <a href="#">bakery</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/03.png" alt="category-product"> <a href="#">beverage</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/04.png" alt="category-product"> <a href="#">snacks</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/05.png" alt="category-product"> <a href="#">kitchen</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/06.png" alt="category-product"> <a href="#">beauty</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/07.png" alt="category-product"> <a href="#">FRESH FRUIT</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/08.png" alt="category-product"> <a href="#">banana</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/09.png" alt="category-product"> <a href="#">kiwi</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/10.png" alt="category-product"> <a href="#">mangosteen</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/11.png" alt="category-product"> <a href="#">grape</a></li>
                                        <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/12.png" alt="category-product"> <a href="#">zucchini</a></li>
                                        <li>
                                            <ul class="mor-slide-open">
                                                <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/08.png" alt="category-product"> <a>drangon fruits</a></li>
                                                <li><img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/09.png" alt="category-product"> <a href="#">kiwi</a></li>
                                                <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/10.png" alt="category-product"> <a href="#">mangosteen</a></li>
                                                <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/11.png" alt="category-product"> <a href="#">grape</a></li>
                                                <li> <img src="{{URL::to('public/frontend')}}/images/layout-1/nav-img/12.png" alt="category-product"> <a href="#">zucchini</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="input-block">
                            <div class="input-box">
                                <form class="big-deal-form">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="search"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search a Product">
                                        <div class="input-group-prepend">
                                            <select>
                                                <option>All Category</option>
                                                <option>indurstrial</option>
                                                <option>sports</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="category-right">
                        <div class="contact-block">
                            <div>
                                <i class="fa fa-volume-control-phone"></i>
                                <span>call us<span>123-456-76890</span></span>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="gift-block" data-toggle="dropdown">
                                <div class="grif-icon">
                                    <i class="icon-gift"></i>
                                </div>
                                <div class="gift-offer">
                                    <p>gift box</p>
                                    <span>Festivel Offer</span>
                                </div>
                            </div>
                            <div class="dropdown-menu gift-dropdown">
                                <div class="media">
                                    <div class="mr-3">
                                        <img src="{{URL::to('public/frontend')}}/images/icon/1.png" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Billion Days</h5>
                                        <p><img src="{{URL::to('public/frontend')}}/images/icon/currency.png" class="cash" alt="gift"> Flat Rs. 270 Rewards</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <img src="{{URL::to('public/frontend')}}/images/icon/2.png" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Fashion Discount</h5>
                                        <p><img src="{{URL::to('public/frontend')}}/images/icon/fire.png" class="fire" alt="gift">Extra 10% off (upto Rs. 10,000*) </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <img src="{{URL::to('public/frontend')}}/images/icon/3.png" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">75% off Store</h5>
                                        <p>No coupon code is required.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <img src="{{URL::to('public/frontend')}}/images/icon/6.png" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Upto 50% off</h5>
                                        <p>Buy popular phones under Rs.20.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="mr-3">
                                        <img src="{{URL::to('public/frontend')}}/images/icon/5.png" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Beauty store</h5>
                                        <p><img src="{{URL::to('public/frontend')}}/images/icon/currency.png" class="cash" alt="gift"> Flat Rs. 270 Rewards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>