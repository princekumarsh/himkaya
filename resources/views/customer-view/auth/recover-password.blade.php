@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    @php($verification_by=\App\CPU\Helpers::get_business_settings('forgot_password_verification'))
    <!--== Start Account Area Wrapper ==-->
    <section>
      <div class="container" data-padding-top="62"> 
        <h4 class="fz-24 mb-25">Forgot your password?</h4>
        <p>Change your password in three easy steps. This helps to keep your new password secure .</p>
        <ol>
          <li>Fill in your email address below .</li>
          <li>We will email you a temporary code .</li>
          <li>Use the code to change your password on our secure website .</li>
        </ol>
        <div class="row">
          <div class="col-12">
            <div class="login-form-content">
              <div class="login-form">
                 @if($verification_by=='email')
                <form action="{{route('customer.auth.forgot-password')}}" method="post">
                    @csrf

                    <div class="form-group row">
                      <label class="col-md-2" for="recover-email">Enter Your email address</label>
                      <div class="col-md-6">
                        <div class="pass-content">
                          <input type="email" name="identity" id="recover-email" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">Please provide valid email address </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Get new password</button>
                    </div>
                </form>
                @else
                <form action="{{route('customer.auth.forgot-password')}}" method="post">
                    @csrf

                    <div class="form-group row">
                      <label class="col-md-2" for="recover-email">Enter your phone number</label>
                      <div class="col-md-6">
                        <div class="pass-content">
                          <input type="text" name="identity" id="recover-email" class="form-control" required>
                        </div>
                        <div class="invalid-feedback">Please provide valid phone address </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Account Area Wrapper ==-->
  </main>

@stop