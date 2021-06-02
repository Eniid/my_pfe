@extends('layout.layout')


@section('title_l')

@endsection


@section('content')
<main class="main-sec">


    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">

            <!-- House Cup  -->
            <section class="house-cup">
                <div class="flex filters">
                    <h2>House Cup</h2>
                    <div class="under">
                        <div class="neu_r"> 
                            <a href="#">?</a>
                        </div>
                    </div>
                </div>
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


            <!-- House Cup  -->
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
                                <h3 class="sm-event__title">{{$event->name}}</h3>
                                <div class="sm-event__date">
                                    <span class="sm-event__date__month">January</span>
                                    <span class="sm-event__date__day">10</span>
                                    <span class="sm-event__date__time">10.20AM</span>
                                </div>
                                <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">{{$event->place}}</span>
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


       <!-- Users -->

               <!-- Online users -->
                <section class="online">
                    <h3 class="h2-like">Who's online ?</h3>
                    <div class="flex">
                            <div class="sm-pp__box ravenclaw_bg">
                                <img src="/img/pp1.jpg" alt="" class="sm-pp">
                                <div class="sm-pp__info">
                                    Enid
                                </div>
                            </div>
                            <div class="sm-pp__box gryffindor_bg">
                                <img src="/img/pp1.jpg" alt="" class="sm-pp">
                                <div class="sm-pp__info">
                                    Eliie
                                </div>
                            </div>
                    </div>
                </section>


                <!-- Newest users  -->
                <section class="new-user">
                    <h3 class="h2-like new-user_title">New users</h2>
                    <p>Be nice with them, make them feel welcomed!</p>
                    <div class="flex pp_flex">

                        @foreach ($new_users as $user )
                        <a href="/profil/{{ $user->id}}">
                            <div class="sm-pp__box {{ $user->house}}_bg">
                                <img src="
                                @if ($user->img)
                                /{{$user->img}}
                                @else
                                        {{'https://eu.ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                @endif" alt="" class="sm-pp">
                                <div class="sm-pp__info">
                                    {{ $user->name }}
                                </div>
                            </div>    
                        </a>
                        @endforeach


                    </div>
                </secttion>
    </aside>




    <!-- Last topic -->


    <section class="last-topics">

        <div class="dash_sep">
            <img src="{{ asset('img/sep.svg') }}" alt="">
        </div>


        <div class="flex filters">
            <h2>Latest messages</h2>
            <div class="under">
                <a href="#" class="active">All</a>
                <a href="#">Topics you follow</a>
                <a href="#">Your friends topic</a>
            </div>
        </div>

        @foreach ($posts as $post)
        <section class="topic-preview">
            <h3 class="lt__title"><a href="{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}/{{ $post->postable->slug}}"> {{ $post->postable->title }}</a></h3>
            <span class="lt__ariane under"> <a href="/{{ $post->postable->categorie->forum->slug}}">{{ $post->postable->categorie->forum->name}}</a> ↣ <a href="/{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}"> {{ $post->postable->categorie->name}} </a> </span>

            <div class="topix-preview__content">
                {{ $post->body }}
            </div>

            

            


                <div class="topix-preview__author flex">
                    <div class="topix-preview_nm"> 
                        <p class="topix-preview__author__name {{ $post->user->house }}_c"><span><a href="/profil/{{$post->user->id }}">{{ $post->user->name }}</a></span></p>
                        <p class="topix-preview__author__messages">{{ $post->user->posts_count }} messages</p>
    
                    </div>
                   <div class="sm-pp__box {{ $post->user->house }}_bg">
                       <a href="#" name="xxx profil">
                            <img src="
                            @if ($post->user->img)
                            /{{$post->user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($post->user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif
                        " alt="" class="sm-pp">
                        </a>
                    </div>
                </div>
                
        </section>
        @endforeach
    </section>



 
</main>


@endsection
