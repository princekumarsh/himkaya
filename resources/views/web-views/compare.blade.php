@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container" data-padding-top="62">
        <div class="shopping-compare-wrap">
          <h4 class="title fz-24 mb-0">Products compare</h4>
          <div class="poscompare-table-container">
            <div class="poscompare-product-tr mb-30">
              <div class="poscompare-product-td">
                <a href="#/" class="poscompare-remove-all">Remove all products</a>
              </div>
              <div class="poscompare-product-td">
                <div class="poscompare-product">
                  <div class="product-thumb">
                    <a href="single-product.html">
                      <img src="{{asset('public/assets_ui')}}/img/shop/02.jpg" alt="Image-HasTech">
                    </a>
                    <a href="#/" class="poscompare-remove">Remove</a>
                  </div>
                  <div class="product-info">
                    <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Te...</a></h4>
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
                    <a class="btn-product-add" href="single-product.html">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="poscompare-product-td">
                <div class="poscompare-product">
                  <div class="product-thumb">
                    <a href="single-product.html">
                      <img src="{{asset('public/assets_ui')}}/img/shop/09.jpg" alt="Image-HasTech">
                    </a>
                    <a href="#/" class="poscompare-remove">Remove</a>
                  </div>
                  <div class="product-info">
                    <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anora...</a></h4>
                    <div class="star-content">
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                    </div>
                    <div class="prices">
                      <span class="price-old visually-hidden">₹29.16</span>
                      <span class="price text-black">₹35.38</span>
                    </div>
                    <a class="btn-product-add" href="single-product.html">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="poscompare-product-td">
                <div class="poscompare-product">
                  <div class="product-thumb">
                    <a href="single-product.html">
                      <img src="{{asset('public/assets_ui')}}/img/shop/11.jpg" alt="Image-HasTech">
                    </a>
                    <a href="#/" class="poscompare-remove">Remove</a>
                  </div>
                  <div class="product-info">
                    <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective L...</a></h4>
                    <div class="star-content">
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                    </div>
                    <div class="prices">
                      <span class="price-old visually-hidden">₹29.16</span>
                      <span class="price text-black">₹35.38</span>
                    </div>
                    <a class="btn-product-add" href="single-product.html">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="poscompare-product-td">
                <div class="poscompare-product">
                  <div class="product-thumb">
                    <a href="single-product.html">
                      <img src="{{asset('public/assets_ui')}}/img/shop/06.jpg" alt="Image-HasTech">
                    </a>
                    <a href="#/" class="poscompare-remove">Remove</a>
                  </div>
                  <div class="product-info">
                    <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kay...</a></h4>
                    <div class="star-content">
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                    </div>
                    <div class="prices">
                      <span class="price-old visually-hidden">₹29.16</span>
                      <span class="price text-black">₹23.06</span>
                    </div>
                    <a class="btn-product-add" href="single-product.html">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="poscompare-product-td">
                <div class="poscompare-product">
                  <div class="product-thumb">
                    <a href="single-product.html">
                      <img src="{{asset('public/assets_ui')}}/img/shop/13.jpg" alt="Image-HasTech">
                    </a>
                    <a href="#/" class="poscompare-remove">Remove</a>
                  </div>
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
                      <span class="price-old visually-hidden">₹29.16</span>
                      <span class="price text-black">₹10.98</span>
                    </div>
                    <a class="btn-product-add" href="single-product.html">Add to cart</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="poscompare-product-tr poscompare-data-list list-bg-color">
              <div class="poscompare-product-td">
                <span class="title">Compositions</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Compositions</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Elastane</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Cotton</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Wool</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Wool</span>
              </div>
            </div>
            <div class="poscompare-product-tr poscompare-data-list">
              <div class="poscompare-product-td">
                <span class="title">Paper Type</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Plain</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Ruled</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Doted</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Doted</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Squarred</span>
              </div>
            </div>
            <div class="poscompare-product-tr poscompare-data-list list-bg-color">
              <div class="poscompare-product-td">
                <span class="title">Color</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">White</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Black</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Black</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">Black</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">White</span>
              </div>
            </div>
            <div class="poscompare-product-tr poscompare-data-list">
              <div class="poscompare-product-td">
                <span class="title">Size</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">M</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">S</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">M</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">M</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">XL</span>
              </div>
            </div>
            <div class="poscompare-product-tr poscompare-data-list list-bg-color">
              <div class="poscompare-product-td">
                <span class="title">Frame Size</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">60x90cm</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">80x120cm</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">60x90cm</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">80x120cm</span>
              </div>
              <div class="poscompare-product-td">
                <span class="span">80x120cm</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

@stop