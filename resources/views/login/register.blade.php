@extends('layout.layout')


@section('content')


<main class="main-sec registration-sec">
    
    <p>The top thingy :3</p>

    <form class="flex registration" action="">
        <div><a href="">I already have an account</a></div>


        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name">
                <label for="email">Email</label>
                <input type="text" id="email">
            </div>
            <div class="registration__password">
                <label for="password">Password</label>
                <input type="password" id="password">
                <label for="password_confirmation">Password</label>
                <input type="password" id="password_confirmation">
            </div>
        </div>


        <button class="cta">Next</button>
    </form>


        
    </form>
        
    </div>

 
</main>
