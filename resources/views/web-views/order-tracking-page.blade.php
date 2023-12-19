@extends('layouts.front-end.app')

@section('title',\App\CPU\translate('Track Order Result'))

@push('css_or_js')
    <meta property="og:image" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="og:title" content="{{$web_config['name']->value}} "/>
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:description" content="{!! substr($web_config['about']->value,0,100) !!}">

    <meta property="twitter:card" content="{{asset('storage/app/public/company')}}/{{$web_config['web_logo']->value}}"/>
    <meta property="twitter:title" content="{{$web_config['name']->value}}"/>
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta property="twitter:description" content="{!! substr($web_config['about']->value,0,100) !!}">
    <link rel="stylesheet" media="screen"
          href="{{asset('public/assets/front-end')}}/vendor/nouislider/distribute/nouislider.min.css"/>
    <style>
       .closet{
            float: {{Session::get('direction') === "rtl" ? 'left' : 'right'}};
        }

    </style>
@endpush

@section('content')
<style>
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
              border: 1px solid #ec6b81;
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
            .magnetic-button:hover {
              color: #fff;
            }
            .magnetic-button:hover:after {
              left: 0;
              right: auto;
              visibility: visible;
              width: 100%;
            }
</style>
    <!-- Page Content-->
    <div class="container rtl py-5" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="container">
        <div class="row">
            @include('web-views.partials._profile-aside')
            
            
            <!-- <div class="col-sm-3 ">
                
            </div> -->
            <section class="col-lg-6 col-md-6">
                <h4 class="text-center text-capitalize">{{\App\CPU\translate('track_order')}}</h4>
                <div class="card __card">
                <div class="card-header border-0">
                    <form action="{{route('track-order.result')}}" type="submit" method="post" class="p-3">
                        @csrf

                        @if(session()->has('Error'))
                            <div class="alert alert-danger alert-block">
                                <span type="" class="closet __closet" data-dismiss="alert">×</span>
                                <strong>{{ session()->get('Error') }}</strong>
                            </div>
                        @endif

                        <div class="form-group mb-4">
                            <input class="form-control prepended-form-control" type="text" name="order_id"
                                placeholder="{{\App\CPU\translate('order_id')}}" required>
                        </div>
                        <div class="form-group mb-4">
                            <input class="form-control prepended-form-control" type="text" name="phone_number"
                                placeholder="{{\App\CPU\translate('your_phone_number')}}" required>
                        </div>
                        <div class="text-right">
                            <button class="magnetic-button" type="submit" name="trackOrder">{{\App\CPU\translate('track_order')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            </section>
            
            <!-- <div class=" col-sm-3">
                
            </div> -->
        </div>
        </div>
    </div>

@endsection


@push('script')
    <script src="{{asset('public/assets/front-end')}}/vendor/nouislider/distribute/nouislider.min.js">
    </script>
@endpush
