@php($overallRating = \App\CPU\ProductManager::get_overall_rating($product->reviews))

<div class="item">
    <!--== Start Shop Item ==-->
    <div class="product-item">
        <div class="inner-content">
            <div class="product-thumb">
                <a href="{{ route('product', [$product['slug']]) }}">
                    <img src="{{ asset('storage/app/public/product/thumbnail/' . $product->thumbnail) }}"
                        style="height:323px;width:323px" alt="Image-HasTech">
                    <!--<img class="second-image" src="{{ asset('public/assets_ui') }}/img/shop/01-h1.jpg" alt="Image-HasTech">-->
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
                    <h4 class="title"><a href="{{ route('product', [$product['slug']]) }}">{{ $product->name }}</a>
                    </h4>
                    <div class="star-content">
                        <i class="ion-md-star"></i>
                        <i class="ion-md-star"></i>
                        <i class="ion-md-star"></i>
                        <i class="ion-md-star"></i>
                        <i class="ion-md-star"></i>
                    </div>
                    <div class="prices">
                        <span class="price-old">₹{{ $product->unit_price }}</span>
                        <span class="price">₹{{ $product->purchase_price }}</span>
                    </div>
                </div>
                <div class="product-footer">
                    <a class="btn-product-add" href="{{ route('product', [$product['slug']]) }}">Add
                        to cart</a>
                    <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                </div>
            </div>
        </div>
    </div>
    <!--== End Shop Item ==-->
</div>
