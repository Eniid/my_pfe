@extends('layout.layout')


@section('content')

<div class="bg">
<h1 class="main_title">Hogwarts</h1>

<p class="nmto">Nothing more to see here! </p>
</div>
<main class="main-sec">
    
    <p class="login_desc">Welcome to Hogwarts the fist ever website for witches and wizard. It’s about time we learn to use technologie. So join us and let’s do some magic together.</p>


    <div class="flex login_registration">
        <div class="login">
        <!-- Le truc pour display -->
        <input type="checkbox" id="login_img" class="login_checkbox">
        <div class="login_btn">
            <label for="login_img" class="login_img">🧙‍♀️</label>
        </div>
        
        <div class="login_content">
            <form action="">
                <label for="name">Name</label>
                <input type="text" id="name">
                <label for="password">Password</label>
                <input type="password" id="password">
                <button class="cta">Enter the wizarding world</button>
                <div class="fup">
                    <a href="#">Passowrd forgotten</a>
                </div>
            </form>
        </div>


    </div>




    <div class="new_account">
        <!-- Le truc pour display -->
        <input type="checkbox" id="register_img" class="register_checkbox">
        <div class="register_btn">
            <label for="register_img" class="register_img">🧙‍♀️</label>
        </div>

        <div class="register_content">
            <div class="cta cta_m"><a href="#">I'm not a muggle</a></div>
            <p>Press the button below and we will magically check if you’re not a muggle who got lost. </p>

            <p>Every muggle pressing this button would be automatically Obliviate to persevere the Wizarding Secrecy.</p>
        </div>
        
    </div>
        
    </div>

 
</main>
