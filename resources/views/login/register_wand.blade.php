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

        

        <form action="/register/wand" method="POST">
            @csrf    
    
            <label for="wood-choice">Wood</label>
            <input list="wood" id="wood-choice" name="wood" />
            <datalist id="wood">
                <option value="Acacia">
                <option value="Ash">
                <option value="Black Walnut">
                <option value="Cedar">
                <option value="Cherry">
                <option value="Cypress">
                <option value="Hazel">
                <option value="Holly">
                <option value="Maple">
                <option value="Pin">
                <option value="Redwood">
                <option value="Silverlim">
                <option value="Walnut">
                <option value="Willow">
            </datalist>
            
            <label for="core-choice">Core</label>
            <input list="core" id="core-choice" name="core" />
            <datalist id="core">
                <option value="Unicorn Hair">
                <option value="Dragon heartstring">
                <option value="Phoenix feather">
                <option value="Veela hair">
                <option value="Thestral tail hair">
                <option value="Troll whisker">
                <option value="Kelpie hair">
                <option value="Thunderbird tail feather">
                <option value="Wampus cat hair">
                <option value="White River Monster spine">
                <option value="Rougarou hair">
            </datalist>

            <label for="width">Lenghts</label>
            <input type="number" id="width" name="width" min="8" max="15"/> inches
            
            <div class="fmh__box under">
                Don't know what is your wand made of ? <a href="https://my.wizardingworld.com/register/age-gate" class="fmh" target="_blank"  rel="noreferrer noopener">Find out on Pottermore</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="landing">   
                <button class="cta register">Let's do magic</button>
            </div> 
            
        </form>
    

            
        </div>

    
    </main>
</div>
@endsection








