@php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))

{{-- <div class="product-col2-slider owl-carousel owl-theme"> --}}
    @if ($product->discount > 0)
        <!--== Start Shop Item ==-->
        <div class="product-item">
            <div class="inner-content">
                <div class="product-thumb">
                    <a href="{{ route('product', [$product->slug]) }}">
                        <img src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                        
                        onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'" alt="Image-HasTech">
                        <img class="second-image" src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                        onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'" alt="Image-HasTech">
                    </a>
                    <div class="product-action">
                        <div class="addto-wrap">
                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                <i class="icon-heart icon"></i>
                            </a>
                            {{-- <a class="add-compare" href="compare.html" title="Add to compare">
                                <i class="icon-shuffle icon"></i>
                            </a> --}}
                        </div>
                    </div>
                    <ul class="product-flag">
                        <li class="new">New</li>
                        <li class="discount visually-hidden">@if ($product->discount_type == 'percent')
                        {{round($product->discount, (!empty($decimal_point_settings) ? $decimal_point_settings: 0))}}%
                        @elseif($product->discount_type =='flat')
                        {{\App\CPU\Helpers::currency_converter($product->discount)}}
                        @endif
                        {{\App\CPU\translate('off')}}</li>
                    </ul>
                </div>
                <div class="product-desc">
                    <div class="product-info">
                        <h4 class="title"><a href="{{ route('product', [$product->slug]) }}">{{ Str::limit($product['name'],
                                23) }}</a>
                        </h4>
                        <div class="star-content">
                            <i class="ion-md-star"></i>
                            <i class="ion-md-star"></i>
                            <i class="ion-md-star"></i>
                            <i class="ion-md-star"></i>
                            <i class="ion-md-star icon-color-gray"></i>
                        </div>
                        <div class="prices">
                            <span class="price-old">{{\App\CPU\Helpers::currency_converter(
                                $product->unit_price
                                )}}</span>
                            <span class="price">{{\App\CPU\Helpers::currency_converter(
                                $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price))
                                )}}</span>
                        </div>
                    </div>
                    <div class="product-footer">
                       <a class="btn-product-add" href="{{route('product',$product->slug)}}">Add to
                        cart</a>
                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Shop Item ==-->
    @endif
{{-- </div> --}}
