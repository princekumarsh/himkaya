@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Account Area Wrapper ==-->
    <section>
      <div class="container" data-padding-top="62"> 
        <h4 class="fz-24 mb-25">Your account</h4>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner mb-30">
                <a href="#/">
                  <i class="fa fa-user-circle"></i>
                  <span>Information</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner mb-30">
                <a href="#/">
                  <i class="fa fa-map-marker"></i>
                  <span>Add first address</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner mb-30">
                <a href="#/">
                  <i class="fa fa-calendar"></i>
                  <span>Order history and details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner">
                <a href="#/">
                  <i class="fa fa-credit-card-alt"></i>
                  <span>Credit slips</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner">
                <a href="#/">
                  <i class="fa fa-user"></i>
                  <span>GDPR - Personal data</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="account-item">
              <div class="account-inner">
                <a href="#/">
                  <i class="fa fa-smile-o"></i>
                  <span>Sign out</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Account Area Wrapper ==-->

  @stop
