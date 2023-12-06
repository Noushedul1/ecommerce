<x-front-layout>
    @section('front_title','Home')
    @section('front_content')
    <!-- mini cart start -->
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Stylish Swing Chair</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/cart/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Modern Chairs</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-btn btn-hover">
                    <a class="theme-color" href="cart.html">view cart</a>
                </div>
                <div class="checkout-btn btn-hover">
                    <a class="theme-color" href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-area">
        <div class="slider-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url({{ asset('/front') }}/assets/images/slider/slider-bg-1.jpg)">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="slider-content-1 slider-animated-1">
                                        <h3 class="animated">new arrival</h3>
                                        <h1 class="animated">Summer <br>Collection</h1>
                                        <div class="slider-btn btn-hover">
                                            <a href="product-details.html" class="btn animated">
                                                Shop Now <i class=" ti-arrow-right "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="hero-slider-img-1 slider-animated-1">
                                        <img class="animated animated-slider-img-1" src="{{ asset('/front') }}/assets/images/slider/slider-img-1.png" alt="">
                                        <div class="product-offer animated">
                                            <h5>30% <span>Off</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="intro-section slider-height-1 slider-content-center bg-img single-animation-wrap slider-bg-color-1" style="background-image:url({{ asset('/front') }}/assets/images/slider/slider-bg-1.jpg)">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="slider-content-1 slider-animated-1">
                                        <h3 class="animated">new arrival</h3>
                                        <h1 class="animated">Summer <br>Collection</h1>
                                        <div class="slider-btn btn-hover">
                                            <a href="product-details.html" class="btn animated">
                                                Shop Now <i class=" ti-arrow-right "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="hero-slider-img-1 slider-animated-1">
                                        <img class="animated animated-slider-img-1" src="{{ asset('/front') }}/assets/images/slider/slider-img-1-2.png" alt="">
                                        <div class="product-offer animated">
                                            <h5>30% <span>Off</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-slider-prev main-slider-nav"><i class="fa fa-angle-left"></i></div>
                <div class="home-slider-next main-slider-nav"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/banner/banner-1.png" alt=""></a>
                        <div class="banner-content-1">
                            <h5>new arrival</h5>
                            <h3>Office Chair</h3>
                            <div class="banner-btn">
                                <a href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="400">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/banner/banner-2.png" alt=""></a>
                        <div class="banner-content-1">
                            <h5>new arrival</h5>
                            <h3>Hanging Chair</h3>
                            <div class="banner-btn">
                                <a href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="600">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/banner/banner-3.png" alt=""></a>
                        <div class="banner-content-1">
                            <h5>new arrival</h5>
                            <h3>Folding Chair</h3>
                            <div class="banner-btn">
                                <a href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-95">
        <div class="container">
            <div class="section-border section-border-margin-1" data-aos="fade-up" data-aos-delay="200">
                <div class="section-title-timer-wrap bg-white">
                    <div class="section-title-1">
                        <h2>Deal Of The Day</h2>
                    </div>
                    <div id="timer-1-active" class="timer-style-1">
                        <span>End In: </span>
                        <div data-countdown="2021/8/30"></div>
                    </div>
                </div>
            </div>
            <div class="product-slider-active-1 swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                    <div class="swiper-slide">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-25">
                                <a href="{{ route('product_details',$product->id) }}">
                                    <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="{{ $product->product_slug }}">
                                </a>
                                <div class="product-badge badge-top badge-right badge-pink">
                                    <span>-10%</span>
                                </div>
                                <div class="product-action-wrap">
                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                    <button class="product-action-btn-1 showModal" data-id="{{ $product->id }}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="pe-7s-look"></i>
                                    </button>
                                </div>
                                <div class="product-action-2-wrap">
                                    <button class="product-action-btn-2 addToCart" data-id="{{ $product->id }}" data-qty="1" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{ route('product_details',$product->id) }}">{{ $product->name }}</a></h3>
                                <div class="product-price">
                                    <span class="old-price">BDT {{ $product->regular_price }} </span>
                                    <span class="new-price">BDT {{ $product->selling_price }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="product-prev-1 product-nav-1" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-angle-left"></i></div>
                <div class="product-next-1 product-nav-1" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="banner-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/banner/banner-4.png" alt=""></a>
                        <div class="banner-content-2">
                            <span>Sale 30%</span>
                            <h2>New Furniture</h2>
                            <p>Lorem ipsum dolor sit amet consecte adipisicing elit sed do</p>
                            <div class="btn-style-2 btn-hover">
                                <a href="product-details.html" class="btn">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="400">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/banner/banner-5.png" alt=""></a>
                        <div class="banner-content-3">
                            <h3>Up To 30% <img src="{{ asset('/front') }}/assets/images/icon-img/sale.png" alt=""> Every Item</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="service-wrap" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-img">
                            <img src="{{ asset('/front') }}/assets/images/icon-img/car.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Free Shipping</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="service-wrap" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-img">
                            <img src="{{ asset('/front') }}/assets/images/icon-img/time.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Support 24/7</h3>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="service-wrap" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-img">
                            <img src="{{ asset('/front') }}/assets/images/icon-img/dollar.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Money Return</h3>
                            <p>Back Guarantee Under </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="service-wrap" data-aos="fade-up" data-aos-delay="800">
                        <div class="service-img">
                            <img src="{{ asset('/front') }}/assets/images/icon-img/discount.png" alt="">
                        </div>
                        <div class="service-content">
                            <h3>Order Discount</h3>
                            <p>Onevery order over $150</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="home-single-product-img" data-aos="fade-up" data-aos-delay="200">
                        <a href="product-details.html"><img src="{{ asset('/front') }}/assets/images/product/single-product.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="home-single-product-content">
                        <h2 data-aos="fade-up" data-aos-delay="200">Modern Chair</h2>
                        <h3 data-aos="fade-up" data-aos-delay="400">$20.25</h3>
                        <p data-aos="fade-up" data-aos-delay="600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore mt aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                        <div class="product-color" data-aos="fade-up" data-aos-delay="800">
                            <span>Color :</span>
                            <ul>
                                <li><a title="Pink" class="pink" href="#">pink</a></li>
                                <li><a title="Yellow" class="yellow" href="#">yellow</a></li>
                                <li><a title="Purple" class="purple" href="#">purple</a></li>
                            </ul>
                        </div>
                        <div class="product-details-action-wrap" data-aos="fade-up" data-aos-delay="1000">
                            <div class="product-quality">
                                <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                            </div>
                            <div class="single-product-cart btn-hover">
                                <a href="#">Add to cart</a>
                            </div>
                            <div class="single-product-wishlist">
                                <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="single-product-compare">
                                <a title="Compare" href="#"><i class="pe-7s-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pb-95" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="bg-img bg-padding-1" style="background-image:url({{ asset('/front') }}/assets/images/bg/bg-1.png)">
                <div class="banner-content-4">
                    <h2>New Dining <br>Chair Set</h2>
                    <h3>Up To 30% Off</h3>
                    <div class="btn-style-2 btn-hover">
                        <a href="product-details.html" class="btn">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-60">
        <div class="container">
            <div class="section-title-tab-wrap mb-75">
                <div class="section-title-2" data-aos="fade-up" data-aos-delay="200">
                    <h2>Hot Products</h2>
                </div>
                <div class="tab-style-1 nav" data-aos="fade-up" data-aos-delay="400">
                    <a class="active" href="#pro-1" data-bs-toggle="tab">New Arrivals </a>
                    <a href="#pro-2" data-bs-toggle="tab" class=""> Best Sellers </a>
                    <a href="#pro-3" data-bs-toggle="tab" class=""> Sale Items </a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="pro-1" class="tab-pane active">
                    <div class="row">
                        @foreach ($hotProducts as $hotProduct)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-img img-zoom mb-25">
                                    <a href="{{ route('product_details',$hotProduct->id) }}">
                                        <img src="{{ asset('admin/images/product_images/'.$hotProduct->image) }}" alt="{{ $hotProduct->product_slug }}">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1 showModal" data-id="{{ $hotProduct->id }}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ route('product_details',$hotProduct->id) }}">{{ $hotProduct->name }}</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">BDT {{ $hotProduct->regular_price }} </span>
                                        <span class="new-price">BDT {{ $hotProduct->selling_price }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="pro-2" class="tab-pane">
                    <div class="row">
                        @foreach ($bestSellingProducts as $bestSellingProduct)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('admin/images/product_images/'.$bestSellingProduct->image) }}" alt="{{ $bestSellingProduct->product_slug }}">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1 showModal" title="Quick View" data-bs-toggle="modal" data-id="{{ $bestSellingProduct->id }}" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2 addToCart" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{ $bestSellingProduct->name }}</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">BDT {{ $bestSellingProduct->regular_price }} </span>
                                        <span class="new-price">BDT {{ $bestSellingProduct->selling_price }}  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="pro-3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-4.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Stylish Swing Chair</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$25.89 </span>
                                        <span class="new-price">$20.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-3.png" alt="">
                                    </a>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Easy Modern Chair</a></h3>
                                    <div class="product-price">
                                        <span>$50.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-5.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Interior moderno render</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$45.00 </span>
                                        <span class="new-price">$40.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-2.png" alt="">
                                    </a>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">New Modern Sofa Set</a></h3>
                                    <div class="product-price">
                                        <span>$30.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-1.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">New Modern Sofa Set</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$25.89 </span>
                                        <span class="new-price">$20.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-8.png" alt="">
                                    </a>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Modern Swivel Chair</a></h3>
                                    <div class="product-price">
                                        <span>$50.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-7.png" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Round Standard Chair</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">$45.00 </span>
                                        <span class="new-price">$40.00 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35">
                                <div class="product-img img-zoom mb-25">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/front') }}/assets/images/product/product-6.png" alt="">
                                    </a>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Stylish Dining Chair</a></h3>
                                    <div class="product-price">
                                        <span>$30.25 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-95">
        <div class="container">
            <div class="brand-logo-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="200">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="400">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="600">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="800">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1000">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-brand-logo" data-aos="fade-up" data-aos-delay="1200">
                            <a href="#"><img src="{{ asset('/front') }}/assets/images/brand-logo/brand-logo-1.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('front_script')
    <script>
        $(document).ready(function(){
            $(document).on('click','.showModal',function(){
                var productId = $(this).data('id');
                // alert(productId);
                var baseUrl = {!! json_encode(url('/')) !!} ;
                // alert(baseUrl);
                $.ajax({
                    method: "GET",
                    url: "/get-product-info-for-modal",
                    dataType: "JSON",
                    data: {id:productId},
                    success: function(res) {
                        console.log(res);
                        $('#modalImage').attr('src',baseUrl+'/admin/images/product_images/'+res.image);
                        $('#modalOldPrice').text('BDT '+res.regular_price);
                        $('#modalNewPrice').text('BDT '+res.selling_price);
                        $('#modalShortDescription').text(res.short_description);
                        $('#modalName').text(res.name);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            });
            $(document).on('click','.addToCart',function(){
                var productId = $(this).data('id');
                var qty = $(this).data('qty');

                // alert(qty);
                $.ajax({
                    method: "POST",
                    url: "/add-to-cart",
                    dataType:"JSON",
                    data: {product_id:productId,qty:qty},
                    success: function(data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
    @endpush
    @endsection
</x-front-layout>
