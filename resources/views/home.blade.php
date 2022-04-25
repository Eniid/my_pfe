@extends('layout.layout')

@section('title_l')

@endsection


@section('content')
<main class="main-sec">
    <div class="frame">

        <!-- House cup and last event -->
        <div class="home-info">
            <div class="flex home-house_ev">

                <!-- House Cup  -->
                <section class="house-cup">
                    <div class="flex filters">
                        <h2>House Cup</h2>
                        <div class="under">
                            <div class="card_ex">
                                <div class="card" tabindex="0">
                                    <span class="card__infoicon">
                                    <i class="fa fa-info">?</i>
                                    </span>
                            </div>
                            <div class="sm-pp__info">
                                    <p>Every time you post a message, you win 1 point</p>
                                    <p>Every time you post a message, you win 1 point</p>
                                    <p>Every time you post a message, you win 1 point</p>
                                    <p>Every time you post a message, you win 1 point</p>

                                </div>
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
                        <h2>Events to come</h2>
                        <div class="under">
                            <a href="?{{ $post_filter ? 'posts=' . $post_filter . '&': '' }}events=all" 
                            @if($event_filter === 'all')
                            class="active"
                            @endif
                            >All</a>
                            <a href="?{{ $post_filter ? 'posts=' . $post_filter . '&': '' }}events=mine"
                            @if($event_filter === 'mine')
                            class="active"
                            @endif
                            >My events</a>
                        </div>
                    </div>
                    <div class="last-event__flex-contener">

                        @if($event_filter === 'all')
                            @foreach ($events as $event)
                            <a href="events/{{$event->slug}}">
                                <section class="sm-event">
                                    <h3 class="sm-event__title">{{$event->name}}</h3>
                                    <div class="sm-event__date">
                                        <span class="sm-event__date__month">{{$event->date->monthName}}</span>
                                        <span class="sm-event__date__day">{{$event->date->day}}</span>
                                        <span class="sm-event__date__time">{{$event->date->format('g.iA')}}</span>
                                    </div>
                                    <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$event->place}}</span>
                                </section>
                            </a>
                            @endforeach
                        @endif

                        @if($event_filter === 'mine')
                        @foreach ($events as $participation)
                        <a href="events/{{$participation->event->slug}}">
                            <section class="sm-event">
                                <h3 class="sm-event__title">{{ $participation->event->name }}</h3>
                                <div class="sm-event__date">
                                    <span class="sm-event__date__month">{{ $participation->event->date->monthName }}</span>
                                    <span class="sm-event__date__day">{{ $participation->event->date->day }}</span>
                                    <span class="sm-event__date__time">{{ $participation->event->date->format('g.iA')}}</span>
                                </div>
                                <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img"><img src="/img/d_place.svg" width="11" height="13" class="dm_img">{{ $participation->event->place }}</span>
                            </section>
                        </a>
                        @endforeach
                        @endif

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
            <div class="flex users_flex">


                <!-- Online users -->
                    <section class="online">
                        <h3 class="h2-like">Who's online ?</h3>
                        <div class="flex">
                    
                            <div class="flex pp__box-qeel">
                                <div class="sm-pp__box ravenclaw_bg">
                                    <img src="/img/profil/1622615794-miranda06.jpg" alt="" class="sm-pp">
                                    <div class="sm-pp__info">
                                        Admin
                                    </div>
                                </div>
                                <div class="name">
                                    Enid
                                </div>
                            </div>

                            
                            <div class="flex pp__box-qeel">
                                <div class="sm-pp__box gryffindor_bg">
                                    <img src="/img/profil/1622615983-c43992e5e65f09cc53d24bc93fa4437e.png" alt="" class="sm-pp">
                                </div>
                                <div class="name">
                                    Lucy
                                </div>
                            </div>


                            <div class="flex pp__box-qeel">
                                <div class="sm-pp__box {{ Auth::user()->house}}_bg">
                                    <img src="@if (Auth::user()->img)
                                    /{{ Auth::user()->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                                    @if(auth()->user()->is_admin )
                                    <div class="sm-pp__info">
                                        Admin
                                    </div>
                                    @elseif (auth()->user()->is_modo )
                                    <div class="sm-pp__info">
                                        Modo
                                    </div>
                                    @endif
                                </div>
                                <div class="name">
                                    @if(Auth::user()->is_admin )
                                    <span class="tooltip">
                                        <img src="img/admin.svg" alt="admin" title="admin" class="tag admin">
                                        <span class="tooltiptext">
                                            admin
                                        </span>
                                    </span>

                                @elseif (Auth::user()->is_modo )
                                <span class="tooltip">
                                    <img src="img/modo.svg" alt="admin" title="modo" class="tag modo">
                                    <span class="tooltiptext">
                                        modo
                                    </span>
                                </span>
                                @endif{{ Auth::user()->name }}
                                </div>
                            </div>


                        </div>
                    </section>


                    <!-- Newest users  -->
                    <section class="new-user">
                        <h3 class="h2-like new-user_title">New users</h3>
                        <p>Be nice with them, make them feel welcome!</p>
                        <div class="flex pp_flex">

                            @foreach ($new_users as $user )
                            <a href="/profil/{{ $user->id}}" class="pp_link">
                                <div class="flex pp__box-qeel">
                                    <div class="sm-pp__box {{ $user->house}}_bg">
                                        <img src="@if ($user->img)
                                        /{{ $user->img}}
                                        @else
                                                {{'https://eu.ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                        @endif" alt="" class="sm-pp">
                                    </div>
                                    <div class="name">
                                        {{ $user->name }}
                                    </div>
                                </div>

                            </a>
                            @endforeach


                        </div>
                    </section>
                </div>
        </aside>




        <!-- Last topic -->


        <section class="last-topics">

            <div class="dash_sep">
                <img src="{{ asset('img/sep.svg') }}" alt="">
            </div>


            <div class="flex filters">
                <h2>Latest messages</h2>
                <div class="under">
                    <a href="?{{ $event_filter ? 'events=' . $event_filter . '&': '' }}posts=all" 
                    @if($post_filter === 'all')
                    class="active"
                    @endif
                    >All</a>
                    <a href="?{{ $event_filter ? 'events=' . $event_filter . '&': '' }}posts=followed"
                    @if($post_filter === 'followed')
                    class="active"
                    @endif
                    >Topics you follow</a>
                    <a href="?{{ $event_filter ? 'events=' . $event_filter . '&': '' }}posts=friends"
                    @if($post_filter === 'friends')
                    class="active"
                    @endif
                    >Your friends topics</a>
                </div>
            </div>

            @foreach ($posts as $post)
            <section class="topic-preview annim_home">
                <h3 class="lt__title"><a href="{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}/{{ $post->postable->slug}}"> {{ $post->postable->title }}</a></h3>
                <span class="lt__ariane under"> <a href="/{{ $post->postable->categorie->forum->slug}}">{{ $post->postable->categorie->forum->name}}</a> ↣ <a href="/{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}"> {{ $post->postable->categorie->name}} </a> </span>


                <div class="box_text">
                    <div class="topix-preview__content">
                        {{ Illuminate\Mail\Markdown::parse($post->excerpt()) }}
                    </div>
                    <div class="mask">

                    </div>
                </div>

                

                


                    <div class="topix-preview__author flex">
                        <div class="topix-preview_nm"> 
                            <p class="topix-preview__author__name {{ $post->user->house }}_c"><span><a href="/profil/{{$post->user->id }}">
                                @if($post->user->is_admin )
                                <span class="tooltip">
                                    <img src="img/admin.svg" alt="admin" title="admin" class="tag admin">
                                    <span class="tooltiptext">
                                        admin
                                    </span>
                                </span>
                                @elseif ($post->user->is_modo )
                                <span class="tooltip">
                                    <img src="img/modo.svg" alt="modo" title="modo" class="tag modo">
                                    <span class="tooltiptext">
                                        modo
                                    </span>
                                </span>
                                @endif
                                {{ $post->user->name }}
                            </a></span></p>
                            <p class="topix-preview__author__messages">{{ $post->user->posts_count }} messages</p>
        
                        </div>
                    <div class="sm-pp__box {{ $post->user->house }}_bg">
                        <a href="#" class="profil">
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

            <button class="cta cta_v">Load more</button>


        </section>


        </div>
</div>


 
</main>


@endsection
