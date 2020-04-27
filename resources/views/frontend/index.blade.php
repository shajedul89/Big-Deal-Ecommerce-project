@extends('frontend.layout.app')


@section('page-content')
<!--slider start-->
@include('frontend.layout.partials.slider')
<!--slider end-->

<!--collection banner start-->

@include('frontend.layout.partials.display-product')
<!--collection banner end-->



<!--rounded category start-->
@include('frontend.layout.partials.rounded-catagory')
<!--rounded category end-->


<!--services start-->
@include('frontend.layout.services')
<!--services end-->

<!--payment offer start -->
@include('frontend.layout.payment-way')
<!--payment offer end-->

<!--title start-->
@include('frontend.layout.product-banner-title')
<!--title end-->

<!--product box start -->
@include('frontend.layout.product')

<!--product box end-->


<!-- masonary-banner start -->
{{-- @include('frontend.layout.partials.masonary-product-banner') --}}
<!-- masonory-banner end -->

<!--tab product-->
<section class="section-pt-space " >
    <div class="tab-product-main">
        <div class="tab-prodcut-contain">
            <ul class="tabs tab-title">
                <li class="current"><a href="tab-1.html">fashion</a></li>
                <li class=""><a href="tab-2.html">electronic</a></li>
                <li class=""><a href="tab-3.html">footware</a></li>
                <li class=""><a href="tab-4.html">sports</a></li>
                <li class=""><a href="tab-5.html">toys</a></li>
                <li class=""><a href="tab-6.html">books</a></li>
            </ul>
        </div>
    </div>
</section>
<!--tab product-->

<!-- product tab  -->
<section class="section-py-space ratio_square ">
    <div class="custom-container addtocart_count">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product no-arrow mb--5">
                    <div class="tab-content-cls ">
                        <div id="tab-1" class="tab-content active default product">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content ">
                            <div class="product-slide-6 no-arrow">
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a6.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a3.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a5.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a1.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/4.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box ">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-back">
                                                <img src="{{URL::to('public/frontend')}}/images/layout-6/product/a2.jpg" class="img-fluid" alt="product">
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag" ></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                    <i class="ti-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                                    <i class="ti-search" aria-hidden="true"></i>
                                                </a>
                                                <a href="compare.html" title="Compare">
                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="product-detail detail-center1">
                                            <ul class="rating-star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Vaccinium cyanococcus .</h6>
                                            <span class="detail-price">$56.21<span>$24.00</span></span>
                                        </div>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                add to cart
                                            </button>
                                            <div class="qty-box cart_qty">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input type="text" name="quantity" class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->


<!-- Parallax banner -->
<section class="section-big-pt-space">
    <div class="full-banner parallax text-left p-left">
        <img src="{{URL::to('public/frontend')}}/images/layout-6/parallax-banner/parelex.jpg" alt="" class="bg-img ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2019</h2>
                        <h3>food market</h3>
                        <h4>special offer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->

<!--title start-->
<div class="title4 section-my-space mt-0">
    <h4>letest <span>blog</span></h4>
</div>
<!--title end-->

<!--blog start-->
<section class="blog section-big-mb-space mb--5 ">
    <div class="custom-container">
        <div class="row">
            <div class="col pr-0">
                <div class="blog-slide-4 no-arrow">
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/blog/1.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/blog/2.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/blog/3.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/blog/4.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                    <div>
                        <div class="blog-contain">
                            <div class="blog-img">
                                <img src="{{URL::to('public/frontend')}}/images/layout-6/blog/2.jpg" alt="blog" class="img-fluid w-100">
                            </div>
                            <div class="blog-details-2">
                                <h4>Proin sit amet libero </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend a massa rhoncus gravida.</p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user-md"></i>Donec lacinia</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-comments"></i>comants</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-label1">27 <br>nov</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog end-->

@endsection