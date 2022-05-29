@extends('layout.layout')

@section('title')
Events |
@endsection


@section('content')

<main class="main-sec">
    <!-- House cup and last event -->
    <section class="home-info">



        <div class="flex event_discribe">
            <div class="event_basic">
                <h2 class="event_name event_name_befor_by">{{$event->name}} 

                </h2>
                <span class="lt__ariane under">
                    <a href="/events">Events </a> ↣ <a href="/events/{{ $event->slug }}">{{ $event->name }}</a>
                </span>
        
                <p class="event_by">Created by <span class="under"><a href="" class="{{ $event->user->house }}_c">{{ $event->user->name }}</a></span></p>
                

                <div class="house-cup">
                    <p>{{ $event->desc }}</p>
    
                    @if($event->isAuthUserPart)   
                        <section class="pivate_sec">
                            <h3 class="pritavte_title">More informations</h3>
                            <p class="private_desc">{{ $event->private_desc }}</p>
                        </section>
                    @endif
    
                    @if($event->isAuthUserPart)   
                        <form action="/events/{{$event->slug}}/leave" method="post">
                            @csrf
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            <button class="cta cta_i">leave</button>
                        </form>
                    @else
                    <form action="/events/{{$event->slug}}/join" method="post">
                        @csrf
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <button class="cta cta_l">Join the event</button>
                    </form>
                    @endif
                </div>  
                
            </div>

            <div class="event_important">
                <div class="sm-event__date">
                    <span class="sm-event__date__month">{{ $event->date->monthName }} {{ $event->date->day }} - {{ $event->date->format('g.iA') }}</span>
                </div>

                <span class="diff-time">{{ $event->date->diffForHumans()}}</span>
                <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$event->place}}</span>


            </div>

        </div>

    </section>


        <!-- Users -->
        <aside class="qeel que__event">


            <h2 class="visually-hidden">Users</h2>
            <section class="online">
                <h3 class="h2-like">Participents</h3>
                @if ($event->event_user->isEmpty())
                    No particpent are registered to participate yet. 
                @endif

                <div class="flex">
                    @foreach ($event->event_user as $participant)
                    <a href="/profil/{{ $participant->user->id}}">
                        <div class="sm-pp__box {{ $participant->user->house}}_bg">
                            <img src="
                            @if ($participant->user->img)
                            /{{$participant->user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($participant->user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif" alt="" class="sm-pp">
                            <div class="sm-pp__info">
                                {{ $participant->user->name }}
                            </div>
                        </div>    
                    </a>
                    @endforeach    
                </div>    
            </section>
            <section class="online">
                <h3 class="h2-like">Other events to comme</h3>

                <div class="flex event_cr">
                    @foreach ($events as $event)
                    <a href="events/{{$event->slug}}">
                        <section class="sm-event">
                            <h3 class="sm-event__title">{{$event->name}}</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">{{$event->date->monthName}}</span>
                                <span class="sm-event__date__day">{{$event->date->day}}</span>
                                <span class="sm-event__date__time">{{$event->date->format('g.iA')}}</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$event->place}}</span>
                        </section>

                    </a>
                    @endforeach    
                </div>    

            </section>

            @if($participations->isEmpty())
            @else
                <section class="online">
                    <h3 class="h2-like">Your next events</h3>


                    <div class="flex event_cr">
                        @foreach ($participations as $part)
                        <a href="events/{{$part->event->slug}}">
                            <section class="sm-event">
                                <h3 class="sm-event__title">{{$part->event->name}}</h3>
                                <div class="sm-event__date">
                                    <span class="sm-event__date__month">{{$part->event->date->monthName}}</span>
                                    <span class="sm-event__date__day">{{$part->event->date->day}}</span>
                                    <span class="sm-event__date__time">{{$part->event->date->format('g.iA')}}</span>
                                </div>
                                <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$part->event->place}}</span>
                            </section>
                        </a>
                        @endforeach    
                    </div>    
                </section>
            @endif

        </aside>


    <!-- Last topic -->
    <section class="last-topics last-post_event">

        <div class="dash_sep">
            <img src="{{ asset('img/sep.svg') }}" alt="">
        </div>


        <h2>Messages</h2>

        <form action="/events/{{$event->slug}}" method="post" class="event-message">
            @csrf
            <div class="message__box">
                <div class="message__border">
                    <textarea name="body" cols="30" rows="10" placeholder="Type your new message here!">{{ old('body') }}</textarea>
                    <button   class="cta cta_m">Send</button>
                </div>
            </div>
            @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
         </form>

        @foreach ($event->posts as $post)
        <div class="main-message flex">
            <!-- Profil -->


            <!-- Message -->
            <div class="main-message__text">
                

                <div class="topix-preview__author flex">
                    <div class="topix-preview_nm"> 
                        
                            
                    </div>
                    <div class="sm-pp__box {{ $post->user->house }}_bg">
                        <a href="/profil/{{ $post->user->id}}" name="xxx profil">
                            <img src="@if ($post->user->img)
                            /{{$post->user->img}}
                            @else
                                    {{'https://eu.ui-avatars.com/api/?name=' . urlencode($post->user->name) . '&size=120&background=9165DF&color=ffffff'}}
                            @endif" alt="" class="sm-pp">
                        </a>
                    </div>
                </div>

                <div>
                    <span class="topix-preview__author__name under {{ $post->user->house }}_c"><span><a href="/profil/{{$post->user->id }}">{{ $post->user->name }}</a></span> : </span> {{ $post->body }}

                </div>

                <div class="edit-btn__topic">
                @if($post->user->id === auth()->id() || auth()->user()->is_admin )    
                <hr>

                    <a href=""><img class="icone lm_img" src="{{ asset('img/edit.svg') }}"
                        alt="edit the topic"><img class="icone dm_img"
                        src="{{ asset('img/d_edit.svg') }}" alt="edit the topic"
                        class="dm_img"></a><a href=""><img class="icone lm_img"
                        src="{{ asset('img/delete.svg') }}" alt="delete topic"><img class="icone dm_img"
                        src="{{ asset('img/d_delete.svg') }}" alt="delete topic"></a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach


    </section>
</main>
@endsection
