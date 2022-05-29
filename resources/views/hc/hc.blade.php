@extends('layout.layout')

@section('title_l')
    House Cup History
@endsection


@section('content')
<main class="main-sec">
    <div class="frame">

        <div class="flex home-house_ev">

            <!-- House Cup  -->
            <section class="house-cup">
                <div class="flex filters">
                    <h2>House Cup Current results</h2>
                </div>
                <div>
                    <p><span class="ravenclaw_c">Ravenclaw</span> is currently on top of the classment!
                        @if(Auth::user()->house === 'ravenclaw')
                            Congratulation, carry one! 
                        @else
                            You can participate to conversation to win point for your house.
                        @endif

                    
                    
                    
                    </p>
                </div>
                <div class="house_cup__all">
                    <div class="house-cup__rav house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Ravenclaw</b> : 120 house points
                                </div>
                            </div>

                        </div>
                        <div class="house-emoji">
                        🦅
                        </div>
                    </div>
                    <div class="house-cup__sly house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Slytherin</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🐍
                        </div>

                    </div>
                    <div class="house-cup__grif house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Gryffindor</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🦁
                        </div>
                    </div>
                    <div class="house-cup__huff house-cup__h">
                        <div class="house-cup__hourglass">
                            <div class="house-cup__sand">
                                <div class="house-point-display">
                                    <b>Hufflepuff</b> : 120 house points
                                </div>
                            </div>
                        </div>
                        <div class="house-emoji">
                            🦡
                        </div>

                    </div>

                </div>            

            </section>


            <!-- House Cup  -->
            <section class="last-event">
                    <h2>House Cup Rules</h2>

                    <div class="flex" style="width: 70rem;">

                        <div>
                            <img src="https://www.tikoweb.fr/medias/logos/harry-potter-blason-poudlard.png" alt="" style="width: 20rem;">
                        </div>

                        <div>
                            <p>Just like in Hogwarts, the 4 houses are fighting for the house cup. You can take part in the competition simply by bing active on the website. </p>

                            <ul>
                                <li>You win <span>5</span> point when you create a new post</li>
                                <li>You win <span>2</span> point when send a message on a post</li>
                                <li>You win <span>10</span> point when when orgenize an eventst</li>
                                <li>You win <span>3</span> point when you participate in an even</li>
                            </ul>
        
                            <p>Every month, we start bacl from scratch and all house are set up to 0 again. Howerver, you keep in your profil all the house point you won since you arrive on WWO. </p>
        
                        </div>
                    </div>
            </section>
        </div>



        <section>
            <h2>House Cup Resultes</h2>

            <section class="house-winer_box">
                <h3 class="house_cup_winner-title">Congratulation <span>Ravenclaw</span></h3>
                <img src="{{ asset('img/ravenclaw.svg') }}" alt="" class="house-cup_img_one">
                <img src="{{ asset('img/ravenclaw.svg') }}" alt="" class="house-cup_img_two">
                <div class="dash_sep">
                    <img src="{{ asset('img/sep.svg') }}" alt="">
                </div>
                <p>Ravenclaw won the Mai <b>2022</b> Cup  with <b>1209</b> point thanks to <b>Enid</b> and the rest of Ravenclaw members.</p>

                <a href="bs//house-cup/ravenclaw-won-the-mai-house-cup" class="cta">Congragulate them</a>
            </section>



            <div class="flex">
                <section class="best_users">
                    <div class="bu_in">
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
                                <p class="topix-preview__author__name {{ $user->house }}_c"><span><a href="/profil/{{$user->id }}">
                                    @if($user->is_admin )
                                    <span class="tooltip">
                                        <img src="img/admin.svg" alt="admin" title="admin" class="tag admin">
                                        <span class="tooltiptext">
                                            admin
                                        </span>
                                    </span>
                                    @elseif ($user->is_modo )
                                    <span class="tooltip">
                                        <img src="img/modo.svg" alt="modo" title="modo" class="tag modo">
                                        <span class="tooltiptext">
                                            modo
                                        </span>
                                    </span>
                                    @endif
                                    {{ $user->name }}
                                </a></span></p>
                            </li>
                            @endforeach
    
                        </ol>
    
                    </div>

                </section>

                <section class="history">
                    <h3>House Cup history</h3>


                    <table>
                        <thead>
                            <tr class="table_hearder_section">
                                <th>Date</th>
                                <th>Winner</th>
                                <th>Points</th>
                                <th>Best User</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mai 2022</td>
                                <td>Ravenclaw</td>
                                <td>301</td>
                                <td>
                                    <p class="topix-preview__author__name ravenclaw_c"><span><a href="/profil/1}">
                                        Miranda
                                    </a></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>April 2022</td>
                                <td>Hufflepuff</td>
                                <td>400</td>
                                <td>
                                    <p class="topix-preview__author__name hufflepuff_c"><span><a href="/profil/1}">
                                        Julia
                                    </a></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>March 2022</td>
                                <td>Slytherin</td>
                                <td>270</td>
                                <td>
                                    <p class="topix-preview__author__name slytherin_c"><span><a href="/profil/1}">
                                        Léa
                                    </a></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>February 2022</td>
                                <td>Gryffindor</td>
                                <td>302</td>
                                <td>
                                    <p class="topix-preview__author__name gryffindor_c"><span><a href="/profil/1}">
                                        Ellie
                                    </a></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>January 2022</td>
                                <td>Slytherin</td>
                                <td>635</td>
                                <td>
                                    <p class="topix-preview__author__name slytherin_c"><span><a href="/profil/1}">
                                        Isa
                                    </a></span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>December 2021</td>
                                <td>Ravenclaw</td>
                                <td>123</td>
                                <td>
                                    <p class="topix-preview__author__name ravenclaw_c"><span><a href="/profil/1}">
                                    Enid
                                    </a></span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button class="cta cta_v">Load more</button>

                </section>

            </div>







         </section>


    </div>
</main>


@endsection


