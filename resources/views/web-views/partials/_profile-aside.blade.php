<style>
    .sidebar {
      margin: 0;
      padding: 0;
      width: 90%;
      background-color: #f1f1f1;
      height: 100%;
      overflow: auto;
      border-radius: 10px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    }

    .sidebar div div a {
      display: block;
      color: black;
      padding: 12px;
      text-decoration: none;
    }
     
    /*.sidebar a.active {
      background-color: green;
      color: white;
    }*/

    .sidebar a:hover:not(.active) {
      background-color: #ec6b81;
      color: #fff;
    }
</style>

<div class="col-lg-3 col-md-3 pr-lg-3 pr-xl-4 mb-4">
    <!--Price Sidebar-->
    <div class="sidebar">
        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{Request::is('account-oder*') || Request::is('account-order-details*') ? 'active-menu' :''}}" href="{{route('account-oder') }} " style="color: black;margin-left:7%;font-weight:600;font-size:16px"><i class="fa fa-shopping-bag" style="margin-right: 5%"></i>{{\App\CPU\translate('my_order')}}</a>
            </div>
        </div>
        @php
            $wallet_status = App\CPU\Helpers::get_business_settings('wallet_status');
            $loyalty_point_status = App\CPU\Helpers::get_business_settings('loyalty_point_status');
        @endphp
        @if ($wallet_status == 1)
            <div>
                <!-- Filter by price-->
                <div class="widget-titler">
                    <a class="{{Request::is('wallet')?'active-menu':''}}" href="{{route('wallet') }} " style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-credit-card-alt" style="margin-right: 5%"></i>{{\App\CPU\translate('my_wallet')}} </a>
                </div>
            </div>
        @endif
        @if ($loyalty_point_status == 1)
            <div>
                <!-- Filter by price-->
                <div class="widget-title">
                    <a class="{{Request::is('loyalty')?'active-menu':''}}" href="{{route('loyalty') }} " style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-money" style="margin-right: 5%"></i>{{\App\CPU\translate('my_loyalty_point')}}</a>
                </div>
            </div>
        @endif
        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{Request::is('track-order*')?'active-menu':''}}" href="{{route('track-order.index') }} " style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-bus" style="margin-right: 5%"></i>{{\App\CPU\translate('track_your_order')}}</a>
            </div>
        </div>
        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{Request::is('wishlists*')?'active-menu':''}}" href="{{route('wishlists')}}" style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-heart-o" style="margin-right: 5%"></i> {{\App\CPU\translate('wish_list')}}  </a>
            </div>
        </div>

        {{--to do--}}
        @php($business_mode=\App\CPU\Helpers::get_business_settings('business_mode'))
        @if ($business_mode == 'multi')
            <div>
                <!-- Filter by price-->
                <div class="widget-title">
                    <a class="{{Request::is('chat/seller')?'active-menu':''}}" href="{{route('chat', ['type' => 'seller'])}}" style="color: black;margin-left:7%;font-size:16px;font-weight:300">{{\App\CPU\translate('chat_with_seller')}}</a>
                </div>
            </div>
            <div>
                <div class="widget-title">
                    <a class="{{Request::is('chat/delivery-man')?'active-menu':''}}" href="{{route('chat', ['type' => 'delivery-man'])}}" style="color: black;margin-left:7%;font-size:16px;font-weight:300">{{\App\CPU\translate('chat_with_delivery-man')}}</a>
                </div>
            </div>
        @endif

        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{Request::is('user-account*')?'active-menu':''}}" href="{{route('user-account')}}" style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-user-circle" style="margin-right: 5%"></i>
                    {{\App\CPU\translate('profile_info')}}
                </a>
            </div>
        </div>
        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{Request::is('account-address*')?'active-menu':''}}"
                    href="{{ route('account-address') }}" style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-map-marker" style="margin-right: 5%"></i>{{\App\CPU\translate('address')}} </a>
            </div>
        </div>
        <div>
            <!-- Filter by price-->
            <div class="widget-title">
                <a class="{{(Request::is('account-ticket*') || Request::is('support-ticket*'))?'active-menu':''}}"
                    href="{{ route('account-tickets') }}" style="color: black;margin-left:7%;font-size:16px;font-weight:300"><i class="fa fa-ticket" style="margin-right: 5%"></i>{{\App\CPU\translate('support_ticket')}}</a>
            </div>
        </div>

    </div>
</div>


















