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
                        <div class="box_mess">
                            <div class="main-message__messages">
                                <p class="messages__numbers">{{$post->user->posts_count}}</p>
                                <p class="messages__text">messages</p>
                            </div>
                            <div class="main-message__messages">
                                <p class="messages__numbers {{$post->user->house}}_c">{{$post->user->house_point}}</p>
                                <p class="messages__text">House Point</p>
                            </div>
                        </div>

                    </div>


                    <!-- Message -->
                    <div class="main-message__text">

                        <div class="post_date" title="{{ $post->created_at->toDayDateTimeString()}}">
                            {{ $post->created_at->diffForHumans()}}
                        </div>

                        <div>
                            {{ Illuminate\Mail\Markdown::parse($post->body) }}
    
                        </div>

                        
                        <div class="edit-btn__topic">
                        @if($post->likes->contains(auth()->id()))
                            <form class="message-like"  action="/{{ $forum->slug}}/{{$categorie->slug}}/{{ $topic->slug }}/unlike" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <button><img src="{{ asset('img/liked.svg')}}" class="lm_img" alt="like the message"><img src="{{ asset('img/d_like.svg')}}" class="dm_img" alt="like the message"></button><br>
                                <span class="like_c">{{ $post->likes->count()}}</span>
                            </form>
                        @else
                        <form class="message-like"  action="/{{ $forum->slug}}/{{$categorie->slug}}/{{ $topic->slug }}/like" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button><img src="{{ asset('img/not_like.svg')}}" class="lm_img" alt="Unlike the message"><img src="{{ asset('img/d_unlike.svg')}}" class="dm_img" alt="Unlike the message"></button><br>
                            <span class="like_c">{{ $post->likes->count()}} </span>
                            
                        </form>
                        @endif

                        <a href=""><img class="icone lm_img" src="{{ asset('img/quote.svg')}}" alt="edit the topic"><img class="icone dm_img" src="{{ asset('img/d_quote.svg')}}" alt="edit the topic" class="dm_img"></a>
                        @if($post->user->id === auth()->id() || auth()->user()->is_admin )    
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
                                    <div class="cta cta_l cta_not"><a href="/{{ $forum->slug }}/{{ $categorie->slug }}/{{ $topic->slug }}">Back</a></div>
                                </div>

                            </section>                   
                        </div>
                            @endif
                        </div>
                    </div>
                </div>
        @endforeach
        {{ $posts->links() }}







    <!-- NEW -->
        <form action="/{{$forum->slug}}/{{$categorie->slug}}/{{$topic->slug}}" method='post'>
            @csrf
            <div class="message__box flex">
                <div class="message__border">
                    <textarea name="body" id="" cols="30" rows="10" placeholder="Type your new message here!"></textarea>
                    <div class="mb_box">
                        <div class="message_btn"><i>i</i></div>
                        <div class="message_btn"><strong>b</strong></div>
                        <div class="message_btn">img</div>                        
                    </div>

                    <button   class="cta cta_m">Send</button>
                </div>

                @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
        </form>




    </section>
   
 
</main>

@endsection
