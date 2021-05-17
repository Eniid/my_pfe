@extends('layout.layout')

@section('title')
User Name |
@endsection

@section('content')
<main class="main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="profil_info">
                <h2 class="profil__user-name">User Name</h2>
                <img src="" alt="">
                <img src="" alt="">
                <div class="profil__messages">
                    <div class="main-message__messages">
                        <p class="messages__numbers">1234</p>
                        <p class="messages__text">messages</p>
                    </div>
                    <div class="main-message__messages">
                        <p class="messages__numbers">1234</p>
                        <p class="messages__text">House Point</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
                </div>

                <div>
                    <p>Bois</p>
                    <p>info</p>
                    <p>Taille</p>
                    <p>Ici on va devoir mettre de la 3D et ça va être chaud</p>
                </div>

            </section>
        </div>
    </div>
           

    <!-- Users -->
    <aside class="qeel">
        <h2 class="hidden">Users's friends</h2>
        <div class="online">
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
            <h3 class="h2-like">User's event</h3>
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
        </section>
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

        </section>
    </section>

 
</main>
@endsection
