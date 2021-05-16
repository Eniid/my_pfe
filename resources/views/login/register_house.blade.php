@extends('layout.layout')


@section('content')

<div class="login-head-sec head-sec">
    <div class="bg"></div>
    <div class="bg-color"></div>

    


    <div class="back_btn"><a href="{{ route('login') }}">< Back</a></div>


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

</div>

<div class="flex register_flex">

<main class="main-sec registration-sec">
    
    <div class="logo_sec">
        <img src="{{ asset('img/wwo_logo.png') }}" alt="">
    </div>

    

    <form action="">
        @csrf    
 
         <div>
             <div class="login_btn">
                 <input type="radio" id="ravenclaw" name="drone" value="ravenclaw" checked>
                 <labe for="ravenclaw" class="login_img">🦅</labe>
             </div>
             <div class="login_btn">
                 <input type="radio" id="gryffindor" name="drone" value="gryffindor">
                 <label for="gryffindor" class="login_img">🦁</label>
             </div>
             <div class="login_btn">
                 <input type="radio" id="slytherin" name="drone" value="slytherin">
                 <label for="slytherin" class="login_img">🐍</label>
             </div>
             <div class="login_btn">
                 <input type="radio" id="hufflepuff" name="drone" value="hufflepuff">
                 <label for="hufflepuff" class="login_img">🦡</label>
             </div>
         </div>
 
         <button class="cta">Next</button>
        
        
     </form>
 

        
    </div>

 
</main>
</div>









