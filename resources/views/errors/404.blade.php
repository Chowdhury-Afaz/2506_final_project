@extends('layouts.frontendLayout')

@section('title', '404 - Page Not Found')

@section('content')

<!--=====================================
    ERROR PAGE START
======================================-->

<section id="errorPage">

    <div class="container">

        <div class="error-content">

            <!-- Illustration -->
            <div class="error-image">
                <img src="{{ asset('frontend/img/illustration.png') }}" alt="404 Illustration">
            </div>

            <!-- Content -->
            <div class="error-text">

                <span class="error-subtitle">
                    ERROR 404
                </span>

                <h1>
                    Oops! Page Not Found
                </h1>

                <p>
                    The page you're looking for might have been removed,
                    renamed, or is temporarily unavailable.
                </p>

            </div>

            <!-- Buttons -->
            <div class="error-btn">

                <a href="{{ route('homepage') }}" class="primary-btn">
                    Back to Home
                </a>

                <a href="#" class="secondary-btn">
                    Continue Shopping
                </a>

            </div>

        </div>

    </div>

    <!-- ==========================
         Leaves
    ========================== -->
    <div class="floating-leaves">

    <span class="leaf leaf-1">
        <iconify-icon icon="mdi:leaf"></iconify-icon>
    </span>

    <span class="leaf leaf-2">
        <iconify-icon icon="mdi:leaf"></iconify-icon>
    </span>

    <span class="leaf leaf-3">
        <iconify-icon icon="mdi:leaf"></iconify-icon>
    </span>

    <span class="leaf leaf-4">
        <iconify-icon icon="mdi:leaf"></iconify-icon>
    </span>

    <span class="leaf leaf-5">
        <iconify-icon icon="mdi:leaf"></iconify-icon>
    </span>

</div>


</section>

<!--=====================================
    ERROR PAGE END
======================================-->


@endsection