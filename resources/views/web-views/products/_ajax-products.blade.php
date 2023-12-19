@php($decimal_point_settings = \App\CPU\Helpers::get_business_settings('decimal_point_settings'))
<section class="product-area">
    <div class="container pb-lg-60">
        <div class="row">
            <div class="col-12">
                <div class="product-tabs-content-wrap">
                    <div class="tab-content product-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="makeup" role="tabpanel" aria-labelledby="makeup-tab">
                            <div class="row">

                                    {{-- <div class="product-slider "> --}}
                                        @foreach($products as $product)
                                        <div class="col-lg-4">
                                            @if(!empty($product['product_id']))
                                            @php($product=$product->product)
                                            @endif


                                            @if(!empty($product))
                                            @include('web-views.partials._filter-single-product',['p'=>$product,'decimal_point_settings'=>$decimal_point_settings])
                                            @endif
                                            </div>
                                        @endforeach
                                    {{-- </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


