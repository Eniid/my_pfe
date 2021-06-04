@extends('layout.login')


@section('title_l')

Login |
 @endsection


@section('content_l')

    <section class="landing">
        <h2 class="landing__title">What Can I do on WWO ?</h2>

        <div class="landing__box">
            <div class="landing_deco">
                <img src="{{ asset('img/landing.svg')}}" alt="">
            </div>
            <div class="landing_deco landing__text">
                <div class="flex landing__content-box">
                    <div class=""><img src="{{ asset('img/house_cup.svg')}}" alt=""></div>
                    <div class="landing__nm annim annimation">
                        <section>
                            <h3>Join your hogwart house and compete for the cup</h3>
                            <p>Wizarding world online is a comunity in wich you can rejoin your hogwar house to compete for the online house cup. Every message you post, every discutions you create will raward you house with new points. </p>
                        </section>
                    </div>
                </div>

                <div class="flex landing__content-box return_f">
                    <div class=""><img src="{{ asset('img/message.png')}}" alt=""></div>
                    <div class="landing__nm annim annimation">
                        <section>
                            <h3>Make new friends among wizard and witches</h3>
                            <p>In this muggle free part of the internet, you can be 100% yourself and enjoy your wizard community. </p>
                            <p>Join the conversations and create new topics to gather with you mgical friend and make new ones on the roade.</p>

                        </section>
                    </div>
                </div>

                <div class="flex landing__content-box">
                    <div class=""><img src="{{ asset('img/event.png')}}" alt=""></div>
                    <div class="landing__nm annim annimation">
                        <section>
                            <h3>Participate to events</h3>
                            <p>You can create and join events with the comunity. Online or in the real world, whatever works best for you! </p>
                        </section>
                    </div>
                </div>
            </div>

            <div class="cta log-cta join_us"><a href=""> Join us</a></div>



        </div>


        <p class="footer"><a href="mailto:enid-bc@hotmail.com">Contact</a>    ☽ &nbsp; &nbsp; @2021 Wizarding World Online. All right reserved. &nbsp; &nbsp; ☾ <a href="/termes-and-policy">Termes and Pracicy</a></p>
    </section>


 @endsection


 
