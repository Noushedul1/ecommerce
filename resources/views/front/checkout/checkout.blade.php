<x-front-layout>
    @section('front_title','Checkout')
    @section('front_content')
    <div class="container">
        <div class="row">
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Calculate shipping </h4>
                        <div class="calculate-discount-content">
                            <div class="input-style">
                                <input type="text" name="first_name" placeholder="First Name">
                            </div>
                            <div class="input-style">
                                <input type="text" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="input-style">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="input-style">
                                <input type="text" name="mobile" placeholder="Mobile">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Payment Method</h4>
                        <div class="input-style">
                            <label for="">
                                <input type="radio" checked placeholder="" name="payment_method">Cash on Delivery
                            </label>
                        </div>
                        <div class="input-style">
                            <h4>Delivery Method</h4>
                            <label for="">
                                <input type="radio" checked placeholder="" name="delivery_method">Home Delivery
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
