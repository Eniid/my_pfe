@extends('layout.register')


@section('title_r')
Register | 
@endsection


@section('content_r')

<div class="flex register_flex">

    <main class="main-sec registration-sec">
        
        <div class="logo_sec">
            <img src="{{ asset('img/wwo_logo.png') }}" alt="">
        </div>


        <form action="/register/house" method="POST" class="house_form">
            @csrf    
    
            <div>
                <div class="login_btn">
                    <input type="radio" id="ravenclaw" name="house" value="ravenclaw">
                    <label for="ravenclaw" class="login_img cta cta_r">🦅 Ravenclaw </label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="gryffindor" name="house" value="gryffindor">
                    <label for="gryffindor" class="login_img cta">🦁 Gryffindor</label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="slytherin" name="house" value="slytherin">
                    <label for="slytherin" class="login_img cta cta_g">🐍 Slytherin</label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="hufflepuff" name="house" value="hufflepuff">
                    <label for="hufflepuff" class="login_img cta">🦡 Hufflepuff</label>
                </div>
            </div>
    
            <button class="cta">Next</button>
            
            
        </form>
    

            
        </div>

    
    </main>
</div>
@endsection










