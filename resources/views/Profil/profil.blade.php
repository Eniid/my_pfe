@extends('layout.prof_layout')

@section('title')
{{ $user->name }} | 
@endsection

@section('content')
<main class="main-sec profil__main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev" itemscope itemtype="http://schema.org/Person">
            <section class="profil_info">
                <div class="main-message__profil profil_pp">
                    <div class="sm-pp__box ra {{$user->house}}_bg">
                        <img src="
                            @if ($user->img)
                            /{{$user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif
                        " alt="" class="sm-pp" itemprop="image">

                    </div>
                </div>

                <div class="flex edit__p">
                    <h2 class="profil__user-name {{ $user->house}}_c" itemprop="name">{{ $user->name }}</h2>
                    @if ($user->id === auth()->id())
                                <input type="checkbox" id="edit" class="login_checkbox" 
                                @if ($errors->any())
                                    checked
                                @endif
                                >
                                <label for="edit" class="login_text">‍
                                    @if ($user->house === 'ravenclaw')
                                        <img src="{{ asset('img/edit_r.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_r_edit.svg') }}" alt="" class="dm_img">   
                                    @endif
                                    @if ($user->house === 'gryffindor')
                                        <img src="{{ asset('img/edit_g.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_g_edit.svg') }}" alt="" class="dm_img">   
                                    @endif
                                    @if ($user->house === 'slytherin')
                                        <img src="{{ asset('img/edit_s.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_s_edit.svg') }}" alt="" class="dm_img">  
                                    @endif
                                    @if ($user->house === 'hufflepuff')
                                        <img src="{{ asset('img/edit_h.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_h_edit.svg') }}" alt="" class="dm_img"> 
                                    @endif
                                    <span class="cross ">Close</span>
                                </label>
                            <div class="login_content">
                                <div class="bg-color {{ Auth::user()->house}}_full_bg">
                                </div>             
                                <div class="main-sec registration-sec notification_box">
                                    <form action="/profil/edit" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <label for="pp">
                                            Profil Picture
                                        </label>
                                        <input type="file" name="profil" id="pp" accept=".png,.jpg,.jpeg,.gif">
                                        @error('profil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="name">
                                            Name
                                        </label>
                                        <input type="text" name="name" id="name" value="{{ $user->name }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="mail">
                                            Email
                                        </label>
                                        <input type="text"  name="email" id="mail" value="{{ $user->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <div class="dash_sep">
                                            <img src="{{ asset('img/sep.svg') }}" alt="">
                                        </div>
                                        

                                        <label for="password">
                                            New Passwors
                                        </label>
                                        <input type="password" name="password" id="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <label for="pass_con">
                                            Confirm Password
                                        </label>
                                        <input type="password" id="pass_con" name="password_confirmation">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror


                                       
                                        <button class="cta cta_i cta_l {{ Auth::user()->house}}_bg">Send</button>
                                

                                    </form>
                                </div>                   
                            </div>
                        </div>

                    @else


                            @if ($user->isFollowedByMe)
                            <form action="{{ $user->id}}/rem_f" method="post" class="add_f">
                                @csrf
        
                                <button><img src="{{ asset('img/remove_f.svg') }}" alt="" class="lm_img"><img src="{{ asset('img/d_remove.svg') }}" alt="" class="dm_img"></button>
                            </form>
                            @else
                            <form action="{{ $user->id}}/add_f" method="post" class="add_f">
                                @csrf
                                <button>
                                    @if ($user->house === 'ravenclaw')
                                        <img src="{{ asset('img/add_f_r.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_r_add.svg') }}" alt="" class="dm_img">   
                                    @endif
                                    @if ($user->house === 'gryffindor')
                                        <img src="{{ asset('img/add_f_g.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_g_add.svg') }}" alt="" class="dm_img"> 
                                    @endif
                                    @if ($user->house === 'slytherin')
                                        <img src="{{ asset('img/aff_f_s.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_s_add.svg') }}" alt="" class="dm_img"> 
                                    @endif
                                    @if ($user->house === 'hufflepuff')
                                        <img src="{{ asset('img/add_f_h.svg') }}" alt="" class="lm_img">   
                                        <img src="{{ asset('img/d_h_add.svg') }}" alt="" class="dm_img"> 
                                    @endif
                                </button>
                            </form>
                            @endif
                    
                    @endif

                </div>





                <!-- INTRODUCION  -->
                <div class="flex profil__intro">

                    <!-- INTRODUCION  -->
                    <div class="profil__mehp"> 
                        <div class="messages-house__profil flex">
                            <div class="main-message__messages">
                                <p class="messages__numbers">{{ $user->posts_count }}</p>
                                <p class="messages__text">messages</p>
                            </div>
                            <div class="main-message__messages">
                                <p class="messages__numbers {{$user->house}}_c">{{ $user->house_point }}</p>
                                <p class="messages__text">House Points</p>
                            </div>
                        </div>

                        <div class="profil__messages">
                            @if ($user->id === auth()->id())
                                <form action="/profil/{{$user->id}}/description" method="post" class="add_f desc_f">
                                    @csrf
                                    <textarea name="desc" id="" cols="30" rows="10" class="desc_text">{{ $user->description}}</textarea>
                                    <button class="cta cta_l update_btn">Update</button>
                                </form>
                            @else
                                <p class="desc_texte__p" itemprop="description">"{{ $user->description }}"</p>
                            @endif
                        </div>

                    </div>

                    <!-- INTRODUCION  -->
                    <div class="wand__info">
                        <p>{{ $user->wand_wood }}</p>    
                        <p>{{ $user->wand_inside }}</p>
                        <p>{{ $user->wand_length }} inches</p>
                        <img src="{{ asset('img/b1.svg') }}" class="wand_img bounce-bottom" alt="">
                    </div>



                </div>


            </section>
        </div>
    </div>
           

    <!-- Users -->
    <aside class="qeel qeel_profil">
        <h2 class="visually-hidden">Friends and events</h2>
        <section class="online">
                <h3 class="h2-like">Friends</h3>
                <div class="flex">
                    @foreach ($follows as $follow)
                    <div class="sm-pp__box {{ $follow->following->house }}_bg">
                        <img src="
                                @if ($follow->following->mg)
                                /{{$follow->following->img}}
                                @else
                                        {{'https://eu.ui-avatars.com/api/?name=' . urlencode($follow->following->name) . '&size=120&background=9165DF&color=ffffff'}}
                                @endif" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            {{ $follow->following->name }}
                        </div>
                    </div>
                    @endforeach

                </div>
        </section>

        <section class="">
            <h3 class="h2-like">User's events</h3>
            <div class="last-event__flex-contener">
                @foreach ($parts as $part)
                        <a href="#">
                            <section class="sm-event">
                                <h3 class="sm-event__title">{{$part->event->name}}</h3>
                                <div class="sm-event__date">
                                    <span class="sm-event__date__month">January</span>
                                    <span class="sm-event__date__day">10</span>
                                    <span class="sm-event__date__time">10.20AM</span>
                                </div>
                                <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$part->event->place}}</span>
                            </section>
                        </a>
                    @endforeach
            </div>
        </section>
     </aside>
            

     <!-- Last topic -->
    <section class="last-topics">


        <div class="dash_sep">
            <img src="{{ asset('img/sep.svg') }}" alt="">
        </div>


        <div class="flex filters">
            <h2>{{ $user->name }} messages</h2>
            <div class="under">
                <a href="#" class="active">All</a>
                <a href="#">Posts</a>
                <a href="#">Topics</a>
            </div>
        </div>

        @foreach ($posts as $post)
            
        <section class="topic-preview annim_home annimation_home">
            <h3 class="lt__title"><a href="{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}/{{ $post->postable->slug}}"> {{ $post->postable->title }}</a></h3>
            <span class="lt__ariane under"> <a href="/{{ $post->postable->categorie->forum->slug}}">{{ $post->postable->categorie->forum->name}}</a> ↣ <a href="/{{ $post->postable->categorie->forum->slug}}/{{ $post->postable->categorie->slug}}"> {{ $post->postable->categorie->name}} </a> </span>

            <div class="box_text">
                <div class="topix-preview__content">
                    {{ Illuminate\Mail\Markdown::parse($post->excerpt()) }}
                </div>
                <div class="mask">

                </div>
            </div>


        </section>
        @endforeach
        @if($posts->isEmpty())
        <div class="nothing_box">
            <img class="nothing_img lm_img" src="{{ asset('img/nothing.svg')}}" alt=""><img class="nothing_img dm_img" src="{{ asset('img/d_nothing.svg')}}" alt="">
            <p class="nothing">Oooops, there is nothing to see yet! </p>

        </div>
        @else
        <button class="cta cta_v">Load more</button>
        @endif




    </section>

 
</main>
@endsection
