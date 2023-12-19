@php
  $brands =    App\Model\Brand::active()->take(15)->get();
@endphp
<!--== Start Contact Info Area Wrapper ==-->
    <section class="bg-black-color">
      <div class="container pt-35 pb-40">
        <div class="row">
          <div class="col-12">
            <div class="contact-info contact-info-static">
              <div class="row">
                <div class="col-border col-12 col-md-4 col-sm-6 border-0">
                 <a href="tel:(+91)8448534228">
                     <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-phone-volume"></i>
                    </div>
                    <p>(+91)8448534228 M-F 9AM-6PM</p>
                  </div>
                 </a>
                </div>
                <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                  <a href="mailto:himkaya08@gmail.com">
                        <div class="info-item">
                    <div class="icon-box">
                      <i class="icon las la-envelope"></i>
                    </div>
                    <p>himkaya08@gmail.com</p>
                  </div>
                  </a>
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
                     @php($social_media = \App\Model\SocialMedia::where('active_status', 1)->get())
                        @if(isset($social_media))
                         <div class="divider-content text-center">
                            <h4 class="title hidden-sm-down">Let’s Connect On Social</h4>
                            <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-1">Let’s Connect On Social</h4>
                            <div id="dividerId-1" class="collapse">
                            <div class="social-icons">
                                @foreach ($social_media as $item)
                                    {{-- <span class="social-media ">
                                            <a class="social-btn text-white sb-light sb-{{$item->name}} {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}} mb-2"
                                            target="_blank" href="{{$item->link}}">
                                                <i class="{{$item->icon}}" aria-hidden="true"></i>
                                            </a>
                                        </span> --}}
                                        <a href="{{$item->link}}" target="_blank"><i class="{{$item->icon}}" aria-hidden="true"></i></a>
                                @endforeach
                                {{-- <a href="#/"><i class="la la-facebook"></i></a>
                                <a href="#/"><i class="la la-twitter"></i></a>
                                <a href="#/"><i class="la la-youtube"></i></a>
                                <a href="#/"><i class="la la-instagram"></i></a> --}}
                            </div>
                            <p class="mb-sm-25">Follow us on your favorite platforms. Check out new launch teasers, how-to videos, and share your favorite lookss .</p>
                            </div>
                        </div>

                        @endif

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

<!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!--== Start Footer Widget Area ==-->
          <div class="footer-widget-area pb-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="widget-item">
                  <div class="about-widget">
                    <div class="inner-content">
                        @foreach($brands as $b)
                      <div class="footer-logo">
                       <a href="{{route('home')}}">
                           <img src="{{asset('storage/app/public/brand/'.$b->image)}}" alt="logo" style="width: 150px;height: 80px;">
                           </a>
                      </div>
                      @endforeach
                      <p>Location: Patna bihar India</p>
                    </div>
                    <div class="widget-desc">
                      <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="widget-item">
                  <div class="widget-menu-wrap">
                    <ul class="nav-menu">
                      <li><a href="#/">Delivery</a></li>
                      <li><a href="#/">Legal Notice</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#/">Secure payment</a></li>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="#/">Sitemap</a></li>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">My account</a></li>
                      <li><a href="#">Stores</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--== End Footer Widget Area ==-->
        </div>
      </div>
    </div>
    <!--== Start Footer Bottom Area ==-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="copyright">Copyright © 2023 All Rights Reserved | Made with <i class="fa fa-heart-o"></i> by <a target="_blank">himkaya</a></p>
          </div>
          <div class="col-lg-6">
            <div class="payment">
              <img src="{{asset('public/assets_ui')}}/img/photos/payment.png" alt="Payment">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom Area ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="ion-md-arrow-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu<i class="icon-arrow-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->

  <!--== Start Popup Product  ==-->
  <div class="popup-product-quickview">
    <div class="product-single-item">
      <div class="row">
        <div class="col-md-6">
          <!--== Start Product Thumbnail Area ==-->
          <div class="product-thumb">
            <div class="swiper-container single-product-thumb-content single-product-thumb-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#/">
                    <img src="{{asset('public/assets_ui')}}/img/shop/product-single/05.jpg" alt="Image-HasTech">
                    <span class="product-flag-new">New</span>
                  </a>
                </div>
                <div class="swiper-slide">
                  <a href="#/">
                    <img src="{{asset('public/assets_ui')}}/img/shop/product-single/06.jpg" alt="Image-HasTech">
                    <span class="product-flag-new">New</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-container single-product-nav-content single-product-nav-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{asset('public/assets_ui')}}/img/shop/product-single/nav-05.jpg" alt="Image-HasTech">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('public/assets_ui')}}/img/shop/product-single/nav-06.jpg" alt="Image-HasTech">
                </div>
              </div>
            </div>
          </div>
          <!--== End Product Thumbnail Area ==-->
        </div>
        <div class="col-md-6">
          <!--== Start Product Info Area ==-->
          <div class="product-single-info mt-sm-70">
            <h1 class="title">Water And Wind Resistant Insulated Jacket</h1>
            <div class="product-info">
              <div class="star-content">
                <i class="ion-md-star"></i>
                <i class="ion-md-star"></i>
                <i class="ion-md-star"></i>
                <i class="ion-md-star"></i>
                <i class="ion-md-star icon-color-gray"></i>
              </div>
              <ul class="comments-advices">
                <li><a href="#/" class="reviews"><i class="fa fa-commenting-o"></i>Read reviews (1)</a></li>
                <li><a href="#/" class="comment"><i class="fa fa-pencil-square-o"></i>Write a review</a></li>
              </ul>
            </div>
            <div class="prices">
              <span class="price">₹14.522</span>
              <div class="tax-label">Tax included</div>
            </div>
            <div class="product-description">
              <ul class="product-desc-list">
                <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                <li>Water-resistant jacket keeps you warm and dry.</li>
                <li>Stand collar features an attached hood.</li>
                <li>Front-zip closure.</li>
              </ul>
            </div>
            <div class="product-quick-action">
              <div class="product-quick-qty">
                <div class="pro-qty">
                  <input type="text" id="quantity" title="Quantity" value="1">
                </div>
              </div>
              <a class="btn-product-add" href="#">Add to cart</a>
            </div>
            <div class="product-wishlist-compare">
              <a href="#" class="btn-wishlist"><i class="icon-heart"></i>Add to wishlist</a>
              <a href="#" class="btn-compare"><i class="icon-shuffle"></i>Add to compare</a>
            </div>
            <div class="social-sharing">
              <span>Share</span>
              <div class="social-icons">
                <a href="#/"><i class="la la-facebook"></i></a>
                <a href="#/"><i class="la la-twitter"></i></a>
              </div>
            </div>
          </div>
          <!--== End Product Info Area ==-->
        </div>
      </div>
    </div>
  </div>
  <div class="popup-product-overlay"></div>
  <button class="popup-product-close"><i class="la la-close"></i></button>
  <!--== End Popup Product  ==-->
</div>
