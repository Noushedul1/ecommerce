<x-front-layout>
    @section('front_title','Category Page')
    @section('front_content')
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
                                                <a href="{{ route('product_details') }}">
                                                    <img src="{{ asset('admin/images/product_images/'.$product->image) }}" alt="">
                                                </a>
                                                <div class="product-badge badge-top badge-right badge-pink">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product-action-wrap">
                                                    <button class="product-action-btn-1" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-1 showModal" id="showModal" data-id="{{ $product->id }}" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                                <div class="product-action-2-wrap">
                                                    <button class="product-action-btn-2" title="Add To Cart"><i class="pe-7s-cart"></i> Add to cart</button>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="{{ route('product_details') }}">{{ $product->name }}</a></h3>
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
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="product-list-img">
                                                <a href="{{ route('product_details') }}">
                                                    <img src="{{ asset('front') }}/assets/images/product/product-5.png" alt="Product Style">
                                                </a>
                                                <div class="product-list-badge badge-right badge-pink">
                                                    <span>-20%</span>
                                                </div>
                                                <div class="product-list-quickview">
                                                    <button class="product-action-btn-2" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="shop-list-content">
                                                <h3><a href="{{ route('product_details') }}">Interior moderno render</a></h3>
                                                <div class="product-price">
                                                    <span class="old-price">$70.89 </span>
                                                    <span class="new-price">$55.25 </span>
                                                </div>
                                                <div class="product-list-rating">
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique bibend est a fermentum. Cras faucibus ex quis justo consectetur eleifend in eget diam.</p>
                                                <div class="product-list-action">
                                                    <button class="product-action-btn-3" title="Add to cart"><i class="pe-7s-cart"></i></button>
                                                    <button class="product-action-btn-3" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-3" title="Compare"><i class="pe-7s-shuffle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="product-list-img">
                                                <a href="{{ route('product_details') }}">
                                                    <img src="{{ asset('front') }}/assets/images/product/product-7.png" alt="Product Style">
                                                </a>
                                                <div class="product-list-quickview">
                                                    <button class="product-action-btn-2" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="shop-list-content">
                                                <h3><a href="{{ route('product_details') }}">Round Standard Chair</a></h3>
                                                <div class="product-price">
                                                    <span>$50.25 </span>
                                                </div>
                                                <div class="product-list-rating">
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique bibend est a fermentum. Cras faucibus ex quis justo consectetur eleifend in eget diam.</p>
                                                <div class="product-list-action">
                                                    <button class="product-action-btn-3" title="Add to cart"><i class="pe-7s-cart"></i></button>
                                                    <button class="product-action-btn-3" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-3" title="Compare"><i class="pe-7s-shuffle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="product-list-img">
                                                <a href="{{ route('product_details') }}">
                                                    <img src="{{ asset('front') }}/assets/images/product/product-4.png" alt="Product Style">
                                                </a>
                                                <div class="product-list-badge badge-right badge-pink">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product-list-quickview">
                                                    <button class="product-action-btn-2" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="shop-list-content">
                                                <h3><a href="{{ route('product_details') }}">Stylish Swing Chair</a></h3>
                                                <div class="product-price">
                                                    <span class="old-price">$80.89 </span>
                                                    <span class="new-price">$60.25 </span>
                                                </div>
                                                <div class="product-list-rating">
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique bibend est a fermentum. Cras faucibus ex quis justo consectetur eleifend in eget diam.</p>
                                                <div class="product-list-action">
                                                    <button class="product-action-btn-3" title="Add to cart"><i class="pe-7s-cart"></i></button>
                                                    <button class="product-action-btn-3" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-3" title="Compare"><i class="pe-7s-shuffle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-5">
                                            <div class="product-list-img">
                                                <a href="{{ route('product_details') }}">
                                                    <img src="{{asset('front')}}/images/product/product-8.png" alt="Product Style">
                                                </a>
                                                <div class="product-list-badge badge-right badge-pink">
                                                    <span>-10%</span>
                                                </div>
                                                <div class="product-list-quickview">
                                                    <button class="product-action-btn-2" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="pe-7s-look"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-7">
                                            <div class="shop-list-content">
                                                <h3><a href="{{ route('product_details') }}">Modern Swivel Chair</a></h3>
                                                <div class="product-price">
                                                    <span class="old-price">$45.89 </span>
                                                    <span class="new-price">$30.25 </span>
                                                </div>
                                                <div class="product-list-rating">
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                    <i class=" ti-star"></i>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique bibend est a fermentum. Cras faucibus ex quis justo consectetur eleifend in eget diam.</p>
                                                <div class="product-list-action">
                                                    <button class="product-action-btn-3" title="Add to cart"><i class="pe-7s-cart"></i></button>
                                                    <button class="product-action-btn-3" title="Wishlist"><i class="pe-7s-like"></i></button>
                                                    <button class="product-action-btn-3" title="Compare"><i class="pe-7s-shuffle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination-style-1">
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
        });
    </script>
    @endpush
    @endsection
</x-front-layout>
