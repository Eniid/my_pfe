@extends('layout.layout')

@section('title')
Topic Name |
@endsection

@section('content')

<main class="main-sec">
   
    <!-- Cathegories -->
    <section class="topic_box">
        <h2>{{ $topic->title }}</h2>
        <span class="lt__ariane under">
            <a href="/{{ $forum->slug }}">{{ $forum->name }} </a> ↣ <a href="/{{ $forum->slug}}/{{$categorie->slug}}">{{ $categorie->name }}</a> ↣ {{ $topic->title }}
        </span>

    <!-- TOPIC -->

    {{ $posts->links() }}
            @foreach($posts as $post)
                <div class="main-message flex">
                    <!-- Profil -->
                    <div class="post_profil">
                        <div class="flex profl_main">
                            <div class="main-message__profil">
                                <div class="sm-pp__box ra {{$post->user->house}}_bg">
                                    <img src="@if ($post->user->img)
                                    /{{$post->user->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode($post->user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                                </div>
                            </div>
                            <div class="profil_info">
                                <div class="main-message__user-name ra under {{$post->user->house}}_c">
                                    <a href="/profil/{{$post->user->id}}" class="name">{{$post->user->name}}</a></div>
                                <div class="main-message__title rang">Rang</div>
                            </div>
                        </div>

                        <div class="main-message__messages">
                            <p class="messages__numbers">{{$post->user->posts_count}}</p>
                            <p class="messages__text">messages</p>
                        </div>
                        <div class="main-message__messages">
                            <p class="messages__numbers {{$post->user->house}}_c">{{$post->user->house_point}}</p>
                            <p class="messages__text">House Point</p>
                        </div>
                    </div>


                    <!-- Message -->
                    <div class="main-message__text">




                        @if($post->likes->contains(auth()->id()))
                            
                            <form class="message-like"  action="/{{ $forum->slug}}/{{$categorie->slug}}/{{ $topic->slug }}/unlike" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button><img src="{{ asset('img/liked.svg')}}" alt=""></button><br>
                                {{ $post->likes->count()}}
                            </form>

                        @else
                        <form class="message-like"  action="/{{ $forum->slug}}/{{$categorie->slug}}/{{ $topic->slug }}/like" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button><img src="{{ asset('img/not_like.svg')}}" alt=""></button><br>
                            {{ $post->likes->count()}} 
                        </form>
                        @endif
                        <div>
                            {{ $post->body }}
    
                        </div>

                        <div class="edit-btn__topic">
                        @if($post->user->id === auth()->id() || auth()->user()->is_admin )    
                        <hr>

                            <a href=""><img class="icone" src="{{ asset('img/edit.svg')}}" alt=""></a><a href=""><img class="icone" src="{{ asset('img/delete.svg')}}" alt=""></a>
                            @endif
                        </div>
                    </div>
                </div>
        @endforeach







    <!-- NEW -->
        <form action="/{{$forum->slug}}/{{$categorie->slug}}/{{$topic->slug}}" method='post'>
            @csrf
            <div class="message__box flex">
                <div class="message__border">
                    <textarea name="body" id="" cols="30" rows="10" placeholder="Type your new message here!"></textarea>
                    <button   class="cta cta_m">Send</button>
                </div>
            </div>
        </form>




    </section>
   
 
</main>

@endsection
