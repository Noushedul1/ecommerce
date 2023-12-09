<x-front-layout>
    @section('front_title','Product Details')
    @section('front_content')
    <div class="main-wrapper main-wrapper-2">
        <!-- mini cart start -->
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="pe-7s-close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    @foreach ($carts as $cart)
                    <li>
                        <div class="cart-img">
                            <a href="#"><img src="{{ asset('admin/images/product_images/'.$cart->attributes->image) }}" alt="" height="50" width="50"></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="{{ route('product_details',$cart->id) }}">{{ $cart->name }}</a></h4>
                            <span> {{ $cart->quantity }} × BDT {{ $cart->price }}	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="{{ route('remove_product_cart',$cart->id) }}">×</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>BDT {{  Cart::getSubTotal(); }}</span></h4>
                </div>
                <div class="cart-btn btn-hover">
                    <a class="theme-color" href="{{ route('cart_View') }}">view cart</a>
                </div>
                <div class="checkout-btn btn-hover">
                    <a class="theme-color" href="{{ route('checkout_Index') }}">checkout</a>
                </div>
            </div>
        </div>
    </div>
        <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2 data-aos="fade-up" data-aos-delay="200">Product Details</h2>
                    <ul data-aos="fade-up" data-aos-delay="400">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="ti-angle-right"></i></li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
                <img src="" alt="">
            </div>
            <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
                <img src="assets/images/banner/breadcrumb-2.png" alt="">
            </div>
        </div>
        <div class="product-details-area pb-100 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details-img-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="swiper-container product-details-big-img-slider-2 pd-big-img-style">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="{{ asset('admin/images/product_images/'.$product->image) }}">
                                                    <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/pro-details-large-img-1.png">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product-details/pro-details-zoom-img-2.png">
                                                    <img src="assets/images/product-details/pro-details-large-img-2.png" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/pro-details-large-img-2.png">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product-details/pro-details-zoom-img-3.png">
                                                    <img src="assets/images/product-details/pro-details-large-img-3.png" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/pro-details-large-img-3.png">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product-details/pro-details-zoom-img-4.png">
                                                    <img src="assets/images/product-details/pro-details-large-img-4.png" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/pro-details-large-img-4.png">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="assets/images/product-details/pro-details-zoom-img-5.png">
                                                    <img src="assets/images/product-details/pro-details-large-img-5.png" alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup" href="assets/images/product-details/pro-details-large-img-5.png">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details-small-img-wrap">
                                <div class="swiper-container product-details-small-img-slider-2 pd-small-img-style pd-small-img-style-modify">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->subimage as $subimg)
                                        <div class="swiper-slide">
                                            <div class="product-details-small-img">
                                                <img src="{{ asset('admin/images/producsMore_images/'.$subimg->images) }}" alt="Product Thumnail">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-prev-2 pd-nav-style-2"> <i class="ti-angle-left"></i></div>
                                <div class="pd-next-2 pd-nav-style-2"> <i class="ti-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content" data-aos="fade-up" data-aos-delay="400">
                            <h2>{{ $product->name }}</h2>
                            <div class="product-details-price">
                                <span class="old-price">BDT {{ $product->regular_price}} </span>
                                <span class="new-price">BDT {{ $product->selling_price }}</span>
                            </div>
                            <div class="product-details-review">
                                <div class="product-rating">
                                    <i class=" ti-star"></i>
                                    <i class=" ti-star"></i>
                                    <i class=" ti-star"></i>
                                    <i class=" ti-star"></i>
                                    <i class=" ti-star"></i>
                                </div>
                                <span>( 1 Customer Review )</span>
                            </div>
                            {{-- <div class="product-color product-color-active product-details-color">
                                <span>Color :</span>
                                <ul>
                                    <li><a title="Pink" class="pink" href="#">pink</a></li>
                                    <li><a title="Yellow" class="active yellow" href="#">yellow</a></li>
                                    <li><a title="Purple" class="purple" href="#">purple</a></li>
                                </ul>
                            </div> --}}
                                {{-- <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
                                <div class="product-details-action-wrap">
                                    <div class="product-quality">
                                        {{-- <a href="{{ route('cart_decr',['id'=>$product->id]) }}" class="dec qtybutton">-</a> --}}
                                        <input class="cart-plus-minus-box input-text qty text pqty" name="qty" value="1">
                                        {{-- <a href="{{ route('cart_incr',['id'=>$product->id]) }}" class="inc qtybutton">+</a> --}}
                                    </div>
                                    <div class="single-product-cart btn-hover">
                                        <a href="" class="addToCart" data-id="{{ $product->id }}">Add to cart</a>
                                    </div>
                                    <div class="single-product-wishlist">
                                        <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="single-product-compare">
                                        <a title="Compare" href="#"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span class="title">SKU:</span> Ch-256xl</li>
                                    <li><span class="title">Category:</span>
                                        <ul>
                                            <li><a href="#">Office</a>,</li>
                                            <li><a href="#">Home</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="title">Tags:</span>
                                        <ul class="tag">
                                            <li><a href="#">Furniture</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-icon-style-4">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area pb-85">
            <div class="container">
                <div class="description-review-topbar nav" data-aos="fade-up" data-aos-delay="200">
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Short Description </a>
                    <a data-bs-toggle="tab" href="#des-details2" class="">Long Description</a>
                    <a data-bs-toggle="tab" href="#des-details3" class=""> Reviews </a>
                </div>
                <div class="tab-content">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-content text-center">
                            <p data-aos="fade-up" data-aos-delay="200">{!! $product->short_description !!}</p>
                        </div>
                    </div>
                    <div id="des-details2" class="tab-pane">
                        <div class="specification-wrap table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="width1">Brands</td>
                                        <td>Airi, Brand, Draven, Skudmart, Yena</td>
                                    </tr>
                                    <tr>
                                        <td class="width1">Color</td>
                                        <td>Blue, Gray, Pink</td>
                                    </tr>
                                    <tr>
                                        <td class="width1">Size</td>
                                        <td>L, M, S, XL, XXL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="review-wrapper">
                            <h3>1 review for Sleeve Button Cowl Neck</h3>
                            <div class="single-review">
                                <div class="review-img">
                                    <img src="assets/images/product-details/review-1.png" alt="">
                                </div>
                                <div class="review-content">
                                    <div class="review-rating">
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                        <a href="#"><i class="ti-star"></i></a>
                                    </div>
                                    <h5><span>HasTech</span> - April 29, 2020</h5>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                </div>
                            </div>
                        </div>
                        <div class="ratting-form-wrapper">
                            <h3>Add a Review</h3>
                            <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                            <div class="your-rating-wrap">
                                <span>Your rating</span>
                                <div class="your-rating">
                                    <a href="#"><i class="ti-star"></i></a>
                                    <a href="#"><i class="ti-star"></i></a>
                                    <a href="#"><i class="ti-star"></i></a>
                                    <a href="#"><i class="ti-star"></i></a>
                                    <a href="#"><i class="ti-star"></i></a>
                                </div>
                            </div>
                            <div class="ratting-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="rating-form-style mb-15">
                                                <label>Name <span>*</span></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="rating-form-style mb-15">
                                                <label>Email <span>*</span></label>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="rating-form-style mb-15">
                                                <label>Your review <span>*</span></label>
                                                <textarea name="Your Review"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="save-email-option">
                                                <p><input type="checkbox"> <label>Save my name, email, and website in this browser for the next time I comment.</label></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-submit">
                                                <input type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product-area pb-95">
            <div class="container">
                <div class="section-title-2 st-border-center text-center mb-75" data-aos="fade-up" data-aos-delay="200">
                    <h2>Related Product</h2>
                </div>
                <div class="related-product-active swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($reladedProducts as $reladedProduct)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-img img-zoom mb-25">
                                    <a href="{{ route('product_details',$reladedProduct->id) }}">
                                        <img src="{{ asset('admin/images/product_images/'.$reladedProduct->image) }}" alt="">
                                    </a>
                                    <div class="product-badge badge-top badge-right badge-pink">
                                        <span>-10%</span>
                                    </div>
                                    <div class="product-action-wrap">
                                        <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                        <button class="product-action-btn-1 showModal" id="showModal" data-id="{{ $reladedProduct->id }}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="pe-7s-look"></i>
                                        </button>
                                    </div>
                                    <div class="product-action-2-wrap">
                                        <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="{{ route('product_details',$reladedProduct->id) }}">{{ $reladedProduct->name }}</a></h3>
                                    <div class="product-price">
                                        <span class="old-price">BDT {{ $reladedProduct->regular_price }}</span>
                                        <span class="new-price">BDT {{ $reladedProduct->selling_price }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area">
            <div class="bg-gray-2">
                <div class="container">
                    <div class="footer-top pt-80 pb-35">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-about mb-40">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, cons adipi elit, sed do eiusmod tempor incididunt ut aliqua.</p>
                                    <div class="payment-img">
                                        <a href="#"><img src="assets/images/icon-img/payment.png" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-widget-margin-1 footer-list mb-40">
                                    <h3 class="footer-title">Information</h3>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Service</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-list mb-40">
                                    <h3 class="footer-title">My Accound</h3>
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Order History</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="footer-widget footer-widget-margin-2 footer-address mb-40">
                                    <h3 class="footer-title">Get in touch</h3>
                                    <ul>
                                        <li><span>Address: </span>Your address goes here </li>
                                        <li><span>Telephone Enquiry:</span> (012) 345 6789</li>
                                        <li><span>Email: </span>demo@example.com</li>
                                    </ul>
                                    <div class="open-time">
                                        <p>Open : <span>8:00 AM</span> - Close : <span>18:00 PM</span></p>
                                        <p>Saturday - Sunday : Close</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-3">
                <div class="container">
                    <div class="footer-bottom copyright text-center bg-gray-3">
                        <p>Copyright ©2021 All rights reserved | Made with <i class="fa fa-heart"></i> by <a href="https://hasthemes.com/"> HasThemes</a>.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Product Modal start -->
        <div class="modal fade quickview-modal-style" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close"><i class=" ti-close "></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-0">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="modal-img-wrap">
                                    <img src="" id="modalImage" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="product-details-content quickview-content">
                                    <h2 id="modalName">New Modern Chair</h2>
                                    <div class="product-details-price">
                                        <span class="old-price" id="modalOldPrice">$25.89 </span>
                                        <span class="new-price" id="modalNewPrice">$20.25</span>
                                    </div>
                                    <div class="product-details-review">
                                        <div class="product-rating">
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                            <i class=" ti-star"></i>
                                        </div>
                                        <span>( 1 Customer Review )</span>
                                    </div>
                                    <p id="modalShortDescription"></p>
                                    <div class="product-details-action-wrap">
                                        <div class="product-quality">
                                            <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="1">
                                        </div>
                                        <div class="single-product-cart btn-hover">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="single-product-wishlist">
                                            <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
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
            </div>
        </div>
        <!-- Product Modal end -->
        <!-- Mobile Menu start -->
        <div class="off-canvas-active">
            <a class="off-canvas-close"><i class=" ti-close "></i></a>
            <div class="off-canvas-wrap">
                <div class="welcome-text off-canvas-margin-padding">
                    <p>Default Welcome Msg! </p>
                </div>
                <div class="mobile-menu-wrap off-canvas-margin-padding-2">
                    <div id="mobile-menu" class="slinky-mobile-menu text-left">
                        <ul>
                            <li>
                                <a href="#">HOME</a>
                                <ul>
                                    <li><a href="index.html">Home version 1 </a></li>
                                    <li><a href="index-2.html">Home version 2</a></li>
                                    <li><a href="index-3.html">Home version 3</a></li>
                                    <li><a href="index-4.html">Home version 4</a></li>
                                    <li><a href="index-5.html">Home version 5</a></li>
                                    <li><a href="index-6.html">Home version 6</a></li>
                                    <li><a href="index-7.html">Home version 7</a></li>
                                    <li><a href="index-8.html">Home version 8</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">SHOP</a>
                                <ul>
                                    <li>
                                        <a href="#">Shop Layout</a>
                                        <ul>
                                            <li><a href="shop.html">Standard Style</a></li>
                                            <li><a href="shop-sidebar.html">Shop Grid Sidebar</a></li>
                                            <li><a href="shop-list.html">Shop List Style</a></li>
                                            <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-location.html">Store Location</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Product Layout</a>
                                        <ul>
                                            <li><a href="product-details.html">Tab Style 1</a></li>
                                            <li><a href="product-details-2.html">Tab Style 2</a></li>
                                            <li><a href="product-details-gallery.html">Gallery style </a></li>
                                            <li><a href="product-details-affiliate.html">Affiliate style</a></li>
                                            <li><a href="product-details-group.html">Group Style</a></li>
                                            <li><a href="product-details-fixed-img.html">Fixed Image Style </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">PAGES </a>
                                <ul>
                                    <li><a href="about-us.html">About Us </a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout </a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="wishlist.html">Wishlist </a></li>
                                    <li><a href="compare.html">Compare </a></li>
                                    <li><a href="contact-us.html">Contact us </a></li>
                                    <li><a href="login-register.html">Login / Register </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">BLOG </a>
                                <ul>
                                    <li><a href="blog.html">Blog Standard </a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">ABOUT US</a>
                            </li>
                            <li>
                                <a href="contact-us.html">CONTACT US</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="language-currency-wrap language-currency-wrap-modify">
                    <div class="currency-wrap border-style">
                        <a class="currency-active" href="#">$ Dollar (US) <i class=" ti-angle-down "></i></a>
                        <div class="currency-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                <li><a href="#">Riyal (SAR) </a></li>
                                <li><a href="#">Rupee (INR) </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="language-wrap">
                        <a class="language-active" href="#"><img src="assets/images/icon-img/flag.png" alt=""> English <i class=" ti-angle-down "></i></a>
                        <div class="language-dropdown">
                            <ul>
                                <li><a href="#"><img src="assets/images/icon-img/flag.png" alt="">English </a></li>
                                <li><a href="#"><img src="assets/images/icon-img/spanish.png" alt="">Spanish</a></li>
                                <li><a href="#"><img src="assets/images/icon-img/arabic.png" alt="">Arabic </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('front_script')
    <script>
        $(document).ready(function(){
            var CartPlusMinus = $('.product-quality');

            CartPlusMinus.prepend('<a class="dec qtybutton">-</a>');
            CartPlusMinus.append('<a class="inc qtybutton">+</a>');
            $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
            });

            $(document).on('click','.addToCart',function(){
                var $productId = $(this).data('id');
                var $qty = $('.pqty').val();
                $.ajax({
                    method: "POST",
                    url: '/add-to-cart',
                    dataType: "JSON",
                    data: {product_id:$productId,qty:$qty},
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
