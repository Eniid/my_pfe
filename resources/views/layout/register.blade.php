<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts Import -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Informations sur le site  -->
        <meta name="description" content="Descitption à écrire">
        <meta name="keywords" content="keyword, keyword">
        <meta name="author" content="Enid">
        
        <!-- Flavicon  -->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

        <!-- //? Document title  -->
        <title> @yield('title_r') World Online</title>
    </head>

    <body class="body">
        <header>
        
            <div class="login-head-sec head-sec">
                <div class="bg"></div>
                <div class="bg-color"></div>
            
                
            
            
                <div class="back_btn"><a href="{{ route('login') }}">&lt; Back</a></div>
            
            
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
            

        </header>

        <main class="register_sec">
            <!-- //?CONTENT   -->
            @yield('content_r')
        </main>


        <script src="{{ asset('js/app.js') }}"></script>

    </body> 
 

</html>
