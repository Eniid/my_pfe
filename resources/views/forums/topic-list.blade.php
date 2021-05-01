@extends('layout.layout')

@section('title')
    Cathegorie :
@endsection


@section('content')

<div class="bg">
<h1 class="main_title">Hogwarts</h1>

<p class="nmto">Nothing more to see here! </p>
</div>
<main class="main-sec">
   
    <section>
        <h2>Books</h2>
        <span class="lt__ariane">Forum ↣ category</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>

        <div class="topic-add">
            <img src="./img/plus.svg" alt="Add a new topic">
        </div>


        <!-- topics -->
        <section class="topic-list">
            <div class="cat-box_new">
                <img src="" alt="new message">
            </div>
            <div class="sm-pp__box">
                <a href="#" name="xxx profil">
                     <img src="/img/pp1.jpg" alt="" class="sm-pp">
                 </a>
             </div>
             <div>
                <h3>Topic title</h3>
                <p class="topix-preview__author__name">by<span><a href="#">Name</a></span></p>
                <p class="topix-preview__author__messages">230messages</p>
             </div>

             <div>
                <p class="topix-preview__author__name">last message by<span><a href="#">Name</a></span></p>
                <p class="topix-preview__author__messages">yesterday</p>
           
             </div>

        </section>



    </section>
 
</main>
