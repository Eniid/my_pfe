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


    <body class="body_test">
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
                        <div class="sm-pp__box pph {{ Auth::user()->house}}_bg">
                            <img src="
                            @if (Auth::user()->img)
                            /{{ Auth::user()->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif" alt="" class="sm-pp">
                            <div class="sm-pp__info">
                                <div class="{{ Auth::user()->house}}_c pph_user-name">
                                    {{ Auth::user()->name }}
                                </div>

                                <hr>

                                <div class="pph_texte pph_p">
                                    <a href="/profil/{{auth()->id()}}">profil</a>
                                </div>

                                <!-- //? BIGINING OF NOTIFICATIONS  -->

                                <div class="login_btn">
                                    <input type="checkbox" id="login_img" class="login_checkbox">
                                    <div class="login_btn pph_texte pph_n">
                                        <label for="login_img" class="login_text">‍Notifications</label>
                                    </div>
                                    <div class="login_content">
                                        <div class="bg-color {{ Auth::user()->house}}_full_bg">
                                            <div class="main-sec registration-sec notification_box">
                                                teste
                                            </div>
                                        </div>
                                        

                                        
                                    </div>
                                </div>

                                <!-- //? END OF NOTIFICATIONS  -->



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none .cat-cta_contener">
                                    @csrf
                                    <button class="cta cta_i">logout</button>
                                </form>
                            </div>
                        </div>
                   </li> 
                </ol>
            </nav>
        @endauth  


          



            <div class="bg head-sec">
                <div class="bg-color {{ $user->house}}_full_bg"></div>
            
                <div class="logo_img"><img src="{{ asset('img/asset167.png') }}" alt=""></div>
                <h1 class="main_title main_title__logged">Wizarding World <span>ONLINE</span> </h1>
                <div class="separation_gold"><img src="{{ asset('img/sep_w.svg') }}" alt=""></div>
            
                <p class="nmto">Nothing more to see here! </p>
                <p class="footer"><a href="mailto:enid-bc@hotmail.com">Contact</a>    ☽ &nbsp; &nbsp; @2021 Wizarding World Online. All right reserved. &nbsp; &nbsp; ☾ <a href="/termes-and-policy">Termes and Pracicy</a></p>
            </div>
        </header>

        <!-- //?CONTENT   -->
        @yield('content')

    </body>


</html>
