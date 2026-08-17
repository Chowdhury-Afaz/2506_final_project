

@extends('layouts.frontendLayout')  
@section ('title','Checkout')
@section('content')

    


    <!-- ***Checkout Form*** -->
    <div class="container">
        <h1>Billing Information</h1>
        
        <div class="checkout-columns">
            <!-- Left Column - Billing Form -->
            <div class="billing-column">
                <!-- Billing Information Section -->
                <div class="form-section">
                    <div class="section-title">Billing Information</div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">First name</label>
                                <input type="text" class="form-input billing-input" placeholder="Your first name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Last name</label>
                                <input type="text" class="form-input billing-input" placeholder="Your last name">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Company Name <span class="optional-text">(optional)</span></label>
                        <input type="text" class="form-input billing-input" placeholder="Company name">
                    </div>
                </div>
                
                <hr>
                
                <!-- Street Address Section -->
                <div class="form-section">
                    <div class="address-title">Street Address</div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-input billing-input" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Country / Region</label>
                                <select class="form-select billing-input">
                                    <option>Select</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Canada</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">States</label>
                                <select class="form-select billing-input">
                                    <option>Select</option>
                                    <option>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                    <option>Florida</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-input billing-input" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-input billing-input" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-input billing-input" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    
                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" class="checkbox-input" id="different-address">
                            Ship to a different address
                        </label>
                    </div>
                    
                    <!-- Shipping Address Form (Hidden by Default) -->
                    <div id="shipping-address-form" class="shipping-address-form">
                        <div class="shipping-title">Shipping Address</div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-input shipping-input" placeholder="Your first name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-input shipping-input" placeholder="Your last name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Company Name <span class="optional-text">(optional)</span></label>
                            <input type="text" class="form-input shipping-input" placeholder="Company name">
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Street Address</label>
                                    <input type="text" class="form-input shipping-input" placeholder="Street address">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-input shipping-input" placeholder="City">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <select class="form-select shipping-input">
                                        <option>Select</option>
                                        <option>California</option>
                                        <option>New York</option>
                                        <option>Texas</option>
                                        <option>Florida</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-input shipping-input" placeholder="Zip Code">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-select shipping-input">
                                        <option>Select</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-input shipping-input" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-input shipping-input" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" class="checkbox-input" id="save-shipping">
                                Save this address for future use
                            </label>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <!-- Additional Info Section -->
                <div class="form-section">
                    <div class="section-title">Additional Info</div>
                    
                    <div class="form-group">
                        <label class="form-label">Order Notes <span class="optional-text">(Optional)</span></label>
                        <textarea class="form-input" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        <div class="form-hint">Notes about your order, e.g. special notes for delivery</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="order-column">
                <div class="order-summary">
                    <h3>Order Summary</h3>
                    
                    <div class="order-item">
                        <span>Green Capsicum x5</span>
                        <span>$70.00</span>
                    </div>
                    
                    <div class="order-item">
                        <span>Red Capsicum x1</span>
                        <span>$14.00</span>
                    </div>
                    
                    <div class="order-total">
                        <span>Subtotal:</span>
                        <span>$84.00</span>
                    </div>
                    
                    <div class="order-total">
                        <span>Shipping:</span>
                        <span>Free</span>
                    </div>
                    
                    <div class="order-total final">
                        <span>Total:</span>
                        <span>$84.00</span>
                    </div>
                </div>
                
                <!-- Payment Method Section -->
                <div class="payment-method">
                    <div class="section-title">Payment Method</div>
                    
                    <div class="payment-option selected" data-method="cod">
                        Cash on Delivery
                    </div>
                    
                    <div class="payment-option" data-method="paypal">
                        Paypal
                    </div>
                    
                    <div class="payment-option" data-method="amazon">
                        Amazon Pay
                    </div>
                </div>
                
                <!-- Place Order Button -->
                <a href="./thankyou.html"><button class="place-order-btn">Place Order</button></a>
            </div>
        </div>
    </div>


  @endsection