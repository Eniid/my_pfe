@extends('layout.layout')


@section('content')

<div class="login-head-sec head-sec">
    <div class="bg"></div>

    <div class="bg-color"></div>

    <div class="logo_img"><img src="{{ asset('img/sw/asset 167.png') }}" alt=""></div>
    <h1 class="main_title">Wizarding World <span>ONLINE</span> </h1>
    <div class="separation"><img src="{{ asset('img/sep.svg') }}" alt=""></div>



    <div class="login-pres">


        <p>Welcome to Hogwarts the fist ever website for witches and wizard. It’s about time we learn to use technologie. So join us and let’s do some magic together.</p>
        <div class="log-cta">
            <a href="{{ route('register') }}">Become Beta Tester</a> 
        </div>
    </div>


    <div class="login_btn">
        <input type="checkbox" id="login_img" class="login_checkbox">
        <div class="login_btn">
            <label for="login_img" class="login_text">‍Login</label>
        </div>
            <div class="login_content">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="fup">
                        <a href="#">Password forgotten ?</a>
                    </div>
    
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <button type="submit" class="cta">Enter the wizarding world</button>
                </form>
        </div>
    </div>

    <div class="more-about">
        <a class="login_text_more" href="#main_sec_login">More About WWO</a>
        <div class="more-about_img"><img src="{{ asset('img/more.svg') }}" alt=""></div>
    </div>


</div>







<main class="main-sec login-main-sec" id="main_sec_login">
    
    <p class="login_desc">There is nothing there just yes, this will arrive a bit latter! :3 </p>



 
</main>
