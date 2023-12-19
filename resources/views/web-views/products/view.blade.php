@extends('layouts.front-end.app')

@section('title',\App\CPU\translate($data['data_from']).' '.\App\CPU\translate('products'))



@section('content')
<style>

    @media screen and (min-width: 992px){
        .filter-icon{
            display: none;
            color: red;
        }
    }
    @media screen and (max-width: 991px){
        .filter-icon{
            text-align: left;
            position: absolute;
            margin-top: 13px;
            margin-left: 2%;
            cursor: pointer;
        }
        .filter-lg-data-none{
            display: none;
        }
        #dis-sm-none{
            display: none;
        }
    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 999;
      top: 0;
      left: 0;
      background-color: #fff;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
     
    }
    /*.sidenav:hover{
        padding-top: 19px;
    }*/

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

</style>

@php($decimal_point_settings = \App\CPU\Helpers::get_business_settings('decimal_point_settings'))
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area"> --}}
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <nav class="breadcrumb-area">
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                                <li>{{\App\CPU\translate(str_replace('_',' ',$data['data_from']))}}
                                    {{\App\CPU\translate('products')}} {{ isset($brand_name)
                                    ? '('.$brand_name.')' : ''}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        {{--
    </div> --}}
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
        <div class="container pb-55">
            <div class="row">
                <div class="col-lg-3 order-1 order-lg-1">
                    <!--== Start Sidebar Area ==-->
                    <div class="shop-sidebar-wrapper">
                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item">
                            <h4 class="sidebar-title mb-45" id="dis-sm-none">Filter By</h4>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">&times;</a>
                          <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40">
                            <h4 style="padding-left: 15px;" class="small-title">{{\App\CPU\translate('categories')}}</h4>
                            <div class="sidebar-body" style="padding-left: 15px;">
                                <div class="sidebar-menu-list">
                                    @php($categories=\App\CPU\CategoryManager::parents())
                                    @foreach($categories as $category)

                                    <div class="list-item" onclick="location.href='{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}'">
                                        <label class="form-check-label" for="list4">{{$category['name']}}</label>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40">
                            <h4 style="padding-left: 15px;" class="small-title">{{\App\CPU\translate('brands')}}</h4>
                            {{-- <div class="__cate-side-price pb-0">
                                <div class="input-group-overlay input-group-sm">
                                    <input style="{{Session::get('direction') === " rtl" ? 'padding-right: 32px;' : '' }}"
                                        placeholder="{{__('Search by brands')}}"
                                        class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control" type="text"
                                        id="search-brand">
                                    <div class="input-group-append-overlay">
                                        <span class="input-group-text">
                                            search
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="sidebar-body">

                                <div class="sidebar-menu-list" style="padding-left: 15px;">
                                    {{-- <div class="list-item">
                                        <input style="{{Session::get('direction') === " rtl" ? 'padding-right: 32px;' : '' }}"
                                            placeholder="{{__('Search by brands')}}"
                                            class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control" type="text"
                                            id="search-brand">
                                    </div> --}}
                                    @foreach(\App\CPU\BrandManager::get_active_brands() as $brand)
                                    <div class="list-item" onclick="location.href='{{route('products',['id'=> $brand['id'],'data_from'=>'brand','page'=>1])}}'">
                                        {{-- <input class="form-check-input" type="checkbox" value="12" id="list12"> --}}
                                        <label class="form-check-label" for="list12">{{ $brand['name'] }} @if($brand['brand_products_count'] > 0 )

                                                ({{ $brand['brand_products_count'] }})

                                        @endif</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40 ml-4">
                            <h4 style="padding-left: 15px;" class="small-title">{{\App\CPU\translate('Price')}}</h4>
                            <div class="sidebar-body" style="padding-left: 15px;">
                                <div class="sidebar-price-range">
                                    <div class="d-flex justify-content-between align-items-center __cate-side-price">
                                        <div class="__w-35p">
                                            <input class="bg-white cz-filter-search form-control form-control-sm appended-form-control" type="number"
                                                value="0" min="0" max="1000000" id="min_price" placeholder="Min">
                                        </div>
                                        <div class="__w-10p">
                                            <p class="m-0">{{\App\CPU\translate('to')}}</p>
                                        </div>
                                        <div class="__w-35p">
                                            <input value="100" min="100" max="1000000"
                                                class="bg-white cz-filter-search form-control form-control-sm appended-form-control" type="number"
                                                id="max_price" placeholder="Max">
                                        </div>
                                        {{-- <a href=""></a> --}}
                                        <a href="#" onclick="searchByPrice()"  class="icon icon-search btn-quick-view icon-magnifier"></a>
                                        {{-- <div class="d-flex justify-content-center align-items-center __number-filter-btn">

                                            <a class="icon icon-search icon-magnifier" onclick="searchByPrice()">
                                                <i class="icon icon-search icon-magnifier"></i>
                                            </a>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->
                        </div>

                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40 filter-lg-data-none">
                            <h4 class="small-title">{{\App\CPU\translate('categories')}}</h4>
                            <div class="sidebar-body">
                                <div class="sidebar-menu-list">
                                    @php($categories=\App\CPU\CategoryManager::parents())
                                    @foreach($categories as $category)

                                    <div class="list-item" onclick="location.href='{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}'">
                                        <label class="form-check-label" for="list4">{{$category['name']}}</label>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40 filter-lg-data-none">
                            <h4 class="small-title">{{\App\CPU\translate('brands')}}</h4>
                            {{-- <div class="__cate-side-price pb-0">
                                <div class="input-group-overlay input-group-sm">
                                    <input style="{{Session::get('direction') === " rtl" ? 'padding-right: 32px;' : '' }}"
                                        placeholder="{{__('Search by brands')}}"
                                        class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control" type="text"
                                        id="search-brand">
                                    <div class="input-group-append-overlay">
                                        <span class="input-group-text">
                                            search
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="sidebar-body">

                                <div class="sidebar-menu-list">
                                    {{-- <div class="list-item">
                                        <input style="{{Session::get('direction') === " rtl" ? 'padding-right: 32px;' : '' }}"
                                            placeholder="{{__('Search by brands')}}"
                                            class="__inline-38 cz-filter-search form-control form-control-sm appended-form-control" type="text"
                                            id="search-brand">
                                    </div> --}}
                                    @foreach(\App\CPU\BrandManager::get_active_brands() as $brand)
                                    <div class="list-item" onclick="location.href='{{route('products',['id'=> $brand['id'],'data_from'=>'brand','page'=>1])}}'">
                                        {{-- <input class="form-check-input" type="checkbox" value="12" id="list12"> --}}
                                        <label class="form-check-label" for="list12">{{ $brand['name'] }} @if($brand['brand_products_count'] > 0 )

                                                ({{ $brand['brand_products_count'] }})

                                        @endif</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <!--== Start Sidebar Item ==-->
                        <div class="sidebar-item mb-40 filter-lg-data-none">
                            <h4 class="small-title">{{\App\CPU\translate('Price')}}</h4>
                            <div class="sidebar-body">
                                <div class="sidebar-price-range">
                                    <div class="d-flex justify-content-between align-items-center __cate-side-price">
                                        <div class="__w-35p">
                                            <input class="bg-white cz-filter-search form-control form-control-sm appended-form-control" type="number"
                                                value="0" min="0" max="1000000" id="min_price" placeholder="Min">
                                        </div>
                                        <div class="__w-10p">
                                            <p class="m-0">{{\App\CPU\translate('to')}}</p>
                                        </div>
                                        <div class="__w-35p">
                                            <input value="100" min="100" max="1000000"
                                                class="bg-white cz-filter-search form-control form-control-sm appended-form-control" type="number"
                                                id="max_price" placeholder="Max">
                                        </div>
                                        {{-- <a href=""></a> --}}
                                        <a href="#" onclick="searchByPrice()"  class="icon icon-search btn-quick-view icon-magnifier"></a>
                                        {{-- <div class="d-flex justify-content-center align-items-center __number-filter-btn">

                                            <a class="icon icon-search icon-magnifier" onclick="searchByPrice()">
                                                <i class="icon icon-search icon-magnifier"></i>
                                            </a>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Sidebar Item ==-->

                        <!--== Start Sidebar Item ==-->
                        {{-- <div class="sidebar-item">
                            <h4 class="sidebar-title mb-25">Tags</h4>
                            <div class="sidebar-body">
                                <div class="product-categories">
                                    <ul>
                                        <li><a href="#/">Makeup</a></li>
                                        <li><a href="#/">Health Care</a></li>
                                        <li><a href="#/"> Skin Care</a></li>
                                        <li><a href="#/">Nail Art & Tools</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!--== End Sidebar Item ==-->
                    </div>
                    <!--== End Sidebar Area ==-->
                </div>
                 <a href="javascript:void(0)" onclick="openFilter()"><i class="fa fa-filter filter-icon" style="font-size:36px"></i></a>
                
                <div class="col-lg-9 order-0 order-lg-2">
                    <!--== Start Shop Area ==-->
                    <div class="product-header-wrap">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-6">

                                <div class="total-products">
                                    <p class="hidden-sm-down">{{$products->total()}} {{\App\CPU\translate('items
                                        found')}}</p>
                                </div>
                            </div>

                            <div class="col-8 col-sm-8 col-md-6">
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="sort-by-text">

                                            <span>{{\App\CPU\translate('sort_by')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="sort-by-form">
                                            <form id="search-form" action="{{ route('products') }}" method="GET">
                                                <input hidden name="data_from" value="{{$data['data_from']}}">

                                                <select class="__inline-44 form-select" onchange="filter(this.value)">
                                                    <option value="latest">{{\App\CPU\translate('Latest')}}</option>
                                                    <option value="low-high">{{\App\CPU\translate('Low_to_High')}}
                                                        {{\App\CPU\translate('Price')}} </option>
                                                    <option value="high-low">{{\App\CPU\translate('High_to_Low')}}
                                                        {{\App\CPU\translate('Price')}}</option>
                                                    <option value="a-z">{{\App\CPU\translate('A_to_Z')}}
                                                        {{\App\CPU\translate('Order')}}</option>
                                                    <option value="z-a">{{\App\CPU\translate('Z_to_A')}}
                                                        {{\App\CPU\translate('Order')}}</option>
                                                </select>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($products) > 0)
                    {{-- <div class="row " id="ajax-products">
                        @include('web-views.products._ajax-products',['products'=>$products,'decimal_point_settings'=>$decimal_point_settings])
                    </div> --}}
                    <div class="product-body-wrap" id="ajax-products">
                        @include('web-views.products._ajax-products',['products'=>$products,'decimal_point_settings'=>$decimal_point_settings])

                    </div>
                    @else
                    <div class="text-center pt-5">
                        <h2>{{\App\CPU\translate('No Product Found')}}</h2>
                    </div>
                    @endif
                    <!--== End Shop Area ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->


</main>
@endsection

@push('script')
<script>
    function openFilter() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeFilter() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.body.style.backgroundColor = "white";
    }
    function openNav() {
            document.getElementById("mySidepanel").style.width = "70%";
            document.getElementById("mySidepanel").style.height = "100vh";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        function filter(value) {
           // alert(value)
            $.get({
                url: '{{url('/')}}/products',
                data: {
                    id: '{{$data['id']}}',
                    name: '{{$data['name']}}',
                    data_from: '{{$data['data_from']}}',
                    min_price: '{{$data['min_price']}}',
                    max_price: '{{$data['max_price']}}',
                    sort_by: value
                },
                dataType: 'json',
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    $('#ajax-products').html(response.view);
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }

        function searchByPrice() {
            let min = $('#min_price').val();
            let max = $('#max_price').val();
            $.get({
                url: '{{url('/')}}/products',
                data: {
                    id: '{{$data['id']}}',
                    name: '{{$data['name']}}',
                    data_from: '{{$data['data_from']}}',
                    sort_by: '{{$data['sort_by']}}',
                    min_price: min,
                    max_price: max,
                },
                dataType: 'json',
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (response) {
                    $('#ajax-products').html(response.view);
                    $('#paginator-ajax').html(response.paginator);
                    console.log(response.total_product);
                    $('#price-filter-count').text(response.total_product + ' {{\App\CPU\translate('items found')}}')
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }

        $('#searchByFilterValue, #searchByFilterValue-m').change(function () {
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });

        $("#search-brand").on("keyup", function () {
            var value = this.value.toLowerCase().trim();
            $("#lista1 div>li").show().filter(function () {
                return $(this).text().toLowerCase().trim().indexOf(value) == -1;
            }).hide();
        });
</script>


@endpush
