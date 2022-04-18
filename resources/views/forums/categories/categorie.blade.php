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
                        <a href="/profil/{{$topic->user->id}}" class="xxx profil">
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
                        <p class="topix-preview__author__name">latest message by <span><a href="#" class="{{ $topic->latestPost->user->house }}_c">{{ $topic->latestPost?$topic->latestPost->user->name:""}}</a></span></p>
                        <p class="topix-preview__author__messages">{{ $topic->latestPost?$topic->latestPost->created_at->diffForHumans():""}}</p>
        
                    </div>

                    @if($topic->user->id === auth()->id() || auth()->user()->is_admin )    
                    <div class="edit-btn__topic">
                        <a href=""><img class="icone lm_img" src="{{ asset('img/edit.svg')}}" alt="edit the topic"><img class="icone dm_img" src="{{ asset('img/d_edit.svg')}}" alt="edit the topic" class="dm_img"></a>
                        <input type="checkbox" name="del" id="del" class="del_c visually-hidden">
                        <label href="" class="in" for="del"><img class="icone lm_img" src="{{ asset('img/delete.svg')}}" alt="delete topic"><img class="icone dm_img" src="{{ asset('img/d_delete.svg')}}" alt="delete topic" ></label>
                        <div class="not_box">
                            <div class="bg-color {{ Auth::user()->house}}_full_bg">
                            </div>             
                            <section class="main-sec registration-sec notification_box">
                                <h4 class="alter_t">Are you sure ?</h4>
                                <p>Are you sure you want to delete {{$topic->title}} ? There is no spell to retore it once it's gone!</p>
                                <div class="flex">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <button class="cta cta_i cta_l cta_not">Delete</button>
                                    </form>
                                    <div class="cta cta_l cta_not"><a href="/{{ $forum->slug }}/{{ $categorie->slug }}">Back</a></div>
                                </div>

                            </section>                   
                        </div>
                    </div>
                    @endif

                </section>
            @endforeach
        @else
        <div class="nothing_box">
            <img class="nothing_img lm_img" src="{{ asset('img/nothing.svg')}}" alt=""><img class="nothing_img dm_img" src="{{ asset('img/d_nothing.svg')}}" alt="">
            <p class="nothing">Oooops, there is nothing to see yet! </p>
            <div class="cta cta_v">
                <a href="/{{ $forum->slug}}/{{ $categorie->slug}}/topics/create">
                    Create the first topic
                </a>
            </div>
        </div>
        @endif



    </section>
 
</main>

@endsection
