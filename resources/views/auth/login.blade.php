@extends('layout.layout')


@section('content')

<div class="bg">
<h1 class="main_title">Hogwarts</h1>

<p class="nmto">Nothing more to see here! </p>
</div>
<main class="main-sec">
    
    <p class="login_desc">Welcome to Hogwarts the fist ever website for witches and wizard. It’s about time we learn to use technologie. So join us and let’s do some magic together.</p>


    <div class="flex login_registration">
        <div class="login">
        <!-- Le truc pour display -->
        <input type="checkbox" id="login_img" class="login_checkbox">
        <div class="login_btn">
            <label for="login_img" class="login_img">🧙‍♀️</label>
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
                

                <div class="fup">
                    <a href="#">Password forgotten</a>
                </div>
            </form>
        </div>


    </div>




    <div class="new_account">
        <!-- Le truc pour display -->
        <input type="checkbox" id="register_img" class="register_checkbox">
        <div class="register_btn">
            <label for="register_img" class="register_img">🧙‍♀️</label>
        </div>

        <div class="register_content">
            <div class="cta cta_m"><a href="{{ route('register') }}">I'm not a muggle</a></div>
            <p>Press the button below and we will magically check if you’re not a muggle who got lost. </p>

            <p>Every muggle pressing this button would be automatically Obliviate to persevere the Wizarding Secrecy.</p>
        </div>
        
    </div>
        
    </div>

 
</main>
