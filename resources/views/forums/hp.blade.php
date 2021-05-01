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
   
    <!-- Cathegories -->
    <section class="cat-box">
        <div class="cat-box_img">
            <img src="" alt="">
        </div>
        <div class="cat-box_new">
            <img src="" alt="new message">
        </div>
        <h2>Book</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <div class="topix-preview__author flex">
            <div>
                <p class="topix-preview__author__name">Last mesage by<span><a href="#">Name</a></span></p>
                <p class="topix-preview__author__messages">230messages</p>
                <p class="topix-preview__author__messages">19 topic</p>
                    
            </div>
           <div class="sm-pp__box">
               <a href="#" name="xxx profil">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                </a>
            </div>
        </div>
    </section>


    <!-- CTA bacl home -->
    <div class="main-cta">
        <a href="#" class="main-cta_link">Go back home</a>
    </div>
 
</main>
