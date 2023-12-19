@extends('layouts.front-end.app')
@section('title',\App\CPU\translate('My Shopping Cart'))
@section('css_section')
{{-- <link rel="stylesheet" href="{{asset('public/assets/front-end')}}/css/shop-cart.css" /> --}}
@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container" data-padding-top="62">
        @include('layouts.front-end.partials.cart_details')
       
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
  </main>
@endsection

@push('script')
<script>
    cartQuantityInitialize();
</script>
@endpush