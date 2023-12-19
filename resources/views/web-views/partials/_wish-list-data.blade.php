<style>
    /*.__img-full {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
        vertical-align: middle;
    }*/
    padding-top: 5%;
</style>
@if($wishlists->count()>0)
    @foreach($wishlists as $wishlist)
        @php($product = $wishlist->product_full_info)
        @if( $wishlist->product_full_info)
            <div class="card __card __card-mobile-340 mb-3">
                <div class="product">
                    <div class="card">
                        <div class="row">
                            <div class="wishlist_product_img col-lg-3 col-md-3 col-sm-4 text-center">
                                <a href="{{route('product',$product->slug)}}" class="d-block h-100">
                                    <img class="__img-full" src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                    onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'" alt="wishlist"
                                         style="padding: 8%">
                                </a>
                            </div>
                            <div class="wishlist_product_desc align-self-center col-lg-6 col-sm-6 col-md-6 text-center">
                                <div class="font-name">
                                    <a href="{{route('product',$product['slug'])}}">{{$product['name']}}</a>
                                </div>
                                @if($brand_setting)
                                <span class="sellerName" style="color: black;font-weight: 500"> {{\App\CPU\translate('Brand')}} :{{$product->brand?$product->brand['name']:''}} </span>
                                @endif

                                <div class="">
                                    @if($product->discount > 0)
                                    <strike style="color: #E96A6A;" class="{{Session::get('direction') === "rtl" ? 'ml-1' : 'mr-3'}}">
                                        {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                    </strike>
                                @endif
                                <span
                                    class="font-weight-bold amount">{{\App\CPU\Helpers::get_price_range($product) }}</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-2 col-md-3 text-center align-self-center" >

                            <a href="#" onclick="removeWishlist('{{$product['id']}}')" class="wishlist_product_icon" style="">
                               <i class="la la-trash" style="font-size: 30px"></i>
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <span class="badge badge-danger">{{\App\CPU\translate('item_removed')}}</span>
        @endif
    @endforeach
@else
    <center>
        <h6 class="text-muted">
            {{\App\CPU\translate('No data found')}}.
        </h6>
    </center>
@endif
