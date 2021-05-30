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
                {{ $event->posts }}



                @if($event->event_user->contains(auth()->id()))
                    <form action="/events/{{$event->slug}}/leave" method="post">
                        @csrf
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <button class="cta">leave</button>
                    </form>
                @else
                    <form action="/events/{{$event->slug}}/join" method="post">
                        @csrf
                        <input type="hidden" name="event_id" value="{{$event->id}}">
                        <button class="cta">Participer</button>
                    </form>
                @endif

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

    <form action="/events/{{$event->slug}}" method="post">
        @csrf
        <textarea name="body" id="" cols="30" rows="10">Votre message</textarea>
        <button>Send</button>
     </form>

    <!-- Last topic -->
    <section class="last-topics">
        <h2>Messages</h2>

        @foreach ($event->posts as $post)
        <section class="topic-preview">
            <div class="topix-preview__content">
                <p>{{$post->body}}</p>
            </div>

            <div class="CTA"><a href="#">Participer</a></div>
            </div>
            

            <div class="topix-preview__author flex">
                <div>
                    <p class="topix-preview__author__name">🐍 <span><a href="#">Name</a></span></p>
                    <p class="topix-preview__author__messages">230messages</p>
                        
                </div>
            </div>

        </section>
        @endforeach


    </section>
</main>
@endsection
