@extends('layout.layout')


@section('title_l')

@endsection


@section('content')
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
                <div class="flex filters">
                    <h2>Event to come</h2>
                    <div class="under">
                        <a href="#" class="active">All</a>
                        <a href="#">My events</a>
                    </div>
                </div>
                <div class="last-event__flex-contener">

                    @foreach ($events as $event)
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
                    @endforeach



                <a href="/events/create">
                <div class="sm-event__add">
                    <div class="sm-event__button">
                        <img src="/img/plus.svg" alt="" width="50" height="50">
                    </div>
                    <span class="sm-event__add__text"> Add a new event</span>
                </div>
                </a>
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
            <div>

            </div>
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
        <div class="flex filters">
            <h2>Latest topics</h2>
            <div class="under">
                <a href="#" class="active">All</a>
                <a href="#">Topics you follow</a>
                <a href="#">Your friends topic</a>
            </div>
        </div>

        @foreach ($posts as $post)
        <section class="topic-preview">
            <h3 class="lt__title"><a href="{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}/{{ $post->postable->slug}}"> {{ $post->postable->title }}</a></h3>
            <span class="lt__ariane">Forum ↣ category</span>

            <div class="topix-preview__content">
                {{ $post->body }}
            </div>

            {{-- <div class="flex">
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
            </div> --}}
            

            <div class="topix-preview__author flex">
                <div>
                    <p class="topix-preview__author__name">🐍<span><a href="#">{{ $post->user->name }}</a></span></p>
                    <p class="topix-preview__author__messages">{{ $post->user->posts_count }} messages</p>
                        
                </div>
               <div class="sm-pp__box ra">
                   <a href="#" name="xxx profil">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    </a>
                </div>
            </div>

            <div class="topix-preview__participents">
                
            </div>
        </section>
        @endforeach
    </section>



 
</main>


@endsection
