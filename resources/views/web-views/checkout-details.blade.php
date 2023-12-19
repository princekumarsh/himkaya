@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')

  <main class="main-content">
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container" data-padding-top="62">
        <div class="shopping-cart-wrap">
          <div class="row">
            <div class="col-lg-8">
              <div class="shopping-checkout-content">
                <div class="checkout-accordion" id="accordionExample">
                  <div class="checkout-accordion-item">
                    <h2 class="heading" id="headingOne">
                      <button class="heading-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="step-number">1</span>
                        Personal Information
                        <span class="step-edit"><i class="fa fa-pencil"></i> edit</span>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="checkout-accordion-body">
                        <div class="personal-information">
                          <ul>
                            <li>Connected as <a href="#/">India</a></li>
                            <li>Not you? <a href="#/">Log out</a></li>
                            <li><small>If you sign out now, your cart will be emptied.</small></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="checkout-accordion-item">
                    <h2 class="heading" id="headingTwo">
                      <button class="heading-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="step-number">2</span>
                        Addresses
                        <span class="step-edit"><i class="fa fa-pencil"></i> edit</span>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="checkout-accordion-body" data-margin-top="14">
                        <div class="personal-addresses">
                          <p class="p-text">The selected address will be used both as your personal address (for invoice) and as your delivery address.</p>
                          <div class="delivery-address-form">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-md-3" for="f_name">First name</label>
                                <div class="col-md-6">
                                  <input id="f_name" class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="l_name">Last name</label>
                                <div class="col-md-6">
                                  <input id="l_name" class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm_company">Company</label>
                                <div class="col-md-6">
                                  <input id="frm_company" class="form-control" type="text">
                                </div>
                                <div class="col-md-3">
                                  <span class="optional-label">Optional</span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm_address">Address</label>
                                <div class="col-md-6">
                                  <input id="frm_address" class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="add_complement">Address Complement</label>
                                <div class="col-md-6">
                                  <input id="add_complement" class="form-control" type="text">
                                </div>
                                <div class="col-md-3">
                                  <span class="optional-label">Optional</span>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="zip_code">Zip/Postal Code</label>
                                <div class="col-md-6">
                                  <input id="zip_code" class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm_city">City</label>
                                <div class="col-md-6">
                                  <input id="frm_city" class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm_state">State</label>
                                <div class="col-md-6">
                                  <select id="frm_state" class="form-select form-control" aria-label="-- please choose --">
                                    <option disabled selected>-- please choose --</option>
                                    <option value="1">Bihar</option>
                                    <option value="2">Utter Pardesh</option>
                                    <option value="3">Delhi</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm_country">Country</label>
                                <div class="col-md-6">
                                  <select id="frm_country" class="form-select form-control" aria-label="-- please choose --">
                                    <option disabled selected>-- please choose --</option>
                                    <option value="1">India</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3" for="frm-phone">Phone</label>
                                <div class="col-md-6">
                                  <input id="frm-phone" class="form-control" type="tel">
                                </div>
                                <div class="col-md-3">
                                  <span class="optional-label">Optional</span>
                                </div>
                              </div>
                              <div class="form-group row mb-0">
                                <div class="col-md-9">
                                  <input name="use_same_address" id="use_same_address" type="checkbox">
                                  <label class="pt-0" for="use_same_address">Use this address for invoice too</label>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-md-12 text-end">
                                  <button type="submit" class="btn-submit">Continue</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  @php($default_location=\App\CPU\Helpers::get_business_settings('default_location'))
                <input type="hidden" id="physical_product" name="physical_product" value="{{ $physical_product_view ? 'yes':'no'}}">
                  @if($physical_product_view)
                <h2 class="h4 pb-3 mb-2 mt-5">{{ \App\CPU\translate('choose_shipping_address')}}</h2>
                @php($shipping_addresses=\App\Model\ShippingAddress::where('customer_id',auth('customer')->id())->where('is_billing',0)->get())
                <form method="post" class="card __card" id="address-form">
                    <div class="card-body p-0">
                        <ul class="list-group">
                            @foreach($shipping_addresses as $key=>$address)
                            <li class="list-group-item __inline-57" onclick="$('#sh-{{$address['id']}}').prop( 'checked', true )">
                                <input type="radio" name="shipping_method_id" id="sh-{{$address['id']}}" value="{{$address['id']}}"
                                    {{$key==0?'checked':''}}>
                                <span class="checkmark" style="margin-{{Session::get('direction') === " rtl" ? 'left' : 'right' }}:
                                    10px"></span>
                                <label class="badge"
                                    style="background: {{$web_config['primary_color']}}; color:white !important;">{{$address['address_type']}}</label>
                                <small>
                                    <i class="fa fa-phone"></i> {{$address['phone']}}
                                </small>
                                <hr>
                                <div class="d-flex">
                                    <div class="w-0 flex-grow-1 justify-content-between">
                                        <span>{{ \App\CPU\translate('contact_person_name')}}:
                                            {{$address['contact_person_name']}}</span><br>
                                        <span>{{ \App\CPU\translate('address')}} : {{$address['address']}}, {{$address['city']}},
                                            {{$address['zip']}}.</span>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('address-edit', ['id' => $address->id]) }}"
                                            title="{{ \App\CPU\translate('edit_address')}}" class="mt-2"><i
                                                class="fa fa-edit fa-lg"></i></a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <li class="list-group-item" onclick="anotherAddress()">
                                <input type="radio" name="shipping_method_id" id="sh-0" value="0" data-toggle="collapse"
                                    data-target="#collapseThree" {{$shipping_addresses->count()==0?'checked':''}}>
                                <span class="checkmark" style="margin-{{Session::get('direction') === " rtl" ? 'left' : 'right' }}:
                                    10px"></span>

                                <button type="button" class="btn btn-outline" data-toggle="collapse" data-target="#collapseThree">{{
                                    \App\CPU\translate('Another')}} {{ \App\CPU\translate('address')}}
                                </button>
                                <div id="accordion">
                                    <div id="collapseThree" class="collapse {{$shipping_addresses->count()==0?'show':''}}"
                                        aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('contact_person_name')}}
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="contact_person_name"
                                                    {{$shipping_addresses->count()==0?'required':''}}>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('Phone')}}
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="phone"
                                                    {{$shipping_addresses->count()==0?'required':''}}>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{ \App\CPU\translate('address')}} {{
                                                    \App\CPU\translate('Type')}}</label>
                                                <select class="form-control" name="address_type">
                                                    <option value="permanent">{{ \App\CPU\translate('Permanent')}}</option>
                                                    <option value="home">{{ \App\CPU\translate('Home')}}</option>
                                                    <option value="others">{{ \App\CPU\translate('Others')}}</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('City')}}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="city"
                                                    {{$shipping_addresses->count()==0?'required':''}}>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('zip_code')}}
                                                    <span class="text-danger">*</span></label>
                                                @if($zip_restrict_status == 1)
                                                <select name="zip" class="form-control selectpicker" data-live-search="true" required>
                                                    @forelse($zip_codes as $code)
                                                    <option value="{{ $code->zipcode }}">{{ $code->zipcode }}</option>
                                                    @empty
                                                    <option value="">{{ \App\CPU\translate('No_zip_to_deliver') }}</option>
                                                    @endforelse
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="zip"
                                                    {{$shipping_addresses->count()==0?'required':''}}>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('Country')}}
                                                    <span style="color: red">*</span></label>
                                                <select name="country" id="" class="form-control selectpicker" data-live-search="true"
                                                    required>
                                                    @forelse($countries as $country)
                                                    <option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                                                    @empty
                                                    <option value="">{{ \App\CPU\translate('No_country_to_deliver') }}</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ \App\CPU\translate('address')}}<span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" id="address" type="text" name="address"
                                                    {{$shipping_addresses->count()==0?'required':''}}></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input id="pac-input" class="controls rounded __inline-46"
                                                    title="{{\App\CPU\translate('search_your_location_here')}}" type="text"
                                                    placeholder="{{\App\CPU\translate('search_here')}}" />
                                                <div class="__h-200px" id="location_map_canvas"></div>
                                            </div>
                                            <div class="form-check" style="padding-{{Session::get('direction') === " rtl" ? 'right'
                                                : 'left' }}: 1.25rem;">
                                                <input type="checkbox" name="save_address" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1"
                                                    style="padding-{{Session::get('direction') === " rtl" ? 'right' : 'left' }}:
                                                    1.09rem">
                                                    {{ \App\CPU\translate('save_this_address')}}
                                                </label>
                                            </div>
                                            <input type="hidden" id="latitude" name="latitude" class="form-control d-inline"
                                                placeholder="Ex : -94.22213" value="{{$default_location?$default_location['lat']:0}}"
                                                required readonly>
                                            <input type="hidden" name="longitude" class="form-control" placeholder="Ex : 103.344322"
                                                id="longitude" value="{{$default_location?$default_location['lng']:0}}" required
                                                readonly>

                                            <button type="submit" class="btn btn--primary" style="display: none"
                                                id="address_submit"></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
                @endif
                  <!-- <div class="checkout-accordion-item">
                    <h2 class="heading" id="headingThree">
                      <button class="heading-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="step-number">3</span>
                        Shipping Method
                        <span class="step-edit"><i class="fa fa-pencil"></i> edit</span>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="checkout-accordion-body">
                        <div class="personal-information">
                          <div class="row">
                            <div class="col-6">
                              <input type="radio" id="home" name="shipping" value="home">
                              <label for="home">Home</label>
                            </div>
                            <div class="col-6">
                              <input type="radio" id="office" name="shipping" value="office">
                              <label for="office">Office</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  {{-- <div class="checkout-accordion-item">
                    <h2 class="heading" id="headingfour">
                      <button class="heading-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour" title="click and choose the payment option">
                        <span class="step-number">3</span>
                        Payment
                        <span class="step-edit"><i class="fa fa-shopping-bag"></i> choose</span>
                      </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                      <div class="checkout-accordion-body">
                        <div class="personal-information">
                          <div class="row">
                            <div class="col-lg-6 col-12">
                              <div class="card mt-3" style="height: 150px;width: 100%;">
                                <div class="text-center">
                                  <a href="{{route('checkout-complete')}}">
                                    <img src="{{asset('storage/app/public/profile/cod.png')}}" width="50%" height="110px" class="mt-4">
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="card mt-3" style="height: 150px;width: 100%;">
                                <div class="text-center">
                                  <a href="{{route('checkout-complete')}}">
                                    <img src="{{asset('storage/app/public/profile/fluterwave.png')}}" width="50%" height="110px" class="mt-4">
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="card mt-3" style="height: 150px;width: 100%;">
                                <div class="text-center">
                                  <a href="{{route('checkout-complete')}}">
                                    <img src="{{asset('storage/app/public/profile/MercadoPago_(Horizontal).svg')}}" width="50%" height="150px">
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="card mt-3" style="height: 150px;width: 100%;">
                                <div class="text-center">
                                  <a href="{{route('checkout-complete')}}">
                                    <img src="{{asset('storage/app/public/profile/others.png')}}" width="50%" height="150px">
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
           @include('web-views.partials._order-summary')
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->


@stop
