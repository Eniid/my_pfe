@extends('layout.layout')


@section('title_l')

@endsection


@section('content')
<main class="main-sec">
    <div class="frame">

    <!-- House cup and last event -->
    <div class="home-info">
        <section class="last-topics">

            <div class="dash_sep visually-hidden ">
                <img src="{{ asset('img/sep.svg') }}" alt="" >
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
            <section class="topic-preview annim_home annimation_home">
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

    </div>



       <!-- Users -->
       <aside class="qeel">
            <h2 class="hidden">Users</h2>
            <section class="">
                <h3 class="h2-like">User's event</h3>
                <div class="last-event__flex-contener">
                    <a href="#">
                        <section class="sm-event">
                            <h3 class="sm-event__title">Un titre</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">January</span>
                                <span class="sm-event__date__day">10</span>
                                <span class="sm-event__date__time">10.20AM</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img"><img src="/img/d_place.svg" width="11" height="13" class="dm_img">Disocrd</span>
                        </section>
                    </a>
    
                    <a href="#">
                        <section class="sm-event">
                            <h3 class="sm-event__title">Un titre</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">January</span>
                                <span class="sm-event__date__day">10</span>
                                <span class="sm-event__date__time">10.20AM</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img"><img src="/img/d_place.svg" width="11" height="13" class="dm_img">Skype</span>
                        </section>
                    </a>
                </div>
            </section>
    </aside>




    <!-- Last topic -->


   

</div>


 
</main>


@endsection
