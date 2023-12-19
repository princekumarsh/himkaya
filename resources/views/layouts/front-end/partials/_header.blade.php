@php
    $categories = App\Model\Category::where(['position' => 0, 'home_status' => 1])
        ->priority()
        ->take(11)
        ->get();
    $brands = App\Model\Brand::active()
        ->take(15)
        ->get();
@endphp
<!--== Start Header Wrapper ==-->
<header class="header-area header-default header-style2">
    <!--== Start Header Top ==-->
    <div class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="contact-email text-left pt-2">
                        <span>Email us: <a href="mailto:himkaya08@gmail.com">himkaya08@gmail.com</a></span>
                    </div>
                </div>  
                <!-- <div class="col-lg-4 col-sm-2">
                    <p></p>
                    </p>
                </div> -->
                <div class="col-md-6 col-lg-6 col-sm-4 text-md-end text-center" style="text-align:right !important;">
                    <div class="theme-setting">
                        <a class="dropdown-btn text-right" href="#" role="button">
                           <i class="icon-user" style="font-size: 24px"></i>
                            <i class="ion-ios-arrow-down"></i>
                        </a>
                        <ul class="dropdown-content">
                            @if (auth('customer')->user())
                                <li>
                                    <a href="{{ route('user-account') }}">My account</a>
                                </li>
                                <li>
                                    <a href="#">Checkout</a>
                                </li>
                                <li>
                                    <a href="{{ route('customer.auth.logout') }}">Sign out</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('customer.auth.login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{route('customer.auth.sign-up')}}">Register</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('customer.auth.logout') }}">Sign out</a>
                                </li> --}}
                            @endif

                        </ul>
                    </div>
                    <div class="theme-currency">
                        {{-- <a class="dropdown-btn" href="#" role="button">
                INR ₹
                <i class="ion-ios-arrow-down"></i>
              </a>
              <ul class="dropdown-content">
                <li>
                  <a href="#/">IND </a>
                </li>
                <li>
                  <a href="#/">USD ₹</a>
                </li>
              </ul> --}}
                    </div>
                    <div class="theme-language">
                        {{-- <a class="dropdown-btn" href="#" role="button">
                <img src="{{asset('public/assets_ui')}}/img/photos/language-01.jpg" alt="Has-Image">English
                <i class="ion-ios-arrow-down"></i>
              </a>
              <ul class="dropdown-content">
                <li>
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/photos/language-01.jpg" alt="Has-Image">English</a>
                </li>
                <li>
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/photos/language-02.jpg" alt="Has-Image">Italiano</a>
                </li>
              </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Header Top ==-->

    <!--== Start Header Middle ==-->
    <div class="header-middle hidden-md-down">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col col-md-4 col-sm-12">
                    <div class="contact-link">
                        <div class="contact-info">
                            <span class="phone">Call Us: <a href="tel:(+91)8448534228">(+91)8448534228</a></span>
                            <div class="time-contact">7 Days a week from 9:00 am to 7:00 pm</div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-12">
                    <div class="header-logo-area text-center">
                        <a href="{{ route('home') }}">
                            @foreach ($brands as $b)
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('storage/app/public/brand/' . $b->image) }}" alt="logo"
                                        style="width: 120px;height: 80px;"></a>
                            @endforeach

                            @foreach ($brands as $b)
                                <img class="logo-light d-none" src="{{ asset('storage/app/public/brand/' . $b->image) }}"
                                    alt="Logo" />
                            @endforeach
                        </a>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-12">
                    <div class="header-action-area float-end">
                        <div class="search-content-wrap">
                            <button class="btn-search">
                                <span class="icon icon-search icon-magnifier"></span>
                            </button>
                            <div class="btn-search-content">
                                <form action="#" method="post">
                                    <div class="form-input-item">
                                        <input type="text" placeholder="Enter your search key ...">
                                        <button type="submit" class="btn-src">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                        <!-- <div class="search-categorie">
                                            <select class="form-select" name="poscats">
                                                <option selected>All categories</option>
                                                <option value="1">Beauty &amp; Health</option>
                                                <option value="2">- - Makeup</option>
                                                <option value="3">- - - - Eyes</option>
                                            </select>
                                        </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-button-group">
                            {{-- <div class="shop-button-item">
                      <a class="shop-button" href="{{route('compareProduct')}}">
                        <i class="icon-shuffle icon"></i>
                        <sup class="shop-count">5</sup>
                      </a>
                </div> --}}
                            <div class="shop-button-item">
                                <a class="shop-button" href="{{ route('wishlists') }}">
                                    <i class="icon-heart icon"></i>
                                    <sup class="shop-count countWishlist">{{session()->has('wish_list')?count(session('wish_list')):0}}</sup>
                                </a>
                            </div>
                            {{-- <div id="cart_items">
                                @include('layouts.front-end.partials.cart')
                            </div> --}}
                            <div class="shop-button-item" id="cart_items">
                                @include('layouts.front-end.partials.cart')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Header Middle ==-->

    <!--== Start Header Bottom ==-->
    <div class="header-bottom sticky-header hidden-md-down">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-12 position-relative">
                    <div class="header-align align-default justify-content-center">
                        <div class="header-navigation-area hidden-md-down">
                            <ul class="main-menu nav">
                                @foreach ($categories as $key => $category)
                                    <li class="has-submenu"><a href="javascript:"
                                            onclick="location.href='{{ route('products', ['id' => $category['id'], 'data_from' => 'category', 'page' => 1]) }}'">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                                <!-- <li class="has-submenu"><a href="{{ route('home') }}">Home</a></li> -->
                                <!--  <li><a href="{{ route('about-us') }}">About Us</a></li>
                  <li class="has-submenu full-width"><a href="{{ route('shoplist') }}">Shop</a></li>
                  <li><a href="{{ route('contacts') }}">Contact us</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Header Bottom ==-->

    <!--== Start Responsive Header ==-->
    <div class="responsive-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="header-item">
                        <button class="btn-menu" type="button"><i class="icon-menu"></i></button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header-item justify-content-center">
                        <div class="header-logo-area">
                            @foreach ($brands as $b)
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('storage/app/public/brand/' . $b->image) }}" class="logo-main"
                                        alt="logo" style="width: 120px;height: 60px;"></a>
                            @endforeach
                            <!--<a href="#">-->
                            <!--  <img class="logo-main" src="{{ asset('public/assets_ui') }}/img/logo.png" alt="Logo" />-->
                            <!--</a>-->
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="header-item justify-content-end">
                        <button class="btn-user" onclick="window.location.href='{{ route('user-account') }}'"><i
                                class="icon-user"></i></button>
                        <button class="btn-cart" onclick="window.location.href='{{ route('shop-cart') }}'"><i
                                class="icon-bag"></i> <span class="item-count">@php($cart=\App\CPU\CartManager::get_cart())
                                {{$cart->count()}}</span></button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="responsive-search-content">
                        <form action="#">
                            <div class="form-input-item">
                                <input type="text" placeholder="Enter your search key ...">
                                <button type="submit" class="btn-src">
                                    <i class="icon-magnifier"></i>
                                </button>
                                <!-- <div class="search-categorie">
                                    <select class="form-select" name="poscats">
                                        <option selected>All categories</option>
                                        <option value="1">Beauty &amp; Health</option>
                                        <option value="2">- - Makeup</option>
                                        <option value="3">- - - - Eyes</option>
                                    </select>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Responsive Header ==-->
</header>
<!--== End Header Wrapper ==-->
