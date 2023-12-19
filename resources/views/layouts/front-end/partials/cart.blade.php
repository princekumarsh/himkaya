<style>
    #rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px;
    width: 200px;
    height: 150px;
    }
</style>
<a class="shop-button" href="#">
    <i class="icon-bag icon"></i>
    <sup class="shop-count">@php($cart=\App\CPU\CartManager::get_cart())
    {{$cart->count()}}</sup>
    <span class="cart-total">{{\App\CPU\Helpers::currency_converter(\App\CPU\CartManager::cart_total_applied_discount(\App\CPU\CartManager::get_cart()))}}</span>
</a>
<div class="popup-cart-content">
    
    @if($cart->count() > 0)
    <ul class="popup-product-list">
        @php($sub_total=0)
        @php($total_tax=0)
        @foreach($cart as $cartItem)
        <li class="product-list-item">
            <a href="{{route('product',$cartItem['slug'])}}">
                <img 
                onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$cartItem['thumbnail']}}" alt="Image-HasTech">
                <span class="product-title">{{Str::limit($cartItem['name'],30)}}</span>
                <span class="product-quantity">{{$cartItem['quantity']}}x</span>
            </a>
            <span class="product-price">{{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
            <a class="product-close" href="#" onclick="removeFromCart({{ $cartItem['id'] }})"><i class="la la-close"></i></a>
        </li>
        @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
        @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
        @endforeach
    </ul>
    <div class="price-content">
        {{-- <div class="cart-subtotals">
            <div class="products">
                <span class="label">Subtotal</span>
                <span class="value">{{\App\CPU\Helpers::currency_converter($sub_total)}}</span>
            </div>
            <div class="products">
                <span class="label">Shipping</span>
                <span class="value">Free</span>
            </div>
        </div> --}}
        <div class="cart-total">
            <span class="label">Total</span>
            <span class="value">{{\App\CPU\Helpers::currency_converter($sub_total)}}</span>
        </div>
    </div>
    <div class="checkout ">
        <a href="{{ route('checkout-details') }}" class="btn-Checkout">{{\App\CPU\translate('Checkout')}}</a>
        <a href="{{route('shop-cart')}}" class="btn btn-success rcorners2 w-100  mt-2">{{\App\CPU\translate('Expand cart')}}</a>
    </div>
    @else
    <div class="widget-cart-item">
        <h6 class="text-danger text-center m-0"><i class="fa fa-cart-arrow-down"></i> {{\App\CPU\translate('Empty')}}
            {{\App\CPU\translate('Cart')}}
        </h6>
    </div>
    @endif
</div>