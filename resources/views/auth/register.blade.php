@extends('layout.register')

@section('title_r')
Register |
@endsection


@section('content_r')


<div class="flex register_flex">

<div class="main-sec registration-sec">
    
    <h1 class="logo_sec">
        <img src="{{ asset('img/wwo_logo.png') }}" alt="Wizarding World Online">
    </h1>

    <form class="registration" method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <div>
                <label for="name_r">User Name</label>
                <input type="text" id="name_r" name="name" value="{{ old('name') }}" required placeholder="Chose the name you want">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email_r">Email</label>
                <input type="text" id="email_r" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="registration__password">
                <label for="password_r">Password</label>
                <input type="password" id="password_r" name="password" autocomplete="new-password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password-confirm">Confirm your password</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div>
        </div>


        <div class="landing">   
            <button class="cta register">Next</button>
        </div>
    </form>

        
    </div>

 
</div>
</div>

@endsection
