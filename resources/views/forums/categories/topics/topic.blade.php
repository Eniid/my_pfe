@extends('layout.layout')

@section('title')
Topic Name |
@endsection

@section('content')

<main class="main-sec">
   
    <!-- Cathegories -->
    <section>
        <h2>Message title</h2>
        <span class="lt__ariane">Forum ↣ category</span>

    <!-- TOPIC -->

            @foreach($posts as $post)
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
                        <div>
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
        @endforeach







    <!-- NEW -->
        <form action="">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button class="cta">Send</button>
        </form>




    </section>
   
 
</main>

@endsection
