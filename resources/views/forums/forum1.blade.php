@extends('layout.layout')

@section('title')
    Harry Potter :
@endsection


@section('content')

<div class="bg">
<h1 class="main_title">Hogwarts</h1>

<p class="nmto">Nothing more to see here! </p>
</div>
<main class="main-sec">
   


        <section>
            <h2>Cathegorie</h2>

            <div class="">
            @foreach($categories as $categorie)
                <section class="cat-box">
                    <div class="cat-box_img">
                        <img src="" alt="">
                    </div>
                    <div class="flex cat-box-flex">
                        <div class="cat-box_new">
                            <img src="./img/cat-new.svg" alt="new message">
                        </div>
                        <div class="cat-content">
                            <h3>{{$categorie->name}}</h3>
                            <p>{{$categorie->description}}</p>
                        </div>

                    </div>
                    <div class="cat__last-message flex">
                        <div class="cat__last-messge__text">
                            <p class="topix-preview__author__name">Last mesage by <span><a href="#">Name</a></span></p>
                            <p class="topix-preview__author__messages">230messages</p>
                            <p class="topix-preview__author__messages cat__last-message__topic">19 topic</p>
                                
                        </div>
                    <div class="sm-pp__box">
                        <a href="#" name="xxx profil">
                                <img src="/img/pp1.jpg" alt="" class="sm-pp">
                            </a>
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
