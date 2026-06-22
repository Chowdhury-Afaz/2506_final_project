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
        <section id="login">
            <div class="container">
                <div class="row align-itme-center justify-content-center">
                    <div class="login-box">
                        <h2>Admin Sign In</h2>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="email" placeholder="Email" name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group password-group">
                                <input name="password" type="password" placeholder="Password">
                                <iconify-icon class="eye" icon="iconoir:eye" width="24" height="24"></iconify-icon>
                            </div>
                            @error('password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <label>
                                <input class="remember text-start" type="checkbox"> Remember me
                            </label>
                            <a href="#" class="forgetPass text-end">Forget Password</a>

                            <button type="submit" class="login-btn">Login</button>

                            
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

@endsection