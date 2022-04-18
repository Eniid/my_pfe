@extends('layout.layout')

@section('title_l')

@endsection


@section('content')
<main class="main-sec">
    <div class="frame">
         


        <!-- Searched topic -->


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
