<x-front-layout>
    @section('front_title','Cart View')
    @push('front_link')
    <style>
        .toast-success{
            color: green;
        }
    </style>
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
                <h2>Cart</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><i class="ti-angle-right"></i></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-img-1">
            <img src="assets/images/banner/breadcrumb-1.png" alt="">
        </div>
        <div class="breadcrumb-img-2">
            <img src="assets/images/banner/breadcrumb-2.png" alt="">
        </div>
    </div>
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <form action="#"> --}}
                        <div class="cart-table-content">
                            <h4 class="text-center">In Your Shopping Cart: {{ $carts->count() }} Items</h4>
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="width-thumbnail"></th>
                                            <th class="width-name">Product</th>
                                            <th class="width-image">Image</th>
                                            <th class="width-price"> Price</th>
                                            <th class="width-quantity">Quantity</th>
                                            <th class="width-subtotal">Subtotal</th>
                                            <th class="width-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carts as $cart)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td class="product-thumbnail">
                                                <a href="product-details.html"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <h5><a href="{{ route('product_details',$cart->id) }}">{{ $cart->name }}</a></h5>
                                            </td>
                                            <td class="product-image"><span>
                                                <img src="{{ asset('/admin/images/product_images/'.$cart->attributes->image) }}" alt="" height="100" width="100">
                                            </span></td>
                                            <td class="product-cart-price"><span class="amount">BDT {{ $cart->price }}</span></td>
                                            <td class="cart-quality">
                                                <div class="product-quality">
                                                    <a href="{{ route('cart_decr',['id'=>$cart->id]) }}" class="dec qtybutton">-</a>
                                                    <input class="cart-plus-minus-box input-text qty text" name="qtybutton" value="{{ $cart->quantity }}">
                                                    <a href="{{ route('cart_incr',['id'=>$cart->id]) }}" class="inc qtybutton">+</a>
                                                </div>
                                            </td>
                                            <td class="product-total"><span>
                                                <p>{{ $cart->quantity * $cart->price }}</p>
                                            </span></td>
                                            <td class="product-remove"><a href="{{ route('remove_product_cart',$cart->id) }}"><i class=" ti-trash "></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update btn-hover">
                                        <a href="{{ url('/') }}">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear-wrap">
                                        <div class="cart-clear btn-hover">
                                            <button>Update Cart</button>
                                        </div>
                                        <div class="cart-clear btn-hover">
                                            <a href="#">Clear Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            <div class="grand-total-btn btn-hover">
                <a class="btn btn-success" href="{{ route('checkout_Index') }}">Proceed to checkout</a>
            </div>
        </div>
    </div>
    @push('front_script')
    <script>
        var CartPlusMinus = $('.product-quality');

        // CartPlusMinus.prepend('<a class="dec qtybutton">-</a>');
        // CartPlusMinus.append('<a class="inc qtybutton">+</a>');
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
    </script>
    @endpush
    @endsection
</x-front-layout>
