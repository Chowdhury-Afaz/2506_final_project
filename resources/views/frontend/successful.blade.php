@extends('layouts.frontendLayout')

@section('title', 'Order Success')

@section('content')

<section class="thankYouPage">
    <div class="container">
        <!-- Thank You Message -->
        <div class="thank-you-card">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1>Thank You For Your Order!</h1>
            <div class="order-id">Order ID: #{{ $order->transaction_id }}</div>
            <p class="confirmation-text">
                Your order has been received and is now being processed.
                You will receive a confirmation email with your order details shortly.
            </p>
            <div class="status-badge status-confirmed">Order {{ ucfirst($order->status) }}</div>
        </div>
    
        <!-- Order Details -->
        <div class="order-details-card">
            <h2 class="section-title">Order Details</h2>
    
            <div class="customer-info">
                <div class="info-box">
                    <div class="info-title">Billing Information</div>
                    <div class="info-detail">
                        <strong>Name:</strong> {{ $order->name }}<br>
                        <strong>Address:</strong> {{ $order->address }}<br>
                        <strong>Phone:</strong> {{ $order->phone }}<br>
                        <strong>Email:</strong> {{ $order->email }}
                    </div>
                </div>
    
                <div class="info-box">
                    <div class="info-title">Payment Method</div>
                    <div class="info-detail">
                        <strong>{{ $order->gateway }}</strong><br>
                        Currency: {{ $order->currency }}
                    </div>
                </div>
    
                <div class="info-box">
                    <div class="info-title">Shipping Method</div>
                    <div class="info-detail">
                        <strong>Standard Shipping</strong><br>
                        Estimated delivery: 3-5 business days<br>
                        Shipping Cost: Free
                    </div>
                </div>
            </div>
    
            <div class="order-summary">
                <h3 class="section-title">Order Summary</h3>
    
                <div class="order-total mt-3">
                    <span>Total Amount</span>
                    <span>{{ number_format($order->amount, 2) }} {{ $order->currency }}</span>
                </div>
            </div>
        </div>
    
        <!-- Invoice Preview -->
        <div class="invoice-preview" id="invoice-content">
            <div class="invoice-header">
                <div style="text-align: center; margin-bottom: 10px;">
                    <a href="{{ route('homepage') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="max-width: 200px; height: auto;"></a>
                </div>
                <div class="invoice-title">INVOICE</div>
                <div class="invoice-subtitle">Order Confirmation & Payment Receipt</div>
                <div style="margin-top: 10px;">
                    <strong>Invoice #:</strong> INV-{{ $order->transaction_id }} &nbsp; | &nbsp;
                    <strong>Date:</strong> <span>{{ $order->created_at ? $order->created_at->format('F d, Y') : date('F d, Y') }}</span>
                </div>
            </div>
    
            <div class="invoice-details">
                <div class="invoice-from">
                    <span class="invoice-label">From:</span>
                    FreshGrocer Online Store<br>
                    789 Market Street<br>
                    San Francisco, CA 94103<br>
                    Phone: (555) 123-4567<br>
                    Email: info@freshgrocer.com
                </div>
    
                <div class="invoice-to">
                    <span class="invoice-label">Bill To:</span>
                    {{ $order->name }}<br>
                    {{ $order->address }}<br>
                    Phone: {{ $order->phone }}<br>
                    Email: {{ $order->email }}
                </div>
            </div>
    
            <div style="margin-top: 30px; padding: 20px; background-color: #f8f9fa; border-radius: 8px;">
                <div class="invoice-label">Payment Information:</div>
                <p>Payment Method: {{ $order->gateway }}<br>
                Status: <span style="color: #28a745; font-weight: 600;">{{ ucfirst($order->status) }}</span></p>
    
                <div class="invoice-label" style="margin-top: 15px;">Total Paid:</div>
                <p style="font-size: 18px; font-weight: bold; color: #28a745;">{{ number_format($order->amount, 2) }} {{ $order->currency }}</p>
            </div>
    
            <div class="footer-note">
                <p>This is a computer-generated invoice. No signature required.</p>
            </div>
        </div>
    
        <!-- Action Buttons -->
        <div class="action-buttons my-4 text-center">
            <button class="btn btn-print btn-secondary me-2" onclick="window.print()">
                <i class="fas fa-print"></i> Print Invoice
            </button>
    
            <a href="{{ route('shop') }}" class="btn btn-continue btn-primary">
                <i class="fas fa-shopping-bag"></i> Continue Shopping
            </a>
        </div>
    
        <div class="footer-note text-center">
            <p>If you have any questions about your order, please contact our customer service.</p>
            <p>You can also track your order using your Order ID: <strong>#{{ $order->transaction_id }}</strong></p>
        </div>
    </div>
</section>

@endsection