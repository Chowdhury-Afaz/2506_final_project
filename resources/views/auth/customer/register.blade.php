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

                    <img src="{{ asset('frontend/img/Logo.png') }}" alt="Eco Bazar Logo" class="brand-logo">





                    <h1>
                        Create Your Account
                    </h1>


                    <p>
                        Join Eco Bazar and enjoy a simple, fresh and
                        convenient shopping experience.
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


                <form action="{{ route('customer.register.store') }}" method="POST">

                    @csrf

                    <!-- User Name -->
                    <div class="login-input">
                    
                        <label>
                            User Name
                        </label>
                    
                        <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                    
                        @error('name')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    
                    </div>

                    <!-- Phone -->
                    <div class="login-input">
                    
                        <label>
                            Phone
                        </label>
                    
                        <input type="text" name="phone" placeholder="Enter your phone" value="{{ old('phone') }}">
                    
                        @error('phone')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    
                    </div>

                    <!-- Email -->
                    <div class="login-input">

                        <label>
                            Email Address
                        </label>

                        <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">

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


                        <input type="password" name="password" id="password" placeholder="Enter your password">


                        <button type="button" id="togglePassword">

                            <iconify-icon icon="iconoir:eye">
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
                        Sign Up
                    </button>

                    <!-- OR Divider -->

<div class="login-divider">

    <span></span>

    <p>OR</p>

    <span></span>

</div>


<!-- Google Login -->

<a href="{{ route('google.redirect') }}" class="google-login-btn">

    <iconify-icon icon="logos:google-icon"></iconify-icon>

    <span>Continue with Google</span>

</a>


                    <div class="secure-text">

                        <iconify-icon icon="solar:shield-check-linear"></iconify-icon>

                        Secure authentication protected

                    </div>


                </form>


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