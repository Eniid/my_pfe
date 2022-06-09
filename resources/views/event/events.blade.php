@extends('layout.layout')

@section('title')
    Event Name |
@endsection

@section('content')
    <main class="main-sec">
        <div class="frame">

            <!-- House cup and last event -->
            <div class="home-info">
                <div class="flex home-house_ev">
                    <section class="house-cup events">
                        <h2>Events</h2>
                        <p>Events are made for you to be able to organize amazing things to do with other witches and
                            wizards! Feel free to create your own events and to all get together for amazing memories!</p>
                    </section>
                    <section class="last-event event_events">
                        <h2>Your events to come</h2>
                        <div class="last-event__flex-contener">
                            @foreach ($participations as $participation)
                                <a href="/events/{{ $participation->event->slug }}">
                                    <section class="sm-event">
                                        <h3 class="sm-event__title">{{ $participation->event->name }}</h3>
                                        <div class="sm-event__date">
                                            <span
                                                class="sm-event__date__month">{{ $participation->event->date->monthName }}</span>
                                            <span
                                                class="sm-event__date__day">{{ $participation->event->date->day }}</span>
                                            <span
                                                class="sm-event__date__time">{{ $participation->event->date->format('g.iA') }}</span>
                                        </div>
                                        <span class="sm-event__date__place"><img src="/img/where.svg" alt="" width="11" height="13"
                                                class="lm_img"><img src="/img/d_place.svg" alt="" width="11" height="13"
                                                class="dm_img">{{ $participation->event->place }}</span>
                                    </section>
                                </a>
                            @endforeach

                            @if ($participations->isEmpty())
                                <div class="nothing_box">
                                    <p class="nothing">Oooops, there is nothing to see yet! </p>

                                </div>
                            @endif




                        </div>
                    </section>
                </div>
            </div>


            <!-- Users -->
            <aside class="event__new sm-event__button event_new_big">
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
                    <h2>Events</h2>
                    <div class="under">
                        <a href="#" class="active">All</a>
                        <a href="#">Events with your friends</a>
                        <a href="#">Virtual events</a>
                        <a href="#">Events in real world</a>
                    </div>
                </div>
                @livewire('events-filters')


                <button class="cta cta_v">Load more</button>

            </section>

        </div>
    </main>
@endsection
