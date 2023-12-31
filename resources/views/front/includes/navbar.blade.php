<header class="header-area header-responsive-padding header-height-1">
    <div class="header-top d-none d-lg-block bg-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-6">
                    <div class="welcome-text">
                        <p>Default Welcome Msg! </p>
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="language-currency-wrap">
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
                            <a class="language-active" href="#"><img src="{{ asset('/front') }}/assets/images/icon-img/flag.png" alt=""> English <i class=" ti-angle-down "></i></a>
                            <div class="language-dropdown">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('/front') }}/assets/images/icon-img/flag.png" alt="">English </a></li>
                                    <li><a href="#"><img src="{{ asset('/front') }}/assets/images/icon-img/spanish.png" alt="">Spanish</a></li>
                                    <li><a href="#"><img src="{{ asset('/front') }}/assets/images/icon-img/arabic.png" alt="">Arabic </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('/front') }}/assets/images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li><a href="shop.html">Category</a>
                                    <ul class="mega-menu-style mega-menu-mrg-1">
                                        <li>
                                            <ul>
                                                @foreach ($categories as $category)
                                                <li>
                                                    <a class="dropdown-title" href="{{ route('category_page',$category->id) }}">{{ $category->name }}</a>

                                                    <ul>
                                                        @foreach ($category->subcategory as $subcategory)
                                                        <li><a href="{{ route('subcategory_page',$subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                                {{-- <li>
                                                    <a href="shop.html"><img src="{{ asset('/front') }}/assets/images/banner/menu.png" alt=""></a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">PAGES</a>
                                    <ul class="sub-menu-style">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="contact-us.html">contact us </a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">ABOUT</a></li>
                                @if (Route::has('contact_us'))
                                <li><a href="{{ route('contact_us') }}">CONTACT US</a></li>
                                @endif
                                @if (Route::has('cart_View'))
                                <li><a href="{{ route('cart_View') }}">Cart</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-action-wrap">
                        <div class="header-action-style header-search-1">
                            <a class="search-toggle" href="#">
                                <i class="pe-7s-search s-open"></i>
                                <i class="pe-7s-close s-close"></i>
                            </a>
                            <div class="search-wrap-1">
                                <form action="#">
                                    <input placeholder="Search products…" type="text">
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-action-style">
                            <a title="Login Register" href="login-register.html"><i class="pe-7s-user"></i></a>
                        </div>
                        <div class="header-action-style">
                            <a title="Wishlist" href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="header-action-style header-action-cart">
                            <a class="cart-active" href="#"><i class="pe-7s-shopbag"></i>
                                <span class="product-count bg-black">{{ Cart::getTotalQuantity(); }}</span>
                            </a>
                        </div>
                        <div class="header-action-style d-block d-lg-none">
                            <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
