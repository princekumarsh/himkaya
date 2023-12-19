@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
    @php
        $main_banner = \App\Model\Banner::where('banner_type', 'Main Banner')
            ->where('published', 1)
            ->orderBy('id', 'desc')
            ->get();

        $footer_banners = \App\Model\Banner::where('banner_type', 'Footer Banner')
            ->where('published', 1)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();
        $mainsection_banner = \App\Model\Banner::where('banner_type', 'Main Section Banner')
            ->where('published', 1)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

    @endphp
    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area">
            <div
                class="swiper-container swiper-pagination-style dots-bg-light home-slider-container default-slider-container">
                <div class="swiper-wrapper home-slider-wrapper slider-default">
                    @foreach ($main_banner as $key => $banner)
                        <div class="swiper-slide">
                            <a class="btn-slide transition-slide-3" href="{{ $banner['url'] }}">
                                <div class="slider-content-area"
                                    data-bg-img="{{ asset('storage/app/public/banner') }}/{{ $banner['photo'] }}">

                                    {{-- <div class="container">
                                    <div class="row">
                                        <div class="col-10 col-sm-6 col-md-5">
                                            <div class="slider-content slider-content-light animate-pulse">
                                                <h5 class="sub-title transition-slide-0">A SKINCARE ESSENTIAL</h5>
                                                <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400">100%
                                                        NATURAL</span></h2>
                                                <h2 class="title transition-slide-2">FACIAL OILS</h2>
                                                <a class="btn-slide transition-slide-3" href="#/">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!--== Add Swiper Pagination ==-->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section>
            <div class="container pt-30 pt-sm-15 pb-15 pb-lg-5">
                <div class="row">
                    <div class="col-12">
                        <div class="images-col3-slider owl-carousel owl-theme">
                            @foreach ($footer_banners as $key => $footer_banner)
                                <div class="item">
                                    <div class="thumb thumb-scale-hover-style">
                                        <a href="{{ $footer_banner['url'] }}">
                                            <img src="{{ asset('storage/app/public/banner') }}/{{ $footer_banner['photo'] }}"
                                                alt="Image-HasTech" class="hover-img">
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area">
            <div class="container pb-lg-60">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center mb-30">
                            <h2 class="title">Our Products</h2>
                            <div class="desc">
                                <p>Add our products to weekly line up</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-tabs-content-wrap">
                            <ul class="nav mb-25 product-tab-nav" id="pills-tab" role="tablist">
                                <li role="presentation">
                                    <a class="active" id="makeup-tab" data-bs-toggle="pill" href="#makeup" role="tab"
                                        aria-controls="makeup" aria-selected="true">{{ $home_categories['0']['name'] }}</a>
                                </li>
                                <li role="presentation">
                                    <a id="skin-care-tab" data-bs-toggle="pill" href="#skin-care" role="tab"
                                        aria-controls="skin-care"
                                        aria-selected="false">{{ $home_categories['1']['name'] }}</a>
                                </li>
                                <li role="presentation">
                                    <a id="health-care-tab" data-bs-toggle="pill" href="#health-care" role="tab"
                                        aria-controls="health-care"
                                        aria-selected="false">{{ $home_categories['2']['name'] }}</a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="makeup" role="tabpanel"
                                    aria-labelledby="makeup-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-slider owl-carousel owl-theme">

                                                @foreach ($home_categories['0']['products'] as $key => $product)
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="{{ route('product', [$product['slug']]) }}">
                                                                        <img src="{{ asset('storage/app/public/product/thumbnail/' . $product->thumbnail) }}"
                                                                            style="height:323px;width:323px"
                                                                            alt="Image-HasTech">
                                                                        <!--<img class="second-image" src="{{ asset('public/assets_ui') }}/img/shop/01-h1.jpg" alt="Image-HasTech">-->
                                                                    </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="#"
                                                                                title="Add to wishlist">
                                                                                <i class="icon-heart icon"></i>
                                                                            </a>
                                                                            <a class="add-compare" href="#"
                                                                                title="Add to compare">
                                                                                <i class="icon-shuffle icon"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        @if ($product->discount > 0)
                                                                            <li class="discount">
                                                                                @if ($product->discount_type == 'percent')
                                                                                    {{ round($product->discount, !empty($decimal_point_settings) ? $decimal_point_settings : 0) }}%
                                                                                @elseif($product->discount_type == 'flat')
                                                                                    {{ \App\CPU\Helpers::currency_converter($product->discount) }}
                                                                                @endif
                                                                                {{ \App\CPU\translate('off') }}
                                                                            </li>
                                                                        @endif
                                                                        {{-- -10% --}}
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class="title"><a
                                                                                href="{{ route('product', [$product['slug']]) }}">{{ $product->name }}</a>
                                                                        </h4>
                                                                        <div class="star-content">
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span
                                                                                class="price-old">₹{{ $product->unit_price }}</span>
                                                                            <span
                                                                                class="price">₹{{ $product->purchase_price }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                        <a class="btn-product-add"
                                                                            href="{{ route('product', [$product['slug']]) }}">Add
                                                                            to cart</a>
                                                                        <a class="btn-quick-view" href="javascript:;"
                                                                            title="Quick view">Quick view</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="skin-care" role="tabpanel"
                                    aria-labelledby="skin-care-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-slider owl-carousel owl-theme">
                                                @foreach ($home_categories['1']['products'] as $key => $product)
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="{{ route('product', [$product['slug']]) }}">
                                                                        <img src="{{ asset('storage/app/public/product/thumbnail/' . $product->thumbnail) }}"
                                                                            style="height:323px;width:323px"
                                                                            alt="Image-HasTech">
                                                                        <!--<img class="second-image" src="{{ asset('public/assets_ui') }}/img/shop/01-h1.jpg" alt="Image-HasTech">-->
                                                                    </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="#"
                                                                                title="Add to wishlist">
                                                                                <i class="icon-heart icon"></i>
                                                                            </a>
                                                                            <a class="add-compare" href="#"
                                                                                title="Add to compare">
                                                                                <i class="icon-shuffle icon"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        @if ($product->discount > 0)
                                                                            <li class="discount">
                                                                                @if ($product->discount_type == 'percent')
                                                                                    {{ round($product->discount, !empty($decimal_point_settings) ? $decimal_point_settings : 0) }}%
                                                                                @elseif($product->discount_type == 'flat')
                                                                                    {{ \App\CPU\Helpers::currency_converter($product->discount) }}
                                                                                @endif
                                                                                {{ \App\CPU\translate('off') }}
                                                                            </li>
                                                                        @endif
                                                                        {{-- -10% --}}
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class="title"><a
                                                                                href="{{ route('product', [$product['slug']]) }}">{{ $product->name }}</a>
                                                                        </h4>
                                                                        <div class="star-content">
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span
                                                                                class="price-old">₹{{ $product->unit_price }}</span>
                                                                            <span
                                                                                class="price">₹{{ $product->purchase_price }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                        <a class="btn-product-add"
                                                                            href="{{ route('product', [$product['slug']]) }}">Add
                                                                            to cart</a>
                                                                        <a class="btn-quick-view" href="javascript:;"
                                                                            title="Quick view">Quick view</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="health-care" role="tabpanel"
                                    aria-labelledby="health-care-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="product-slider owl-carousel owl-theme">
                                                @foreach ($home_categories['2']['products'] as $key => $product)
                                                    <div class="item">
                                                        <!--== Start Shop Item ==-->
                                                        <div class="product-item">
                                                            <div class="inner-content">
                                                                <div class="product-thumb">
                                                                    <a href="{{ route('product', [$product['slug']]) }}">
                                                                        <img src="{{ asset('storage/app/public/product/thumbnail/' . $product->thumbnail) }}"
                                                                            style="height:323px;width:323px"
                                                                            alt="Image-HasTech">
                                                                        <!--<img class="second-image" src="{{ asset('public/assets_ui') }}/img/shop/01-h1.jpg" alt="Image-HasTech">-->
                                                                    </a>
                                                                    <div class="product-action">
                                                                        <div class="addto-wrap">
                                                                            <a class="add-wishlist" href="#"
                                                                                title="Add to wishlist">
                                                                                <i class="icon-heart icon"></i>
                                                                            </a>
                                                                            <a class="add-compare" href="#"
                                                                                title="Add to compare">
                                                                                <i class="icon-shuffle icon"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="product-flag">
                                                                        <li class="new">New</li>
                                                                        @if ($product->discount > 0)
                                                                            <li class="discount">
                                                                                @if ($product->discount_type == 'percent')
                                                                                    {{ round($product->discount, !empty($decimal_point_settings) ? $decimal_point_settings : 0) }}%
                                                                                @elseif($product->discount_type == 'flat')
                                                                                    {{ \App\CPU\Helpers::currency_converter($product->discount) }}
                                                                                @endif
                                                                                {{ \App\CPU\translate('off') }}
                                                                            </li>
                                                                        @endif
                                                                        {{-- -10% --}}
                                                                    </ul>
                                                                </div>
                                                                <div class="product-desc">
                                                                    <div class="product-info">
                                                                        <h4 class="title"><a
                                                                                href="{{ route('product', [$product['slug']]) }}">{{ $product->name }}</a>
                                                                        </h4>
                                                                        <div class="star-content">
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                            <i class="ion-md-star"></i>
                                                                        </div>
                                                                        <div class="prices">
                                                                            <span
                                                                                class="price-old">₹{{ $product->unit_price }}</span>
                                                                            <span
                                                                                class="price">₹{{ $product->purchase_price }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-footer">
                                                                        <a class="btn-product-add"
                                                                            href="{{ route('product', [$product['slug']]) }}">Add
                                                                            to cart</a>
                                                                        <a class="btn-quick-view" href="javascript:;"
                                                                            title="Quick view">Quick view</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--== End Shop Item ==-->
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area">
            <div class="container pt-5 pb-45">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">New Arrivals</h2>
                            <div class="desc">
                                <p>Add our new arrivals to your weekly lineup</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumb thumb-scale-hover-style">
                            <a href="#"><img src="{{ asset('public/assets_ui') }}/img/photos/divider-01.jpg"
                                    style="width:100%;height: 520px" alt="Image-HasTech" class="hover-img"></a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!--== Start Shop Item ==-->
                        <div class="product-col2-slider owl-carousel owl-theme">
                            @foreach ($topRated as $key=>$t)
                                @if ($t->product && $key <3)
                                    <div class="item">
                                    <!--== Start Shop Item ==-->
                                    <div class="product-item mb-30">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="{{ route('product', [$t->product['slug']]) }}">
                                                    <img src="{{ asset('storage/app/public/product/thumbnail/' . $t->product->thumbnail) }}"
                                                        style="height:323px;width:323px" alt="Image-HasTech">
                                                    <img class="second-image"
                                                        ssrc="{{ asset('storage/app/public/product/thumbnail/' . $t->product->thumbnail) }}"
                                                        style="height:323px" alt="Image-HasTech">
                                                </a>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-wishlist" href="#" title="Add to wishlist">
                                                            <i class="icon-heart icon"></i>
                                                        </a>
                                                        <a class="add-compare" href="#" title="Add to compare">
                                                            <i class="icon-shuffle icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount">-10%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a
                                                            href="{{ route('product', [$t->product['slug']]) }}">{{ $t->product->name }}</a>
                                                    </h4>
                                                    <div class="star-content">
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old">₹{{ $t->product->unit_price }}</span>
                                                        <span class="price">₹{{ $t->product->purchase_price }}</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                    <a class="btn-product-add"
                                                        href="{{ route('product', [$t->product['slug']]) }}">Add to
                                                        cart</a>
                                                    <a class="btn-quick-view" href="javascript:;"
                                                        title="Quick view">Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Shop Item ==-->
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Divider Area Wrapper ==-->

        @if ($flash_deals)

            <section class="divider-area divider-product-discount-area bg-img"
                data-bg-img="{{\App\CPU\ProductManager::product_image_path('deal')}}/{{$flash_deals['banner']}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="divider-style2-wrap">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="divider-content">
                                            <h5 class="sub-title">{{$flash_deals->title}}</h5>
                                            {{-- <h2 class="title">40% Off</h2> --}}
                                            <p>No Parabens. No Sulfates. No Compromises. Shop Clean Beauty.</p>
                                            <div class="ht-countdown ht-countdown-style2 mb-45 d-block"
                                                data-date="{{$flash_deals->end_date}}"></div>
                                            <a class="btn-theme btn-white" href="#">Shop Now</a>
                                            <a class="btn-theme btn-white" href="#">All View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!--== End Divider Area Wrapper ==-->

        <!--== Start Testimonial Area Wrapper ==-->
        {{-- <section class="testimonial-area">
            <div class="container pt-95 pb-95 pt-lg-70 pb-lg-70">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Client Testimonials</h2>
                            <div class="desc">
                                <p>What our happy customers says !</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonials-slider testi-first-active owl-carousel owl-theme">
                            <div class="item">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonial-item testi-height-style matchHeight">
                                    <div class="testi-inner-content">
                                        <div class="testi-author">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('public/assets_ui') }}/img/testimonial/01.png"
                                                    alt="Image-HasTech" class="img">
                                            </div>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p>All Perfect !! I have three sites with magento , this theme is the best !!
                                                Excellent support , advice theme installation package , sorry for English,
                                                are Italian but I had no problem !! Thank you !</p>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                            <div class="item">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonial-item testi-height-style matchHeight">
                                    <div class="testi-inner-content">
                                        <div class="testi-author">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('public/assets_ui') }}/img/testimonial/02.png"
                                                    alt="Image-HasTech" class="img">
                                            </div>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p>All Perfect !! I have three sites with magento , this theme is the best !!
                                                Excellent support , advice theme installation package , sorry for English,
                                                are Italian but I had no problem !! Thank you !</p>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                            <div class="item">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonial-item testi-height-style matchHeight">
                                    <div class="testi-inner-content">
                                        <div class="testi-author">
                                            <div class="testi-thumb">
                                                <img src="{{ asset('public/assets_ui') }}/img/testimonial/01.png"
                                                    alt="Image-HasTech" class="img">
                                            </div>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                        <div class="testi-content">
                                            <p>All Perfect !! I have three sites with magento , this theme is the best !!
                                                Excellent support , advice theme installation package , sorry for English,
                                                are Italian but I had no problem !! Thank you !</p>
                                            <div class="testi-info">
                                                <span class="name">orando BLoom</span>
                                                <span class="email">demo@example.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--== End Testimonial Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        {{-- <section>
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="thumb thumb-scale-hover-style">
                            <a href="{{$mainsection_banner['0']['url']}}"><img src="{{asset('storage/app/public/banner')}}/{{$mainsection_banner['0']['photo']}}"
                                    alt="Image-HasTech" class="hover-img mb-4"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--== End Product Area Wrapper ==-->

    @stop
