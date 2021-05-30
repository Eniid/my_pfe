@extends('layout.layout')

@section('title')
Events |
@endsection


@section('content')

<main class="main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="house-cup">
                <h2>{{ $event->name }}</h2>
                <p>{{ $event->desc }}</p>

                {{ $event->event_user }}



                @if($event->event_user->contains(auth()->id()))

                @else
                @endif

                <form action="/events/{{$event->slug}}/leave" method="post">
                    @csrf
                    <input type="hidden" name="event_id" value="{{$event->id}}">
                    <button class="cta cta_i">leave</button>
                </form>
                    <form action="/events/{{$event->slug}}/join" method="post">
                        @csrf
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <button class="cta cta_l">Join the event</button>
                    </form>

            </div>            

            </section>

            </div>
        </section>
    </div>


       <!-- Users -->
        <aside class="qeel que__event">
            <h2 class="hidden">Users</h2>
            <section class="online">
                <h3 class="h2-like">they will be there ?</h3>
                    <div class="flex">
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
                        <div class="sm-pp__box">
                            <img src="/img/pp1.jpg" alt="" class="sm-pp">
                            <div class="sm-pp__info">
                                User Name
                            </div>
                        </div>
                    </div>
            </div>
       </aside>


    <!-- Last topic -->
    <section class="last-topics last-post_event">
        <h2>Messages</h2>

        <form action="/events/{{$event->slug}}" method="post" class="event-message">
            @csrf
            <div class="message__box">
                <div class="message__border">
                    <textarea name="body" id="" cols="30" rows="10" placeholder="Type your new message here!"></textarea>
                    <button   class="cta cta_m">Send</button>
                </div>
            </div>
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
                       <a href="#" name="xxx profil">
                            <img src="/img/pp1.jpg" alt="" class="sm-pp">
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
