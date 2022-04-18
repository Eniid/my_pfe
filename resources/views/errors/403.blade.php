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
        <title>404 - Wirsarding World Online</title>
    </head>

    <body class="body">
        <div class="login-head-sec head-sec">
            <div class="bg"></div>
        
            <div class="bg-color"></div>
        
            <div class="logo_img"><img src="img/asset167.png" alt=""></div>
            <h1 class="main_title tracking-in-expand">Wizarding World <span>ONLINE</span> </h1>
            <div class="separation_gold"><img src="{{ asset('img/sep.svg') }}" alt=""></div>
        
        
        
            <div class="login-pres">
        
                <div class="error_num tracking-in-expand">403</div>
                <p>Sorry, you can't be here!</p>
                <div class="log-cta">
                    <a href="{{ route('register') }}">Back Home</a> 
                </div>
            </div> 
        

        
        </div>


        <script src="/"></script>


    </body> 
 

</html>
