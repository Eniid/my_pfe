@extends('layout.prof_layout')

@section('title')
{{ $user->name }} | 
@endsection

@section('content')
<main class="main-sec profil__main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="profil_info">
                <div class="main-message__profil profil_pp">
                    <div class="sm-pp__box ra {{$user->house}}_bg">
                        <img src="
                            @if ($user->img)
                            /{{$user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif
                        " alt="" class="sm-pp">

                    </div>
                </div>

                <div class="flex edit__p">
                    <h2 class="profil__user-name {{ $user->house}}_c">{{ $user->name }}</h2>
                    @if ($user->id === auth()->id())
                                <input type="checkbox" id="edit" class="login_checkbox" 
                                @if ($errors->any())
                                    checked
                                @endif
                                >
                                <label for="edit" class="login_text">‍
                                    @if ($user->house === 'ravenclaw')
                                    <img src="{{ asset('img/edit_r.svg') }}" alt="">   
                                    @endif
                                    @if ($user->house === 'gryffindor')
                                        <img src="{{ asset('img/edit_g.svg') }}" alt="">
                                    @endif
                                    @if ($user->house === 'slytherin')
                                    <img src="{{ asset('img/edit_s.svg') }}" alt="">
                                    @endif
                                    @if ($user->house === 'hufflepuff')
                                    <img src="{{ asset('img/edit_h.svg') }}" alt="">
                                    @endif
                                    <span class="cross ">Close</span>
                                </label>
                            <div class="login_content">
                                <div class="bg-color {{ Auth::user()->house}}_full_bg">
                                </div>             
                                <div class="main-sec registration-sec notification_box">
                                    <form action="/profil/edit" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <label for="name">
                                            Profil Picture
                                        </label>
                                        <input type="file" name="profil" accept=".png,.jpg,.jpeg,.gif">

                                        <label for="name">
                                            Name
                                        </label>
                                        <input type="text" name="name" id="name" value="{{ $user->name }}">

                                        <label for="name">
                                            Email
                                        </label>
                                        <input type="text"  name="email" id="name" value="{{ $user->email }}">

                                        <div class="dash_sep">
                                            <img src="{{ asset('img/sep.svg') }}" alt="">
                                        </div>

                                        <label for="name">
                                            New Passwors
                                        </label>
                                        <input type="text" name="password" id="name">

                                        <label for="name">
                                            Confirm Password
                                        </label>
                                        <input type="text" id="name" name="password_confirmation">


                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                        <button class="cta cta_i cta_l {{ Auth::user()->house}}_bg">Send</button>
                                

                                    </form>
                                </div>                   
                            </div>
                        </div>

                    @else

                    <form action="" method="post" class="add_f">
                        <button>
                            @if ($user->house === 'ravenclaw')
                                <img src="{{ asset('img/add_f_r.svg') }}" alt="">   
                            @endif
                            @if ($user->house === 'gryffindor')
                                <img src="{{ asset('img/add_f_g.svg') }}" alt="">
                            @endif
                            @if ($user->house === 'slytherin')
                            <img src="{{ asset('img/aff_f_s.svg') }}" alt="">
                            @endif
                            @if ($user->house === 'hufflepuff')
                            <img src="{{ asset('img/add_f_h.svg') }}" alt="">
                            @endif
                        </button>
                    </form>
                    <form action="" method="post" class="add_f">
                        <button><img src="{{ asset('img/remove_f.svg') }}" alt=""></button>
                    </form>
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
                                <p class="messages__text">House Point</p>
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
                                <p class="desc_texte__p">"{{ $user->description }}"</p>
                            @endif
                        </div>

                    </div>

                    <!-- INTRODUCION  -->
                    <div class="wand__info">
                        <p>{{ $user->wand_wood }}</p>    
                        <p>{{ $user->wand_inside }}</p>
                        <p>{{ $user->wand_length }} inches</p>
                        <img src="{{ asset('img/wand.png') }}" alt="">
                    </div>



                </div>


            </section>
        </div>
    </div>
           

    <!-- Users -->
    <aside class="qeel">
        <h2 class="hidden">{{ $user->name }}</h2>
        <div class="online">
                <div class="flex">
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            Isa
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                    <div class="sm-pp__box">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                        <div class="sm-pp__info">
                            User Name
                        </div>
                    </div>
                </div>
        </div>

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
                        <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
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
                        <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Skype</span>
                    </section>
                </a>
            </div>
        </section>
     </aside>
            

     <!-- Last topic -->
    <section class="last-topics">


        <div class="dash_sep">
            <img src="{{ asset('img/sep.svg') }}" alt="">
        </div>


        <div class="flex filters">
            <h2>Enid messages</h2>
            <div class="under">
                <a href="#" class="active">All</a>
                <a href="#">Posts</a>
                <a href="#">Topic</a>
            </div>
        </div>


        <section class="topic-preview annim_home annimation_home">
            <h3 class="lt__title">Topic title</h3>
            <span class="lt__ariane">Forum ↣ category</span>

            <div class="topix-preview__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
            </div>

        </section>
    </section>

 
</main>
@endsection
