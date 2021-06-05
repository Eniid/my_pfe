@extends('layout.layout')

@section('title')
New Topic |
@endsection

@section('content')

<main class="main-sec">
   

    <section>
        <h2>New</h2>
        <span class="lt__ariane">
            <a href="/{{ $forum->slug }}">{{ $forum->name }} </a> ↣ <a href="/{{ $forum->slug}}/{{$categorie->slug}}">{{ $categorie->name }}</a>
        </span>


        <form action="/{{ $forum->slug}}/{{$categorie->slug}}/topics/store" method='post'>
            @csrf 
            <input type="text" name="title">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <textarea name="body" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
            @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button>Send</button>
        </form>
    </section>
    <!-- Cathegories -->
    
 
</main>

@endsection
