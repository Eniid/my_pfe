<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <title>@yield('title') Wizarding World Online</title>
    </head>

    <body class="body->test">
        <header>
        @auth
            <nav>
                <h2 class="visually-hidden">Menu de Navigation</h2>
                <ol class="flex nav-ol">
                   <li><a href="/ww">Wizarding World</a></li> 
                   <li><a href="/bs">Between us</a></li> 
                   <li><a href="/rp">Role Play</a></li> 
                   <li><a href="{{ url('/') }}"><img src="{{ asset('img/home.svg') }}" alt=""></a></li> 
                   <li><a href="{{ url('events') }}">Events</a></li> 
                   <li><a href="/">Owls</a></li> 
                   <li>
                        <form action="" class="search-form">
                            <div class="searchbox">
                                <input type="text" name="" id="" placeholder="search">
                                <a href="#"><img src="{{ asset('img/search.svg') }}" alt="search"></a>
                            </div>
                        </form>
                   </li>

                   <li>
                        <div class="sm-pp__box">
                            <img src="/img/pp1.jpg" alt="" class="sm-pp">
                            <div class="sm-pp__info">
                                <a href="/profil">profil</a>
                                <hr>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    <button>logout</button>
                                </form>
                            </div>
                        </div>
                   </li> 
                </ol>
            </nav>
          @endauth  



            <div class="bg head-sec">
                <div class="bg-color" style="background: linear-gradient(#1484BF, #405D8D); opacity : .7;"></div>
            
                <div class="logo_img"><img src="{{ asset('img/sw/asset 167.png') }}" alt=""></div>
                <h1 class="main_title">Wizarding World <span>ONLINE</span> </h1>
                <div class="separation"><img src="{{ asset('img/sep.svg') }}" alt=""></div>
            
                <p class="nmto">Nothing more to see here! </p>
            </div>
        </header>

        <!-- //?CONTENT   -->
        @yield('content')

    </body>


</html>
