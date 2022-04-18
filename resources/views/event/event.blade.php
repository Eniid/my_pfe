@extends('layout.layout')

@section('title')
Events |
@endsection


@section('content')

<main class="main-sec">
    <!-- House cup and last event -->
    <section class="home-info">
        <h2 class="event_name event_name_befor_by">{{$event->name}}</h2>
        <p class="event_by">Created by <span class="under"><a href="" class="{{ $event->user->house }}_c">{{ $event->user->name }}</a></span></p>
        <div class="flex home-house_ev">
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
            
            <div>
                <div class="nm event_more">
                    <div class="sm-event__date">
                        <span class="sm-event__date__month">January</span>
                        <span class="sm-event__date__day">10</span>
                        <span class="sm-event__date__time">10.20AM</span>
                    </div>

                    <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place">{{$event->place}}</span>
                    <span class="sm-event__max">Max participants <br> 10</span>

                    
                </div>
            </div>

        </div>
    </section>


       <!-- Users -->
        <aside class="qeel que__event">
            <h2 class="visually-hidden">Users</h2>
            <section class="online">
                <h3 class="h2-like">Participents</h3>

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

                    <a href=""><img class="icone" src="{{ asset('img/edit.svg')}}" alt=""></a><a href=""><img class="icone" src="{{ asset('img/delete.svg')}}" alt=""></a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach


    </section>
</main>
@endsection
