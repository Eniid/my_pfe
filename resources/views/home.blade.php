@extends('layout.layout')


@section('content')

<div class="bg head-sec">
    <div class="bg-color" style="background: linear-gradient(#1484BF, #405D8D); opacity : .7;"></div>

    <div class="logo_img"><img src="{{ asset('img/sw/asset 167.png') }}" alt=""></div>
    <h1 class="main_title">Wizarding World <span>ONLINE</span> </h1>
    <div class="separation"><img src="{{ asset('img/sep.svg') }}" alt=""></div>



    <p class="nmto">Nothing more to see here! </p>
</div>



<main class="main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="house-cup">
                <h2>House Cup</h2>
                <div class="house_cup__all">
                    <div class="house-cup__rav house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Ravenclaw</b> : 120 house points
                                </div>
                            </div>

                        </div>
                        <div class="house-emoji">
                        🦅
                        </div>
                    </div>
                    <div class="house-cup__sly house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Slytherin</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🐍
                        </div>

                    </div>
                    <div class="house-cup__grif house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Gryffindor</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🦁
                        </div>
                    </div>
                    <div class="house-cup__huff house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Hufflepuff</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🦡
                        </div>

                    </div>
                </div>            

            </section>
            <section class="last-event">
                <h2>Event to come</h2>
                <div class="last-event__flex-contener">
                    <a href="#">
                        <section class="sm-event">
                            <h3 class="sm-event__title">Event title</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">January</span>
                                <span class="sm-event__date__day">10</span>
                                <span class="sm-event__date__time">10.20AM</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                        </section>
                    </a>

                    <a href="#">
                        <section class="sm-event">
                            <h3 class="sm-event__title">Event title</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">January</span>
                                <span class="sm-event__date__day">10</span>
                                <span class="sm-event__date__time">10.20AM</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                        </section>
                    </a>

                    <section class="sm-event">
                        <h3 class="sm-event__title">Event title</h3>
                        <div class="sm-event__date">
                            <span class="sm-event__date__month">January</span>
                            <span class="sm-event__date__day">10</span>
                            <span class="sm-event__date__time">10.20AM</span>
                        </div>
                        <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                    </section>
                </div>

                <section class="sm-event">
                    <h3 class="sm-event__title">Event title</h3>
                    <div class="sm-event__date">
                        <span class="sm-event__date__month">January</span>
                        <span class="sm-event__date__day">10</span>
                        <span class="sm-event__date__time">10.20AM</span>
                    </div>
                    <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                </section>

                <section class="sm-event">
                    <h3 class="sm-event__title">Event title</h3>
                    <div class="sm-event__date">
                        <span class="sm-event__date__month">January</span>
                        <span class="sm-event__date__day">10</span>
                        <span class="sm-event__date__time">10.20AM</span>
                    </div>
                    <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" alt="">Discord</span>
                </section>

                <div class="sm-event__add">
                    <div class="sm-event__button">
                        <img src="/img/plus.svg" alt="" width="50" height="50">
                    </div>
                    <span class="sm-event__add__text">Add a new event</span>
                </div>
            </div>
        </section>
    </div>





       <!-- Users -->
       <aside class="qeel">
        <h2 class="hidden">Users</h2>
        <section class="online">
            <h3 class="h2-like">Who's online ?</h3>
                <div class="flex">
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                </div>
        </div>
        <section class="new-user">
            <h3 class="h2-like">New users</h2>
            <p>Be nice with them, make them feel welcomed!</p>
            <div class="flex">
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Last topic -->
    <section class="last-topics">
        <h2>Last Topics</h2>
        <section class="topic-preview">
            <h3 class="lt__title">Topic title</h3>
            <span class="lt__ariane">Forum ↣ category</span>

            <div class="topix-preview__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
            </div>

            <div class="flex">
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>
            </div>
            

            <div class="topix-preview__author flex">
                <div>
                    <p class="topix-preview__author__name">🐍 <span><a href="#">Name</a></span></p>
                    <p class="topix-preview__author__messages">230messages</p>
                        
                </div>
               <div class="sm-pp__box">
                   <a href="#" name="xxx profil">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    </a>
                </div>
            </div>

            <div class="topix-preview__participents">
                
            </div>
        </section>
    </section>


 
</main>
