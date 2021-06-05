@extends('layout.layout')

@section('title')
Forum Name |
@endsection

@section('content')
<main class="main-sec">
   


        <section class="max-116">
            <h2>{{$forum->name}}</h2>
            <p class="forum_desc">In here you can talk about everything about the wizarding world. Harry Potter books or movies. Awsome magical places you've been to or fan made content you watched! </p>

            <div class="flex categories">
            @foreach($forum->categories as $categorie)

                <section class="cat-box_out">
                    <div class="cat-box_img">
                        @if ($categorie->img)
                            <img src="/img/cat/{{ $categorie->img }}" alt="">
                        @else
                            <img src="{{ asset('img/cat/hgh.jpg') }}" alt="">
                        @endif
                    </div>

                    <div class="cat-box">
                        <div class="flex cat-box-flex">
                            <div class="cat-box_new">
                                <img src="./img/cat-new.svg" alt="new message">
                            </div>
                            <div class="cat-content">
                                <h3><a href="/{{$forum->slug}}/{{$categorie->slug}}"> {{$categorie->name}}</a></h3>
                                <p>{{$categorie->description}}</p>
                            </div>
    
                        </div>
                        <div class="cat__last-message flex">
                            <div class="cat__last-messge__text">
                                <p class="topix-preview__author__name">Last mesage by <span><a href="#" class="ravenclaw_c">Name</a></span></p>
                                <p class="topix-preview__author__messages">230messages</p>
                                <p class="topix-preview__author__messages cat__last-message__topic">19 topic</p>
                                    
                            </div>
                        <div class="sm-pp__box ravenclaw_bg">
                            <a href="#" name="xxx profil">
                                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            @endforeach
            </div>

    </section>
    <!-- Cathegories -->
    


    <!-- CTA bacl home -->
    {{-- <div class="cat-cta_contener">
        <div class="cta cta_m cat-cta">
            <a href="#" class="main-cta_link">Go back home</a>
        </div>
    </div> --}}
 
</main>

@endsection
