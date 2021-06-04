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
                    <label for="ravenclaw" class="login_img cta cta_r ravenclaw">🦅 &nbsp; Ravenclaw &nbsp; </label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="gryffindor" name="house" value="gryffindor">
                    <label for="gryffindor" class="login_img cta gryffindor">🦁 &nbsp; Gryffindor &nbsp;</label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="slytherin" name="house" value="slytherin">
                    <label for="slytherin" class="login_img cta cta_g slytherin">🐍 &nbsp; Slytherin &nbsp;</label>
                </div>
                <div class="login_btn">
                    <input type="radio" id="hufflepuff" name="house" value="hufflepuff">
                    <label for="hufflepuff" class="login_img cta hufflepuff">🦡 &nbsp;  Hufflepuff &nbsp;</label>
                </div>
            </div>
            <div class="fmh__box under">
                You don't know your house ?<a href="https://my.wizardingworld.com/register/age-gate" class="fmh" target="_blank"  rel="noreferrer noopener">Find out on Pottermore</a>
            </div>
    
            <div class="landing">   
                <button class="cta register">Next</button>
            </div> 
        </form>


    

            
        </div>

    
    </main>
</div>
@endsection










