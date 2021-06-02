@extends('layout.layout')

@section('title')
{{$categorie->name}} |
@endsection

@section('content')
<main class="main-sec topic">
    <section class="max-116">
        <h2>{{$categorie->name}}</h2>
        <span class="lt__ariane under">
           <a href="/{{ $forum->slug }}">{{ $forum->name }} </a> ↣ {{ $categorie->name }}</span>

        <div class="topic-add">
            <p class="forum_desc">{{$categorie->description}}</p>

            <div class="sm-event__button">
                <a href="/{{ $forum->slug}}/{{ $categorie->slug}}/topics/create">
                    <img src="{{ asset('img/plus.svg') }}" alt="Add a new topic" width="50" height="50">
                </a>
            </div>
        </div>


        <!-- topics -->
        @if($categorie->topics && !$categorie->topics->isEmpty())
            @foreach($categorie->topics as $topic)
                <section class="topic-list">
                    <div class="cat-box_new">
                        <img src="{{ asset('img/new.svg')}}" alt="new message">
                    </div>
                    <div class="sm-pp__box {{ $topic->user->house}}_bg">
                        <a href="#" name="xxx profil">
                            <img src="
                            @if ($topic->user->img)
                            /{{$topic->user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($topic->user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif" alt="" class="sm-pp">
                        </a>
                    </div>
                    <div class="topic-main_box">
                        <div class="flex">
                            <h3><a href="/{{ $forum->slug }}/{{ $categorie->slug }}/{{ $topic->slug }}">{{$topic->title}}</a></h3> 

                        </div>
                        <p class="topix-preview__author__name">by <span><a href="#" class="{{ $topic->user->house}}_c">{{ $topic->user->name }}</a></span></p>
                        <p class="topix-preview__author__messages">{{ $topic->posts_count }} messages</p>
                    </div>

                    <div class="latest-message">
                        <p class="topix-preview__author__name">latest message by<span><a href="#" class="ravenclaw_c"> Enid</a></span></p>
                        <p class="topix-preview__author__messages">yesterday</p>
        
                    </div>

                    @if($topic->user->id === auth()->id() || auth()->user()->is_admin )    
                    <div class="edit-btn__topic">
                        <a href=""><img class="icone" src="{{ asset('img/edit.svg')}}" alt=""></a><a href=""><img class="icone" src="{{ asset('img/delete.svg')}}" alt=""></a>
                    </div>
                    @endif

                </section>
            @endforeach
        @else
            <p>Ouuuups, there is nothing to see yet! </p>
        @endif



    </section>
 
</main>

@endsection
