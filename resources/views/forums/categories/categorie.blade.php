@extends('layout.layout')

@section('title')
Cat Name |
@endsection

@section('content')
<main class="main-sec">
    <section class="max-116">
        <h2>{{$categorie->name}}</h2>
        <span class="lt__ariane">
           <a href="/{{ $forum->slug }}">{{ $forum->name }} </a> ↣ {{ $categorie->name }}</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>

        <div class="topic-add">
            <a href="/{{ $forum->slug}}/{{ $categorie->slug}}/topics/create">
                <img src="{{ asset('img/plus.svg') }}" alt="Add a new topic">
            </a>
        </div>


        <!-- topics -->
        @if($categorie->topics && !$categorie->topics->isEmpty())
            @foreach($categorie->topics as $topic)
                <section class="topic-list">
                    <div class="cat-box_new">
                        <img src="{{ asset('img/new.svg')}}" alt="new message">
                    </div>
                    <div class="sm-pp__box">
                        <a href="#" name="xxx profil">
                            <img src="{{ asset('img/pp1.jpg')}}" alt="" class="sm-pp">
                        </a>
                    </div>
                    <div class="topic-main_box">
                        <div class="flex">
                            <h3><a href="/{{ $forum->slug }}/{{ $categorie->slug }}/{{ $topic->slug }}">{{$topic->title}}</a></h3> 
                            @if($topic->user->id === auth()->id() || auth()->user()->is_admin )    
                                <a href=""><img class="icone" src="{{ asset('img/edit.svg')}}" alt=""></a><a href=""><img class="icone" src="{{ asset('img/delete.svg')}}" alt=""></a>
                            @endif
                        </div>
                        <p class="topix-preview__author__name">by<span><a href="#">{{ $topic->user->name }}</a></span></p>
                        <p class="topix-preview__author__messages">{{ $topic->posts_count }} messages</p>
                    </div>

                    <div class="latest-message">
                        <p class="topix-preview__author__name">latest message by<span><a href="#">Name</a></span></p>
                        <p class="topix-preview__author__messages">yesterday</p>
                
                    </div>

                </section>
            @endforeach
        @else
            <p>Ouuuups, there is nothing to see yet! </p>
        @endif



    </section>
 
</main>

@endsection
