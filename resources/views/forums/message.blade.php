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
    <section>
        <h2>Message title</h2>
        <span class="lt__ariane">Forum ↣ category</span>

    <!-- TOPIC -->
        <div class="main-message">
            <!-- Profil -->
            <div class="main-message__profil">
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                </div>
            </div>
            <div class="main-message__user-name">User</div>
            <div class="main-message__title">User</div>
            <div class="main-message__messages">
                <p class="messages__numbers">1234</p>
                <p class="messages__text">messages</p>
            </div>
            <div class="main-message__messages">
                <p class="messages__numbers">1234</p>
                <p class="messages__text">House Point</p>
            </div>

            <!-- Message -->
            <div class="main-message__text">
                <div class="message-like"><img src="" alt=""></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
            </div>
        </div>

    <!-- ASWERS -->
        <div class="message-answers">
            <div class="ans-message__profil">
                <div class="sm-pp__box">
                    <img src="/img/pp1.jpg" alt="" class="sm-pp">
                </div>
            </div>
            <div class="ans-message__user-name">User</div>
            <div class="ans-message__title">User</div>
            <div class="ans-message__messages">
                <p class="messages__numbers">1234</p>
                <p class="messages__text">messages</p>
            </div>
            <div class="ans-message__messages">
                <p class="messages__numbers">1234</p>
                <p class="messages__text">House Point</p>
            </div>
            <div class="answers-message__text">
                <div class="message-like"><img src="" alt=""></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore e</p>
            </div>
        </div>


    <!-- NEW -->
        <form action="">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button class="cta">Send</button>
        </form>




    </section>
   
 
</main>
