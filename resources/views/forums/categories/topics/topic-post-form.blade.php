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
            <input type="file" name="img">
            <textarea name="body" id="" cols="30" rows="10">Votre message</textarea>
            <button>Send</button>
        </form>
    </section>
    <!-- Cathegories -->
    
 
</main>

@endsection
