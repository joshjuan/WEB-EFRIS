@extends('layouts.auth')
@section('title')
    {{trans_choice('general.login',1)}}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="login-area">
                    <div class="header-area">
                        <h4 class="title">Login Now</h4>
                        <p class="text">Welcome back, please sign in below</p>
                    </div>
                    <div class="login-form">
                        <div class="alert alert-info validation" style="display: none;">
                            <p class="text-left"></p>
                        </div>
                        <div class="alert alert-success validation" style="display: none;">
                            <button type="button" class="close alert-close"><span>×</span></button>
                            <p class="text-left"></p>
                        </div>
                        <div class="alert alert-danger validation" style="display: none;">
                            <button type="button" class="close alert-close"><span>×</span></button>
                            <p class="text-left"></p>
                        </div>
                        <form  action="{{ url('/postLogin') }}"
                              method="POST">
                            @csrf
                            <div class="form-input">
                                <input type="email" name="email" class="User Name"
                                       placeholder="Type Email Address" value="admin@gmail.com" required=""
                                       autofocus>
                                <i class="icofont-user-alt-5"></i>
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" class="Password" placeholder="Type Password"
                                       required="" value="1234">
                                <i class="icofont-ui-password"></i>
                            </div>
                            <div class="form-forgot-pass">
                                <div class="left">
                                    <input type="checkbox" name="remember" id="rp">
                                    <label for="rp">Remember Password</label>
                                </div>
                                <div class="right">
                                    <a
                                            href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/forgot">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
{{--                            <input id="authdata" type="hidden" value="Authenticating...">--}}
                            <button class="submit-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection