@extends('layout.layout')


@section('content')


<main class="main-sec registration-sec">
    
    <p>The top thingy :3</p>

    <form class="flex registration" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="cta"><a href="">Back</a></div>


        <div>
            <div class="login_btn">
                <input type="radio" id="ravenclaw" name="drone" value="ravenclaw" checked>
                <labe for="ravenclaw" class="login_img">🦅</labe>
            </div>
            <div class="login_btn">
                <input type="radio" id="gryffindor" name="drone" value="gryffindor">
                <label for="gryffindor" class="login_img">🦁</label>
            </div>
            <div class="login_btn">
                <input type="radio" id="slytherin" name="drone" value="slytherin">
                <label for="slytherin" class="login_img">🐍</label>
            </div>
            <div class="login_btn">
                <input type="radio" id="hufflepuff" name="drone" value="hufflepuff">
                <label for="hufflepuff" class="login_img">🦡</label>
            </div>
        </div>

        <button class="cta">Next</button>
    </form>

        
    </div>

 
</main>
