<x-front-layout>
    @section('front_title','Checkout')
    @section('front_content')
    <div class="container">
        <div class="row">
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
                            <a class="theme-color" href="{{ route('checkout_Index') }}">view cart</a>
                        </div>
                        <div class="checkout-btn btn-hover">
                            <a class="theme-color" href="checkout.html">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Calculate shipping </h4>
                        <div class="calculate-discount-content">
                            <div class="input-style">
                                <input type="text" name="first_name" placeholder="First Name">
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-style">
                                <input type="text" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="input-style">
                                <input type="text" name="email" placeholder="Email">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-style">
                                <input type="text" name="mobile" placeholder="Mobile">
                                @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="select-style mb-15">
                                <select class="select-two-active" name="city">
                                    <option disabled selected value="">Select City</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="barishal">Barishal</option>
                                    <option value="dinajpur">Dinajput</option>
                                    <option value="rangpur">Rangpur</option>
                                </select>
                            </div>
                            <div class="input-style">
                                <textarea name="address" id="" cols="30" rows="10" placeholder="Address"></textarea>
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Payment Method</h4>
                        <div class="input-style">
                            <label for="">
                                <input type="radio" checked placeholder="" name="payment_method" value="cash on delivery">Cash on Delivery
                            </label>
                        </div>
                        <div class="input-style">
                            <h4>Delivery Method</h4>
                            <label for="">
                                <input type="radio" checked placeholder="" name="delivery_method" value="home delivery">Home Delivery
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="grand-total-wrap">
                        <div class="grand-total-content">
                            <h3>Total Items <span>{{ $carts->count() }}</span></h3>
                            <div class="grand-shipping">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Home Delivery</th>
                                        <th>Total</th>
                                    </tr>
                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td>{{ $cart->name }}</td>
                                        <td>{{ $cart->quantity }} x {{ $cart->price }} BDT</td>
                                        <td>60 BDT</td>
                                        <td>{{ $cart->price*$cart->quantity+60 }} BDT</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="grand-total">
                                <h4>Total <span>BDT {{  Cart::getSubTotal()+$carts->count()*60 }}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grand-total-btn btn-success text-center">
                    <input type="submit" class="btn theme-color text-white" value="Confirm Order">
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-front-layout>
