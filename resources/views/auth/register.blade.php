@extends('layout.layout')


@section('content')


<main class="main-sec registration-sec">
    
    <p>The top thingy :3</p>

    <form class="flex registration" method="POST" action="{{ route('register') }}">
        @csrf
        <div><a href="">I already have an account</a></div>


        <div>
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="registration__password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="new-password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="password-confirm">Confirm your password</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div>
        </div>


        <button class="cta">Next</button>
    </form>

        
    </div>

 
</main>
