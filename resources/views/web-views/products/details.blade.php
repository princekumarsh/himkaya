@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
<style>
    .checkbox-alphanumeric--style-1 {
    gap: 8px;
    display: flex;
    flex-wrap: wrap;
    padding-left: 15px;
    }
    .checkbox-alphanumeric--style-1 label {
    float: none;
    margin: 0;
    min-width: 28px;
    height: 28px;
    padding: 0 10px;
    text-align: center;
    line-height: 26px;
    }

    .__m-10px {
    margin: 10px !important;
    }

.checkbox-color {
flex-wrap: wrap;
gap: 6px;
}
.checkbox-color label {
width: 26px;
height: 26px;
}
.checkbox-color input:checked ~ label {
position: relative;
border: none !important;
transform: scale(1) !important;
}
.checkbox-color input:checked ~ label .outline {
position: absolute;
inset: -4px;
border-radius: 5px;
border: 1px solid;
}




.magnetic-button{
  background-color: #f6f5f4;
  border-radius: 50px;
  color: #0f0f0f;
  display: inline-block;
  font-weight: 700;
  font-size: 14px;
  position: relative;
  padding: 13px 55px 13px 25px;
  overflow: hidden;
  text-align: center;
  text-transform: capitalize;
  border: none;
  z-index: 1;
  transition: all 0.4s ease-out;
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -ms-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
}
.magnetic-button:after {
  background-color: #ec6b81;
  border-radius: 50px;
  content: "";
  height: 100%;
  left: 0;
  visibility: hidden;
  left: auto;
  right: 0;
  position: absolute;
  top: 0;
  width: 0;
  z-index: -1;
  transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
  -webkit-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
  -moz-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
  -ms-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
  -o-transition: all 0.4s cubic-bezier(0.5, 0.24, 0, 1);
}
.magnetic-button:before {
  background-color: #fff;
  border-radius: 50%;
  color: #0f0f0f;
  font-size: 16px;
  font-family: "simple-line-icons";
  font-weight: 400;
  display: block;
  content: "\e04f";
  height: 40px;
  line-height: 40px;
  right: 5px;
  position: absolute;
  top: 5px;
  width: 40px;
}
.magnetic-button:hover {
  color: #fff;
}
.magnetic-button:hover:after {
  left: 0;
  right: auto;
  visibility: visible;
  width: 100%;
}
.diwana{
    transition: 0.2s;
    -webkit-animation: tada 1s linear infinite;
          animation: tada 1s linear infinite;
}
.diwana:hover{
    transition: 0.2s;
    transform: scale(1.2);
    animation:infinite 20s rotate linear;
}
</style>
    <?php
    $overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews);
    $rating = \App\CPU\ProductManager::get_rating($product->reviews);
    $decimal_point_settings = \App\CPU\Helpers::get_business_settings('decimal_point_settings');
    ?>
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area bg-img" data-bg-img="{{ asset('public/assets_ui') }}/img/photos/bg-02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="page-header-content">
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb">
                                    <li><a href="">Home</a></li>
                                    <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                    <li><a href="">Shop</a></li>
                                    <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                    <li>Product Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Single Area Wrapper ==-->
        <section class="product-area product-single-area">
            <div class="container pt-60 pb-0">
                <div class="row">
                    <div class="col-12">
                        <div class="product-single-item" data-margin-bottom="62">
                            @if ($product->images != null)
                                <div class="row">
                                    <div class="col-md-6">
                                        <!--== Start Product Thumbnail Area ==-->

                                        <div class="product-thumb">
                                            <div
                                                class="swiper-container single-product-thumb-content single-product-thumb-slider2">


                                                <div class="swiper-wrapper">
                                                    @foreach (json_decode($product->images) as $key => $photo)
                                                        <div class="swiper-slide zoom zoom-hover w-100">
                                                            <a class="lightbox-image  {{ $key == 0 ? 'active' : '' }}"
                                                                data-fancybox="gallery" id="image{{ $key }}"
                                                                href="{{ asset("storage/app/public/product/$photo") }}">
                                                                <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                                                    src="{{ asset("storage/app/public/product/$photo") }}"
                                                                    alt="Image-HasTech" height="605px">
                                                                <span class="product-flag-new">New</span>
                                                            </a>


                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                            <div
                                                class="swiper-container single-product-nav-content single-product-nav-slider2">
                                                <div class="swiper-wrapper">
                                                    @foreach (json_decode($product->images) as $key => $photo)
                                                        <div class="swiper-slide {{ $key == 0 ? 'active' : '' }}">
                                                            <img onerror="this.src='{{ asset('public/assets/front-end/img/image-place-holder.png') }}'"
                                                                src="{{ asset("storage/app/public/product/$photo") }}"
                                                                alt="Image-HasTech" height="50px" width="100%">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-md-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-single-info mt-sm-70">
                                            <h1 class="title">{{ $product->name }}</h1>
                                            <div class="product-info">
                                                <div class="star-content">

                                                    {{-- <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i> --}}


                                                    @for ($inc = 0; $inc < 5; $inc++)
                                                        @if ($inc < $overallRating[0])
                                                            <i class="ion-md-star"></i>
                                                        @else
                                                            <i class="ion-md-star icon-color-gray"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <ul class="comments-advices">
                                                    <li><a href="#/" class="reviews">
                                                            <i class="fa fa-commenting-o"></i>{{ $overallRating[1] }}
                                                            {{ \App\CPU\translate('Reviews') }}</a></li>
                                                    <li><a href="#/" class="reviews">
                                                            {{ $countOrder }} {{ \App\CPU\translate('orders') }}</a>
                                                    </li>
                                                    <li><a href="#/" class="reviews">
                                                            {{ $countWishlist }}
                                                            {{ \App\CPU\translate('wish_listed') }}</a></li>
                                                    <li><a href="#/" class="comment">
                                                            <i class="fa fa-pencil-square-o"></i>Write a review</a></li>
                                                </ul>
                                            </div>
                                            <div class="prices">
                                                @if ($product->discount > 0)
                                                    <span class="price-old">
                                                        {{ \App\CPU\Helpers::currency_converter($product->unit_price) }}
                                                    </span>
                                                @endif
                                                {{-- <span class="price-old">₹{{ $product->unit_price }}</span> --}}
                                                <span
                                                    class="price">{{ \App\CPU\Helpers::get_price_range($product) }}</span>
                                                <div class="tax-label">{{ \App\CPU\translate('tax') }} : </span>
                                                    <span id="set-tax-amount"></span>
                                                </div>
                                            </div>
                                            <form id="add-to-cart-form" class="mb-2">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <div
                                                    class="position-relative {{ Session::get('direction') === 'rtl' ? 'ml-n4' : 'mr-n4' }} mb-2">
                                                    @if (count(json_decode($product->colors)) > 0)
                                                        <div class="flex-start">
                                                            <div class="product-description-label mt-2 text-body">
                                                                {{ \App\CPU\translate('color') }}:
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline checkbox-color mb-1 flex-start {{ Session::get('direction') === 'rtl' ? 'mr-2' : 'ml-2' }}"
                                                                    style="padding-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}: 0;margin-top: 10px;margin-left:15px;">
                                                                    @foreach (json_decode($product->colors) as $key => $color)
                                                                        <div>
                                                                            <li >
                                                                                <input type="radio"
                                                                                    id="{{ $product->id }}-color-{{ $key }}"
                                                                                    name="color" class="hidden_radio"
                                                                                    value="{{ $color }}"
                                                                                    @if ($key == 0) checked @endif>
                                                                                <label
                                                                                    style="background: {{ $color }};"
                                                                                    for="{{ $product->id }}-color-{{ $key }}"
                                                                                    data-toggle="tooltip">
                                                                                    <span class="outline"></span></label>
                                                                            </li>
                                                                        </div>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @php
                                                        $qty = 0;
                                                        if (!empty($product->variation)) {
                                                            foreach (json_decode($product->variation) as $key => $variation) {
                                                                $qty += $variation->qty;
                                                            }
                                                        }
                                                    @endphp
                                                </div>
                                                @foreach (json_decode($product->choice_options) as $key => $choice)
                                                    <div class="row flex-start mx-0">
                                                        <div style="margin-left: -13px;padding-right: 25px;"
                                                            class="product-description-label text-body mt-2 {{ Session::get('direction') === 'rtl' ? 'pl-2' : 'pr-2' }}">
                                                            {{ $choice->title }}
                                                            :
                                                        </div>
                                                        <div style="margin-left: 47px;">
                                                            <ul class="checkbox-alphanumeric mb-2 flex-start d-flex"
                                                                style="padding-{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }}: 0;margin-left: 29px;margin-top:-30px">
                                                                @foreach ($choice->options as $key => $option)
                                                                    <div>
                                                                        <li class="for-mobile-capacity">
                                                                            <input type="radio" class="hidden_radio"
                                                                                id="{{ $choice->name }}-{{ $option }}"
                                                                                name="{{ $choice->name }}"
                                                                                value="{{ $option }}"
                                                                                @if ($key == 0) checked @endif>
                                                                            <label class="__text-12px ml-4"
                                                                                for="{{ $choice->name }}-{{ $option }}">{{ $option }}</label>
                                                                        </li>
                                                                    </div>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="product-quantity d-flex flex-wrap align-items-center __gap-15">
                                                    <div class="d-flex align-items-center">
                                                        <div class="product-description-label text-body mt-2">
                                                            {{ \App\CPU\translate('Quantity') }}:</div>
                                                        <div class="d-flex justify-content-center align-items-center __w-160px"
                                                            style="color: {{ $web_config['primary_color'] }}">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-number __p-10" type="button"
                                                                    data-type="minus" data-field="quantity"
                                                                    disabled="disabled"
                                                                    style="color: {{ $web_config['primary_color'] }}">
                                                                    -
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quantity"
                                                                class="form-control input-number text-center cart-qty-field"
                                                                placeholder="1"
                                                                value="{{ $product->minimum_order_qty ?? 1 }}"
                                                                product-type="{{ $product->product_type }}"
                                                                min="{{ $product->minimum_order_qty ?? 1 }}"
                                                                max="100">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-number __p-10" type="button"
                                                            product-type="{{ $product->product_type }}" data-type="plus"
                                                            data-field="quantity"
                                                            style="color: {{ $web_config['primary_color'] }}">
                                                                    +
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="chosen_price_div">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center {{ Session::get('direction') === 'rtl' ? 'ml-2' : 'mr-2' }}">
                                                            <div class="product-description-label">
                                                                <strong>{{ \App\CPU\translate('total_price') }}</strong> :
                                                            </div>
                                                            &nbsp; <strong id="chosen_price"></strong>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-wishlist-compare mt-4 d-flex" style="align-items: flex-start;">
                                                    {{-- <button type="button" onclick="addWishlist('{{ $product['id'] }}')"
                                                    class="btn __text-18px text-danger">
                                                    <i class="fa fa-heart-o " aria-hidden="true"></i>
                                                    <span
                                                        class="countWishlist-{{ $product['id'] }}">{{ $countWishlist }}</span>
                                                </button> --}}
                                                    <button class="magnetic-button" onclick="buy_now()" type="button" style="margin-left: 20px">
                                                        <span
                                                            class="string-limit">{{ \App\CPU\translate('buy_now') }}</span>
                                                    </button>
                                                    <button style="margin-left: 20px"
                                                        class="magnetic-button element-center btn-gap-{{ Session::get('direction') === 'rtl' ? 'left' : 'right' }}"
                                                        onclick="addToCart()" type="button">
                                                        <span
                                                            class="string-limit">{{ \App\CPU\translate('add_to_cart') }}</span>
                                                    </button>
                                                    <button type="button" onclick="addWishlist('{{ $product['id'] }}')"
                                                        class="btn __text-18px text-danger">
                                                        <i class="fa fa-heart-o diwana" aria-hidden="true" style="font-size: 25px;"></i>
                                                        <span
                                                            class="countWishlist-{{ $product['id'] }}">{{ $countWishlist }}</span>
                                                    </button>
                                                </div>
                                            </form>
                                            <div style="text-align:{{ Session::get('direction') === 'rtl' ? 'right' : 'left' }};"
                                                class="sharethis-inline-share-buttons"></div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-review-tabs-content">
                            <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                                <li role="presentation">
                                    <a class="active" id="description-tab" data-bs-toggle="pill" href="#description"
                                        role="tab" aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                <li role="presentation">
                                    <a id="product-details-tab" data-bs-toggle="pill" href="#product-details"
                                        role="tab" aria-controls="product-details" aria-selected="false">Product
                                        Details</a>
                                </li>
                                <li role="presentation">
                                    <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab"
                                        aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab-content" id="ReviewTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <div class="product-description">
                                        <ul>
                                            <li>{!! $product['details'] !!}</< /li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-details" role="tabpanel"
                                    aria-labelledby="product-details-tab">
                                    <div class="product-details">
                                        <div class="product-manufacturer">
                                            <a href="#/"><img
                                                    src="{{ asset('public/assets_ui') }}/img/shop/product-brand-01.jpg"
                                                    alt="Logo" /></a>
                                        </div>
                                        <div class="product-reference"><span>Reference</span>demo_1</div>
                                        <div class="product-quantities"><span>In stock</span>300 Items</div>
                                        <div class="product-data-sheet">
                                            <span>Data Sheet</span>
                                            <dl class="data-sheet">
                                                <dt class="name">Compositions</dt>
                                                <dd class="value">Cotton</dd>
                                                <dt class="name">Paper Type</dt>
                                                <dd class="value">Doted</dd>
                                                <dt class="name">Color</dt>
                                                <dd class="value">Black</dd>
                                                <dt class="name">Size</dt>
                                                <dd class="value">L</dd>
                                                <dt class="name">Frame Size</dt>
                                                <dd class="value">40x60cm</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                @php($reviews_of_product = App\Model\Review::where('product_id',$product->id)->paginate(2))
                                <!-- Reviews tab-->
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-comments-content">
                                        <div class="comment clearfix">
                                            <div class="comment-author">
                                                <span class="grade">Grade</span>
                                                <div class="star-content">
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star icon-color-gray"></i>
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="title">posthemes</span>
                                                    <span class="date">05/19/2021</span>
                                                </div>
                                                <div class="comment-details">
                                                    <span class="title">Demo</span>
                                                    <p class="desc">0 out of 1 people found this review useful.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment clearfix">
                                            <div class="comment-author">
                                                <span class="grade">Grade</span>
                                                <div class="star-content">
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star icon-color-gray"></i>
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="title">posthemes</span>
                                                    <span class="date">05/19/2021</span>
                                                </div>
                                                <div class="comment-details">
                                                    <span class="title">Demo</span>
                                                    <p class="desc">0 out of 1 people found this review useful.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment clearfix">
                                            <div class="comment-author">
                                                <span class="grade">Grade</span>
                                                <div class="star-content">
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star icon-color-gray"></i>
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="title">posthemes</span>
                                                    <span class="date">05/19/2021</span>
                                                </div>
                                                <div class="comment-details">
                                                    <span class="title">Demo</span>
                                                    <p class="desc">0 out of 1 people found this review useful.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment clearfix">
                                            <div class="comment-author">
                                                <span class="grade">Grade</span>
                                                <div class="star-content">
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star"></i>
                                                    <i class="ion-md-star icon-color-gray"></i>
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="title">posthemes</span>
                                                    <span class="date">05/19/2021</span>
                                                </div>
                                                <div class="comment-details">
                                                    <span class="title">Demo</span>
                                                    <p class="desc">0 out of 1 people found this review useful.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn-review">Write your review !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Single Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area">
            <div class="container pt-60">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">You Might Also Like</h2>
                            <div class="desc">
                                <p>Add Related products to weekly line up</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider owl-carousel owl-theme">
                            @if (count($relatedProducts)>0)
                            @foreach($relatedProducts as $key => $relatedProduct)

                                @include('web-views.partials._single-product',['product'=>$relatedProduct,'decimal_point_settings'=>$decimal_point_settings])

                            @endforeach
                            @else
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>{{\App\CPU\translate('similar')}} {{\App\CPU\translate('product_not_available')}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        {{-- <section class="product-area">
            <div class="container pt-0">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Other Products</h2>
                            <div class="desc">
                                <p>12 other products in the same category:</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider owl-carousel owl-theme">
                            @if (count($relatedProducts) > 0)
                                @foreach ($relatedProducts as $key => $relatedProduct)
                                    @include('web-views.partials._single-product', [
                                        'product' => $relatedProduct,
                                        'decimal_point_settings' => $decimal_point_settings,
                                    ])
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6>{{ \App\CPU\translate('similar') }}
                                                {{ \App\CPU\translate('product_not_available') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($relatedProducts as $t)
                                <div class="item">
                                    <!--== Start Shop Item ==-->
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="{{ route('product', [$t['slug']]) }}">
                                                    <img src="{{ asset('storage/app/public/product/thumbnail/' . $t->thumbnail) }}"
                                                        alt="Image-HasTech" style="height:323px;">
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
                                                    <li class="discount visually-hidden">-5%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="#">{{ $t->name }}</a></h4>
                                                    <div class="star-content">
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price-old">₹{{ $t->unit_price }}</span>
                                                        <span class="price text-black">₹{{ $t->purchase_price }}</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                    <a class="btn-product-add"
                                                        href="{{ route('product', [$t['slug']]) }}">Add to cart</a>
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
        </section> --}}
        <!--== End Product Area Wrapper ==-->
        @push('script')
            <script type="text/javascript">
                cartQuantityInitialize();
                getVariantPrice();
                $('#add-to-cart-form input').on('change', function() {
                    getVariantPrice();
                });

                function showInstaImage(link) {
                    $("#attachment-view").attr("src", link);
                    $('#show-modal-view').modal('toggle')
                }
            </script>
            <script>
                $(document).ready(function() {
                    load_review();
                });
                let load_review_count = 1;

                function load_review() {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "post",
                        url: '{{ route('review-list-product') }}',
                        data: {
                            product_id: {{ $product->id }},
                            offset: load_review_count
                        },
                        success: function(data) {
                            $('#product-review-list').append(data.productReview)
                            if (data.not_empty == 0 && load_review_count > 2) {
                                toastr.info('{{ \App\CPU\translate('no more review remain to load') }}', {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                                console.log('iff');
                            }
                        }
                    });
                    load_review_count++
                }
            </script>

            {{-- Messaging with shop seller --}}
            <script>
                $('#contact-seller').on('click', function(e) {
                    // $('#seller_details').css('height', '200px');
                    $('#seller_details').animate({
                        'height': '276px'
                    });
                    $('#msg-option').css('display', 'block');
                });
                $('#sendBtn').on('click', function(e) {
                    e.preventDefault();
                    let msgValue = $('#msg-option').find('textarea').val();
                    let data = {
                        message: msgValue,
                        shop_id: $('#msg-option').find('textarea').attr('shop-id'),
                        seller_id: $('.msg-option').find('.seller_id').attr('seller-id'),
                    }
                    if (msgValue != '') {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                        });

                        $.ajax({
                            type: "post",
                            url: '{{ route('messages_store') }}',
                            data: data,
                            success: function(respons) {
                                console.log('send successfully');
                            }
                        });
                        $('#chatInputBox').val('');
                        $('#msg-option').css('display', 'none');
                        $('#contact-seller').find('.contact').attr('disabled', '');
                        $('#seller_details').animate({
                            'height': '125px'
                        });
                        $('#go_to_chatbox').css('display', 'block');
                    } else {
                        console.log('say something');
                    }
                });
                $('#cancelBtn').on('click', function(e) {
                    e.preventDefault();
                    $('#seller_details').animate({
                        'height': '114px'
                    });
                    $('#msg-option').css('display', 'none');
                });
            </script>

            <script type="text/javascript"
                src="https://platform-api.sharethis.com/js/sharethis.js#property=5f55f75bde227f0012147049&product=sticky-share-buttons"
                async="async"></script>
        @endpush

    @stop
