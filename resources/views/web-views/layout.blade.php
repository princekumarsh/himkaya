<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stellers</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets_ui')}}/images/favicon.png">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}css/vendor/signericafat.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/vendor/elegant.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/animate.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('public/assets_ui')}}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css_section')
    <style>
        .cus-all-i{
            font-size: 16px !important;
            position: relative !important;
            top: 0px !important;
        }
        .footer-area-cus {
    background-color: #232f3e;
}
.bg-37475a{
    background-color:#37475a;
}
.cus-b-t-top{
    padding: 16px 0px 10px 0px;
}
.cus-b-t-top h6{
    font-size: 14px;
    font-weight: 600;
    color: #fff;
}
    </style>
</head>

<body>

    <div class="main-wrapper">
        <header class="header-area">
            <div class="header-large-device">
                <!-- <div class="header-top header-top-ptb-1 border-bottom-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <div class="social-offer-wrap">
                                    <div class="social-style-1">
                                        <a href="#"><i class="icon-social-twitter"></i></a>
                                        <a href="#"><i class="icon-social-facebook"></i></a>
                                        <a href="#"><i class="icon-social-instagram"></i></a>
                                        <a href="#"><i class="icon-social-youtube"></i></a>
                                        <a href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                    <div class="header-offer-wrap-2">
                                        <p><span>FREE SHIPPING</span> world wide for all orders over ₹199</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="header-top-right">
                                    <div class="same-style-wrap">
                                        <div class="same-style same-style-mrg-2 track-order">
                                            <a href="#">Track Orders </a>
                                        </div>
                                        <div class="same-style same-style-mrg-2 currency-wrap">
                                            <a class="currency-dropdown-active" href="#"> USD(₹) <i class="icon-arrow-down"></i></a>
                                            <div class="currency-dropdown">
                                                <ul>
                                                    <li><a href="#">USD</a></li>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">BDT</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="same-style same-style-mrg-2 language-wrap">
                                            <a class="language-dropdown-active" href="#">English <i class="icon-arrow-down"></i></a>
                                            <div class="language-dropdown">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="header-middle header-middle-padding-2">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-1 col-lg-1">
                                <div class="logo">
                                    <a href="/"><img src="{{asset('public/assets_ui')}}/images/logo/logo-new.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="hotline-2-wrap">
                                    <div class="hotline-2-icon">
                                        <i style="color:#fff;" class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="hotline-2-content">
                                        <span>Hello</span>
                                        <h6>Select Your Address</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="categori-search-wrap categori-search-wrap-modify-3">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>All</option>
                                            <option>Clothing </option>
                                            <option>T-Shirt</option>
                                            <option>Shoes</option>
                                            <option>Jeans</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button class="blue"><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-1">
                                <div class="hotline-2-wrap">
                                    <div class="hotline-2-content">
                                        <a href="/login"><span>Hello,Sign in</span></a>
                                        <h6>Account</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-1">
                                <div class="hotline-2-wrap">
                                    <div class="hotline-2-content">
                                        <span>Return</span>
                                        <h6>& Order</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-1">
                                
                                <div class="hotline-2-wrap ">
                                    
                                        <div class="hotline-2-icon">
                                            <i style="color:#fff;" class="fa fa-shopping-cart" ></i>
                                        </div>
                                        <div class="hotline-2-content header-cart">
                                        <a class="cart-active" href="#"> <h6>Cart</h6>
                                            <span class="cus-pro-count-red"> 02</span> </a>
                                        </div>
                                        
                                   
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="header-bottom bg-blue">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-1">
                                <div class="main-categori-wrap main-categori-wrap-modify-2">
                                    <a class="categori-show categori-blue" href="#"><i class="fa fa-list cus-all-i"></i> All </a>
                                    <div class="category-menu-2 category-menu-2-blue categori-hide categori-not-visible-2">
                                        <nav>
                                            <ul>
                                                <li><a href=""><i class="icon-energy"></i> HOME</a></li>
                                                <li><a href=""><i class="icon-handbag"></i>NANO DRY</a></li>
                                                <li><a href=""><i class="icon-home"></i> CHEROKEE COTTON</a></li>
                                                <li><a href=""><i class="icon-game-controller"></i> PRINTED</a></li>
                                                <li><a href=""><i class="icon-eyeglass"></i> OUTDOOR CAP </a></li>
                                                <li><a href=""><i class="icon-screen-desktop"></i> HALF & HALF </a></li>
                                                <li><a href=""><i class="icon-camera"></i> WOMEN'S</a></li>
                                                <li><a href=""><i class="icon-social-dribbble"></i> TEES</a></li>
                                                <li><a href=""><i class="icon-screen-smartphone"></i> HOODIES</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                                    <nav>
                                        <ul>
                                            <li><a href="/">HOME</a></li>
                                            <li><a href="/category">NANO DRY</a></li>
                                            <li><a href="/category">CHEROKEE COTTON</a> </li>
                                            <li><a href="/category">PRINTED</a></li>
                                            <li><a href="/category">OUTDOOR CAP</a></li>
                                            <li><a href="/category">HALF & HALF</a></li>
                                            <li><a href="/category">WOMEN'S</a></li>
                                            <li><a href="/category">TEES</a></li>
                                            <li><a href="/category">HOODIEs</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="/">
                                    <img alt="" width="70" src="{{asset('public/assets_ui')}}/images/logo/logo-new.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="wishlist"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>FREE SHIPPING</span> world wide for all orders over ₹199</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="">Home</a> </li>
                                <li><a href="#">Best Seller </a></li>
                                            <li><a href="#">Customer Services</a> </li>
                                            <li><a href="#">Today's Deals</a></li>
                                            <li><a href="#">fashhion</a></li>
                                            <li><a href="/category">Category</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show blue" href="#">
                            <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                    <li><a href=""><i class="icon-energy"></i> Consumer Electric </a></li>
                                    <li><a href=""><i class="icon-handbag"></i> Clothing & Apparel </a></li>
                                    <li><a href=""><i class="icon-home"></i> Home, Garden & Kitchen </a></li>
                                    <li><a href=""><i class="icon-game-controller"></i> Game Console </a></li>
                                    <li><a href=""><i class="icon-eyeglass"></i> Jewelry & Watches </a></li>
                                    <li><a href=""><i class="icon-screen-desktop"></i> Computers & Technologies </a></li>
                                    <li><a href=""><i class="icon-camera"></i> Camera, Video & Audio </a></li>
                                    <li><a href=""><i class="icon-social-dribbble"></i> Sport & Outdoor </a></li>
                                    <li><a href=""><i class="icon-screen-smartphone"></i> Phones & Accessories </a></li>
                                    <li><a href=""><i class="icon-notebook"></i> Books & Office </a></li>
                                    <li><a href=""><i class="icon-rocket"></i> Cars & Motocycles </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="order-tracking"><i class="lastudioicon-pin-3-2"></i>Track Orders </a>
                        </div>
                       
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> +91 9874562154</li>
                            <li><i class="icon-envelope-open "></i>Demo@demo.com</li>
                            <li><i class="icon-home"></i> Demo Box Demo Colins Demo West Demo</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('public/assets_ui')}}/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × ₹49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{asset('public/assets_ui')}}/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × ₹49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>₹170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout">checkout</a>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')

        <footer class="footer-area footer-area-cus">
            <div class="container-fluid bg-37475a cus-b-t-top">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center"><h6> Back To Top</h6></div>
                    </div>
                </div>
            </div>
            <div class="footer-top border-bottom-4 pb-55 pt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="footer-widget mb-40">
                            <div class="logo">
                                <a href="/"><img src="{{asset('public/assets_ui')}}/images/logo/logo-new.png" alt="logo" style="width:50%"></a>
                            </div>
                                <div class="footer-info-list ">
                                    <p class="text-white">The table below shows the Free Font Awesome 5 Audio & Video icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">Special</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="wishlist">Featured  Products</a></li>
                                        <li><a href="wishlist">Latest Products</a></li>
                                        <li><a href="wishlist">Best Selling Products</a></li>
                                        <li><a href="wishlist">Top Rated Products</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">ACCOUNT & SHIPPING INFO</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="wishlist">Profile Info</a></li>
                                        <li><a href="wishlist">Wish Lish</a></li>
                                        <li><a href="wishlist">Track Order</a></li>
                                        <li><a href="wishlist">Refund Policy</a></li>
                                        <li><a href="wishlist">Return Policy</a></li>
                                        <li><a href="wishlist">Cancellation policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">Address</h3>
                                <div class="footer-info-list">
                                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                    </p>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-30 ">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img payment-img-right">
                                <a href="#"><img src="{{asset('public/assets_ui')}}/images/icon-img/payment.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright copyright-center">
                                <p>Copyright © 2023 | </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="{{asset('public/assets_ui')}}/images/product/1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="{{asset('public/assets_ui')}}/images/product/3.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="{{asset('public/assets_ui')}}/images/product/6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="nav nav-style-6">
                                        <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab"
                                            aria-controls="pro-1" aria-selected="true">
                                            <img src="{{asset('public/assets_ui')}}/images/product/quickview-s1.jpg" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab"
                                            aria-controls="pro-2" aria-selected="true">
                                            <img src="{{asset('public/assets_ui')}}/images/product/quickview-s2.jpg" alt="product-thumbnail">
                                        </button>
                                        <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab"
                                            aria-controls="pro-3" aria-selected="true">
                                            <img src="{{asset('public/assets_ui')}}/images/product/quickview-s3.jpg" alt="product-thumbnail">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">₹75.72</span>
                                        <span class="old-price">₹95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
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
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

    <script src="{{asset('public/assets_ui')}}/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/vendor/popper.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/slick.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/wow.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/jquery-ui.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/magnific-popup.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/sticky-sidebar.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/easyzoom.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/scrollup.js"></script>
    <script src="{{asset('public/assets_ui')}}/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="{{asset('public/assets_ui')}}/js/main.js"></script>

</body>

</html>