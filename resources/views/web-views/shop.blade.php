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
                  <li>Shop</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container pb-55">
        <div class="row">
          <div class="col-lg-3 order-1 order-lg-1">
            <!--== Start Sidebar Area ==-->
            <div class="shop-sidebar-wrapper">
              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item">
                <h4 class="sidebar-title"><a href="shop-left-sidebar.html">Shop</a></h4>
                <div class="sidebar-body">
                  <div class="category-sub-menu">
                    <ul>
                      <li>
                        <a href="#/">Makeup</a>
                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu" role="button" aria-expanded="false">
                          <i></i>
                        </span>
                        <ul class="collapse" id="sub-menu">
                          <li><a href="#/">Eyes</a></li>
                          <li><a href="#/">Lips</a></li>
                          <li><a href="#/">Face</a></li>
                          <li><a href="#/">Makeup Tools</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#/">Skin Care</a>
                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu2" role="button" aria-expanded="false">
                          <i></i>
                        </span>
                        <ul class="collapse" id="sub-menu2">
                          <li><a href="#/">Face</a></li>
                          <li><a href="#/">Eyes</a></li>
                          <li><a href="#/">Body</a></li>
                          <li><a href="#/">Skin Care Tools</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#/">Health Care</a>
                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu3" role="button" aria-expanded="false">
                          <i></i>
                        </span>
                        <ul class="collapse" id="sub-menu3">
                          <li><a href="#/">Massage & Relaxation</a></li>
                          <li><a href="#/">Household Health Monitors</a></li>
                          <li><a href="#/">Chinese Medicine</a></li>
                          <li><a href="#/">Personal Health Care Items</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#/">Nail Art & Tools</a>
                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu4" role="button" aria-expanded="false">
                          <i></i>
                        </span>
                        <ul class="collapse" id="sub-menu4">
                          <li><a href="#/">Gel Nail Polish</a></li>
                          <li><a href="#/">Nail Drills</a></li>
                          <li><a href="#/">Nail Dryers</a></li>
                          <li><a href="#/">Nail Glitter</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <h4 class="sidebar-title mb-45">Filter By</h4>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Categories</h4>
                <div class="sidebar-body">
                  <div class="sidebar-menu-list">
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="1" id="list1">
                      <label class="form-check-label" for="list1">Health Care (13)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="2" id="list2">
                      <label class="form-check-label" for="list2">Makeup (13)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="3" id="list3">
                      <label class="form-check-label" for="list3">Nail Art & Tools (13)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="4" id="list4">
                      <label class="form-check-label" for="list4">Skin Care (13)</label>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Size</h4>
                <div class="sidebar-body">
                  <div class="sidebar-menu-list">
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="5" id="list5">
                      <label class="form-check-label" for="list5">S (2)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="6" id="list6">
                      <label class="form-check-label" for="list6">M (2)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="7" id="list7">
                      <label class="form-check-label" for="list7">L (2)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="8" id="list8">
                      <label class="form-check-label" for="list8">XL (2)</label>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Color</h4>
                <div class="sidebar-body">
                  <ul class="sidebar-product-color">
                    <li class="color-grey">Grey (1)</li>
                    <li class="color-white">White (4)</li>
                    <li class="color-black">Black (4)</li>
                    <li class="color-camel">Camel (1)</li>
                  </ul>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Availability</h4>
                <div class="sidebar-body">
                  <div class="sidebar-menu-list">
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="9" id="list9">
                      <label class="form-check-label" for="list9">In stock (13)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="10" id="list10">
                      <label class="form-check-label" for="list10">Not available (1)</label>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Brand</h4>
                <div class="sidebar-body">
                  <div class="sidebar-menu-list">
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="11" id="list11">
                      <label class="form-check-label" for="list11">Graphic Corner (5)</label>
                    </div>
                    <div class="list-item">
                      <input class="form-check-input" type="checkbox" value="12" id="list12">
                      <label class="form-check-label" for="list12">Studio Design (8)</label>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item mb-40">
                <h4 class="small-title">Price</h4>
                <div class="sidebar-body">
                  <div class="sidebar-price-range">
                    <div class="slider-labels">
                      <div class="caption">
                        <span id="slider-range-value1"></span>
                      </div>
                      <span class="range-separator"> — </span>
                      <div class="caption">
                        <span id="slider-range-value2"></span>
                      </div>
                    </div>
                    <div class="slider-range" id="slider-range"></div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item">
                <h4 class="sidebar-title mb-25">Tags</h4>
                <div class="sidebar-body">
                  <div class="product-categories">
                    <ul>
                      <li><a href="#/">Makeup</a></li>
                      <li><a href="#/">Health Care</a></li>
                      <li><a href="#/"> Skin Care</a></li>
                      <li><a href="#/">Nail Art & Tools</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->
            </div>
            <!--== End Sidebar Area ==-->
          </div>
          <div class="col-lg-9 order-0 order-lg-2">
            <!--== Start Shop Area ==-->
            <div class="product-header-wrap">
              <div class="row">
                <div class="col-4 col-sm-4 col-md-6">
                  <ul class="nav product-tab-nav" id="pills-tab" role="tablist">
                    <li role="presentation">
                      <a class="active" id="grid-tab" data-bs-toggle="pill" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fa fa-th"></i></a>
                    </li>
                    <li role="presentation">
                      <a id="list-care-tab" data-bs-toggle="pill" href="#list-care" role="tab" aria-controls="list-care" aria-selected="false"><i class="fa fa-list"></i></a>
                    </li>
                  </ul>
                  <div class="total-products">
                    <p class="hidden-sm-down">There are 13 products.</p>
                  </div>
                </div>
                <div class="col-8 col-sm-8 col-md-6">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="sort-by-text">
                        Sort By:
                      </div>
                    </div>
                    <div class="col-sm-9">
                      <div class="sort-by-form">
                        <select class="form-select" aria-label="Relevance">
                          <option selected>Relevance</option>
                          <option value="1">Name, A to Z</option>
                          <option value="2">Name, Z to A</option>
                          <option value="3">Price, low to high</option>
                          <option value="4">Price, high to low</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-body-wrap">
              <div class="tab-content product-tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/13.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/13-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-10%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Fila Locker Room Varsity Jacket</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star icon-color-gray"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹10.98</span>
                                <span class="price text-black">₹10.98</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="{{url('/productDetails/{id}')}}">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/12.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/12-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹23.06</span>
                                <span class="price text-black">₹10.98</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/08.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/08-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹23.06</span>
                                <span class="price text-black">₹23.06</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/07.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/07-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old">₹23.06</span>
                                <span class="price">₹18.45</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/06.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-5%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹14.52</span>
                                <span class="price text-black">₹23.06</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/05.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/05-h1.html" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-5%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star icon-color-gray"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹14.52</span>
                                <span class="price text-black">₹14.52</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/04.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/04-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-5%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹14.52</span>
                                <span class="price text-black">₹14.52</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/03.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/03-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount">-5%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old">₹14.52</span>
                                <span class="price">₹13.79</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/11.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/11-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹23.06</span>
                                <span class="price text-black">₹35.38</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/10.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/10-h1.html" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star icon-color-gray"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹23.06</span>
                                <span class="price text-black">₹23.06</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/09.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-20%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹23.06</span>
                                <span class="price text-black">₹35.38</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-4">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="single-product.html">
                              <img src="{{asset('public/assets_ui')}}/img/shop/02.jpg" alt="Image-HasTech">
                              <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/02-h1.jpg" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                  <i class="icon-heart icon"></i>
                                </a>
                                <a class="add-compare" href="compare.html" title="Add to compare">
                                  <i class="icon-shuffle icon"></i>
                                </a>
                              </div>
                            </div>
                            <ul class="product-flag">
                              <li class="new">New</li>
                              <li class="discount visually-hidden">-10%</li>
                            </ul>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                              <div class="star-content">
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                                <i class="ion-md-star"></i>
                              </div>
                              <div class="prices">
                                <span class="price-old visually-hidden">₹29.16</span>
                                <span class="price text-black">₹43.80</span>
                              </div>
                            </div>
                            <div class="product-footer">
                              <a class="btn-product-add" href="single-product.html">Add to cart</a>
                              <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="list-care" role="tabpanel" aria-labelledby="list-care-tab">
                  <div class="row">
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/13.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/13-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-10%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Fila Locker Room Varsity Jacket</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star icon-color-gray"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹10.98</span>
                                    <span class="price text-black">₹10.98</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</li>
                                    <li>Comfortable cotton-blend fabrication.</li>
                                    <li>Classic varsity jacket features brand details throughout.</li>
                                    <li>Flat knit collar.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/12.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/12-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹23.06</span>
                                    <span class="price text-black">₹10.98</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</li>
                                    <li>Polyester fabrication flaunts stripe and brand logo detail at sleeves.</li>
                                    <li>Stand collar.</li>
                                    <li>Front-zipper closure.</li>
                                    <li>100% polyester.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/08.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/08-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹23.06</span>
                                    <span class="price text-black">₹23.06</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>The New Balance® Fresh Foam LAZR v1 Sport running shoe gives you total focus on the road with its precision-engineered design.</li>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: Minimal feel with extreme flexibility.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/07.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/07-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old">₹23.06</span>
                                    <span class="price">₹18.45</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay toasty with this Juicy Couture™ Solid Sleeve Puffer Jacket!</li>
                                    <li>Stand collar.</li>
                                    <li>Long sleeves.</li>
                                    <li>100% polyester;</li>
                                    <li>Lining: 100% polyester;</li>
                                    <li>Filling: 100% polyester.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/06.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-5%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹14.52</span>
                                    <span class="price text-black">₹23.06</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Increase your distance with the superior cushioning of the Fresh Foam Kaymin running shoe from New Balance®.</li>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/05.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/05-h1.html" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-5%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star icon-color-gray"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹14.52</span>
                                    <span class="price text-black">₹14.52</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/04.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/04-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-5%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹14.52</span>
                                    <span class="price text-black">₹14.52</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Keep the elements away and warmth priority number one in this Nautica® Trans-Weight Hooded Wind and Water Resistant Shell.</li>
                                    <li>Hooded collar with a high collar for maximum coverage.</li>
                                    <li>Long sleeves with banded collars.</li>
                                    <li>Zip front closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/03.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/03-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount">-5%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old">₹14.52</span>
                                    <span class="price">₹13.79</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.</li>
                                    <li>Man-made upper features a plain toe.</li>
                                    <li>Lace-up closure.</li>
                                    <li>Man-made lining.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/11.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/11-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹23.06</span>
                                    <span class="price text-black">₹35.38</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/10.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/10-h1.html" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star icon-color-gray"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹23.06</span>
                                    <span class="price text-black">₹23.06</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/09.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-20%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹23.06</span>
                                    <span class="price text-black">₹35.38</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-lg-12">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content product-list-item">
                          <div class="row m-0">
                            <div class="col-sm-4 p-0">
                              <div class="product-thumb">
                                <a href="single-product.html">
                                  <img src="{{asset('public/assets_ui')}}/img/shop/02.jpg" alt="Image-HasTech">
                                  <img class="second-image" src="{{asset('public/assets_ui')}}/img/shop/02-h1.jpg" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                  <div class="addto-wrap">
                                    <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                      <i class="icon-heart icon"></i>
                                    </a>
                                    <a class="add-compare" href="compare.html" title="Add to compare">
                                      <i class="icon-shuffle icon"></i>
                                    </a>
                                  </div>
                                </div>
                                <ul class="product-flag">
                                  <li class="new">New</li>
                                  <li class="discount visually-hidden">-10%</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-8 p-0">
                              <div class="product-desc">
                                <div class="product-info">
                                  <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                                  <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                  </div>
                                  <div class="prices">
                                    <span class="price-old visually-hidden">₹29.16</span>
                                    <span class="price text-black">₹43.80</span>
                                  </div>
                                  <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                  </ul>
                                  <div class="availability-list">Availability: <span>300 In Stock</span></div>
                                </div>
                                <div class="product-footer">
                                  <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                  <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="pagination-content-wrap">
                    <nav class="pagination-nav">
                      <ul class="pagination justify-content-center">
                        <li><a class="active" href="#/">1</a></li>
                        <li><a href="#/">2</a></li>
                        <li><a href="#/"><i class="icon-arrow-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Shop Area ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

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