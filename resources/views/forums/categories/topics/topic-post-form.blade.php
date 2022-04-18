@extends('layout.layout')

@section('title')
New Topic |
@endsection

@section('content')

<main class="main-sec">
   

    <section class="forum_cent main_forum">
        <h2 class="no_m">New Topic on {{ $categorie->name }}</h2>
        <span class="lt__ariane under">
            <a href="/{{ $forum->slug }}">{{ $forum->name }} </a> ↣ <a href="/{{ $forum->slug}}/{{$categorie->slug}}">{{ $categorie->name }}</a>
        </span>


        <form action="/{{ $forum->slug}}/{{$categorie->slug}}/topics/store" method='post'>
            @csrf 
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="t_input"  placeholder="Give a title to yur topic!" value="{{ old('title') }}">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="">Your Message</label>
            <textarea name="body" id="" cols="30" rows="10" placeholder="Type an awesome message">{{ old('body') }}</textarea>
            @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button class="cta log-cta cta_v">Send</button>
        </form>
    </section>
    <!-- Cathegories -->
    
 
</main>

@endsection
