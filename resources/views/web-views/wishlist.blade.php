@extends('layouts.front-end.app')
@section('css_section')

@stop
@section('content')
  
  <main class="main-content">
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container" data-padding-top="62">
        <div class="shopping-wishlist-wrap">
          <div class="row">
            <div class="col-12">
              <div class="wishlist-content">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th class="item-name">Name</th>
                        <th class="item-qty">Qty</th>
                        <th class="item-viewed">Viewed</th>
                        <th class="item-created">Created</th>
                        <th class="item-direct-link">Direct Link</th>
                        <th class="item-default">Default</th>
                        <th class="item-delete">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="item-name">
                          <span><a href="#/">My wishlist</a></span>
                        </td>
                        <td class="item-qty">
                          <span>1</span>
                        </td>
                        <td class="item-viewed">
                          <span>0</span>
                        </td>
                        <td class="item-created">
                          <span>2021-01-27</span>
                        </td>
                        <td class="item-direct-link">
                          <span><a href="#/">View</a></span>
                        </td>
                        <td class="item-default">
                          <span><i class="fa fa-check-square"></i></span>
                        </td>
                        <td class="item-delete">
                          <span><a href="#/"><i class="fa fa-trash"></i></a></span>
                        </td>
                      </tr>
                      <tr>
                        <td class="item-name">
                          <span><a href="#/">My wishlist</a></span>
                        </td>
                        <td class="item-qty">
                          <span>1</span>
                        </td>
                        <td class="item-viewed">
                          <span>0</span>
                        </td>
                        <td class="item-created">
                          <span>2021-01-27</span>
                        </td>
                        <td class="item-direct-link">
                          <span><a href="#/">View</a></span>
                        </td>
                        <td class="item-default">
                          <span><i class="fa fa-check-square"></i></span>
                        </td>
                        <td class="item-delete">
                          <span><a href="#/"><i class="fa fa-trash"></i></a></span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="wishlist-footer">
                  <a href="#/" class="btn-wishlist">Back to Your Account</a>
                  <a href="{{route('home')}}" class="btn-wishlist">Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

@stop