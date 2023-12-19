<div class="col-lg-4">
    @php($shippingMethod=\App\CPU\Helpers::get_business_settings('shipping_method'))
    @php($sub_total=0)
    @php($total_tax=0)
    @php($total_shipping_cost=0)
    @php($order_wise_shipping_discount=\App\CPU\CartManager::order_wise_shipping_discount())
    @php($total_discount_on_product=0)
    @php($cart=\App\CPU\CartManager::get_cart())
    @php($cart_group_ids=\App\CPU\CartManager::get_cart_group_ids())
    @php($shipping_cost=\App\CPU\CartManager::get_shipping_cost())
    @if($cart->count() > 0)
    @foreach($cart as $key => $cartItem)
    @php($sub_total+=$cartItem['price']*$cartItem['quantity'])
    @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
    @php($total_discount_on_product+=$cartItem['discount']*$cartItem['quantity'])
    @endforeach

    @php($total_shipping_cost=$shipping_cost)
    @else
    <span>{{\App\CPU\translate('empty_cart')}}</span>
    @endif
    <div class="shopping-cart-summary mt-md-70">
        <div class="cart-detailed-totals">
            <div class="card-block">
                <div class="card-block-item">
                    <span class="label">@php($cart=\App\CPU\CartManager::get_cart())
                        {{$cart->count()}} items</span>
                    <span class="value">{{\App\CPU\Helpers::currency_converter($sub_total)}}</span>
                </div>
                <div class="card-block-item">
                    <span class="label">{{\App\CPU\translate('tax')}}</span>
                    <span class="value">{{\App\CPU\Helpers::currency_converter($total_tax)}}</span>
                </div>
                <div class="card-block-item">
                    <span class="label">{{\App\CPU\translate('shipping')}}</span>
                    <span class="value">{{\App\CPU\Helpers::currency_converter($total_shipping_cost)}}</span>
                </div>
                <div class="card-block-item">
                    <span class="label">{{\App\CPU\translate('discount_on_product')}}</span>
                    <span class="value">{{\App\CPU\Helpers::currency_converter($total_discount_on_product)}}</span>
                </div>
            </div>
            @if(session()->has('coupon_discount'))
            @php($coupon_discount = session()->has('coupon_discount')?session('coupon_discount'):0)
            <div class="card-block">
                <div class="card-block-item">
                    <span class="label">{{\App\CPU\translate('coupon_discount')}}</span>
                    <span class="value">-
                        {{\App\CPU\Helpers::currency_converter($coupon_discount+$order_wise_shipping_discount)}}</span>
                </div>
            </div>

            @php($coupon_dis=session('coupon_discount'))
            @else

            <div class="card-block">
                <div class="card-block-item">
                    <form class="needs-validation" action="javascript:" method="post" novalidate id="coupon-code-ajax">

                        <span class="label"><input class="form-control " type="text" name="code"
                                placeholder="{{\App\CPU\translate('Coupon code')}}" required></span>

                        <button class="btn btn-primary " type="button" style="margin-top: 10px; margin-left: 286px;"
                                onclick="couponCode()">{{\App\CPU\translate('apply_code')}}
                            </button>
                    </form>

                </div>
            </div>
            @php($coupon_dis=0)
            @endif
            <div class="separator"></div>
            <div class="card-block">
                <div class="card-block-item">
                    <span class="label">{{\App\CPU\translate('total')}}</span>
                    <span class="value">{{\App\CPU\Helpers::currency_converter($sub_total+$total_tax+$total_shipping_cost-$coupon_dis-$total_discount_on_product-$order_wise_shipping_discount)}}</span>
                </div>
            </div>
            <div class="separator"></div>
        </div>
        <div class="checkout-shopping">
            <a class="btn-checkout" href="{{route('checkout-details')}}">Proceed to checkout</a>
        </div>
    </div>
    <div class="block-reassurance">
        <ul>
            <li>
                <img src="{{asset('public/assets_ui')}}/img/shop/cart/verified-user.png" alt="Has-Image">
                <span>Security Policy (Edit With Customer Reassurance Module)</span>
            </li>
            <li>
                <img src="{{asset('public/assets_ui')}}/img/shop/cart/local-shipping.png" alt="Has-Image">
                <span>Delivery Policy (Edit With Customer Reassurance Module)</span>
            </li>
            <li>
                <img src="{{asset('public/assets_ui')}}/img/shop/cart/swap-horiz.png" alt="Has-Image">
                <span>Return Policy (Edit With Customer Reassurance Module)</span>
            </li>
        </ul>
    </div>
</div>
