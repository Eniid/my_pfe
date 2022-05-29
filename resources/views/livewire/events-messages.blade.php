<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @foreach($events as $event)
    <section class="topic-preview annim_home annimation_home">
        <h3 class="lt__title under"> <a href="/events/{{$event->slug}}"> {{ $event->name }}</a></h3>
        <span class="lt__ariane">{{$event->date->monthName}} {{$event->date->day}} {{$event->date->format('g.iA')}} | <img src="/img/where.svg" width="11" height="13" class="lm_img" alt="place"><img src="/img/d_place.svg" width="11" height="13" class="dm_img" alt="place"> {{$event->place}} | 10 participents </span>

        <div class="topix-preview__content">
            <p>{{ $event->desc }}</p>
        </div>
        

        <div class="topix-preview__author flex">
            <div>
                <p class="topix-preview__author__name">Event organized by <span><a href="#" class="ravenclaw_c">Enid</a></span></p>
                <p class="topix-preview__author__messages">230messages</p>
                    
            </div>
            <div class="sm-pp__box ravenclaw_bg">
                <a href="#" class="xxx profil">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                </a>
            </div>
        </div>

        <div class="topix-preview__participents">
            
        </div>
    </section>
    @endforeach

</div>
