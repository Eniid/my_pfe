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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- //? Document title  -->
    <title>@yield('title') Wizarding World Online</title>
    @livewireStyles

</head>


<body class="body_test">
    <header>

        <div class="bg head-sec">
            <div class="bg-color {{ Auth::user()->house }}_full_bg"></div>

            <div class="logo_img"><img src="{{ asset('img/asset167.png') }}" alt=""></div>
            <h1 class="main_title main_title__logged"><a href="{{ url('/') }}">Wizarding World
                    <span>ONLINE</span></a> </h1>
            <div class="separation_gold"><img src="{{ asset('img/sep_w.svg') }}" alt=""></div>

        </div>

        @auth
            <input type="checkbox" id="nav" class="visually-hidden nav_check">

            <div class="sub_nav-toblure">

            </div>
            <nav>
                <h2 class="visually-hidden">Menu de Navigation</h2>
                <ol class="flex nav-ol">
                    <li class="under_menu"
                    @if (Request::path() == 'ww')
                        class="nav_selected_item"
                    @endif
                    ><a href="/ww" >Wizarding World</a></li>
                    <li class="under_menu"
                    @if (Request::path() == 'bs')
                        class="nav_selected_item"
                    @endif
                    ><a href="/bs">Between us</a></li>
                    <li class="under_menu"
                    @if (Request::path() == 'rp')
                        class="nav_selected_item"
                    @endif
                    ><a href="/rp">Role Play</a></li>
                    <li class="home_li"><a href="{{ url('/') }}"><img src="{{ asset('img/home.svg') }}"
                                alt="home_page" class="lm_img"><img src="{{ asset('img/d_house.svg') }}"
                                alt="home_page" class="dm_img"></a></li>
                    <li class="under_menu"
                    @if (Request::path() == 'events')
                        class="nav_selected_item"
                    @endif
                ><a href="{{ url('events') }}">Events</a></li>
                    <li class="under_menu"
                    @if (Request::path() == 'owls')
                        class="nav_selected_item"
                    @endif
                    ><a href="/owls">Owls</a></li>
                    <li>
                        <form action="/search" class="search-form" method='get'>
                            @csrf
                            <div class="searchbox">
                                <input type="text" name="search" placeholder="search" value="{{ old('search') }}">
                                <button><img src="{{ asset('img/search.svg') }}" class="lm_img" alt="search"><img
                                        src="{{ asset('img/d_search.svg') }}" class="dm_img"
                                        alt="search"></button>
                            </div>
                        </form>
                    </li>

                    <li class="notif_box">
                        <label for="open_notif">
                            <img src="{{ asset('img/notif.svg') }}"
                                alt="home_page" class="lm_img"><img src="{{ asset('img/notif_b.svg') }}"
                                alt="home_page" class="dm_img">
                        </label>
                        <input type="checkbox" id="open_notif">

                        <div class="notif_box_inside">
                            <div class="notif_box-title">
                                <div class="">
                                    Notifications
                                </div>

                                <hr>
                            </div>
                            <div class="lable_box">
                                <span class="lable_active">All</span> <span class="lable">New</span>

                            </div>


                            <div class="notifs">
                                <a href="/" class="notification_link">
                                    <div class="notif flex">
                                        <div>
                                            <div class="house-emoji">
                                                🦅
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            <b>Ravenclaw</b> is now on top of the house cup. 
                                            @if(Auth::user()->house === 'ravenclaw')
                                            Well done! 
                                        @else
                                            You're 298 point away, keep participating to beat them. 
                                        @endif
                                        
                                        </b>
                                            <div>1h ago</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="ww/movies/excepturi-facere-ut" class="notification_link">
                                    <div class="notif flex">
                                        <div>
                                            <div class="flex pp__box-qeel">
                                                <div class="sm-pp__box ravenclaw_bg">
                                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            Your firend <b>Enid</b> just posted a new topic : <b>Show us your Harry Potter collection</b>
                                            <div>1h ago</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="/profil/1" class="notification_link">
                                    <div class="notif flex">
                                        <div>
                                            <div class="flex pp__box-qeel">
                                                <div class="sm-pp__box ravenclaw_bg">
                                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            <b>Enid</b> followed you
                                            <div>3h ago</div>
                                        </div>
                                    </div>
                                </a>


                                <a href="ww/movies/excepturi-facere-ut" class="notification_link">
                                    <div class="notif flex read">
                                        <div>
                                            <div class="flex pp__box-qeel">
                                                <div class="sm-pp__box ravenclaw_bg">
                                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            <b>Enid</b> answerd your topic <b>What did you think about Fantastic Beast the secrets of dumbledore</b>
                                            <div>3 days ago</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="ww/movies/excepturi-facere-ut" class="notification_link">
                                    <div class="notif flex read">
                                        <div>
                                            <div class="flex pp__box-qeel">
                                                <div class="sm-pp__box ravenclaw_bg">
                                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            Enid answerd your topic <b>The best house</b>
                                            <div>3 days ago</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="ww/movies/excepturi-facere-ut" class="notification_link">
                                    <div class="notif flex read">
                                        <div>
                                            <div class="flex pp__box-qeel">
                                                <div class="sm-pp__box ravenclaw_bg">
                                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notif_text">
                                            Enid answerd your topic <b>The best house</b>
                                            <div>5 days ago</div>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </li>

                    <li class="avatar_li">
                        <div class="sm-pp__box pph {{ Auth::user()->house }}_bg">
                        <label for="open_profil">
                            <img src="
                                @if (Auth::user()->img) /{{ Auth::user()->img }}
                            @else
                                    {{ 'https://eu.ui-avatars.com/api/?name=' .urlencode(Auth::user()->name) .'&size=120&background=9165DF&color=ffffff' }} @endif"
                                alt="" class="sm-pp">
                        </label>
                        <input type="checkbox" id="open_profil">

                            
                            <div class="profil_box">
                                <div class="{{ Auth::user()->house }}_c pph_user-name">
                                    {{ Auth::user()->name }}
                                </div>
                                <hr>

                                <div class="pph_texte pph_p">
                                    <a href="/profil/{{ auth()->id() }}" class="pp_link">Profile</a>
                                </div>

                                <div class="pph_texte pph_p">
                                    <label class="switch m5 flex">
                                        <span>
                                            Show Online
                                        </span>
                                        <input type="checkbox">
                                        <small></small>
                                    </label>
                                </div>


                                {{-- <!-- //? BIGINING OF NOTIFICATIONS  -->

                                <div class="login_btn note-info">
                                    <input type="checkbox" id="login_img" class="login_checkbox">
                                    <div class="login_btn pph_texte pph_n">
                                        <label for="login_img" class="login_text">‍Notifications <span class="cross ">Close</span></label>
                                    </div>
                                    <div class="login_content">
                                            <div class="bg-color {{ Auth::user()->house}}_full_bg">
                                            </div>             
                                            <div class="main-sec registration-sec notification_box">
                                                <div class="close"><a href="#">Close</a></div>
                                                <form action="/profil/edit" method="post" enctype="multipart/form-data" class="notif_box">
                                                    @csrf
            
                                                {{-- <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label>
                                                <input type="checkbox" id="message" class="notification_check"> <label for="message">Revive a notification when someone answer a message I folow</label> --}}

                                {{-- <a href="/" class="cta cta_i cta_l {{ Auth::user()->house}}_bg">Save</a>
                                            
            
                                                </form>
                                        </div>
                                        

                                        
                                    </div>
                                </div>

                                <!-- //? END OF NOTIFICATIONS  --> --}}



                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none .cat-cta_contener">
                                    @csrf
                                    <button class="cta cta_i">logout</button>
                                </form>
                            </div>

                        </div>
                    </li>
                </ol>
                <label for="nav" class="navigation_l">
                    <span class="m_open">Menu</span><span class="m_close">Close</span>
                </label>
            </nav>

        @endauth

        <label class="switch mode_switch">
            <input type="checkbox" id="switch_cb" class="visually-hidden">
            <img src="{{ asset('img/b1.svg') }}" class="wand_img dm_w" alt="">
            <span class="slider round lm_img">Nox</span>
            <span class="slider round dm_img">Lumos</span>
        </label>



    </header>

    <!-- //?CONTENT   -->
    @yield('content')



    <footer class="bg head-sec footer-sec">

        <p class="footer"><a href="mailto:enid-bc@hotmail.com">Contact</a> ☽ &nbsp; &nbsp; @2021 Wizarding World
            Online. All right reserved. &nbsp; &nbsp; ☾ <a href="/termes-and-policy">Termes and Pracicy <br>
                @if (auth()->user()->is_admin)
                    <a href="#">Administration Board</a>
                @endif
            </a></p>

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    @livewireScripts

</body>


</html>
