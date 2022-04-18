@extends('layout.layout')

@section('title_l')
    House Cup History
@endsection


@section('content')
<main class="main-sec">
    <div class="frame">
        <section>
            <h2 class="house_cup-title">House Cup</h2>

            <section class="house-winer_box">
                <h3 class="house_cup_winner-title">Congratulation <span>Ravenclaw</span></h3>
                <img src="{{ asset('img/ravenclaw.svg') }}" alt="" class="house-cup_img_one">
                <img src="{{ asset('img/ravenclaw.svg') }}" alt="" class="house-cup_img_two">
                <div class="dash_sep">
                    <img src="{{ asset('img/sep.svg') }}" alt="">
                </div>
                <p>Ravenclaw won the Appri <b>2022</b> Cup with with <b>1209</b> point thanks to <b>Enid</b> and the rest of Ravenclaw members.</p>
            </section>



            <div class="flex">
                <section class="best_users">
                    <h3>Top 10 best contributors</h3>
                    <div class="flex filters">
                        <div class="under">
                            <a href="#" 
                            class="active"
                            >Latest Cup</a>
                            <a href="#"
                            >All time</a>
                        </div>
                    </div>
                    <ol>
                        @foreach ($users as $user)
                        <li>
                            {{ $user->name }}
                        </li>
                        @endforeach

                    </ol>


                </section>

                <div class="history">

                </div>

            </div>







         </section>


    </div>
</main>


@endsection
