@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Account Area Wrapper ==-->
    <section>
      <div class="container" data-padding-top="62"> 
        <h4 class="fz-24 mb-25">Log in to your account</h4>
        <div class="row">
          <div class="col-12">
            <div class="login-form-content">
              <div class="login-form">
                <form action="{{route('customer.auth.login')}}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label class="col-md-3" for="frm_email">Email</label>
                    <div class="col-md-6">
                      <input name="user_id" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3" for="frm_pass">Password</label>
                    <div class="col-md-6">
                      <div class="pass-content">
                        <input type="password" name="password" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row mb-15">
                    <div class="col-12 text-center">
                      <a class="btn-forgot" href="{{route('customer.auth.recover-password')}}">Forgot your password?</a>
                      <button type="submit" class="btn-signin">Sign in</button>
                    </div>
                  </div>
                </form>
              </div>
              <a class="btn-create-account" href="{{route('customer.auth.sign-up')}}">No account? Create one here</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Account Area Wrapper ==-->
  </main>  
@stop