<x-front-layout>
    @section('front_title','Category Page')
    @push('front_link')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    @section('front_content')
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
                <h2 data-aos="fade-up" data-aos-delay="200">Shop</h2>
                <ul data-aos="fade-up" data-aos-delay="400">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>{{ $category->name }}</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1" data-aos="fade-right" data-aos-delay="200">
            <img src="{{ asset('front') }}/assets/images/banner/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2" data-aos="fade-left" data-aos-delay="200">
            <img src="{{ asset('front') }}/assets/images/banner/breadcrumb-2.png" alt="">
        </div>
    </div>
    <div class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12">
                    <div class="shop-topbar-wrapper mb-40">
                        <div class="shop-topbar-left">
                            <div class="showing-item">
                                <span>Showing 1–12 of 60 results</span>
                            </div>
                        </div>
                        <div class="shop-topbar-right">
                            <div class="shop-sorting-area">
                                <select class="nice-select nice-select-style-1">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                </select>
                            </div>
                            <div class="shop-view-mode nav">
                                <a class="active" href="#shop-1" data-bs-toggle="tab"><i class=" ti-layout-grid3 "></i> </a>
                                <a href="#shop-2" data-bs-toggle="tab" class=""><i class=" ti-view-list-alt "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product-wrap mb-35" data-aos="fade-up" data-aos-delay="200">
                                            <div class="product-img img-zoom mb-25">
                                                <a href="{{ route('product_details',$product->id) }}">
                                                    <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="">
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
                                                    <span class="old-price">BDT {{ $product->regular_price }}</span>
                                                    <span class="new-price">BDT {{ $product->selling_price }} </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="pagination-style-1" data-aos="fade-up" data-aos-delay="200">
                                    <ul>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="next" href="#"><i class=" ti-angle-double-right "></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('front_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','success') }}";
        switch (type) {
            case 'success':
                toastr.options = {
                    'progressBar': true,
                    'closeBar': true
                }
                toastr.success("{{ Session::get('message') }}","Success",{
                    timeOut: 1500
                });
                break;
        }
        @endif
    </script>
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
                        // $('#modalShortDescription').text(res.short_description);
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
                $.ajax({
                    method: "POST",
                    url: "/add-to-cart",
                    dataType: "JSON",
                    data: {product_id:productId,qty:qty},
                    success: function(data) {
                        if(data.status = '200'){
                            console.log('okasdfasdf');
                            $('.cartSuccess').text(data.cartAdd);
                        }
                    }
                });
            });
        });
    </script>
    @endpush
    @endsection
</x-front-layout>
