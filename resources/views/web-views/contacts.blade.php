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
                  <li>Contact us</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
      <div class="container">
        <div class="row contact-page-wrapper">
          <div class="col-lg-6">
            <div class="contact-form-wrap">
              <div class="contact-form-title">
                <h5 class="sub-title">Don’t worry!</h5>
                <h2 class="title">If you have any query? Contact with us.</h2>
              </div>
              <!--== Start Contact Form ==-->
              <div class="contact-form">
                <form id="contact-form" action="" method="POST">
                  <div class="row row-gutter-20">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" name="con_name" placeholder="Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="email" name="con_email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="tel" name="con_phone" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Address">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb--0">
                        <textarea class="form-control" name="con_message" placeholder="Massage"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group mb--0">
                        <button class="btn-theme" type="submit">Submit Now</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--== End Contact Form ==-->

              <!--== Message Notification ==-->
              <div class="form-message"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-info-list">
              <div class="contact-info">
                <div class="info-item">
                  <div class="info">
                    <h5 class="title">Phone:</h5>
                    <p>
                      <a href="tel:7653882142">(765) 388-2142</a>
                      <a href="tel:3048553859">(304) 855-3859</a>
                    </p>
                  </div>
                </div>
                <div class="info-item">
                  <div class="info">
                    <h5 class="title">Email:</h5>
                    <p>
                      <a href="mailto:example@gmail.com">example@gmail.com</a>
                      <a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a>
                    </p>
                  </div>
                </div>
                <div class="info-item">
                  <div class="info">
                    <h5 class="title">Address:</h5>
                    <p>1229 Roma Ct San Jacinto,<br>California(CA), 92583</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->

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
