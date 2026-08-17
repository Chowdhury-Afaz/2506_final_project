@extends('layouts.frontendLayout')

@section('title', 'Checkout')

@section('content')

<section id="checkout-page">

    <div class="container">

        <!-- Page Header -->
        <div class="checkout-header">

            <div class="checkout-header-content">

                <span class="checkout-header-icon">
                    <iconify-icon icon="clarity:shopping-cart-line"></iconify-icon>
                </span>

                <span class="checkout-header-label">
                    Secure Checkout
                </span>

                <h1>Complete Your Order</h1>

                <p>
                    You're just one step away from getting your fresh products.
                </p>

                <div class="checkout-breadcrumb">

                    <a href="{{ route('homepage') }}">
                        Home
                    </a>

                    <iconify-icon icon="mdi:chevron-right"></iconify-icon>

                    <span>Checkout</span>

                </div>

            </div>

        </div>


        <div class="row g-5">

            <!-- ==========================
                 Billing Information
            ========================== -->

            <div class="col-lg-7">

                <div class="checkout-card">

                    <div class="checkout-card-header">
                        <h3>Billing Information</h3>
                    </div>

                    <div class="checkout-form">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="first_name">
                                        First Name <span>*</span>
                                    </label>

                                    <input type="text" id="first_name" name="first_name"
                                        placeholder="Enter your first name" value="{{ getCustomerName()['fName'] }}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="last_name">
                                        Last Name <span>*</span>
                                    </label>

                                    <input type="text" id="last_name" name="last_name"
                                        placeholder="Enter your last name" value="{{ getCustomerName()['lName'] }}">
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="checkout-input">
                                    <label for="company">
                                        Company Name
                                        <small>(Optional)</small>
                                    </label>

                                    <input type="text" id="company" name="company" placeholder="Company name">
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="checkout-input">
                                    <label for="country">
                                        Country / Region <span>*</span>
                                    </label>

                                    <select id="country" name="country">
                                        <option disabled value="">Select Country</option>
                                        <option selected value="bangladesh">Bangladesh</option>
                                        <option disabled value="india">India</option>
                                        <option disabled value="usa">United States</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="checkout-input">
                                    <label for="address">
                                        Street Address <span>*</span>
                                    </label>

                                    <input type="text" id="address" name="address"
                                        placeholder="House number and street name"
                                        value="{{ auth('customer')->user()->addr ?? null }}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="city">
                                        City <span>*</span>
                                    </label>

                                    <input type="text" id="city" name="city" placeholder="City">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="postcode">
                                        Postal Code <span>*</span>
                                    </label>

                                    <input type="text" id="postcode" name="postcode" placeholder="Postal code">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="phone">
                                        Phone <span>*</span>
                                    </label>

                                    <input type="tel" id="phone" name="phone" placeholder="Phone number"
                                        value="{{ auth('customer')->user()->phone ?? null }}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="checkout-input">
                                    <label for="email">
                                        Email <span>*</span>
                                    </label>

                                    <input type="email" id="email" name="email" placeholder="Email address"
                                        value="{{ auth('customer')->user()->email}}">
                                </div>
                            </div>


                            <div class="col-12">

                                <div class="checkout-checkbox">

                                    <input type="checkbox" id="different_address">

                                    <label for="different_address">
                                        Ship to a different address
                                    </label>

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="checkout-input">

                                    <label for="notes">
                                        Order Notes
                                        <small>(Optional)</small>
                                    </label>

                                    <textarea id="notes" name="notes" rows="4"
                                        placeholder="Notes about your order, e.g. special notes for delivery"></textarea>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ==========================
                 Order Summary
            ========================== -->

            <div class="col-lg-5">

                <div class="checkout-summary">

                    <h3>Order Summary</h3>

                    @php
                    $total = 0;
                    @endphp
                    <!-- Product -->
                    @foreach ($carts as $cart)


                    <div class="summary-product">

                        <div class="summary-product-info">

                            <div class="summary-product-image">
                                <img src="{{ getImage($cart->product->image) }}" alt="{{ $cart->product->title }}">
                            </div>

                            <div>
                                <h5>{{ $cart->product->title }}</h5>
                                <span>Qty: {{ $cart->qty }} * {{ $cart->product->selling_price ??
                                    $cart->product->price}} tk</span>
                            </div>

                        </div>
                        @php
                        $subtotal = $cart->qty * ( $cart->product->selling_price ?? $cart->product->price);
                        $total+= $subtotal;
                        @endphp
                        <strong>
                            {{ number_format($subtotal,2) }} tk
                        </strong>

                    </div>

                    @endforeach





                    <!-- Summary -->

                    <div class="summary-divider"></div>


                    <div class="summary-row">
                        <span>Subtotal</span>
                        <strong>{{ number_format($total,2) }} tk</strong>
                    </div>


                    <div class="summary-row">
                        <span>Shipping</span>
                        <strong class="free-shipping">Free</strong>
                    </div>


                    <div class="summary-divider"></div>


                    <div class="summary-total">
                        <span>Total</span>
                        <strong>{{ number_format($total,2) }} tk</strong>
                    </div>


                    <!-- Payment -->

                    <div class="payment-section">

                        <h4>Payment Method</h4>


                        <label class="payment-option">

                            <input type="radio" name="payment_method" value="cod" checked>

                            <span class="payment-radio"></span>

                            <span>Cash on Delivery</span>

                        </label>


                        <label class="payment-option">

                            <input type="radio" name="payment_method" value="online">

                            <span class="payment-radio"></span>

                            <span>SSL Commerce</span>

                        </label>

                    </div>


                    <!-- Place Order -->

                    <button type="button" class="place-order-btn">
                        Place Order
                    </button>

                    <button class="my-3 w-100" id="sslczPayBtn" token="if you have any token validation" postdata=""
                        order="If you already have the transaction generated for current order"
                        endpoint="/pay-via-ajax"> Place order
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

@push('script')

<script>
    $('#sslczPayBtn').click(function(){

        var obj = {};
        obj.cus_name = `{{  auth('customer')->user()->name  }}`;
        obj.cus_phone = $('#phone').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.city = $('#city').val();
        obj.postcode = $('#postcode').val();
        obj.amount = `{{ $total }}`;
        
        $('#sslczPayBtn').prop('postdata', obj);
    })
</script>
<script>
    (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
    
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
</script>
@endpush

@endsection