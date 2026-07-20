@extends('layouts.frontendLayout')
@section('title', "Admin Sign In")
@section('content')

        <section>
            <div class="smallNav">
                <div class="container">
                    <div class="row">
                        <ul class="d-flex">
                            <li><a href="./index.html">
                                    <iconify-icon icon="material-symbols-light:home-outline" width="24" height="24">
                                    </iconify-icon>
                                </a></li>
                            <li><a href="#">Category</a></li>
                            <li><a href="#">Vagetables</a></li>
                            <li><a href="#" class="active">Chinese Cabbage</a></li>
                        </ul>
                    </div>
                </div>
        </section>


<section id="admin-login">
    <div class="container">

        <div class="admin-login-wrapper">

            <!-- LEFT SIDE -->
<div class="login-brand">

    
<div class="eco-shape eco-top">

    <span>🍏</span>
    <span>🥦</span>
    <span>🥗</span>

</div>


<div class="brand-content">

    <img src="{{ asset('frontend/img/Logo.png') }}"
         alt="Eco Bazar Logo"
         class="brand-logo">


    <span class="admin-tag">
        Admin Portal
    </span>


    <h1>
        Welcome Back!
    </h1>


    <p>
        Manage your products, categories,
        orders and customers from one secure dashboard.
    </p>

</div>


<div class="eco-shape eco-bottom">

    <span>🥬</span>
    <span>🥕</span>
    <span>🍅</span>

</div>


</div>



            <!-- RIGHT SIDE -->
            <div class="login-card">


                <div class="login-header">

                    <h2>
                        Admin Sign In
                    </h2>

                    <p>
                        Login to access your dashboard
                    </p>

                </div>


                <form action="{{ route('login') }}" method="POST">

                    @csrf


                    <!-- Email -->
                    <div class="login-input">

                        <label>
                            Email Address
                        </label>

                        <input 
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                        >

                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>



                    <!-- Password -->
                    <div class="login-input password-field">

                        <label>
                            Password
                        </label>


                        <input 
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Enter your password"
                        >


                        <button type="button" id="togglePassword">

                            <iconify-icon 
                                icon="iconoir:eye">
                            </iconify-icon>

                        </button>


                        @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror


                    </div>



                    <!-- Options -->
                    <div class="login-options">

                        <label>
                            <input type="checkbox" name="remember">
                            Remember me
                        </label>


                        <a href="#">
                            Forgot Password?
                        </a>

                    </div>



                    <button class="admin-login-btn">
                        Sign In
                    </button>


                    <div class="secure-text">

                        <iconify-icon icon="solar:shield-check-linear"></iconify-icon>

                        Secure authentication protected

                    </div>


                </form>


            </div>

        </div>

    </div>
</section>
        
        
        <section id="newsletter">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-md-2">
                        <div class="newsletterLogo">
                            <img src="./img/Logo.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                        <div class="newsletterTypo">
                            <h5>Subscribe to our Newsletter</h5>
                            <p>Pellentesque eu nibh eget mauris congue mattis matti</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-lg-flex justify-content-end">
                        <div class="mailSubmit">
                            <input type="mail" placeholder="Your Email Address">
                            <a href="#">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<script>

/* =====================================
   ADMIN LOGIN PASSWORD TOGGLE
===================================== */


const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');


if(togglePassword && passwordInput){

    togglePassword.addEventListener('click', function(){

        const icon = this.querySelector('iconify-icon');


        if(passwordInput.type === "password"){

            passwordInput.type = "text";

            icon.setAttribute(
                "icon",
                "iconoir:eye-closed"
            );

        }else{

            passwordInput.type = "password";

            icon.setAttribute(
                "icon",
                "iconoir:eye"
            );

        }


    });

}


/* =====================================
   INPUT FOCUS EFFECT
===================================== */




const loginInputs = document.querySelectorAll(
    '#admin-login input'
);


loginInputs.forEach(input => {


    input.addEventListener('focus',()=>{

        input.parentElement.classList.add('active');

    });



    input.addEventListener('blur',()=>{

        input.parentElement.classList.remove('active');

    });



});

</script>


@endsection