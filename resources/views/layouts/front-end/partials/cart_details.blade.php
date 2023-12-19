<div class="shopping-cart-wrap">
    <div class="row">
        <div class="col-lg-8">
            <div class="shopping-cart-content">
                <h4 class="title">{{ \App\CPU\translate('shopping_cart')}}</h4>
                @php($shippingMethod=\App\CPU\Helpers::get_business_settings('shipping_method'))
                @php($cart=\App\Model\Cart::where(['customer_id' =>
                auth('customer')->id()])->get()->groupBy('cart_group_id'))

                @foreach($cart as $group_key=>$group)
                <?php
                    $physical_product = false;
                    foreach ($group as $row) {
                        if ($row->product_type == 'physical') {
                            $physical_product = true;
                        }
                    }
                ?>
                @foreach($group as $cart_key=>$cartItem)
                <div class="shopping-cart-item">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="product-thumb">
                                <img style="width: 50%"
                                    onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                    src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$cartItem['thumbnail']}}"
                                    alt="Has-Image">
                            </div>
                        </div>
                        <div class="col-8 col-md-4">
                            <div class="row">
                                <div class="product-content col-md-7">
                                    <h5 class="title"><a href="{{route('product',$cartItem['slug'])}}">
                                            {{$cartItem['name']}}</a></h5>
                                    @foreach(json_decode($cartItem['variations'],true) as $key1 =>$variation)
                                    <div class="text-muted mr-2">
                                        <span class="{{Session::get('direction') === " rtl" ? 'ml-2' : 'mr-2' }} __text-12px">
                                            <b>{{$key1}}</b> : {{$variation}}</span>

                                    </div>
                                    @endforeach

                                </div>
                                {{-- <div class="col-4"> --}}
                                    <div class="col-md-5">
                                        <h6 class="product-price text-accent">{{ \App\CPU\Helpers::currency_converter($cartItem['price']-$cartItem['discount']) }}</h6>
                                        @if($cartItem['discount'] > 0)
                                            <strike class="__inline-18">
                                                {{\App\CPU\Helpers::currency_converter($cartItem['price'])}}
                                            </strike>
                                        @endif
                                    </div>

                                {{-- </div> --}}
                            </div>

                        </div>

                        <div class="col-6 offset-4 offset-md-0 col-md-5">
                            <div class="product-info">
                                <div class="row">
                                    <div class="col-md-10 col-xs-6">
                                        <div class="row">
                                            @php($minimum_order=\App\Model\Product::select('minimum_order_qty')->find($cartItem['product_id']))
                                            <div class="col-md-6 col-xs-6 qty">
                                                <div class="product-quick-qty">
                                                    <div class="pro-qty">
                                                        <input class="" type="number"
                                                            id="cartQuantity{{$cartItem['id']}}"
                                                            onchange="updateCartQuantity('{{ $minimum_order->minimum_order_qty }}', '{{$cartItem['id']}}')"
                                                            name="quantity[{{ $cartItem['id'] }}]"
                                                            min="{{ $minimum_order->minimum_order_qty ?? 1 }}"
                                                            value="{{$cartItem['quantity']}}"
                                                            style="border: 1px solid #c5b9b9;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xs-2 price text-accent">
                                                <h6 class="product-price text-accent">{{
                                                    \App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                    }}</h6>
                                            </div>
                                            {{-- @if($cartItem['discount'] > 0)
                                            <strike class="__inline-18">
                                                {{\App\CPU\Helpers::currency_converter($cartItem['price'])}}
                                            </strike>
                                            @endif --}}
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 text-end">
                                        <div class="product-close"><a href="#"
                                                onclick="removeFromCart({{ $cartItem['id'] }})"><i
                                                    class="ion-md-trash"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @endforeach
                @if($shippingMethod=='inhouse_shipping')
                <?php
                                        $admin_shipping = \App\Model\ShippingType::where('seller_id', 0)->first();
                                        $shipping_type = isset($admin_shipping) == true ? $admin_shipping->shipping_type : 'order_wise';
                                        ?>
                @if ($shipping_type == 'order_wise' && $physical_product)
                @php($shippings=\App\CPU\Helpers::get_shipping_methods(1,'admin'))
                @php($choosen_shipping=\App\Model\CartShipping::where(['cart_group_id'=>$cartItem['cart_group_id']])->first())

                @if(isset($choosen_shipping)==false)
                @php($choosen_shipping['shipping_method_id']=0)
                @endif
                <div class="row">
                    <div class="col-12">
                        <select class="form-control" onchange="set_shipping_id(this.value,'all_cart_group')">
                            <option>{{\App\CPU\translate('choose_shipping_method')}}</option>
                            @foreach($shippings as $shipping)
                            <option value="{{$shipping['id']}}"
                                {{$choosen_shipping['shipping_method_id']==$shipping['id']?'selected':''}}>
                                {{$shipping['title'].' ( '.$shipping['duration'].' )
                                '.\App\CPU\Helpers::currency_converter($shipping['cost'])}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
                @endif

                <div class="d-flex btn-full-max-sm align-items-center __gap-6px flex-wrap justify-content-between">
                    <a href="{{route('home')}}" class="btn btn-primary">
                        <i class="fa fa-{{Session::get('direction') === " rtl" ? 'forward' : 'backward' }} px-1"></i>
                        {{\App\CPU\translate('continue_shopping')}}
                    </a>
                    <a onclick="checkout()" class="btn btn-primary pull-{{Session::get('direction') === " rtl" ? 'left' : 'right' }}">
                        {{\App\CPU\translate('checkout')}}
                        <i class="fa fa-{{Session::get('direction') === " rtl" ? 'backward' : 'forward' }} px-1"></i>
                    </a>
                </div>
            </div>
        </div>
        @include('web-views.partials._order-summary')


    </div>
</div>



<script>
    cartQuantityInitialize();

    function set_shipping_id(id, cart_group_id) {
        $.get({
            url: '{{url('/')}}/customer/set-shipping-method',
            dataType: 'json',
            data: {
                id: id,
                cart_group_id: cart_group_id
            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                location.reload();
            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }
</script>
<script>
    function checkout() {
        let order_note = $('#order_note').val();
        //console.log(order_note);
        $.post({
            url: "{{route('order_note')}}",
            data: {
                _token: '{{csrf_token()}}',
                order_note: order_note,

            },
            beforeSend: function () {
                $('#loading').show();
            },
            success: function (data) {
                let url = "{{ route('checkout-details') }}";
                location.href = url;

            },
            complete: function () {
                $('#loading').hide();
            },
        });
    }

</script>
