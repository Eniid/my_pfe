@extends('layout.layout')

@section('title')
Event Name |
@endsection

@section('content')

<main class="main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="house-cup">
                <h2>Event</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
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

            </div>
        </section>
    </div>





       <!-- Users -->
       <aside class="event__new">
            <img src="./img/plus.svg" alt="">
            <h2>Create a new event</h2>
       </aside>

    <!-- Last topic -->
    <section class="last-topics">
        <h2>Last Topics</h2>
        <section class="topic-preview">
            <h3 class="lt__title">Topic title</h3>
            <span class="lt__ariane">January 10 | 10.20 PM</span>

            <div class="topix-preview__content">
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

                <div class="CTA"><a href="#">Participer</a></div>
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

@endsection
