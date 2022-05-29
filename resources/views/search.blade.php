@extends('layout.layout')


@section('title_l')

@endsection


@section('content')
<main class="main-sec">
    <div class="frame">


        {{-- Les potes --}}
        <div class="home-info">
            <section class="last-topics">
                <h2>Search resultes for "{{$searched}}"</h2>

                <div class="pph_texte pph_p">
                    <label for="sortBy">
                        Sort by : 
                    </label>
                    <select id="sortBy" onchange="this.form.submit()" name="messagesByPage">
                        <option value="10" selected="">newest</option>
                        <option value="15">olderst</option>
                        <option value="20">alphabetic</option>
                    </select>
        
                </div>

                <section>         
                    <div class="flex filters">
                        <h3>Posts</h3>
                        <div class="under">
                            <a href="#" class="active">All</a>
                            <a href="#">Topics titles</a>
                            <a href="#">Post content</a>
                        </div>
                    </div>
            
                    @if ($posts->isEmpty())
                    We're sorry, no post are matching you're search.
                    @endif
    
                    @foreach ($posts as $post)
                        <section class="topic-preview">
                            <h4 class="lt__title under"><a href="{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}/{{ $post->postable->slug}}"> {{ $post->postable->title }}</a></h4>
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
            </section>
        </div>

        
        {{-- Les potes --}}
        <aside class="qeel">
                <h2 class="hidden">Users & Events</h2>
                <section class="">

                    @if ($users->isEmpty() && $events->isEmpty())
                    We're sorry, no post are matching you're search.
                    @endif

                    @if(!$users->isEmpty())
                    <h3 class="h2-like">Users</h3>
                    <div class="last-event__flex-contener">

                        @foreach ($users as $user)
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
                    @endif
                </section>
                <section class="">
                    @if(!$events->isEmpty())
                    <h3 class="h2-like">Event</h3>
                    <div class="last-event__flex-contener">

                        @foreach ($events as $event)
                            <a href="events/{{$event->slug}}">
                                <section class="sm-event">
                                    <h3 class="sm-event__title">{{$event->name}}</h3>
                                    <div class="sm-event__date">
                                        <span class="sm-event__date__month">{{$event->date->monthName}}</span>
                                        <span class="sm-event__date__day">{{$event->date->day}}</span>
                                        <span class="sm-event__date__time">{{$event->date->format('g.iA')}}</span>
                                    </div>
                                    <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img"><img src="/img/d_place.svg" width="11" height="13" class="dm_img">Disocrd</span>
                                </section>
                            </a>
                        @endforeach
                        
                    </div>
                    @endif

                </section>
        </aside>




    </div>
</main>


@endsection
