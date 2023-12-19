@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area bg-img" data-bg-img="{{asset('public/assets_ui')}}/img/photos/bg-02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                  <li>About us</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-page-area">
      <div class="container">
        <div class="row about-page-wrap">
          <div class="col-md-6">
            <div class="about-content">
              <h3 class="title">Cartic Story, We Craft Awesome Stuff With Great Experiences.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor</p>
              <a class="btn-theme" href="contact.html">Contact Us</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-thumb">
              <img src="{{asset('public/assets_ui')}}/img/about/01.jpg" alt="Image-HasTech" class="img">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <div class="feature-area feature-about-area position-relative z-index-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="feature-icon-box-style2">
              <div class="inner-content">
                <div class="icon-box">
                  <img src="{{asset('public/assets_ui')}}/img/icons/f01.png" alt="Image-HasTech" class="icon-img">
                </div>
                <div class="content">
                  <h5 class="title">Free Shipping</h5>
                  <p>Provide free home delivery <br>for all product over $100</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="feature-icon-box-style2">
              <div class="inner-content">
                <div class="icon-box">
                  <img src="{{asset('public/assets_ui')}}/img/icons/f02.png" alt="Image-HasTech" class="icon-img">
                </div>
                <div class="content">
                  <h5 class="title">Online Support</h5>
                  <p>To satisfy our customer we <br>try to give support online</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="feature-icon-box-style2">
              <div class="inner-content">
                <div class="icon-box">
                  <img src="{{asset('public/assets_ui')}}/img/icons/f03.png" alt="Image-HasTech" class="icon-img">
                </div>
                <div class="content">
                  <h5 class="title">Secure Payment</h5>
                  <p>We ensure our product Good <br>quality all times</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shape-group">
        <div class="shape-img1">
          <img src="{{asset('public/assets_ui')}}/img/shape/01.png" alt="Image">
        </div>
        <div class="shape-img2">
          <img src="{{asset('public/assets_ui')}}/img/shape/02.png" alt="Image">
        </div>
      </div>
    </div>
    <!--== End Feature Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Team Member</h2>
              <div class="desc">
                <p>Some of our popular team member</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/team/01.jpg" alt="Image-HasTech"></a>
                  <div class="member-icons">
                    <a href="#/"><i class="fa fa-facebook"></i></a>
                    <a href="#/"><i class="fa fa-dribbble"></i></a>
                    <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#/"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Rosa Lawson</a></h4>
                  <p>Team Member</p>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/team/02.jpg" alt="Image-HasTech"></a>
                  <div class="member-icons">
                    <a href="#/"><i class="fa fa-facebook"></i></a>
                    <a href="#/"><i class="fa fa-dribbble"></i></a>
                    <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#/"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Mario Palmer</a></h4>
                  <p>Team Member</p>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/team/03.jpg" alt="Image-HasTech"></a>
                  <div class="member-icons">
                    <a href="#/"><i class="fa fa-facebook"></i></a>
                    <a href="#/"><i class="fa fa-dribbble"></i></a>
                    <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#/"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Maria Randall</a></h4>
                  <p>Team Member</p>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Team Item ==-->
            <div class="team-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="#/"><img src="{{asset('public/assets_ui')}}/img/team/04.jpg" alt="Image-HasTech"></a>
                  <div class="member-icons">
                    <a href="#/"><i class="fa fa-facebook"></i></a>
                    <a href="#/"><i class="fa fa-dribbble"></i></a>
                    <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#/"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#/">Yousif Cross</a></h4>
                  <p>Team Member</p>
                </div>
              </div>
            </div>
            <!--== End Team Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->

    <!--== Start Contact Info Area Wrapper ==-->
    <section class="bg-black-color">
      <div class="container pt-35 pb-40">
        <div class="row">
          <div class="col-12">
            <div class="contact-info contact-info-static">
              <div class="row">
                <div class="col-border col-12 col-md-4 col-sm-6 border-0">
                  <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-phone-volume"></i>
                    </div>
                    <p>1800.3687.6886 M-F 9AM-6PM</p>
                  </div>
                </div>
                <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                  <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-envelope"></i>
                    </div>
                    <p>demo@example.com</p>
                  </div>
                </div>
                <div class="col-border col-12 col-md-4 col-sm-12 mt-sm-35">
                  <div class="info-item">
                    <div class="icon-box">
                      <i class="icon lab la-facebook-messenger"></i>
                    </div>
                    <p>Virtual Chat 24/7 | Live M-F 9am-6pm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Info Area Wrapper ==-->

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
