@extends('layout.layout')

@section('title_l')
    House Cup History
@endsection


@section('content')
<main class="main-sec">
    <div class="frame">
        <section>
            <h2>House Cup Resultes</h2>

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


