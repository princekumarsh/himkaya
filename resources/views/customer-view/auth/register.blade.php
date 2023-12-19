@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Account Area Wrapper ==-->
    <section>
      <div class="container" data-padding-top="62"> 
        <h4 class="fz-24 mb-25">Create an account</h4>
        <div class="row">
          <div class="col-12">
            <form action="{{route('customer.auth.sign-up')}}" method="post">
              <div class="register-form-content">
              <div class="register-form">
                <span class="login-account">Already have an account? <a class="text-danger" href="{{route('customer.auth.login')}}">Log in instead!</a></span>
                
                  @csrf
                  <div class="form-group row">
                    <label class="col-md-3"  for="f_name">First name</label>
                    <div class="col-md-6">
                      <input id="f_name" name="f_name" class="form-control" type="text" value="{{old('f_name')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="l_name">Last name</label>
                    <div class="col-md-6">
                      <input id="l_name" name="l_name" class="form-control" type="text" value="{{old('l_name')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="frm_email">Email</label>
                    <div class="col-md-6">
                      <input id="frm_email" name="email" class="form-control" type="email" value="{{old('email')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="mobile">Phone Number</label>
                    <div class="col-md-6">
                      <input id="mobile" name="phone" class="form-control" type="number" value="{{old('phone')}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="frm_pass">Password</label>
                    <div class="col-md-6">
                      <div class="pass-content">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="frm_pass1">Confirm Password</label>
                    <div class="col-md-6">
                      <div class="pass-content">
                        <input type="password" name="con_password" class="form-control">
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="row">
                <div class="col-md-7 offset-md-3">
                  <div class="account-checkbox">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="check3" id="check3">
                      <label class="form-check-label" for="check3">I agree to the terms and conditions and the privacy policy</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-end">
                  <button type="submit" class="btn-save" style="margin-right:10%">Submit</button>
                </div>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--== End Account Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="divider-area">
      <div class="container pt-90 pt-lg-70 pb-lg-60">
        <div class="row">
          <div class="col-12">
            <div class="divider-style-wrap">
              <div class="row">
                <div class="col-md-6">
                  <div class="divider-content text-center">
                    <h4 class="title hidden-sm-down">Let’s Connect On Social</h4>
                    <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-1">Let’s Connect On Social</h4>
                    <div id="dividerId-1" class="collapse">
                      <div class="social-icons">
                        <a href="#/"><i class="la la-facebook"></i></a>
                        <a href="#/"><i class="la la-twitter"></i></a>
                        <a href="#/"><i class="la la-youtube"></i></a>
                        <a href="#/"><i class="la la-instagram"></i></a>
                      </div>
                      <p class="mb-sm-25">Follow us on your favorite platforms. Check out new launch teasers, how-to videos, and share your favorite looks.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="divider-content text-center">
                    <h4 class="title hidden-sm-down" data-margin-bottom="32">Sign Up For Newsletter</h4>
                    <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-2">Sign Up For Newsletter</h4>
                    <div id="dividerId-2" class="collapse">
                      <div class="newsletter-content-wrap">
                        <div class="newsletter-form">
                          <form>
                            <input type="email" class="form-control" placeholder="Your email address">
                            <button class="btn btn-submit" type="button">Sign up</button>
                          </form>
                        </div>
                      </div>
                      <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->
  </main>

@stop
