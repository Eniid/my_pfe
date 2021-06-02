@extends('layout.layout')

@section('title')
Event Name |
@endsection

@section('content')

<main class="main-sec">
    <!-- House cup and last event -->
    <div class="home-info">
        <div class="flex home-house_ev">
            <section class="house-cup events">
                <h2>Event</h2>
                <p>Events are made for you to be able to argenize amazing things to do with other witches and wizards! Feel free to creat your own events and to all get together for amazing memories!</p>
            </section>
            <section class="last-event event_events">
                <h2>Event's you'll be part of</h2>
                <div class="last-event__flex-contener">
                    <a href="#">
                        <section class="sm-event">
                            <h3 class="sm-event__title">Event title</h3>
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
                            <h3 class="sm-event__title">Event title</h3>
                            <div class="sm-event__date">
                                <span class="sm-event__date__month">January</span>
                                <span class="sm-event__date__day">10</span>
                                <span class="sm-event__date__time">10.20AM</span>
                            </div>
                            <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                        </section>
                    </a>
                    <section class="sm-event">
                        <h3 class="sm-event__title">Event title</h3>
                        <div class="sm-event__date">
                            <span class="sm-event__date__month">January</span>
                            <span class="sm-event__date__day">10</span>
                            <span class="sm-event__date__time">10.20AM</span>
                        </div>
                        <span class="sm-event__date__place"><img src="/img/where.svg" width="11" height="13">Discord</span>
                    </section>
                </div>
            </section>
        </div>
    </div>





       <!-- Users -->
       <aside class="event__new sm-event__button">
           <a href="/events/create">
            <img src="./img/plus.svg" alt="">
            <h2>Create a new event</h2>
        </a>
       </aside>

    <!-- Last topic -->
    <section class="last-topics">

        <div class="dash_sep">
            <img src="{{ asset('img/sep.svg') }}" alt="">
        </div>
        
        <div class="flex filters">
            <h2>Latest events</h2>
            <div class="under">
                <a href="#" class="active">All</a>
                <a href="#">Events with your friends</a>
                <a href="#">Virtual events</a>
                <a href="#">Event in real world</a>
            </div>
        </div>


        
        @foreach($events as $event)
        <section class="topic-preview">
            <h3 class="lt__title"> <a href="/events/{{$event->slug}}"> {{ $event->name }}</a></h3>
            <span class="lt__ariane">{{ $event->date }}</span>

            <div class="topix-preview__content">
                <p>{{ $event->desc }}</p>
            </div>

            <p>Participants</p>
            <div class="flex">
                <div class="sm-pp__box ravenclaw_bg">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        Enid
                    </div>
                </div>
                <div class="sm-pp__box gryffindor_bg">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        Lucy
                    </div>
                </div>
                <div class="sm-pp__box ravenclaw_bg">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        Cedric
                    </div>
                </div>
                <div class="sm-pp__box hufflepuff_bg">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    <div class="sm-pp__info">
                        Morgan
                    </div>
                </div>

                <div class="sm-pp__box ">
                    <div>
                        +10
                    </div>
                    <div class="sm-pp__info">
                        User Name
                    </div>
                </div>

                {{-- <div class="cta"><a href="#">Participer</a></div> --}}
            </div>
            

            <div class="topix-preview__author flex">
                <div>
                    <p class="topix-preview__author__name"><span><a href="#" class="ravenclaw_c">Enid</a></span></p>
                    <p class="topix-preview__author__messages">230messages</p>
                        
                </div>
               <div class="sm-pp__box ravenclaw_bg">
                   <a href="#" name="xxx profil">
                        <img src="/img/pp1.jpg" alt="" class="sm-pp">
                    </a>
                </div>
            </div>

            <div class="topix-preview__participents">
                
            </div>
        </section>
        @endforeach
    </section>




 
</main>

@endsection
