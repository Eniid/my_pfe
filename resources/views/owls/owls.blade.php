@extends('layout.layout')

@section('title_l')
Owls
@endsection


@section('content')

<main class="owls_main">
    <div class="flex owls-section_contener">

        {{-- Liste des messages --}}
        <div class="owls-list">
            <form action="">
                <input type="text" placeholder="search for a conversation">
            </form>

            <div class="messenger_user-list">
                @foreach ($users as $user)
                <div class="user-btn_contener flex">
                    <div class="user_pp">
                        <div class="sm-pp__box {{ $user->house }}_bg">
                            <a href="/profil/{{ $user->id }}" class="xxx profil">
                                    <img src="@if ($user->img)
                                    /{{$user->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                            </a>
                        </div>
                    </div>
                    <div class="user_inos">
                        <div class="user-btn__user-name">{{ $user->name }}</div>
                        <div class="user-btn__message">latest message sent</div>
                    </div>
                    <div class="user_inos">
                        <div class="user-btn__message">time ago</div>
                    </div>       
                </div>
            @endforeach
            </div>
            
        </div>

        {{-- Contenu messages --}}
        <div class="conversation">

            {{-- One Message --}}
            <div class="conversation__box flex">

                <div class="current-user__message flex">
                    <div class="user_pp">
                        <div class="sm-pp__box {{ $current_user->house }}_bg">
                            <a href="/profil/{{ $current_user->id }}" class="xxx profil">
                                    <img src="@if ($current_user->img)
                                    /{{$current_user->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode($current_user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                            </a>
                        </div>
                    </div>

                    <div class="flex message_infos">
                        <div class="conversation_message {{ $current_user->house }}_bg">
                            Great and you ? 
                        </div>
                        <div class="message_date">Mon. 10.30 AM</div>
                    </div>
                </div>

                <div class="auth-user__message flex">
                    <div class="user_pp">
                        <div class="sm-pp__box {{ $current_user->house }}_bg">
                            <a href="/profil/{{ $current_user->id }}" class="xxx profil">
                                    <img src="@if ($current_user->img)
                                    /{{$current_user->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode($current_user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                            </a>
                        </div>
                    </div>

                    <div class="flex message_infos">
                        <div class="conversation_message {{ $current_user->house }}_bg">
                            Hi! How are you doing today ? 
                        </div>
                        <div class="message_date">Mon. 10.30 AM</div>
                    </div>
                </div>


                <div class="messager_separator">
                    TODAY
                </div>


                    <div class="current-user__message flex">
                        <div class="user_pp">
                            <div class="sm-pp__box {{ $current_user->house }}_bg">
                                <a href="/profil/{{ $current_user->id }}" class="xxx profil">
                                        <img src="@if ($current_user->img)
                                        /{{$current_user->img}}
                                        @else
                                                {{'https://eu.ui-avatars.com/api/?name=' . urlencode($current_user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                        @endif" alt="" class="sm-pp">
                                </a>
                            </div>
                        </div>
    
                        <div class="flex message_infos">
                            <div class="conversation_message {{ $current_user->house }}_bg">
                                I am doing great, a bit bussy right now. I've got too mich to do laterly. And I haven't had the time to whatch Harry Potter in a while! 
                            </div>
                            <div class="message_date">Mon. 10.30 AM</div>
                        </div>
                    </div>
    

                
                <div>
                    <form action="" class="message__form">
                        <input type="text" placeholder="your message">
                        <button><img src="{{ asset('img/mess_btn.svg') }}" alt=""></button>
                    </form>
                </div>
            </div>

        </div>

        {{-- Infos utilisateur --}}
        <div class="user-infos">
            <div>
                <img src="@if ($current_user->img)
                /{{$current_user->img}}
                @else
                        {{'https://eu.ui-avatars.com/api/?name=' . urlencode($current_user->name) . '&size=120&background=9165DF&color=ffffff'}}
                @endif" alt="" class="background_image">
            </div>
            <div class="user-infos_main-section">
                <div class="user-infos_main-section__scrool">
                    
                    {{-- User PP --}}
                    <div class="user_pp">
                        <div class="sm-pp__box {{ $current_user->house }}_bg">
                            <a href="/profil/{{ $user->id }}" class="xxx profil">
                                    <img src="@if ($current_user->img)
                                    /{{$current_user->img}}
                                    @else
                                            {{'https://eu.ui-avatars.com/api/?name=' . urlencode($current_user->name) . '&size=120&background=9165DF&color=ffffff'}}
                                    @endif" alt="" class="sm-pp">
                            </a>
                        </div>
                    </div>


                    <div class="profil__user-name slytherin_c" itemprop="name">Fabien</div>
                    <p class="profil_link"><a href="">Profil</a></p>


                    <div class="profil__mehp"> 
                        <div class="messages-house__profil flex">
                            <div class="main-message__messages">
                                <p class="messages__numbers">0</p>
                                <p class="messages__text">messages</p>
                            </div>
                            <div class="main-message__messages">
                                <p class="messages__numbers slytherin_c">0</p>
                                <p class="messages__text">House Points</p>
                            </div>
                        </div>

                        <div class="profil__messages">
                                                            <p class="desc_texte__p" itemprop="description">""</p>
                                                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
